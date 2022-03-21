<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\SessionGuard;

class LoginController extends Controller
{
    //
    public function loginAdmin(){
        return view("backend.auth.login");
    }

    public function postLogin(Request $request){
       $data =[
           'email'=> $request->email,
           'password'=>$request ->password
       ];
       
        if(auth::attempt($data)){
            
            return redirect('admin');
        }
        else{
            return back()->withErrors([
                'login'=> 'thong tin ko đúng'
        ]);
        }
        
    }
    public function logincustomer(Request $request){
        $data =[
                'name'      =>$request->name,
                'password'  =>$request->password
        ];
        
        if(Auth::guard('customer')->attempt($data)){
         
            return redirect('home');
        }
        else{
            return back()->withErrors([
                'login'=> 'thong tin ko đúng'
        ]);
        }
    }
}
