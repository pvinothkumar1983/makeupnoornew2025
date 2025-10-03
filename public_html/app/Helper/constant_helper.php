<?php

//toster
function flashMessage($type,$message)
{
	\Session::put($type,$message);
}

function UPLOAD_AND_DOWNLOAD_URL(){

	if (env('IS_LIVE_DEMO_LOCAL') == 'local') {

		return  asset('');

	}else if (env('IS_LIVE_DEMO_LOCAL') == 'live') {

		return 'https://makeupnoor.com/';
	}
}

function UPLOAD_AND_DOWNLOAD_PATH(){

	if (env('IS_LIVE_DEMO_LOCAL') == 'local') {

		return public_path();

	}elseif (env('IS_LIVE_DEMO_LOCAL') == 'live') {

		return '/home/i1qxzjn7zpro/public_html/public';
	}
}
function NO_IMAGE_URL(){

	return UPLOAD_AND_DOWNLOAD_URL().'uploads/';
}

function GELLARY_IMAGE_UPLOAD_PATH(){

	return  UPLOAD_AND_DOWNLOAD_PATH().'/uploads/gallery/';
}
function GELLARY_IMAGE_UPLOAD_URL(){

	return UPLOAD_AND_DOWNLOAD_URL().'/uploads/gallery/';
}
?>

