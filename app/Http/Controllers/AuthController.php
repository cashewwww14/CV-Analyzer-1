<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        // Redirect if already logged in
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect('/admin/dashboard');
            }
            return redirect('/home');
        }
        
        return view('auth.login');
    }

    // Show register form
    public function showRegisterForm()
    {
        // Redirect if already logged in
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect('/admin/dashboard');
            }
            return redirect('/home');
        }
        
        return view('auth.register');
    }

    // Handle login
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            $user = Auth::user();
            // If the user logs in with an email under the @cvanalyzr.com domain,
            // ensure they have the admin role (persist change if necessary).
            if (str_ends_with(strtolower($user->email), '@cvanalyzr.com') && $user->role !== 'admin') {
                $user->role = 'admin';
                $user->save();
            }
            
            // Clear any intended URL to prevent wrong redirects
            $request->session()->forget('url.intended');
            
            // Redirect based on role
            if ($user->role === 'admin') {
                return redirect('/admin/dashboard');
            }
            
            return redirect('/home');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput();
    }

    // Handle register
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            // `role` is intentionally NOT accepted from the request. Role is derived from email domain.
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Determine role based on email domain. Emails ending with @cvanalyzr.com become admin automatically.
        $email = $request->email;
        $role = str_ends_with(strtolower($email), '@cvanalyzr.com') ? 'admin' : 'user';

        $user = User::create([
            'name' => $request->name,
            'email' => $email,
            'password' => Hash::make($request->password),
            'role' => $role,
        ]);

        Auth::login($user);
        
        $request->session()->regenerate();

        // Redirect based on role
        if ($user->role === 'admin') {
            return redirect('/admin/dashboard');
        }

        return redirect('/home');
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
