<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('register.index',[
            'title' => 'MFL | Register',
        ]);
    }

    //nanganin form request dari register || input ke database by user
    public function store(Request $request){

        //validasi form
        $validasi = $request->validate([
            'name' => ['required','min:3','max:255','unique:users'],
            'username' => ['required','min:3','max:255'],
            'email' => ['required','email:dns','unique:users'],
            'password' => ['required','min:5','max:255']
        ]);
        
        //hashing password
        $validasi['password'] = Hash::make($validasi['password']);

        //kalo berhasil save ke database aja
        User::create($validasi);
        
        //flash message
        
        return redirect ('/login')->with('toast_success','Registration Succesful! Login Now!'); 
    }
}
