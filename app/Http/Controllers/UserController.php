<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\User;

class UserController extends Controller
{
    //
    public function create(){

        return view('users.index');
    }
    public function store(Request $request){
        $formField = $request->validate([
            'name'=>['required','min:3'],
            'email' => ['required','email',Rule::unique('users','email')],
            'password' => 'required|confirmed|min:6',

            ]
        );

        $formField['password'] = bcrypt($formField['password']);

        $user = User::create($formField);

        auth()->login($user);

        return redirect('/');


    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');


    }

    public function show(){
        return view('users.login');
    }


    public function auth(Request $request){
        $formField = $request->validate([

            'email' => ['required','email'],
            'password' => 'required',
            ]
        );
        if(auth()->attempt($formField)){
            $request->session()->regenerate();
            return redirect('/');

        }

        return back()->withErrors(['email' =>'Email hoặc mật khẩu không đúng'])->onlyInput('email');
    }
}
