<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function Start(Request $request)
    {
        $user_id = $request->user_id;

        //クライアントに返すレスポンスを入れる
        $response = array();

        return $response;

    }
}
