@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Matkul
                    <a href="{{ route('matkul-create')}}" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                   <div class="table-reposive">
                   <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>KODE MATKUL</th>
                            <th>NAMA MAtkul</th>
                            <th>SKS</th>
                            <th>AKSI</th>
                            
                        @foreach ($matkul as $mkl)
                        <tr>
                            <td> {{ $mkl->id }}</td>
                            <td> {{ $mkl->kd_matkul}}</td>
                            <td> {{ $mkl->nama_matkul}}</td>
                            <td> {{ $mkl->sks}}</td>
                            <td>
                            <a href="{{ route('matkul-edit',$mkl->id)}}" class="btn btn-sm btn-warning">Edit</a> 
                            <a href="{{ route('matkul-hapus',$mkl->id)}}" class="btn btn-sm btn-danger">Hapus</a> 
                            </td>
                        </tr>
                        @endforeach
                   </table> 
                   </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
