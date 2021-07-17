<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected  $table = 'matkul';
    protected $fillable =['id','kd_matkul','nama_matkul','sks'];
    public $timestamps = false;

    public function matkul(){
        return $this->hasOne(Matkul::class,'matkul_id','id');
    }
}
