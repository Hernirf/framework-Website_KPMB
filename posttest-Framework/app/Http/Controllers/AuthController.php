<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function SignUp(Request $request){
        if($request->password == $request->password_confirm){
            $usernameAda = User::where("email", $request->email)->first();
            if($usernameAda){
                session()->flash('error', 'Username sudah digunakan!');
                return redirect('/register');
            }
            User::create([
                'name' => $request->username,
                'email' => $request->username,
                'password' => Hash::make($request->password),
                'role' => 2
            ]);
            session()->flash('success', 'Akun berhasil dibuat, silahkan login');
            return redirect('/register');
            if (session('success')){
                return redirect('/login');
            }

        }
        else{
            session()->flash('error', 'Konfirmasi password anda salah');
            return redirect('/register');
        }
    }

    public function loginn(Request $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($data)){
            return redirect('/anggota');

        }
        else{
            session()->flash('error', 'Username dan password salah');
            return redirect('/login');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
