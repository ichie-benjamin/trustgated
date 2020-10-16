<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UsersController extends Controller
{
    public function admins(){
        $title = 'admin';
        $users = User::whereRoleIs('admin')->orWhereRoleIs('super_admin')->get();
        return view('admin.users.index', compact('users','title'));
    }
    public function subAdmins(){
        $title = 'sub_admin';
        $users = User::whereRoleIs('sub_admin')->orWhereRoleIs('moderator')->get();
        return view('admin.users.index', compact('users','title'));
    }

   public function employers(){
        $title = 'employer';
        $users = User::whereRoleIs('employer')->get();
        return view('admin.users.employer-list', compact('users','title'));
    }

    public function create(Request $request)
    {
        $role = $request->get('r');
       $roles = Role::whereName($role)->get();
        return view('admin.users.create', compact('roles','role'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['nullable'],
            'username' => ['required', 'string', 'max:50', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed',  'min:6',             // must be at least 10 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/'],
        ]);

        $data = $request->all();

            DB::beginTransaction();

            $user = User::create([
                'first_name' => $data['first_name'],
                'email' => $data['email'],
                'username' => $data['username'],
                'phone' => $data['phone'],
                'password' => bcrypt($data['password']),
            ]);

            // assign role to registered user
            $user->attachRole($data['role']);

            // send email verification link to user
            event(new \Illuminate\Auth\Events\Registered($user));
            DB::commit();

            $email = $data['email'];

        return redirect()->back()->with('success', "A verification email has been sent to the $email");
    }


    public function edit(User $user)
    {
        $admin_roles = Role::whereNotIn('name', ['merchant', 'customer'])->pluck('name');
        return view('admin.users.edit', compact('user', 'admin_roles'));
    }

    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'numeric', 'digits_between:10,14'],
            // 'username' => ['required', 'string', 'max:50', 'unique:profiles'],
        ]);

        try {
            DB::beginTransaction();

            $data = $request->all();

            $user->update([
                'name' => $data['name'],
                'email' => $data['email'],
                // 'delivery_category_id' => $data['delivery_category_id']
            ]);

            if (isset($request->password)) {
                $user->password = bcrypt($data['password']);
                $user->save();
            }

            $active = isset($request->active) ? true : false;

            $user->profile->update([
                'phone' => $data['phone'],
                'username' => $data['username'],
                'active' => $active
            ]);

            $user->syncRoles($data['role']);
            DB::commit();

        } catch(\Exception $e) {

            DB::rollback();
            return back()->with('failure', 'Woops! something went wrong: ' . $e->getMessage());

        }

        // $customer->assignRole('customer');

        return redirect()->back()->with('success', 'Admin Account has been updated');
    }

    public function destroy(User $user)
    {
        try {
            $user->delete();
            // $customer->profile->delete(); // delete corresponding user profile

        } catch(\Exception $e) {

            return back()->with('failure', 'Woops! something went wrong: '.$e->getMessage());

        }

        return back()->with('success', 'Admin User deleted.');
    }
}
