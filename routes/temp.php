<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;


Route::get('/all-jobs', [JobsController::class, 'allJobs'])->name('all_jobs');

Route::get('/jobs-by-area', [JobsController::class,'jobByArea'])->name('job_by_area');
Route::get('/jobs-by-category', [JobsController::class,'jobByCat'])->name('category_job');
Route::get('/jobs-by-companies', [JobsController::class,'jobByCompany'])->name('company_job');
Route::get('/searchall', [JobsController::class,'searchAll'])->name('searchall');
Route::get('/recruiters', [JobsController::class,'recruiters'])->name('recruiters');
Route::get('/jobs/{type}', [JobsController::class,'jobType'])->name('job.type');
Route::get('/contact-us', [HomeController::class,'contactus'])->name('contactus');





Route::get('/recruiters', function (){
    return view('temp.recruiter-listing');
})->name('recruiters');


Route::group(['prefix' => 'temp'], function () {


    Route::get('/','TempController@index')->name('welcome');

    Route::get('/jobseeker-profile', function (){
       return view('temp.jobseeker-profile');
    })->name('jobseeker-profile');

//    Route::get('/searchall', function (){
//        return view('temp.searchall');
//    })->name('searchall');

//    Route::get('/jobsearch_all', function (){
//        return view('temp.jobsearch_all');
//    })->name('jobsearch_all');

//    Route::get('/government-jobs', function (){
//        return view('temp.govt_job');
//    })->name('govt_job');
//
//    Route::get('/overseas-jobs', function (){
//        return view('temp.overseas_jobs');
//    })->name('oversea_jobs');

//    Route::get('/recruiters', function (){
//        return view('temp.recruiter-listing');
//    })->name('recruiters');
//    Route::get('/contact-us', function (){
//        return view('temp.contactus');
//    })->name('contactus');
//




//    Route::get('/jobs-by-area', function (){
//        return view('temp.job_by_area');
//    })->name('job_by_area');

    Route::get('/edit-summary-info', function (){
        return view('temp.edit_objective_det');
    })->name('edit_summary');

    Route::get('/create-employee', function (){
        return view('temp.create_emp');
    })->name('create_emp');

    Route::get('/edit-resume-details', function (){
        return view('temp.edit_resume_det');
    })->name('edit_resume_det');

    Route::get('/itskills', function (){
        return view('temp.itskills');
    })->name('itskills');

    Route::get('/educationdetails', function (){
        return view('temp.educationdetails');
    })->name('educationdetails');

    Route::get('/moredetails', function (){
        return view('temp.moredetails');
    })->name('moredetails');

    Route::get('/jobseeker-profile-edit', function (){
        return view('temp.jobseeker-profile-edit');
    })->name('jobseeker-edit');

    Route::get('/job-agent-view', function (){
        return view('temp.job_agent_view');
    })->name('job_agent_view');

    Route::get('/application-history', function (){
        return view('temp.application-history');
    })->name('application_history');

    Route::get('/manage-follow', function (){
        return view('temp.manage_follow');
    })->name('manage_follow');

    Route::get('/follow', function (){
        return view('temp.follow');
    })->name('follow');

    Route::get('/block-companies', function (){
        return view('temp.block-companies');
    })->name('block_companies');

    Route::get('/changepasswordseeker', function (){
        return view('temp.changepasswordseeker');
    })->name('changepasswordseeker');



});

