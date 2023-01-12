<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        return view('registration.login');
    }

    public function index1()
    {
        return view('registration.register');
    }

    public function register(Request $req){
        $req->validate([
            'username' => 'required|min:5',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|required_with:password_confirmation|same:password_confirmation',
        ]);
        $user = new User();
        $user->username = $req->username;
        $user->email = $req->email;
        $user->password = bcrypt($req->password);
        $user->save();
        return redirect('/login');
    }

    public function profile(Request $req){
        return view('profile', ['user'=>$req->session()->get('user')]);
    }

    public function update(Request $req){
        $req->validate([
            'username' => 'required|min:4',
            'email' => 'required|email',
            'dob' => 'required',
            'phone' => 'required',
        ]);
        $user = User::find($req->id);

        $user->username = $req->username;
        $user->email = $req->email;
        $user->date_of_birth = $req->dob;
        $user->phone = $req->phone;
        $user->save();
        $req->session()->put('user', $user);
        return redirect('/profile');
    }

    public function login(Request $req){
        $req->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $creds = $req->only('email', 'password');
        $user = User::where(['email'=>$req->email])->first();

        if(Auth::attempt($creds)){
            if($req->remember==null){

            }
            else{
                setcookie('email', $req->email, time()+( 2 * 60 * 60));
                setcookie('password', $req->password, time()+( 2 * 60 * 60));
            }
            $req->session()->put('user', $user);
            Auth::login($user);
            return redirect('/');
        }
        return back()->withErrors([
            'credential' => "Email or Password Doesn't Match",
        ]);

    }

    public function logout(){
        Session::flush();
        Session::forget('user');
        Auth::logout();
        return redirect('/login');
    }
}
