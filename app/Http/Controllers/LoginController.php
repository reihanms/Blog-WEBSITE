<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    /**
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function index(){
        return view('login.index',[
            'title' => 'MFL | Login',
        ]);
    }

    public function authenticate(Request $request){

        
        $credentials = $request->validate([
            // validasi disini
            'username' => ['required','min:3','max:255'],
            'password' => ['required','min:5','max:255'],
        ]);

        // kondisi ketika login berhasil 

        if (Auth::attempt($credentials)) {
            //session regenerate untuk menghindari teknik hacking session yang sama ketika login
            $request->session()->regenerate();
            // intended berfungsi untuk redirect ke url sebelum melewati autentikasi middleware
            return redirect()->intended('dashboard')->with('toast_success','Halo, Selamat Datang '
            //menambahkan nama user yang login
            . auth()->user()->name);
        }
        // ketika gagal kirimkan witherrors
            return back()->with('warning','Login kredensial tidak sesuai :(');
    }

    public function logout(Request $request){
        // perintah laravel untuk logout
        Auth::logout();

        // invalidate session supaya gabisa dipake
        $request->session()->invalidate();

        // bikin baru
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

