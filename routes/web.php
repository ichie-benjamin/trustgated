<?php


use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobAlertController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\JobseekerController;
use App\Http\Controllers\admin\TempController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;



Route::get('login/{provider}', [SocialAuthController::class,'redirect'])->name('social.login');
Route::get('login/{provider}/callback', [SocialAuthController::class,'callback']);


Route::get('/',[HomeController::class, 'index'])->name('home');

Route::post('/contact/storeemp_resume_pack',[HomeController::class, 'storeContact'])->name('contact.store');


Route::get('/home',[HomeController::class, 'index'])->name('auth.home');
Route::get('/testimonial',[HomeController::class, 'testimonial'])->name('testimonial');

Route::post('/testimonial/store',[HomeController::class, 'testimonialStore'])->name('testimonial.store');

Route::get('payment-razorpay',  [PaymentController::class,'create'])->name('paywithrazorpay');
Route::post('payment', [PaymentController::class,'payment'])->name('payment');
Route::post('verification/payment', [PaymentController::class,'verificationPayment'])->name('verification.payment');

Route::get('/about-us',[HomeController::class, 'about'])->name('about');
Route::get('/terms',[HomeController::class, 'terms'])->name('terms');
Route::get('/privacy',[HomeController::class, 'privacy'])->name('privacy');
Route::get('/faq',[HomeController::class, 'faq'])->name('faq');

Route::get('/getstates', [LocationsController::class, 'getstates'])->name('ajax.getstates');


Route::post('/payment/store', 'PaymentController@store')->name('payment.store');



Route::get('jobseeker-self-service', [HomeController::class, 'jobseekerSelfservice'])->name('selfservice');
Route::get('background-verification-request', [HomeController::class, 'backgroundVerificationRequest'])->name('bg_verification');
Route::get('background-verification-response', [HomeController::class, 'backgroundVerificationResponse'])->name('bg_verification_response');
Route::get('background-verification-payment/{id}', [HomeController::class, 'backgroundVerificationPayment'])->name('bg_verification_pay');
Route::get('background-verification', [HomeController::class,'backgroundVerification'])->name('background-verification');
Route::get('background-verification/2/{id}', [HomeController::class,'backgroundVerification2'])->name('background-verification-2');
Route::get('background-verification/3/{id}', [HomeController::class,'backgroundVerification3'])->name('background-verification-3');

Route::post('background-edu-store', [HomeController::class,'storeEdu'])->name('store.edu');
Route::post('background-employment-store', [HomeController::class,'storeEmployment'])->name('store.employment');
Route::post('background-ref-store', [HomeController::class,'storeRef'])->name('store.ref');

//Route::view('background-verification/2', 'background-verification2')->name('background-verification-2');
//Route::view('background-verification/3', 'background-verification3')->name('background-verification-3');


Route::post('/advance_search',[JobsController::class, 'advanceSearch'])->name('advance_search');

Route::get('/company/{id}/jobs',[JobsController::class, 'companyAllJobs'])->name('company.all.jobs');

Route::resources([
    'users' => UsersController::class,
]);

Route::post('/update/password',[UsersController::class, 'updatePassword'])->name('update.password');

Route::post('/mail/job',[HomeController::class, 'mailJob'])->name('mail.job');
Route::post('/mail/employer',[HomeController::class, 'mailEmployer'])->name('mail.employer');


Route::get('/jobseeker-registeration', [UsersController::class,'jobseekerReg'])->name('jobseeker.reg');

Route::group(['middleware' => ['guest']], function () {
    Route::get('/jobseeker/register', [UsersController::class, 'jobseekerReg'])->name('jobseeker.register');
    Route::get('/jobseeker/login', [UsersController::class, 'jobseekerLogin'])->name('jobseeker.login');

    Route::get('/employer/register', [UsersController::class,'employerReg'])->name('employer.register');
    Route::get('/employer/login', [UsersController::class,'employerLogin'])->name('employer.login');

});

Route::Resources(['job_alerts' => JobAlertController::class]);


Route::group(['prefix' => 'jobseeker','middleware' => ['verified','auth','role:jobseeker|admin']], function () {

    Route::get('/profile', [JobseekerController::class, 'profile'])->name('jobseeker.profile');
    Route::get('/manage/employers', [JobseekerController::class, 'employers'])->name('jobseeker.manage.employers');
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/edit-employee/{id}', [JobseekerController::class,'editEmployee'])->name('edit_emp');
    Route::post('/delete-employee/{id}', [JobseekerController::class,'deleteEmployer'])->name('delete_emp');

    Route::post('/job/apply', [JobsController::class,'apply'])->name('job.apply');



});


