<?php


use App\Http\Controllers\EmployerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\JobsController;
use App\Http\Controllers\JobseekerController;
use App\Http\Controllers\admin\TempController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/home',[HomeController::class, 'index'])->name('auth.home');

Route::view('jobseeker-self-service', 'jobseeker-selfservice');
Route::view('background-verification', 'background-verification');
Route::view('background-verification-2', 'background-verification2');
Route::view('background-verification-3', 'background-verification3');

Route::resources([
    'users' => UsersController::class,
]);

Route::post('/update/password',[UsersController::class, 'updatePassword'])->name('update.password');


Route::get('/jobseeker-registeration', [UsersController::class,'jobseekerReg'])->name('jobseeker.reg');

Route::group(['middleware' => ['guest']], function () {
    Route::get('/jobseeker/register', [UsersController::class, 'jobseekerReg'])->name('jobseeker.register');
    Route::get('/jobseeker/login', [UsersController::class, 'jobseekerLogin'])->name('jobseeker.login');

    Route::get('/employer/register', [UsersController::class,'employerReg'])->name('employer.register');
    Route::get('/employer/login', [UsersController::class,'employerLogin'])->name('employer.login');

});

Route::group(['prefix' => 'jobseeker','middleware' => ['verified','auth','role:jobseeker|admin']], function () {

    Route::get('/profile', [JobseekerController::class, 'profile'])->name('jobseeker.profile');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::group(['prefix' => 'employer','middleware' => ['verified','auth','role:employer|admin']], function () {


    Route::get('/profile', [EmployerController::class, 'profile'])->name('employer.profile');
    Route::get('/emp_resume_pack', [EmployerController::class, 'empResumePack'])->name('employer.resume_pack');
    Route::get('/transactions', [EmployerController::class, 'Transactions'])->name('employer.transactions');
    Route::get('/sub_users', [EmployerController::class, 'subUsers'])->name('employer.sub_users');
    Route::get('/add_sub_user', [EmployerController::class, 'addSubUser'])->name('employer.add_sub_user');

    Route::get('/change/password', [EmployerController::class, 'changePassword'])->name('employer.change_password');
    Route::get('/job/{slug}', [JobsController::class, 'view'])->name('jobs.job.view');
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/jobs/deleted', [JobsController::class, 'deleted'])->name('jobs.deleted');
    Route::get('/jobs/toggle/disabled/{slug}', [JobsController::class, 'toggleDisabled'])->name('jobs.toggle_disabled');
    Route::get('/jobs/restore/deleted/job/{slug}/{id}', [JobsController::class, 'restore'])->name('jobs.restore');
    Route::post('/jobs/force/delete/{id}', [JobsController::class, 'forceDelete'])->name('jobs.delete');
    Route::resources([
        'jobs' => JobsController::class,
        ]);
});




Route::get('/all-jobs', [JobsController::class, 'allJobs'])->name('all_jobs');

Route::get('/job/{slug}', [JobsController::class, 'jobView'])->name('jobs.job.view');


Route::get('/jobs-by-area', [JobsController::class,'jobByArea'])->name('job_by_area');
Route::get('/jobs-by-category', [JobsController::class,'jobByCat'])->name('category_job');
Route::get('/jobs-by-companies', [JobsController::class,'jobByCompany'])->name('company_job');
Route::get('/searchall', [JobsController::class,'searchAll'])->name('searchall');
Route::get('/recruiters', [JobsController::class,'recruiters'])->name('recruiters');
Route::get('/recruiter_profile/{username}', [HomeController::class,'recruitersProfile'])->name('recruiter.profile');
Route::get('/jobs/{type}', [JobsController::class,'jobType'])->name('job.type');
Route::get('/{company}/jobs', [JobsController::class,'CompanyJobs'])->name('company.jobs');
Route::get('/contact-us', [HomeController::class,'contactus'])->name('contactus');

Route::get('/edit-summary-info', [UsersController::class,'editSummary'])->name('edit_summary');
Route::get('/create-employee', [JobseekerController::class,'createEmployee'])->name('create_emp');
Route::get('/edit-resume-detail', [JobseekerController::class,'editResume'])->name('edit_resume_det');
Route::get('/itskills', [JobseekerController::class,'itSkills'])->name('itskills');
Route::get('/educationdetails', [JobseekerController::class,'eduDetails'])->name('educational_details');
Route::get('/moredetails', [JobseekerController::class,'moredetails'])->name('moredetails');
Route::get('/jobseeker-profile-edit', [JobseekerController::class,'profileEdit'])->name('jobseeker-edit');

Route::get('/job-agent-view', [JobsController::class,'jobAgentView'])->name('job_agent_view');
Route::get('/application-history', [JobseekerController::class,'applicationHistory'])->name('application_history');
Route::get('/manage-follow', [JobseekerController::class,'manageFollow'])->name('manage_follow');
Route::get('/follow', [JobseekerController::class,'follow'])->name('follow');
Route::get('/block-companies', [JobseekerController::class,'blockcompanies'])->name('block_companies');
Route::get('/change-password', [JobseekerController::class,'changePassword'])->name('changepasswordseeker');




Route::get('/check/{type}', [UsersController::class,'checkUser'])->name('check.user');
Route::get('/role/logout', [UsersController::class,'roleLogout'])->name('logout.user')->middleware('auth');

 include('admin.php');

Route::group(['prefix' => 'filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Auth::routes(['verify' => true]);

