<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AppliedJob;
use App\Models\Company;
use App\Models\Country;
use App\Models\FunctionalArea;
use App\Models\IndustryType;
use App\Models\JobCategory;
use App\Models\Job;
//use App\Models\Location;
use App\Models\Location;
use App\Models\ResumeView;
use App\Models\Type;
use App\Notifications\NewApplicant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;

class JobsController extends Controller
{


    public function jobType($type){
        return view('pages.job_by_type');
    }

    public function quickSearch(){
        return view('pages.quicksearch');
    }

    public function CompanyJobs($slug){
        $company = Company::findBySlugOrFail($slug);
        $jobs = Job::with('industry')->paginate(10);
        return view('pages.job_by_type', compact('company','jobs'));
    }

    public function allJobs(){
        $jobs = Job::paginate(20);
        return view('pages.all_jobs',compact('jobs'));
    }

    public function advanceSearch(Request $request){
        return $request->all();
    }

    public function advancedSearch(){
        $locations = Location::pluck('id','name');
        return view('pages.advancesearch', compact('locations'));
    }

    public function jobSearch(Request $request){
        if($request->has('quick')){
            $key = $request->get('quick');
          $jobs = Job::where('tags','LIKE','%'.$key.'%')->orWhere('title','LIKE','%'.$key.'%')
                ->orWhere('tags','LIKE','%'.$key.'%')
                ->latest()->paginate(10);
        }else {
            if ($request->has('advancesearch') || $request->has('homeadvsearch')) {
                $location = strip_tags($request->get('location'));
                $experience = strip_tags($request->get('experience'));
                $f_areas = strip_tags($request->get('f_areas'));
                $category = strip_tags($request->get('category'));
                $salary = strip_tags($request->get('salary'));
                $keyword = strip_tags($request->get('keyword'));

                $jobs = Job::where('tags', 'LIKE', '%' . $keyword . '%')->orWhere('title', 'LIKE', '%' . $keyword . '%')
                    ->where('locations', 'LIKE', '%' . $location . '%')
                    ->orWhere('min_salary', $salary)
                    ->orWhere('functional_area', $f_areas)->orWhere('industry_id', $category)
                    ->latest()->paginate(10);
            } else if ($request->has('city')) {
                $jobs = Job::where('city', 'LIKE', '%' . $request->get('city') . '%')->latest()->paginate(10);
            } else if ($request->has('location')) {
                $jobs = Job::where('locations', 'LIKE', '%' . $request->get('location') . '%')->latest()->paginate(10);
            } else if ($request->has('f_area')) {
                $jobs = Job::whereFunctionalArea($request->get('f_area'))->inRandomOrder()->paginate(10);
            } else if ($request->has('category')) {
                if ($request->has('sort')) {
                    $jobs = Job::whereIndustryId($request->get('category'))->latest()->paginate(10);
                } else {
                    $jobs = Job::whereIndustryId($request->get('category'))->inRandomOrder()->paginate(10);
                }
            } else {
                $jobs = Job::inRandomOrder()->paginate(10);
            }
        }
        return view('pages.all_jobs',compact('jobs'));
    }

    public function companyAllJobs($id){
        $jobs = Job::whereCompanyId($id)->inRandomOrder()->paginate(20);
        return view('pages.all_jobs',compact('jobs'));
    }

    public function recruiters(){
        $users = User::with('company')->whereRoleIs('employer')->get();
        $top_recruiters = User::with('company')->whereRoleIs('employer')->get();
        $companies = Company::all();
        return view('pages.recruiter-listing', compact('users', 'companies','top_recruiters'));
    }

    public function jobByCat(){
//        $q = $request->get('type');
        $industries = IndustryType::inRandomOrder()->limit(20)->get();
        return view('pages.job_by_category', compact('industries'));
    }

    public function jobAgentView(){
        return view('pages.job_agent_view');
    }
    public function jobByCompany(){
        $companies = Company::all();
        return view('pages.job-by-company', compact('companies'));
    }
     public function overSeasJobs(){
         return view('temp.overseas_jobs');
    }
      public function categorySearch(Request $request){
        if($request->has('indus')){
       $industries = IndustryType::where('category','LIKE','%'.$request->indus.'%')->latest()->get();
        }else{
            $industries = IndustryType::all();
        }

         return view('pages.categorysearch', compact('industries'));
    }



    public function jobByArea(){
       $locations = Location::inRandomOrder()->limit('20')->get();
        return view('pages.job_by_area', compact('locations'));
    }

    public function searchAll(){
        return view('pages.searchall');
    }



