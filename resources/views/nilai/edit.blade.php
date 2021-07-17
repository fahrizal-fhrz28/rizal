@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Nilai</div>

                 <div class="card-body">
                    <form action="{{ route('nilai-update', $nilai->id)}}" method="POST">
                    @csrf
                 
                        <div class="form-grup">
                            <div class="form-row">
                               
                            <label for="">Npm</label>
                               <select name="npm" id="npm" class='form-control'>
                                   <option value="" disabled selected>--pilih npm--</option>
                                   @foreach ($mahasiswa as $mhs)
                                        <option value="{{$mhs->id}}">{{$mhs->npm}}</option>                                     
                                   @endforeach
                               </select>
                            
                               <label for="">Mahasiswa ID</label>
                               <select name="mahasiswa_id" id="mahasiswa_id" class='form-control'>
                                   <option value="" disabled selected>--pilih mahasiswa--</option>
                                   @foreach ($mahasiswa as $mhs)
                                        <option value="{{$mhs->id}}"  {{ $nilai->mahasiswa_id == $mhs->id ? 'selected' : '' }} >{{$mhs->nama_mahasiswa}}</option>                                     
                                   @endforeach
                               </select>

                               <label for="">MATKUL ID</label>
                               <select name="matkul_id" id="matkul_id" class='form-control'>
                                   <option value="" disabled selected>--pilih matkul--</option>
                                   @foreach ($matkul as $mkl)
                                        <option value="{{$mkl->id}}"  {{ $nilai->matkul_id == $mkl->id ? 'selected' : '' }}>{{$mkl->nama_matkul}}</option>                                     
                                   @endforeach
                               </select>

                               <label for="">SKS</label>
                               <select name="sks" id="sks" class='form-control'>
                                   <option value="" disabled selected>--pilih sks--</option>
                                   @foreach ($matkul as $mkl)
                                        <option value="{{$mkl->id}}" >{{$mkl->sks}}</option>                                     
                                   @endforeach
                               </select>
                               <label for="">Nilai</label>
                                    <input type="number" name="nilai" class="form-control" placeholder="Masukkan nilai" value='{{is_null($nilai) ? '': $nilai->nilai}}'>
                                    <br>
                                    
                                <div class="form-grup float-right">
                                    <div class="form-row">
                                        <div class="col float-right">
                                        <br> 
                                            <button type="submit"class="btn btn-md  btn-primary">simpan</button>
                                            <a href="#" class="btn btn-md btn-danger ">Batal</a>
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

