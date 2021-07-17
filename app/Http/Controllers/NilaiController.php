<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Matkul;
use App\Mahasiswa;
use Illuminate\Http\Request;
use Alert;

use Illuminate\Database\Eloquent\Model;

class NilaiController extends Model
{
    public function index()
    {
        $nilai = Nilai::with('matkul','mahasiswa')->get();
        return view('nilai.index',compact('nilai')); 
    }
    public function create()
    {
        $matkul =Matkul::all();
        $mahasiswa =Mahasiswa::all();
        return view('nilai.create',compact('matkul','mahasiswa')); 
    }
    public function store(Request $REQUEST)
    {
        Nilai::create($REQUEST->all());
        alert()->success('Success','Data berhasil Hore');
        return redirect()->route('nilai');
    }
    public function edit($id)
    {
        $matkul =Matkul::all();
        $mahasiswa =Mahasiswa::all();
        $nilai= Nilai::find($id);
        
        return view('nilai.edit', compact('matkul','mahasiswa','nilai'));
    }
    public function ubah(Request $REQUEST ,$id)
    {
        $nilai= Nilai::find($id);
        $nilai->update($REQUEST->all());
        toast('Yeay Berhasil Mengedit Data',"success");
        return redirect()->route('nilai');
    }
    public function hilangkan($id)
    {
        $nilai= Nilai::find($id);
        $nilai->delete();
        toast('Yeay Berhasil Hapus Data',"success");
        return redirect()->route('nilai');
    }
}
