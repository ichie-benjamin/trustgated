<?php

namespace App\Http\Controllers;

use App\AppliedJob;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\JobCategory;
use App\Models\Job;
use App\Models\Location;
use App\Models\Type;
use App\Notifications\NewApplicant;
use Illuminate\Support\Facades\DB;
use Validator;
use App\User;
use Illuminate\Http\Request;
use Exception;

class JobsController extends Controller
{


    public function jobType($type){
        return view('pages.job_by_type');
    }

    public function allJobs(){
        return view('pages.all_jobs');
    }

    public function recruiters(){
        return view('pages.recruiter-listing');
    }

    public function jobByCat(){
//        $q = $request->get('type');
        return view('pages.job_by_category');
    }

    public function jobAgentView(){
        return view('pages.job_agent_view');
    }
    public function jobByCompany(){
        return view('pages.job-by-company');
    }
     public function overSeasJobs(){
         return view('temp.overseas_jobs');
    }

    public function jobByArea(){
        return view('pages.job_by_area');
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
        $data = $request->all();
        $applied = AppliedJob::where('user_id',auth()->user()->id)->where('job_id',$data['job_id'])->get();
        if(count($applied) > 0){
            return response()->json('You already have a pending application on this job', 404);
        }
        if(!$request->has('profile_cv')){
            $validator = Validator::make($request->all(), [
                'cv' => 'required|mimes:pdf|max:10000',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->messages()->first(), 404);
            }
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
        }elseif($request->has('profile_cv')){
            $data['cv'] = $request['profile_cv'];
        }
        $data['user_id'] = auth()->user()->id;
        AppliedJob::create($data);
        $job = Job::findOrFail($data['job_id']);
        $poster = User::findOrFail($job->user_id);
        $poster->notify(new NewApplicant($job));
        $msg = 'You have successfully applied for '.$job->title;
        $request->session()->flash('message', $msg);
        $request->session()->flash('message-type', 'success');
        $res['url'] = route('jobs.applied');
        return response()->json($res, 200);
    }

    public function index()
    {
        $title = 'Successfully Job Posted!';
        $jobs = Job::with('user','type','category','location','company')->whereUserId(auth()->user()->id)->latest()->paginate(25);

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
        $job = null;
//        $users = User::pluck('id','id')->all();
$types = Type::pluck('name','id')->all();
$categories = JobCategory::pluck('name','id')->all();
$locations = Location::pluck('id','id')->all();
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

    public function show($slug)
    {
        $job = Job::findBySlugOrFail($slug);

        return view('employer.jobs.show', compact('job'));
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


        $data['description'] = request('job-trixFields.description');
        $data['attachment-job-trixFields'] =  request('attachment-job-trixFields');
        if(strlen($data['description']) < 30){
            return response()->json('Job description must be at least 20 character', 404);
        }
        $job->update($data);

        DB::table('trix_rich_texts')->update([
            'model_type' => 'App\Models\Job',
            'model_id' => $job->id,
            'field' => 'description',
            'content' => request('job-trixFields.description')
        ]);


        $request->session()->flash('message', 'Job successfully updated, awaiting admin verification');
        $request->session()->flash('message-type', 'success');
        $data['url'] = route('jobs.my_listings');

        return response()->json($data, 200);
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
            'type_id' => 'required',
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
            'address' => 'string|min:10|required',
            'type_id',
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
        $data['location_id'] = $data['industry_id'];
        $data['user_id'] = auth()->user()->id;
        $data['is_apply_here'] = true;

        return $data;
    }

}
