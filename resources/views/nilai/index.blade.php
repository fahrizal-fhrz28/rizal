@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Nilai
                    <a href="{{ route('nilai.create')}}" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                   <div class="table-reposive">
                   <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>NPM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Makul</th>
                            <th>SKS</th>
                            <th>Nilai</th>
                            <th>AKSI</th>
                            
                        @foreach ($nilai as $nl)
                        <tr>
                            <td> {{ $nl->id }}</td>
                            <td> {{ $nl->mahasiswa->npm}}</td>
                            <td> {{ $nl->mahasiswa->nama_mahasiswa}}</td>
                            <td> {{ $nl->matkul->nama_matkul}}</td>
                            <td> {{ $nl->matkul->sks}}</td>
                            <td> {{ $nl->nilai}}</td>
                            <td>
                            <a href="{{ route('nilai.edit',$nl->id)}}" class="btn btn-sm btn-warning">Edit</a> 
                            <a href="{{ route('nilai-hapus',$nl->id)}}" class="btn btn-sm btn-danger">Hapus</a> 
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
