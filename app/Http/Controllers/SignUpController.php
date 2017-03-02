<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignUpController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| SignUp Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('signup');
	}
	
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function postSignUp(Request $request)
	{
		$username = $request['username'];
		$email = $request['email'];
		$password = bcrypt($request['password']);
		
		$user = new User();
		$user->username = $username;
		$user->email = $email;
		$user->password = $password;
		
		$user->save();
		
		Auth::login($user);
		
		return redirect()->route('dashboard');		
	}
}
