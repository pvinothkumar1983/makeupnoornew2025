<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(){

        if (\Auth::check())  {

            return redirect()->route('index');
        }

        return view('admin.auth.login');

    }

    public function loginPost(Request $request)
    {

        $messages = [];
		$rules = [
			'email' => ['required', 'email'],
			'password' => ['required'],
		];

		if(env('IS_CAPTCHA_ENABLE')){

			$rules['recaptcha_response'] = ['required','VerifyRecaptcha'];
			$messages['recaptcha_response.required'] = 'The ReCAPTCHA verification field is required.';
			$messages['recaptcha_response.verify_recaptcha'] = 'ReCAPTCHA verification failed.';
		}

        $request->validate($rules, $messages);

        if (\Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

           flashMessage('success', 'Login Successfully Done!!');

            return response()->json(['status' => true,'redirect_url' => route('index')]);
        } else {

            flashMessage('error', 'Please Enter Valid Email and Password');

            return response()->json(['status' => false]);
        }
    }

    public function logout()
    {
        \Auth::logout();

        flashMessage('success', 'Logout Successfully !!');

        return redirect()->route('admin.login');
    }

}
