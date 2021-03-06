<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    //
    public function logoutAdmin(Request $request){
        Auth::logout();
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
        return redirect('login');
    }

    public function logoutcustomer(Request $request){
        Auth::guard('customer')->logout();
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();

        return redirect()->back();
    }

}
