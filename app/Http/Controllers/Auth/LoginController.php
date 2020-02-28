<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginView()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validateForm($request);

        if ($this->attempetLogin($request)) {
            return $this->sendSuccessResponse();
        }
        return $this->sendFailedResponse();
    }


    protected function validateForm(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:users'],
            'password' => ['required']
        ]);
    }

    protected function attempetLogin(Request $request)
    {
        return Auth::attempt($request->only('email', 'password'), $request->filled('remeber'));
    }

    protected function sendSuccessResponse()
    {
        return redirect()->intended();
    }

    protected function sendFailedResponse()
    {
        return back()->with('failedResponseLogin' , true);
    }

    protected function logout(Request $request)
    {
        Auth::logout($request->getUser());
        return redirect()->route('home');
    }
}
