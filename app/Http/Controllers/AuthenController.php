<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthenController extends Controller
{
     //Registration
        public function registration()
        {
            return view('auth.registration');
        }
        public function registerUser(Request $request)
        {
            $request->validate([
                'name'=>'required',
                'email'=>'required|email:users',
                'password'=>'required|min:8|max:12'
            ]);
    
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
    
            $result = $user->save();
            if($result){
                return back()->with('success','You have registered successfully.');
            } else {
                return back()->with('fail','Something wrong!');
            }
        }
        ////Login
        public function login()
        {
            return view('auth.login');
        }
        public function loginUser(Request $request)
        {
            $request->validate([            
                'email'=>'required|email:users',
                'password'=>'required|min:8|max:12'
            ]);
    
            $user = User::where('email','=',$request->email)->first();
            if($user){
                if(Hash::check($request->password, $user->password)){
                    $request->session()->put('loginId', $user->id);
                    return redirect('homepage');
                } else {
                    return back()->with('fail','Password not match!');
                }
            } else {
                return back()->with('fail','This email is not register.');
            }        
        }
        //// homepage
        public function homepage()
        {
            // return "Welcome to your dashabord.";
            $data = array();
            if(Session::has('loginId')){
                $data = User::where('id','=',Session::get('loginId'))->first();
            }
            return view('homepage',compact('data'));
        }
        ///Logout
        public function logout()
        {
            $data = array();
            if(Session::has('loginId')){
                Session::pull('loginId');
                return redirect('login');
            }
        }
}
