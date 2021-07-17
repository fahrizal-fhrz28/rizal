<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected  $table = 'mahasiswa';
    protected $fillable =['npm','nama_mahasiswa','tgl_lahir','tempat_lahir','jenis_kelamin','telepon','alamat'];
    public $timestamps = false;

    public function nilai(){
        return $this->hasOne(Mahasiswa::class,'mahasiswa_id','id');
    }
}
