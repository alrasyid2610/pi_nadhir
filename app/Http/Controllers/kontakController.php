<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class kontakController extends Controller
{

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);


        Kontak::create([
            'name' => $request->name,
            'user_id' => $request->id,
            'subject' => $request->subject,
            'email' => $request->email,
            'pertanyaan' => $request->message,
            'status' => 'pending'
        ]);

        return redirect('/');
        
    }

    public function index()
    {
        $data = Kontak::all();
        return view('admin.kontak.index', ['tab_name' => 'Daftar Kontak', 'data' => $data]);
    }

    public function index_jawab_pertanyaan($id)
    {
        $data = Kontak::find($id);
        return view('admin.kontak.jawab_pertanyaan', ['tab_name' => 'Jawab Pertanyaan', 'data' => $data]);
    }

    public function store_jawaban($id, Request $request)
    {
        // $data = $request->only(['admin_id', 'admin_name', 'jawaban']);
        $data = [
            'admin_id' => $request->admin_id,
            'admin_name' => $request->admin_name,
            'jawaban' => $request->jawaban,
            'status' => 'done'
        ];
        
        Kontak::find($id)->update($data);
        return redirect('/kontak');
    }


    public function destroy($id)
    {
        Kontak::find($id)->delete();
        return redirect()->back();
    }
}
