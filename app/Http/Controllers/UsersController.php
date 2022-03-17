<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Validation\ValidationException;
use App\Models\Bill;
use App\Models\User;
class UsersController extends Controller
{
    public function index()
    {
        // dd('this is user');
        $userid = Auth()->user()->id;
        $bills = Bill::where('user_id', $userid)->get();
        return view('user.index', compact('bills'));
    }


    public function createbill()
    {

        return view('user.allbill');

    }

    
    //

    // public function register(){
    //     return view('user.register');
    // }

    // public function adduser(){

    //     $attributes = request()->validate([
    //         'username' => 'required|max:255|min:3|unique:users,username',
    //         'email' => 'required|min:3|unique:users,email',
    //         'password' => 'required|min:8|max:10' 
    //     ]);

    //     $user = new User;
    //     $user->username = request()->username;
    //     $user->email = request()->email;
    //     $user->password = Hash::make(request()->password);
    //     $user->save();
    //     auth()->login($user);
    //     return redirect('/user/dashboard');


    //         // session()->flash;
    //     // return view('user.dashboard');

    // }

    // public function dashboard(){

    //     // dd('this is bashboard');
    //     return view('user.dashboard');
    // }

    // public function login(){

    //     $userdata = request()->validate([
    //         'email' => 'required|exists:users,email',
    //         'password' => 'required' 
    //     ]);


    //     if(auth()->attempt($userdata)) {
            
    //         return view('user.dashboard')->with('success', 'Welcome back!');

    //     }

    //     throw ValidationException::withMessages([
    //         'password' => 'please correct your password first.'
    //     ]);

    // }

    // public function logout(){
    //     dd('logout');   

    //     auth()->logout();
    //     return redirect('/')->with('success', 'allah haffiz');
    // }

}
