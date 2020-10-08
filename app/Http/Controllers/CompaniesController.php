<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\User;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class CompaniesController extends Controller
{

    /**
     * Display a listing of the companies.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $companies = Company::with('user')->whereUserId(auth()->user()->id)->latest()->paginate(50);

        return view('companies.index', compact('companies'));
    }

    public function view($slug){
        $company = Company::findBySlugOrFail($slug);
        return view('pages.view_company',compact('company'));
    }

    /**
     * Show the form for creating a new company.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $users = User::pluck('id','id')->all();

        return view('companies.create', compact('users'));
    }

    public function store(Request $request)
    {
        $data = $this->getData($request);

        $data['info'] = request('company-trixFields.content');
//        $data['company-trixFields'] = request('company-trixFields');
        $data['info'] = request('company-trixFields.info');
        $data['attachment-company-trixFields'] =  request('attachment-company-trixFields');
        if(strlen($data['info']) < 30){
            return response()->json('Company info must be at least 20 character', 404);
        }

        $company = Company::create($data);

        if ($request->has('logo')){
            $this->validate($request, ['logo' => 'image']);
        $file = $request->file('logo');
        $folder = 'u/';
        $uniqid = uniqid();
        $mainFileName = $uniqid . '.' . $file->getClientOriginalExtension();
        if (!file_exists(public_path($folder))) {
            mkdir(public_path($folder), 0755, true);
        }
        $image = Image::make($request->file('logo'))
            ->fit(300, 300, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })
            ->save(public_path($folder) . $mainFileName);
        $imageUrl = '/' . $folder . $mainFileName;
        $company->logo = $imageUrl;
        $company->save();
    }
        $data['company'] = $company;

        DB::table('trix_rich_texts')->insert([
            'model_type' => 'App\Models\Company',
            'model_id' => $company->id,
            'field' => 'info',
            'content' => request('company-trixFields.info')
        ]);

        $request->session()->flash('message', 'Company successfully posted, awaiting admin verification');
        $request->session()->flash('message-type', 'success');
        $data['url'] = route('companies.company.index');

        return response()->json($data, 200);




//            return redirect()->route('companies.company.index')
//                ->with('success_message', 'Company was successfully added.');
    }

    /**
     * Display the specified company.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($slug)
    {
        $company = Company::with('user')->findBySlugOrFail($slug);

        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified company.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);
        $users = User::pluck('id','id')->all();

        return view('companies.edit', compact('company','users'));
    }


    public function update($id, Request $request)
    {
            $data = $this->getData($request);

            $company = Company::findOrFail($id);

            $data['info'] = request('company-trixFields.content');

            $data['info'] = request('company-trixFields.info');
            $data['attachment-company-trixFields'] =  request('attachment-company-trixFields');
            if(strlen($data['info']) < 30){
                return response()->json('Company info must be at least 20 character', 404);
            }

            $company->update($data);

            if ($request->has('logo')){
                $this->validate($request, ['logo' => 'image']);
                $file = $request->file('logo');
                $folder = 'u/';
                $uniqid = uniqid();
                $mainFileName = $uniqid . '.' . $file->getClientOriginalExtension();
                if (!file_exists(public_path($folder))) {
                    mkdir(public_path($folder), 0755, true);
                }
                $image = Image::make($request->file('logo'))
                    ->fit(300, 300, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                    ->save(public_path($folder) . $mainFileName);
                $imageUrl = '/' . $folder . $mainFileName;
                $company->logo = $imageUrl;
                $company->save();
            }
            $data['company'] = $company;

            DB::table('trix_rich_texts')->update([
                'model_type' => 'App\Models\Company',
                'model_id' => $company->id,
                'field' => 'info',
                'content' => request('company-trixFields.info')
            ]);

            $request->session()->flash('message', 'Company successfully posted, awaiting admin verification');
            $request->session()->flash('message-type', 'success');
            $data['url'] = route('companies.company.index');

            return response()->json($data, 200);

    }

    /**
     * Remove the specified company from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {


            $company = Company::findOrFail($id);
            $company->delete();

//            return redirect()->route('companies.company.index')
//                ->with('success_message', 'Company was successfully deleted.');

    }


    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
                'user_id' => 'nullable',
            'name' => 'required|string|min:1|max:255',
            'address' => 'required|string|min:1',
            'logo' => 'nullable',
            'website' => 'string|min:1|nullable',
            'email' => 'string|min:1|nullable',
            'info' => 'nullable',
            'phone' => 'string|min:1|nullable',
        ];

        $data = $request->validate($rules);

        $data['user_id'] = auth()->user()->id;

        return $data;
    }

}
