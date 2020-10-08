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
        $jobs = Job::with('user','type','category','location','company')->whereUserId(auth()->user()->id)->latest()->paginate(25);

        return view('jobs.index', compact('jobs'));
    }

    public function create(Request $request)
    {
        $job = null;
        $users = User::pluck('id','id')->all();
$types = Type::pluck('name','id')->all();
$categories = JobCategory::pluck('name','id')->all();
$locations = Location::pluck('id','id')->all();
$companies = Company::where('user_id',auth()->user()->id)->pluck('name','id')->all();

if(!$companies){
    $request->session()->flash('message', 'You need to register a company before you can post jobs');
    $request->session()->flash('message-type', 'success');
    return redirect()->route('companies.company.create');
}

        return view('jobs.create', compact('users','types','categories','locations','companies','job'));
    }

    public function store(Request $request)
    {
//        try {

            $data = $this->getData($request);
        $data['description'] = request('job-trixFields.description');
        $data['attachment-job-trixFields'] =  request('attachment-job-trixFields');
        if(strlen($data['description']) < 30){
            return response()->json('Job description must be at least 20 character', 404);
        }
            $job = Job::create($data);

        DB::table('trix_rich_texts')->insert([
            'model_type' => 'App\Models\Job',
            'model_id' => $job->id,
            'field' => 'description',
            'content' => request('job-trixFields.description')
        ]);


        $request->session()->flash('message', 'Job successfully posted, awaiting admin verification');
            $request->session()->flash('message-type', 'success');
            $data['url'] = route('jobs.upgrade', $job->id);
            $data['id'] = $job->id;

            return response()->json($data, 200);

    }

    public function candidates($id){
        $applied = AppliedJob::where('job_id',$id)->get();
        $job = Job::findOrFail($id);
        return view('jobs.manage_candidates',compact('applied','job'));
    }

    /**
     * Display the specified job.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $job = Job::with('user','type','category','location','company')->findOrFail($id);

        return view('jobs.show', compact('job'));
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
    public function edit($id)
    {
        $job = Job::findOrFail($id);
$types = Type::pluck('name','id')->all();
$categories = JobCategory::pluck('name','id')->all();
//$locations = Location::pluck('name','id')->all();
$companies = Company::pluck('name','id')->all();

        return view('jobs.edit', compact('job','types','categories','companies'));
    }

    /**
     * Update the specified job in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
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

    /**
     * Remove the specified job from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $job = Job::findOrFail($id);
            $job->delete();

            return redirect()->route('jobs.job.index')
                ->with('success_message', 'Job was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
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
                'title' => 'string|min:1|max:255|required',
            'slug' => 'string|min:1|nullable',
            'description' => 'nullable',
            'user_id' => 'nullable',
            'is_active' => 'boolean|nullable',
            'type_id' => 'required',
            'category_id' => 'required',
            'location_id' => 'nullable',
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
        ];

        $data = $request->validate($rules);

        $data['is_active'] = false;
        $data['user_id'] = auth()->user()->id;
        $data['is_apply_here'] = true;

        return $data;
    }

}
