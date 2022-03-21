<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterResquest;
use App\Models\Customer;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function getRegister(){
        return view('frontend.pages.register');
    }

    public function postRegister(RegisterResquest $request){
        
       
        $customer= new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->password = bcrypt($request->password);
        $customer->save();

        return redirect()->back()->with('success','Đăng Kí Thành Công');
    }

    public function postLogin(Request $request){
        
    }
}
