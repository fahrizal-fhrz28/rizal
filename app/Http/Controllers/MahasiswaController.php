<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use Alert;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index',compact('mahasiswa')); 
    }
    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $REQUEST)
    {
        mahasiswa::create($REQUEST->all());
        alert()->success('Success','Data berhasil Hore');
        return redirect()->route('mahasiswa');
    }
    public function edit($id)
    {
        $mahasiswa= Mahasiswa::find($id);
        
        return view('mahasiswa.edit', compact('mahasiswa'));
    }
    public function update(Request $REQUEST,$id)
    {
        $mahasiswa= Mahasiswa::find($id);
        $mahasiswa->update($REQUEST->all());
        toast('Yeay Berhasil Mengedit Data',"success");
        return redirect()->route('mahasiswa');
    }
    public function destroy($id)
    {
        $mahasiswa= Mahasiswa::find($id);
        $mahasiswa->delete();
        toast('Yeay Berhasil Hapus Data',"success");
        return redirect()->route('mahasiswa');
    }
}

