<?php
namespace App\Validator;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Input;

class CustomeValidator extends Validator
{
	public function validateVerifyRecaptcha($attribute, $value, $parameters)
	{
		$secretKey = env('YOUR_SECRET_KEY'); // Replace with your Secret Key
		$verifyURL = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$value";

		$response = file_get_contents($verifyURL);
		$responseData = json_decode($response);

		if ($responseData->success) {
			return true;
		} else {
			return false;
		}
	}
}
?>
