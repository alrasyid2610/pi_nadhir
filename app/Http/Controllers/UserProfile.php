<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\User;
use Illuminate\Http\Request;

class UserProfile extends Controller
{
    public function index()
    {

        // $data = Kontak::where(auth()->)
        return view('admin.user.index_profile');
    }

    public function update($id, Request $request)
    {
        User::find($id)->update($request->except(['_token', '_method']));
        return redirect()->back()->with('message', 'Berhasil edit Profile');
    }


    public function index_dashboard()
    {
        $id_user = auth()->user()->id;
        $data_kontak = Kontak::where('user_id', $id_user)->get();
        return view('user_dashboard.index', ['data' => $data_kontak]);
    }
}
