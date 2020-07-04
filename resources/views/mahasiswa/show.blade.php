@extends('master.master')

@section('title')
    Detail Mahasiswa
@endsection

@section('container')
<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <h1 class="display-4">{{ $student->nama }}</h1>
        <h2 class="display-8">{{ $student->jurusan }}</h2>
        <h3 class="lead">{{ $student->alamat }}</h3>
        {{-- <div class="mt-4 mb-0 text-center"> --}}
            <a href="/mahasiswa" class="badge badge-primary badge-pill">Kembali</a>
            <a href="/mahasiswa/{{ $student->id }}/ubah" class="badge badge-success badge-pill">Edit</a>
        <form action="/mahasiswa/{{ $student->id }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="badge badge-danger badge-pill">Hapus</button>
        </form>
        {{-- </div> --}}
    </div>
</div>
@endsection