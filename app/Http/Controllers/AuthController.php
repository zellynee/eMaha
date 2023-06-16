<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function user(){
        $user = USer::paginate(5);
        return view('user', ['user' => $user]);
    }

    public function formuliruser(){
        return view('formuliruser');
    }
    public function register()
    {
        return view('register');
    }

    /**
     * Summary of simpan
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function simpan(Request $request){
        User::create ([
            'nik_user'=>$request->nik_user,
            'nama_user'=>$request->nama_user,
            'no_hp'=>$request->no_hp,
            'password'=>bcrypt($request->password)
        ]);

        return redirect('/');
    }

    public function login (){
        return view('login');
    }

    public function ceklogin(Request $request){
        if(Auth::attempt([
            'nama_user'=>$request->nama_user,
            'password'=>$request->password
        ]))

        {
            return redirect ('/home');

        } else {
            return redirect ('/');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect ('/');
    }
}
