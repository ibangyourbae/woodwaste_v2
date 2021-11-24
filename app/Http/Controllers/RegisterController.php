<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register',
            'css' => 'Daftar'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => ['required','max:255'],
            'username' =>['required', 'min:3','max:20', 'unique:users'],
            'password' => ['required','min:5','max:255'],
            'alamat' => ['required','min:10','max:255'],
            'no_hp' => ['required','min:11','max:12'],
            'kepentingan' => ['required','max:255']
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        // $request->session()->flash('success', 'Register Success');
        return redirect('/login')->with('success', 'Registrasi Berhasil !');
    }
}
