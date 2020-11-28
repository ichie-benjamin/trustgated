<?php

namespace App\Http\Controllers;

use App\Http\Controllers\admin\UserBackgroundVerificationController;
use App\Mail\ContactMail;
use App\Mail\MailEmployer;
use App\Mail\SendJobMail;
use App\Models\City;
use App\Models\Company;
use App\Models\DatabaseProduct;
use App\Models\EmployerAccess;
use App\Models\EmployerProduct;
use App\Models\FunctionalArea;
use App\Models\Highligh;
use App\Models\IndustryType;
use App\Models\Job;
use App\Models\Packages;
use App\Models\Page;
use App\Models\Products;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\UserBackgroundVerification;
use App\Models\VerificationPackage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    public function modifyJob(){
        $jobs = Job::all();
        foreach ($jobs as $job){
            $job->locations = ['Aizwel','Ajmar','Akola'];
            $job->save();
        }
        return 'done';
    }

    public function storeContact(Request $request){
        $data = $request->all();
        Mail::to('support@trustgated.com')->send(new ContactMail($data));
        return redirect()->back()->with('success','Message successfully sent');

    }

    public function testimonial(){
        return view('testimonial');
    }
    public function testimonialStore(Request $request){
        $data = $request->all();
        Testimonial::create([
            'name' => $data['name'],
            'designation' => $data['designation'],
            'description' => $data['description'],
            'testimonial_image' => auth()->user()->avatar,
        ]);
        return redirect()->back()->with('success','Testimonial successfully submitted');
    }

    public function jobseekerSelfservice(){
        $packages = VerificationPackage::all();
        return view('jobseeker-selfservice', compact('packages'));
    }
    public function backgroundVerification(Request $request){
    $package = VerificationPackage::findOrFail($request->package);
        return view('background-verification', compact('package'));
    }
    public function backgroundVerificationPayment($id){
  $user_bg = UserBackgroundVerification::findOrFail($id);
$package = VerificationPackage::findOrFail($user_bg->package_id);
        return view('bg_verification_payment', compact('user_bg','package'));
    }
    public function backgroundVerification2($id){
    $package = VerificationPackage::findOrFail($id);
        return view('background-verification2', compact('package'));
    }

    public function storeEmployment(Request $request){
        $request->session()->put('employments', $request['employments']);
        return redirect()->route('background-verification-2',$request['package']);
    }
    public function storeEdu(Request $request){
        $request->session()->put('educations', $request['educations']);
        return redirect()->route('background-verification-3',$request['package']);
    }
    public function storeRef(Request $request){
        $request->session()->put('ref', $request['ref']);
        $data['reference'] = $request->session()->get('ref');
        $data['employments'] = $request->session()->get('employments');
        $data['educations'] = $request->session()->get('educations');
        $data['package_id'] = $request['package'];
        $data['user_id'] = auth()->user()->id;
        $data['user_type'] = auth()->user()->role;
        $bg = UserBackgroundVerification::create($data);
        return redirect()->route('bg_verification_pay',$bg->id);
    }

    public function backgroundVerification3($id){
    $package = VerificationPackage::findOrFail($id);
        return view('background-verification3', compact('package'));
    }
    public function backgroundVerificationRequest(){
        $packages = VerificationPackage::all();
        return view('bg_verification_request', compact('packages'));
    }

    public function backgroundVerificationResponse(){
        $bgs = UserBackgroundVerification::whereUserId(auth()->id())->get();
        if(count($bgs) < 1){
            return redirect()->route('bg_verification');
        }
        return view('bg_verification_response', compact('bgs'));
    }

    public function AssignPackage(){
        $users = User::whereRoleIs('employer')->get();
        $product = Products::whereName('Free')->first();
        $access =  DatabaseProduct::whereName('Free')->first();
        foreach ($users as $user){
            if(EmployerProduct::whereUserId($user->id)->first() == null){
                EmployerProduct::create(['user_id' => $user->id, 'product_id' => $product->id,'expired_at' => Carbon::now()->addDay($product->no_of_days), 'paid' => true]);
            }
            if (EmployerAccess::whereUserId($user->id)->first() == null){
                EmployerAccess::create(['user_id' => $user->id, 'access_id' => $access->id, 'expired_at' => Carbon::now()->addDay($access->no_of_days), 'paid' => true]);
            }
        }
        return 'Done';
    }

    public function mailJob(Request $request){
        $mail = $request->all();
        Mail::to($request->fmail)->send(new SendJobMail($mail));
        $message = 'Mail successfully sent to Your Friend';
        return back()->with('success',$message);
    }

    public function purchasePlan(Request $request){
        if(!$request->has('job_posting_id') && !$request->has('db_access_id')){
            return redirect()->back()->with('failure', 'Pls select a package');
        }
        if($request->has('db_access_id')){
            $access = $request->db_access_id;
            $a = DatabaseProduct::findOrFail($access);
            if($a->price < 1){
                return redirect()->back()->with('failure', "You can't subscribe to free plan");
            }
            $expired_at = Carbon::now()->addDay($a->no_of_days);
            EmployerAccess::create([
                'user_id' => auth()->id(),
                'access_id' => $access,
                'expired_at' => $expired_at,
            ]);
        }
        if($request->has('job_posting_id')){
            $product = $request->job_posting_id;
            $p = Products::findOrFail($product);
            if($p->price < 1){
                return redirect()->back()->with('failure', "You can't subscribe to free plan");
            }
            $expired_at = Carbon::now()->addDay($p->no_of_days);
            EmployerProduct::create([
                'user_id' => auth()->id(),
                'product_id' => $product,
                'expired_at' => $expired_at,
            ]);
        }

        return redirect()->route('employer.transactions')->with('success','Click on package to proceed to payment');
    }

    public function mailEmployer(Request $request){
        $mail = $request->all();
        Mail::to($request->mail)->send(new MailEmployer($mail));
        $message = 'Mail successfully sent to Recruiter';
        return back()->with('success',$message);
    }
    public function index()
    {
//        $cities = Cache::remember('cities', 3600, function () {
//            return City::withCount('jobs')->whereFeatured(1)->get();
//        });
        $cities = City::withCount('jobs')->whereFeatured(1)->get();
//        $highlights = Cache::remember('highlights', 3600, function () {
//            return Highligh::all();
//        });
        $highlights = Highligh::all();
        $companies = Company::select('name','logo','slug')->limit('18')->get();
        $f_areas = FunctionalArea::withCount('jobs')->whereFeatured(1)->inRandomOrder()->limit(6)->get();
        $industries = IndustryType::withCount('jobs')->orderBy('jobs_count', 'desc')->limit(12)->get();
        $jobs = Job::latest()->limit(8)->get();
        return view('index', compact('f_areas','industries','companies','jobs','cities','highlights'));
    }

    public function terms(){
        $content = Page::whereTitle('Seeker : Terms and Conditions')->first()->content;
        return view('pages.terms',compact('content'));
    }

    public function about(){
        $content = Page::whereTitle('Seeker : About Us')->first()->content;
        return view('pages.about',compact('content'));
    }

    public function privacy(){
        $content = Page::whereTitle('Seeker : Privacy Policy')->first()->content;
        return view('pages.privacy',compact('content'));
    }

    public function faq(){
        $content = Page::whereTitle('Seeker : FAQ')->first()->content;
        return view('pages.faq',compact('content'));
    }

    public function recruitersProfile($username){
        $user = User::whereUsername($username)->first();
        $top_recruiters = User::with('company')->whereRoleIs('employer')->get();
        return view('pages.recruiter-profile', compact('top_recruiters','user'));
    }

    public function contactus(){

        $content = Page::whereTitle('Contact Us')->first()->content;

        return view('pages.contactus', compact('content'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
//    public function index()
//    {
//
//        return view('home');
//    }
}
