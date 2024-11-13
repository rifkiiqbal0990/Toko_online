<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

         // REGISTER
     public function register()
     {
         $users = User::all();
         return view('PagesAuth.auth.register', compact('users'));
     }

     public function storeRegister(Request $request)
     {

         $request->validate( [

             'nama'        => 'required|max:255',
             'email'       => 'required|max:255|unique:users,email',
             'password'    => 'required|min:3'

           ], [

             'nama.required'          => 'Nama harus diisi',
             'nama.max'               => 'Nama maksimal 255 karakter',
             'email.required'         => 'Email harus diisi',
             'email.unique'           => 'Email sudah ada',
             'email.max'              => 'Email maksimal 255 karakter',
             'password.required'      => 'Password harus diisi',
             'password.min'           => 'Password minimal 3 karakter'

           ]);


         $storeDataUser = [
             'nama'      => $request -> nama,
             'email'     => $request -> email,
             'password'  => bcrypt($request -> password)

            ];

             User::create($storeDataUser);
             return redirect('/login');
     }



        // LOGIN
    public function login()
    {
        return view('PagesAuth.auth.login');
    }


    public function storeLogin(Request $request)
    {

        $credentials=$request->validate( [
            'email'       => 'required',
            'password'    => 'required'
        ]);

        if(auth()->attempt($credentials)){
            return redirect('/dashboard');
        } else {
            return redirect('/login')-> with('error','email/password salah');
        }
    }

    // LOGOUT
    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
  }

}

