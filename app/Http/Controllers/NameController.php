<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\UserProfile;

class NameController extends Controller
{
    public function ChangeName(Request $request)
    {
        $user_id = $request->user_id;
        $user_name = $request->user_name;
        
        if (strlen($user_name) > 10) 
        {
            //エラーを返す
        }

        $user_profile = UserProfile::where('user_id', $user_id)->first();

        if (!user_profile) 
        {
            //エラーを返す
        }

        $user_profile->user_name = $user_name;

        try {
            $user_profile->save();
        } catch (\PDOException $e) {
            //エラーを返す
        }

        $response = array (
            'user_profile' => $user_profile,
        );

        return json_encode($response);
    }
}
