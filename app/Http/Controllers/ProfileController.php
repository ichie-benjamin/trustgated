<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $data = $this->getData($request);
        $profile = Profile::whereUserId(auth()->user()->id)->first();
        $profile->update($data);
        return response()->json($data);
    }
    protected function getData(Request $request)
    {
        $rules = [
            'work_experiences' => 'nullable|array',
            'personal_info' => 'nullable',
            'educations' => 'nullable',
            'languages' => 'nullable',
            'interest' => 'nullable',
//            'user_id' => 'required|integer',
        ];
        $data = $request->validate($rules);
//        $data['work_experiences'] = json_encode($data['work_experiences']);
        return $data;
    }
}
