<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function indexForgot()
    {
        return view('forgot', ['tab_name' => 'Lupa Password']);
    }

    public function cekEmailForgot(Request $request)
    {
        $request->validate([
            'email' => 'required'
        ]);

        $user = User::where('email', $request->email)->get();
        if($user->count() < 1) {
            return redirect()->back()->withErrors([
                'email' => 'Email tidak ada',
            ]);
        }
        
        return view('pertanyaan_keamanan', ['tab_name' => 'Pertanyaan Keamanan'])->with(['pertanyaan' => $user->toArray()[0]['pertanyaan_keamanan'], 'email' => $request->email, 'id' => $user->toArray()[0]['id']]);
    }

    public function ubahSandi(Request $request)
    {
        $data = User::where('email', $request->email)->get();
        if($data->count() < 1) {
            return redirect()->back()->withErrors([
                'email' => 'Email tidak ada',
            ]);
        }
        if ($request->jawaban == $data->toArray()[0]['jawaban']) {
            return view('ubahSandi', ['tab_name' => 'Ubah Sandi', 'email' => $request->email, 'id' => $request->id]);
        } else {
            return redirect()->route('index_forgot')->withErrors(['jawaban' => 'Jawaban Anda salah']);
        }

        // User
    }

    public function setPassword(Request $request)
    {
        User::find($request->id)->update([
            'password' => Hash::make($request->sandi)
        ]);

        return redirect('/');
    }
    
    
    
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        // $remember_me = $request->has('remember_me') ? true : false;
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('home');
        }

        return back()->withErrors([
            'invalidLogin' => 'The provided credentials do not match our records.',
        ]);
    }
}
