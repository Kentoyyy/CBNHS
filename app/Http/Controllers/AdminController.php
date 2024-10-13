<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view('pages.admin.adminlog.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only(['name', 'password']);

        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentication successful, redirect to admin dashboard
            return redirect()->route('admin.dashboard');
        } else {
            // Authentication failed, redirect back to login page
            return redirect()->back()->withErrors(['Invalid credentials']);
        }
    }

    public function dashboard()
    {
        return view('pages.admin.dashboard');
    }
    public function logout(Request $request)
{
    Auth::guard('admin')->logout();
    return redirect()->route('login');
}
}