@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data</div>

                 <div class="card-body">
                    <form action="{{route('mahasiswa.simpan')}}" method="POST">
                    @csrf
                 
                        <div class="form-grup">
                            <div class="form-row">
                               
                                <label for="">NPM</label>
                                    <input type="number" name="npm" class="form-control" placeholder="Masukkan NPM">
                                    <br>
                               
                                
                                
                                <label for="">Nama Mahasiswa</label>
                                    <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Masukkan Nama">
                                    <br>
                                
                                
                                <label for="">Tanggal Lahir </label>
                                    <input type="date" name="tgl_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir">
                                <br>
                               
                                <label for="">Tempat lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan tempat lahir">
                                <br>
                                <label for="">jenis_kelamin</label>
                                   <select name="jenis_kelamin"class="form-control">
                                   <option value="">masukkan jenis kelamin</option>
                                   <option value="L">L</option>
                                   <option value="P">P</option>
                                   </select>
                                    <br>
                                <label for="">Telepon</label>
                                    <input type="number" name="telepon" class="form-control" placeholder="Masukkan telepon">
                                
                                <br>
                                <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan telepon">
                                    <br>                               
                                <div class="form-grup float-right">
                                    <div class="form-row">
                                        <div class="col float-right">
                                        <br> 
                                            <button type="submit"class="btn btn-md  btn-primary">simpan</button>
                                            <a href="{{route('mahasiswa')}}" class="btn btn-md btn-danger ">Batal</a>
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
