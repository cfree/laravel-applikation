<?php

class AppController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| List Controller
	|--------------------------------------------------------------------------
	|
	| List all of the applications
	|
	*/

	public function home() {

		// Get all applications
		$apps = Application::with('status', 'company')->get();

		return View::make('home', array(
			'apps' => $apps
		));
	}
}
