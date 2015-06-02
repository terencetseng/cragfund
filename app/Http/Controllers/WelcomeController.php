<?php namespace cragfund\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome', ['content', 'auth/login']);
	}

    /**
     * Show the register screen
     *
     * @return Response
     */
    public function register()
    {
        return view('register');
    }

    /**
     * Show the login screen
     *
     * @return Response
     */
    public function login()
    {
        return view('login');
    }

    /**
     * Show the login screen
     *
     * @return Response
     */
    public function reset_password()
    {
        return view('reset_password');
    }

}
