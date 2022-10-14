<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;

class DashboardController extends Controller
{

    public function login()
    {
        return view('backend.auth.login');
    }

    public function login_action(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
  
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
            $request->session()->regenerate();
            return redirect()->intended('admin')->with('success','Logged In!');
        }else{
            return back()->with('error','Invalid credentials!');
        }         
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('success', 'Logout successfully!');
    }

    public function dashboard()
    {
        return view('backend.dashboard_master');
    }
    
    //End
}