Route::group(['middleware' => ['verified','auth']], function () {

    Route::post('/user/update/resume', [UsersController::class, 'updateResume'])->name('user.update.resume');
    Route::post('/user/create/employer', [UsersController::class, 'storeEmployer'])->name('user.create.employer');

    Route::post('/user/update/account', [UsersController::class, 'update'])->name('user.account.update');
    Route::post('/user/update/summary', [UsersController::class, 'updateSummary'])->name('user.account.summary');
    Route::post('/user/update/more', [UsersController::class, 'updateMore'])->name('user.update.more');

    Route::get('/user/profile/{username}', [UsersController::class, 'userProfile'])->name('user.profile.public');
    Route::get('/user/download/resume/{username}', [UsersController::class, 'downloadResume'])->name('user.resume.download');

    Route::post('/user/update/itskills', [UsersController::class, 'updateItskills'])->name('user.update.itskills');

    Route::post('/user/update/avatar', [UsersController::class, 'updateAvatar'])->name('user.update.avatar');
    Route::post('/user/update/visibility', [UsersController::class, 'updateVisibility'])->name('user.update.visibility');

    Route::get('/edit-summary-info', [UsersController::class,'editSummary'])->name('edit_summary');
    Route::get('/create-employee', [JobseekerController::class,'createEmployee'])->name('create_emp');
    Route::get('/edit-resume-detail', [JobseekerController::class,'editResume'])->name('edit_resume_det');
    Route::get('/itskills', [JobseekerController::class,'itSkills'])->name('itskills');
    Route::get('/educationdetails', [JobseekerController::class,'eduDetails'])->name('educational_details');
    Route::get('/moredetails', [JobseekerController::class,'moredetails'])->name('moredetails');
    Route::get('/jobseeker-profile-edit', [JobseekerController::class,'profileEdit'])->name('jobseeker-edit');

});

Route::group(['prefix' => 'employer','middleware' => ['verified','auth','role:employer|admin']], function () {


    Route::post('/purchase/plan',[HomeController::class, 'purchasePlan'])->name('plan.purchase');


    Route::get('/profile', [EmployerController::class, 'profile'])->name('employer.profile');
    Route::get('/emp_resume_pack', [EmployerController::class, 'empResumePack'])->name('employer.resume_pack');
    Route::get('/transactions', [EmployerController::class, 'Transactions'])->name('employer.transactions');
    Route::get('/transaction/payment/{type}/{id}', [EmployerController::class, 'TransactionPayment'])->name('employer.transaction.payment');
    Route::get('/sub_users', [EmployerController::class, 'subUsers'])->name('employer.sub_users');
    Route::get('/add_sub_user', [EmployerController::class, 'addSubUser'])->name('employer.add_sub_user');

    Route::get('/featured_resume', [EmployerController::class, 'featuredResume'])->name('employer.featured_resumes');
    Route::post('/search_resume', [EmployerController::class, 'searchResume'])->name('search_resumes');

    Route::get('/change/password', [EmployerController::class, 'changePassword'])->name('employer.change_password');
    Route::get('/job/{slug}', [JobsController::class, 'view'])->name('jobs.job.view');
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/job/{id}/responses', [JobsController::class, 'response'])->name('job.response');


    Route::get('/jobs/deleted', [JobsController::class, 'deleted'])->name('jobs.deleted');
    Route::get('/jobs/toggle/disabled/{slug}', [JobsController::class, 'toggleDisabled'])->name('jobs.toggle_disabled');
    Route::get('/jobs/restore/deleted/job/{slug}/{id}', [JobsController::class, 'restore'])->name('jobs.restore');
    Route::post('/jobs/force/delete/{id}', [JobsController::class, 'forceDelete'])->name('jobs.delete');

    Route::post('/user/update', [UsersController::class, 'updateProfile'])->name('user.update');
    Route::resources([
        'jobs' => JobsController::class,
        'companies' => CompaniesController::class,
        'jobs' => jobsController::class,
        ]);
});




Route::get('/all-jobs', [JobsController::class, 'allJobs'])->name('all_jobs');

Route::get('/job/{slug}', [JobsController::class, 'jobView'])->name('jobs.job.view');


Route::get('/jobs-by-area', [JobsController::class,'jobByArea'])->name('job_by_area');
Route::get('/jobsearch', [JobsController::class,'jobSearch'])->name('jobsearch');
Route::get('/categorysearch', [JobsController::class,'categorySearch'])->name('categorysearch');
Route::get('/advancesearch', [JobsController::class,'advancedSearch'])->name('advancedsearch');
Route::get('/jobs-by-category', [JobsController::class,'jobByCat'])->name('category_job');
Route::get('/jobs-by-companies', [JobsController::class,'jobByCompany'])->name('company_job');
Route::get('/searchall', [JobsController::class,'searchAll'])->name('searchall');
Route::get('/recruiters', [JobsController::class,'recruiters'])->name('recruiters');
Route::get('/recruiter_profile/{username}', [HomeController::class,'recruitersProfile'])->name('recruiter.profile');
Route::get('/jobs/{type}', [JobsController::class,'jobType'])->name('job.type');
Route::get('/{company}/jobs', [JobsController::class,'CompanyJobs'])->name('company.jobs');
Route::get('/contact-us', [HomeController::class,'contactus'])->name('contactus');



Route::get('/job-agent-view', [JobsController::class,'jobAgentView'])->name('job_agent_view');
Route::get('/quicksearch', [JobsController::class,'quickSearch'])->name('quicksearch');
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


Route::get('/assign/plan', [HomeController::class,'AssignPackage']);

Auth::routes(['verify' => true]);

// Route::get('/2365/modify/jobs',[HomeController::class, 'modifyJob'])->name('home');

