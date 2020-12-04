<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\ResumeDownload;
use App\Models\ResumeView;
use App\Models\User;

use App\Rules\MatchOldPassword;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{

    public function userProfile($username){

        if(auth()->user()->access_plan){
            $views = ResumeView::whereEmployerId(auth()->id())->where('created_at','>=',auth()->user()->access_plan->updated_at)->count();
            if(auth()->user()->access_plan->expired){
                return redirect()->route('employer.resume_pack')->with('failure','Current Resume Access Expired, Please Purchase a package to continue view resume');
            }
            if(auth()->user()->access_plan->access){
                if($views > auth()->user()->access_plan->access->no_of_resumes){
                    return redirect()->route('employer.resume_pack')->with('failure',"You have exhausted the no. of resume view for this plan, purchase a plan to continue viewing resumes");
                }
            }else{
                return redirect()->route('employer.resume_pack')->with('failure','Purchase Resume Access to continue viewing resumes');
            }
        }else{
            return redirect()->route('employer.resume_pack')->with('failure','Purchase Resume Access to continue viewing resumes');
        }

        $view = ResumeView::whereEmployerId(auth()->id())->get();
        $user = User::whereUsername($username)->firstOrFail();
        if(count($view) < 1){
            ResumeView::create([
                'employer_id' => auth()->user()->id,
                'jobseeker_id' => $user->id,
            ]);
        }
        return view('jobseeker.profile.public',compact('user'));
    }

    public function downloadResume($username){


        if(auth()->user()->access_plan){
            $views = ResumeView::whereEmployerId(auth()->id())->where('created_at','>=',auth()->user()->access_plan->updated_at)->count();
            if(auth()->user()->access_plan->expired){
                return redirect()->route('employer.resume_pack')->with('failure','Current Resume Access Expired, Please Purchase a package to continue view resume');
            }
            if(auth()->user()->access_plan->access){
                if($views > auth()->user()->access_plan->access->no_of_resumes){
                    return redirect()->route('employer.resume_pack')->with('failure',"You have exhausted the no. of resume view for this plan, purchase a plan to continue viewing resumes");
                }
            }else{
                return redirect()->route('employer.resume_pack')->with('failure','Purchase Resume Access to continue viewing resumes');
            }
        }else{
            return redirect()->route('employer.resume_pack')->with('failure','Purchase Resume Access to continue viewing resumes');
        }


        $user = User::whereUsername($username)->firstOrFail();
        $download = ResumeDownload::whereEmployerId(auth()->user()->id)->get();
        if(count($download) < 1){
            ResumeDownload::create([
                'employer_id' => auth()->user()->id,
                'jobseeker_id' => $user->id,
            ]);
        }
        return redirect()->to($user->cv);
    }

    public function jobseekerReg(){
        return view('auth.jobseeker-reg');
    }

    public function updatePassword(Request $request){

        $request->validate([
            'password' => [
                'required',
                'string',
                'confirmed',
                'min:6',             // must be at least 10 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
            ],
            'current_password' => ['required', new MatchOldPassword],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->password)]);

       return back()->with('success_message','Password succesfully changed');
    }

    public function editSummary()
    {
        return view('pages.edit_objective_det');
    }

    public function roleLogout(){
        $role = Auth::user()->role;
        Session::put('last_role', Auth::user()->role);

        if(Auth::user()->hasRole('employer')){
            $role = 'job seeker';
            $url = '/jobseeker/login';
        }else{
            $role = 'employer';
            $url = '/employer/login';
        }
        Auth::logout();
        return redirect($url)->with(['role_error' => 'Login with your '.$role.' account']);
    }

    public function employerReg(){
        return view('auth.employer.register');

    }

    public function employerLogin(){
        return view('auth.employer.login');
    }
    public function jobseekerLogin(){
        return view('auth.jobseeker.login');
    }

    public function save(Request $request){
        return $request;
    }

    public function checkUser($type, Request $request){
        $q = $request->get('q');
        if($type === 'email'){
            $user = User::whereEmail($q)->first();
            if($user){
                return 0;
            }else{
                return 1;
            }
        }else{
            $user = User::whereUsername($q)->first();
            if($user){
                return 0;
            }else{
                return 1;
            }
        }
    }

    public function updateUser(Request $request)
    {
        $user = User::findOrFail(Auth::id());

        $user->update(['availability' => $request->availability]);

        $request->session()->flash('message', 'Your Availability Status Was Successfully Updated');
        $request->session()->flash('message-type', 'success');
        return redirect()->route('dashboard');

    }

    public function updateMore(Request $request)
    {
        $user = User::findOrFail(Auth::id());

        $user->update([
            'job_type'  => $request->job_type,
            'employment_status' => $request->employment_status,
            'affirmative_category' => $request->affirmative_category,
            'affirmative_description' => $request->affirmative_description,
            'physically_challenged' => $request->physically_challenged,
            'usa_work_permit' => $request->usa_work_permit,
            'country_work_permit' => $request->country_work_permit,
            'language1' => $request->language1,
            'language1_proficiency' => $request->language1_proficiency,
            'language1_rws' => $request->language1_rws,
            'language2' => $request->language2,
            'language2_proficiency' => $request->language2_proficiency,
            'language2_rws' => $request->language2_rws,
            'language3' => $request->language3,
            'language3_proficiency' => $request->language3_proficiency,
            'language3_rws' => $request->language3_rws,
        ]);

        return redirect()->back()->with('success', 'More details Successfully update');
    }

    public function updateEducation(Request $request)
    {
        $user = User::findOrFail(Auth::id());

        $user->update([

            'basic_education' => $request->basic_education,
//            'university' => $request->university,
            'industry' => $request->industry,
            'course' => $request->course,
        ]);

        return redirect()->back()->with('success', 'Educational Details Successfully update');
    }

    public function updateResume(Request $request)
    {
        $user = User::findOrFail(Auth::id());

        $user->update(['cv' => $request->resume]);

        return redirect()->back()->with('success', 'Resume Successfully update');

    }
    public function updateItskills(Request $request)
    {
        $user = User::findOrFail(Auth::id());

        $user->update(['it_skills' => $request->it_skills]);

        return redirect()->back()->with('success', 'IT Skills Successfully update');

    }

    public function storeEmployer(Request $request)
    {

        $data = $this->getEData($request);

        Employer::create($data);

        return redirect()->route('jobseeker.manage.employers')->with('success', 'Employer Successfully create');

    }

    public function updateAvatar(Request $request)
    {
        $avatar = $request->avatar;

        Auth::user()->update(['avatar' => $avatar]);

        return redirect()->back()->with('success','Profile image successfully updated');
    }
    public function updateSummary(Request $request)
    {
        $bio = $request->bio;

        Auth::user()->update(['bio' => $bio]);

        return redirect()->back()->with('success','Profile Summary successfully updated');
    }

    public function updateVisibility(Request $request)
    {
        $visi = $request->visibility;

        Auth::user()->update(['visibility' => $visi]);

        return redirect()->back()->with('success','Profile visibility successfully updated');
    }

    public function updateProfile(Request $request)
    {
        $data = $request->all();
        if($request->has('skills')){
            $data['skills'] = explode (",", $data['skills']);
        }
        if($request->file('cv'))
        {
            $file = $request->file('cv');
            $filename = time() . '.' . $request->file('cv')->extension();
            $filePath = '/files/uploads/cv/';
            if (!file_exists(public_path($filePath))) {
                mkdir(public_path($filePath), 0755, true);
            }
            $file->move(public_path($filePath), $filename);
            $data['cv'] = $filePath.$filename;
        }
        $user = User::findOrFail(auth()->user()->id);
        $user->update($data);

        return redirect()->back()->with('success','Profile successfully updated');

    }

    public function getUnreadNots(){
        return auth()->user()->unreadNotifications;
    }

    public function notifications(){
        auth()->user()->unreadNotifications->markAsRead();
        $nots = auth()->user()->notifications;
        return view('dashboard.notifications', compact('nots'));
    }

    public function getRoles(){
        $roles = Role::where('name','!=','dev')->get();
        $results[] = [
                'id'   => '',
                'text' => __('voyager::generic.none'),
        ];
        foreach ($roles as $item) {
            $results[] = [
                'id'   => $item->id,
                'text' => $item->display_name,
            ];
        }
        return response()->json([
            'results'    => $results,
            'pagination' => [
//                'more' => ($total_count > ($skip + $on_page)),
            ],
        ]);
    }

    public function update(Request $request){
        $data = $request->all();
        Auth::user()->update([
            'avatar' => $data['avatar'] ?? '',
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'gender' => $data['gender'],
            'headline' => $data['headline'] ?? '',
            'country' => $data['country'],
            'industry' => $data['industry'] ?? '',
            'state' => $data['state'],
            'city' => $data['city'],
            'dob' => $data['dob'] ?? '',
            'address' => $data['address'],
            'max_annual_salary' => $data['max_annual_salary'] ?? '',
            'min_annual_salary' => $data['min_annual_salary'] ?? '',
//            'phone_countrycode' => $data['phone_countrycode'],
            'mobile_number' => $data['mobile_number'],
            'land_countrycode' => $data['land_countrycode'] ?? '',
            'land_areacode' => $data['land_areacode'] ?? '',
            'exp_year' => $data['exp_year'] ?? '',
            'exp_month' => $data['exp_month'] ?? '',
            'function_area' => $data['function_area'] ?? '',
            'skills' => $data['skills'] ?? '',
        ]);
        return redirect()->back()->with('success','Profile successfully updated');
    }

    public function store(Request $request){
        Validator::make($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required']
        ])->validate();

        return User::create([
            'username' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
    }

    protected function getEData(Request $request)
    {
        $rules = [
            'company_name' => 'string|required',
            'from' => 'integer',
            'to' => 'integer',
            'designation' => 'string|min:1',
            'profile' => 'string|min:1|nullable',
        ];
        $data = $request->validate($rules);
        $data['user_id'] = auth()->id();
        return $data;
    }
}
