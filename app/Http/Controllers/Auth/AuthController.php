<?php

namespace App\Http\Controllers\Auth;

use App\Service\UserService;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\PasswordResetRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * @var \App\Service\UserService $service
     */
    public $service;

    /**
     * Constructor sets default service.
     */
    public function __construct()
    {
        $this->service = new UserService();
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function getLogin()
    {
        return view('auth.login');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function getRegister()
    {
        return view('auth.registration');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/')->withToastSuccess('Login success');
        }

        return redirect('login')->withToastError('Invalid credentials');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegister(RegisterRequest $request)
    {
        $data = $request->only(['first_name', 'last_name', 'email', 'password']);

        $this->service->create($data);

        return redirect('/')->withToastSuccess('Registration success');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect('login');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function reset()
    {
        return view('auth.resetPassword');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function sendResetToken(PasswordResetRequest $request)
    {
        $data = $request->only(['email']);

        return view('auth.tokenSent', compact('data'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function reSendResetToken(Request $request)
    {
        $data = $request->only(['email']);

        return view('auth.tokenSent', compact('data'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
