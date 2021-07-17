@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Makul</div>

                 <div class="card-body">
                    <form action="{{ route('matkul-update', $matkul->id)}}" method="POST">
                    @csrf
                 
                        <div class="form-grup">
                            <div class="form-row">
                               
                                <label for="">KODE MATKUL</label>
                                    <input type="number" name="kd_matkul" class="form-control" placeholder="Masukkan KODE MATKUL" value="{{is_null($matkul) ? '': $matkul->kd_matkul}}">
                                    <br>
                                <label for="">NAMA MATKUL</label>
                                    <input type="text" name="nama_matkul" class="form-control" placeholder="Masukkan NAMA MATKUL" value="{{is_null($matkul) ? '': $matkul->nama_matkul}}">
                                    <br>
                                <label for="">SKS</label>
                                    <input type="number" name="sks" class="form-control" placeholder="Masukkan SKS" value="{{is_null($matkul) ? '': $matkul->sks}}">
                                    <br>
                                    
                                <div class="form-grup float-right">
                                    <div class="form-row">
                                        <div class="col float-right">
                                        <br> 
                                            <button type="submit"class="btn btn-md  btn-primary">simpan</button>
                                            <a href="{{route('matkul')}}" class="btn btn-md btn-danger ">Batal</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

