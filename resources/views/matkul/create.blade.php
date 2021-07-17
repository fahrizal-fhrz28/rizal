@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Makul</div>

                 <div class="card-body">
                    <form action="{{route('matkul-simpan')}}" method="POST">
                    @csrf
                 
                        <div class="form-grup">
                            <div class="form-row">
                               
                                <label for="">KODE MATKUL</label>
                                    <input type="number" name="kd_matkul" class="form-control" placeholder="Masukkan KODE MATKUL">
                                    <br>
                                <label for="">NAMA MATKUL</label>
                                    <input type="text" name="nama_matkul" class="form-control" placeholder="Masukkan NAMA MATKUL">
                                    <br>
                                <label for="">SKS</label>
                                    <input type="number" name="sks" class="form-control" placeholder="Masukkan SKS">
                                    <br>
                                    
                                <div class="form-grup float-right">
                                    <div class="form-row">
                                        <div class="col float-right">
                                        <br> 
                                            <button type="submit"class="btn btn-md  btn-primary">Simpan</button>
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

