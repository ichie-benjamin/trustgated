<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;

class
SettingsController extends Controller
{
    public function store(Request $request){
      setting($request->except('_token'))->save();
        return redirect()->back()->with('success', 'Settings updated successfully');
    }

     public function storeItem(Request $request){
         $this->validate($request, [
             'key' => ['required', 'string',  'unique:settings']
             ]);

         Setting::create($request->all());
        return redirect()->back()->with('success', 'Settings added successfully');
    }

    public function update(Request $request, Setting $setting)
    {

        $setting->type = $request->type;
        $setting->value = $request->value;
        $setting->save();
        return redirect()->route('admin.settings.index')->with('success', 'Settings updated successfully');
    }


    public function edit(Setting $setting)
    {
        //
        return view('admin.settings.edit', ['setting' => $setting]);
    }


    public function home(Request $request){
        return view('admin.settings.home');
    }
    public function index(Request $request){
        if($request->has('reset')){
            Setting::truncate();
        }
        $settings = setting::all();
        if(count($settings) < 5){
            setting(
                ['site_name' => 'trustgated',
                    'site_keywords' => 'trustgated',
                    'site_description' => 'trustgated',
                    'site_title' => 'trustgated',
                    'website_team' => 'trustgated',
                    'website_admin' => 'trustgated',
                    'site_url' => 'trustgated',
                    'employer_reply_mail' => 'trustgated',
                    'payment_method' => 'trustgated',
                    'site_logo' => 'trustgated',
                    'contact_number' => 'trustgated',
                    'contact_mail' => 'trustgated',
                    'google_link' => 'trustgated',
                    'twitter_link' => 'trustgated',
                    'linkedin_link' => 'trustgated',
                    'facebook_link' => 'trustgated',
                    'currency_symbol' => 'USD',
                    'favicon' => '/assets/images/favicon.png',
                    'video_url' => '/trustgated']
            )->save();
        }
        return view('admin.settings.index', ['settings' => $settings]);
    }
}
