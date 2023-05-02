<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\Client;

class AuthController extends Controller
{
    public function dashboard() {
        if(Auth::guard('admin')->check() === true) {
            $userData = Auth::guard('admin')->User();

            return view('admin.dashboard', ['user' => $userData]);
        }

        return redirect()->route('perfil.login');
    }

    public function excursions() {
        if(Auth::guard('admin')->check() === true) {
            $userId = Auth::guard('admin')->User()->id;

            $user = Client::where('id', $userId)->first();

            $excursions = $user->excursions()->get();

//            dd($excursions);

            return view('admin.dashboard-excursions', ['excursions' => $excursions]);
        }

        return redirect()->route('perfil.login');
    }

    public function showLoginForm() {
        return view('admin.login');
    }

    public function showSignupForm() {
        return view('admin.signup');
    }

    public function authenticate(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::guard('admin')->attempt($credentials)){
            return redirect('/');
        }

        return redirect()->back()->withInput()->withErrors(['Os dados informados não conferem!']);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function showChangePasswordForm()
    {
        return view('admin.change-password');
    }

    public function showChangeEmailForm()
    {
        return view('admin.change-email');
    }

    public function showForgotPasswordForm()
    {
        return view('admin.forgot-password');
    }
}
