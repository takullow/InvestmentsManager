<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MypageController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->input();

        $user_data = [
            'mail_address' => $data['mail_address'],
            'password' => $data['password']
        ];

        return view('mypage', $user_data);
    }
}
