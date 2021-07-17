<?php

namespace App\Http\Controllers;

use App\Matkul;
use Illuminate\Http\Request;
use Alert;


use Illuminate\Database\Eloquent\Model;

class MatkulController extends Model
{
    public function index()
    {
        $matkul = Matkul::all();
        return view('matkul.index',compact('matkul')); 
    }
    public function create()
    {
        return view('matkul.create');
    }
    public function store(Request $REQUEST)
    {
        matkul::create($REQUEST->all());
        alert()->success('Success','Data berhasil Hore');
        return redirect()->route('matkul');
    }
    public function edit($id)
    {
        $matkul= Matkul::find($id);
        
        return view('matkul.edit', compact('matkul'));
    }
    public function ubah(Request $REQUEST ,$id)
    {
        $matkul= Matkul::find($id);
        $matkul->update($REQUEST->all());
        toast('Yeay Berhasil Mengedit Data',"success");
        return redirect()->route('matkul');
    }
    public function hapus($id)
    {
        $matkul= Matkul::find($id);
        $matkul->delete();
        toast('Yeay Berhasil Hapus Data',"success");
        return redirect()->route('matkul');
    }
    
}