    public function appliedJobs(){
        $jobs = AppliedJob::where('user_id',auth()->user()->id)->get();
        return view('jobs.applied',compact('jobs'));
    }
    public function upgradeJob($id){
        $job = Job::findOrFail($id);
        if($job->user_id != auth()->user()->id){
            return abort(404);
        }
        return view('jobs.upgrade',compact('job'));
    }

    public function apply(Request $request){
        $data = [];

        $data['user_id'] = auth()->user()->id;
        $data['job_id'] = $request->job_id;
        $data['cv'] = auth()->user()->cv;

        $applied = AppliedJob::where('user_id',auth()->user()->id)->where('job_id',$data['job_id'])->get();
        if(count($applied) > 0){

           return redirect()->back()->with('failure','You already have a pending application on this job');
        }

        if(!auth()->user()->cv){
            return redirect()->back()->with('failure','You cant apply for a job without Resume, Please upload your resume');
        }

//        if($request->has('cv'))
//        {
//            $data['cv'] = $request['cv'];
//        }

        AppliedJob::create($data);
        $job = Job::findOrFail($data['job_id']);
        $poster = User::findOrFail($job->user_id);
        $poster->notify(new NewApplicant($job));
        $msg = 'You have successfully applied for '.$job->title;
        return redirect()->back()->with('success',$msg);
    }

    public function index()
    {
        $title = 'Successfully Job Posted!';
        $jobs = Job::with('user','type','category','company')->whereUserId(auth()->user()->id)->latest()->paginate(25);

        return view('employer.jobs.index', compact('jobs','title'));
    }

    public function deleted()
    {
        $jobs = Job::withTrashed()->whereUserId(auth()->user()->id)->latest()->paginate(25);

        $title = 'Deleted Jobs';

        return view('employer.jobs.index', compact('jobs','title'));
    }

    public function create(Request $request)
    {
        if(auth()->user()->job_plan){
            $jobs = Job::select(['created_at','user_id'])->whereUserId(auth()->id())->where('created_at','>=',auth()->user()->job_plan->updated_at)->count();
            if(auth()->user()->job_plan->expired){
                return redirect()->route('employer.resume_pack')->with('failure','Current Job Posting Access Expired, Please Purchase a package to continue posting jobs');
            }
            if(auth()->user()->job_plan->product){
                if($jobs > auth()->user()->job_plan->product->no_of_jobs){
                    return redirect()->route('employer.resume_pack')->with('failure',"You have exhausted the no. of jobs for this plan, upgrade to continue posting jobs");
                }
            }else{
                return redirect()->route('employer.resume_pack')->with('failure','Purchase Job Posting Access to continue posting jobs');
            }
        }else{
            return redirect()->route('employer.resume_pack')->with('failure','Purchase Job Posting Access to continue posting jobs');
        }


        $job = null;
//        $users = User::pluck('id','id')->all();
$types = Type::pluck('name','id')->all();
$categories = JobCategory::pluck('name','id')->all();
$locations = Country::pluck('id','id')->all();
$companies = Company::where('user_id',auth()->user()->id)->pluck('name','id')->all();

if(!$companies){
    $request->session()->flash('message', 'You need to register a company before you can post jobs');
    $request->session()->flash('message-type', 'success');
    return redirect()->route('companies.company.create');
}

        return view('employer.jobs.create', compact('types','categories','locations','companies','job'));
    }

    public function store(Request $request)
    {
//        return $request->all();
//        try {

            $data = $this->getData($request);
//        $data['description'] = request('job-trixFields.description');
//        $data['attachment-job-trixFields'] =  request('attachment-job-trixFields');
//        if(strlen($data['description']) < 30){
//            return response()->json('Job description must be at least 20 character', 404);
//        }
            $job = Job::create($data);

//        DB::table('trix_rich_texts')->insert([
//            'model_type' => 'App\Models\Job',
//            'model_id' => $job->id,
//            'field' => 'description',
//            'content' => request('job-trixFields.description')
//        ]);

        return redirect()->route('jobs.index')
            ->with('success_message', 'Job successfully posted, awaiting admin verification.');

    }

    public function candidates($id){
        $applied = AppliedJob::where('job_id',$id)->get();
        $job = Job::findOrFail($id);
        return view('jobs.manage_candidates',compact('applied','job'));
    }

    public function response($id){
       $applied = AppliedJob::with('user')->where('job_id',$id)->get();
        $job = Job::findOrFail($id);

        if(count($applied) < 1){
            return redirect()->route('jobs.index');
        }
        return view('employer.jobs.applications', compact('applied','job'));
//        return view('employer.jobs.applications',compact('applied','job'));
    }

    public function show($slug)
    {
        $job = Job::findBySlugOrFail($slug);

        return view('employer.jobs.show', compact('job'));
    }

