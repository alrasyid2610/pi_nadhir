<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserProfile extends Controller
{
    public function index()
    {
        return view('admin.user.index_profile');
    }

    public function update($id, Request $request)
    {
        User::find($id)->update($request->except(['_token', '_method']));
        return redirect()->back()->with('message', 'Berhasil edit Profile');
    }


    public function index_dashboard()
    {
        return view('user_dashboard.index');
    }
}
