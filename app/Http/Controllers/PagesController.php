<?php

namespace App\Http\Controllers;

class PagesController extends Controller{
	public function getIndex(){
		return view('pages.welcome');
	}
	public function getAbout(){
		$first= 'john';
		$last= 'doe';

		$fullname= $first . " " . $last;

		$email= 'johndoe@jd.com';

		$data= [];

		$data['email']= $email;
		$data['fullname']= $fullname;

		return view('pages.about')->withData($data);
	}
	public function getContact(){
		return view('pages.contact');
	}

}