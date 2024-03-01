<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse;
use App\Models\User;


class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function dologin(Request $request)
     {
      
          
            $credentials=$request->only('email','password');
        
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
     
                return redirect()->route('welcome');
            }
     
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        
         }
         public function logout()
         {
             Session::flush();
             
             Auth::logout();
             return view('login');
         }
        }
    





























//  $credentials=$request->only('email','password');
// // return $credentials;
// if(Auth::attempt($credentials))
// {
//     $request->session()->regenerate();
//     return redirect()->route('welcome');
// }
// // return back()->withErrors([
// //     'email'=>'the provided creadentials do not match our records'
// // ]);}
// else
// {
//     return redirect()->route('login')->with('message','login is invalid');
// }
//      }

        //     $input=['email'=>request('email'),'password'=>request('password')];
        
    //     if(auth()->attempt($input)){
           
    //     return "hai";
    //     }
    //  else{
    //     return redirect()->route('welcome');}
    //     // return redirect()->route('login')->with('message','login is invalid');}

     
    