    public function jobView($slug)
    {
        $job = Job::findBySlugOrFail($slug);

        Session::put('job', $job);

        return view('jobview', compact('job'));
    }

    public function similar()
    {
        $job = Session::get('job');

            $jobs = Job::where('tags', 'LIKE', '%' . $job->tags . '%')
//                ->where('locations', 'LIKE', '%' . $job->locations . '%')
                ->orWhere('functional_area', $job->functional_area)->orWhere('industry_id', $job->industry_id)
                ->latest()->paginate(10);

        return view('pages.all_jobs',compact('jobs'));

    }

    public function view($slug)
    {
        $job = Job::with('user','type','category','location','company')->findBySlugOrFail($slug);
        return view('employer.jobs.show', compact('job'));
    }

    public function showApply($slug)
    {
        $find = Job::findBySlugOrFail($slug);
        $job = Job::with('user','type','category','location','company')->findOrFail($find->id);
        $applied = count(AppliedJob::where('user_id',auth()->user()->id)->where('job_id',$find->id)->get());
        return view('pages.apply_job', compact('job','applied'));
    }

    /**
     * Show the form for editing the specified job.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($slug)
    {

        $job = Job::findBySlugOrFail($slug);
//$types = Type::pluck('name','id')->all();
//$categories = JobCategory::pluck('name','id')->all();
//$locations = Location::pluck('name','id')->all();
$companies = Company::pluck('name','id')->all();

        return view('employer.jobs.edit', compact('job','companies'));
    }

    public function update($id, Request $request)
    {
           $data = $this->getData($request);
            $job = Job::findOrFail($id);


        $job->update($data);


        return redirect()->route('jobs.index')
            ->with('success_message', 'Job successfully modified, awaiting admin verification.');

    }


    public function destroy($id)
    {
        try {
            $job = Job::findOrFail($id);
            $job->delete();

            return redirect()->route('jobs.index')
                ->with('success_message', 'Job was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    public function restore($slug, $id){
        $deleted = Job::withTrashed()->whereSlug($slug)->first();
        if($deleted){
            $job = Job::withTrashed()->findOrFail($id);
            $job->restore();
            return redirect()->route('jobs.index')
                ->with('success_message', 'Job was successfully restored from trash.');
        }else {
            return redirect()->route('jobs.index')
                ->with('unexpected_error', 'Something went wrong.');
        }

    }

    public function toggleDisabled($slug){
        $job = Job::whereSlug($slug)->first();
        if($job){
            $job->is_disabled = !$job->is_disabled;
            $job->save();
            return redirect()->route('jobs.index')
                ->with('success_message', 'Job status successfully updated.');
        }else {
            return redirect()->route('jobs.index')
                ->with('unexpected_error', 'Something went wrong.');
        }

    }

    public function forceDelete($id)
    {
        try {
            $job = Job::withTrashed()->findOrFail($id);
            $job->forceDelete();

            return redirect()->route('jobs.index')
                ->with('success_message', 'Job was successfully deleted from trashed and cant be restored.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }


    protected function getData(Request $request)
    {
        $rules = [
            'title' => 'string|min:1|max:255|required',
            'slug' => 'string|min:1|nullable',
            'description' => 'nullable',
            'user_id' => 'nullable',
            'is_active' => 'boolean|nullable',
            'category_id' => 'nullable',
            'locations' => 'nullable',
            'min_salary' => 'required|string|min:1',
            'max_salary' => 'required|string|min:1',
            'company_id' => 'required',
            'is_apply_here' => 'boolean|nullable',
            'email' => 'nullable',
            'url' => 'string|min:1|nullable',
            'closing_date' => 'nullable',
            'files' => 'string|min:1|nullable',
            'tags' => 'string|min:1|nullable',
            'country' => 'string|min:1|nullable',
            'city' => 'string|min:1|nullable',
            'state' => 'string|min:1|nullable',
            'address' => 'string|min:5|required',
            'type_id' => 'nullable',
'industry_id' => 'required',
'job_to'  => 'nullable',
'functional_area' => 'nullable',
'job_role_id' => 'nullable',
'candidate_description' => 'nullable',
'experience_from' => 'nullable',
'experience_to' => 'nullable',
'qualification' => 'nullable',
'currency_id' => 'nullable',
        ];

        $data = $request->validate($rules);

        $data['is_active'] = false;
        $data['category_id'] = $data['industry_id'];
//        $data['location_id'] = $data['industry_id'];
        $data['type_id'] = 1;
        $data['user_id'] = auth()->user()->id;
        $data['is_apply_here'] = true;

        return $data;
    }

}
