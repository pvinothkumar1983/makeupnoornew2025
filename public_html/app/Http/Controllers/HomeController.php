<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;



class HomeController extends Controller
{
    //
    public function index()
    {
    	return view('home');
    }

    public function about()
    {
    	return view('front.about');
    }

    public function contact()
    {

    	return view('front.contact');
    }

      public function faceMakeup()
    {

        return view('front.facemakeup');
    }
       public function bridalMakeup()
    {

        return view('front.bridalmakeup');
    }
       public function fashionMakeup()
    {

        return view('front.fashionmakeup');
    }
       public function filmMakeup()
    {

        return view('front.filmmakeup');
    }

       public function contactPost(request $request)
    {

        $messages = [];

   $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phonenumber' => 'required',
            'message' => 'required',
        ]);
		if(env('IS_CAPTCHA_ENABLE')){

			$rules['recaptcha_response'] = ['required','VerifyRecaptcha'];
			$messages['recaptcha_response.required'] = 'The ReCAPTCHA verification field is required.';
			$messages['recaptcha_response.verify_recaptcha'] = 'ReCAPTCHA verification failed.';
		}
   if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
     
         $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'message' => $request->message, // Assign post to logged-in user

        ]);

        flashMessage('success', 'email sent Successfully !!');

        return response()->json(['status' => 'email sent Successfully !!','redirect_url' => route('contact')]);

    }
    
    public function gallery()
    {
    	return view('front.gallery');
    }
}
