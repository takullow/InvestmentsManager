<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Exception;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $data = [
            'err_message' => $request->old('err_message', ''),
        ];

        $presenter = new Members();
        $value = $presenter->find(1);
        \Log::debug($value);

        return view('login', $data);
    }

    public function executeLogin(Request $request)
    {
        \Log::debug($request->all());
        $request_data = $request->input();

        if (false) {
            $data = [
                'err_message' => 'ログインに失敗しました。'
            ];

            return redirect()->route('login.index')->withInput($data);
        }

        return redirect()->route('mypage.top');
    }

    public function logout(Request $request)
    {
        return view('logout');
    }

    public function executeLogout(Request $request)
    {
        \Log::debug($request->all());
        if (false) {
            throw new Exception('Failed to logout');
        }

        return redirect()->route('login.index');
    }
}
