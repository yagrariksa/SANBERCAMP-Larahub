@extends('master.master')

@section('title')
    Mahasiswa
@endsection

@section('container')
    <h1>Data Mahasiswa</h1>

    <a href="/mahasiswa/tambah" class="btn btn-primary my-3">+ Tambah Data</a>

    <div class="row">
        <div class="col-6">
            <ul class="list-group">
                @foreach ($student as $std)
                <li class="list-group-item ">
                    <a href="/mahasiswa/{{$std->id}}" class="badge badge-primary badge-pill mr-3">Details</a>
                    {{ $std->nama }}
                </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection

