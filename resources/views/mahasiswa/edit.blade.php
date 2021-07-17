@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Mahasiswa</div>

                 <div class="card-body">
                    <form action="{{ route('mahasiswa-update', $mahasiswa->id)}}" method="POST">
                    @csrf
                
                        <div class="form-grup">
                            <div class="form-row">
                               
                                <label for="">NPM</label>
                                    <input type="text" name="npm" class="form-control" placeholder="Masukkan NPM" value="{{is_null($mahasiswa) ? '': $mahasiswa->npm}}">
                                    <br>
                               
                                
                                
                                <label for="">Nama Mahasiswa</label>
                                    <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Masukkan Nama" value="{{is_null($mahasiswa) ? '': $mahasiswa->nama_mahasiswa}}" >
                                    <br>
                                
                                
                                <label for="">Tanggal Lahir </label>
                                    <input type="date" name="tgl_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir" value="{{is_null($mahasiswa) ? '': $mahasiswa->tgl_lahir}}">
                                <br>
                               
                                <label for="">Tempat lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan tempat lahir" value="{{is_null($mahasiswa) ? '': $mahasiswa->tempat_lahir}}">
                                <br>
                                <label for="">Jenis_kelamin</label>
                                   <select type="text" name="jenis_kelamin" class="form-control">
                                   <br>
                                   <option value="{{ is_null($mahasiswa) ? '' : $mahasiswa->jenis_kelamin}}">
                                        {{$mahasiswa->jenis_kelamin=='L' ? 'Laki-Laki' : 'Perempuan'}}</option>
                                    <option value="L">laki laki</option>
                                    <option value="P">Perempuan</option>
                                   </select>
                                <br>
                                <label for="">Telepon</label>
                                    <input type="number" name="telepon" class="form-control" placeholder="Masukkan telepon" value="{{is_null($mahasiswa) ? '': $mahasiswa->telepon}}" >
                                
                                <br>
                                <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan telepon" value="{{is_null($mahasiswa) ? '': $mahasiswa->alamat}}">
                                    <br>                               
                                <div class="form-grup float-right">
                                    <div class="form-row">
                                        <div class="col float-right">
                                        <br> 
                                            <button type="submit"class="btn btn-md  btn-primary">Simpan</button>
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
