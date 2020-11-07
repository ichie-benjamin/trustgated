<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Carbon\Carbon;
use Cartalyst\Stripe\Stripe;
use Illuminate\Http\Request;
use Razorpay\Api\Api;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $job = Job::findOrFail($request->job_id);
         $job->update(['featured' => 1, 'featured_on' => now(),'featured_expires' => Carbon::now()->addMonths(1)]);
//        $stripe = Stripe::charges()->create([
//            'source' => $request->get('tokenId'),
//            'currency' => 'USD',
//            'amount' => $request->get('amount') * 100
//        ]);

        return $job;

//        return $stripe;
    }

    public function modify(){
        $jobs = Job::whereFeatured(0)->get();
        foreach ($jobs as $job){
            $job->update(['featured_expires' => $job->created_at->addDays(7)]);
        }
    }

    public function create()
    {
        return view('payWithRazorpay');
    }

    public function payment(Request $request)
    {
        $input = $request->all();

        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));

        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount']));

            } catch (\Exception $e) {
                return  $e->getMessage();
                \Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }

        \Session::put('success', 'Payment successful');
        return redirect()->back();
    }
}
