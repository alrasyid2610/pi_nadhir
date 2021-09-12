<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'pertanyaan_keamanan' => 'required',
            'jawaban' => 'required',
            'last_name' => 'required|min:5',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        User::create([
            'name' => $request->first_name,
            'last_name' => $request->last_name,
            'pertanyaan_keamanan' => $request->pertanyaan_keamanan,
            'jawaban' => $request->jawaban,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        auth()->attempt($request->only(['email', 'password']));

        return redirect()->route('home');
        // dd($request);
    }
}
