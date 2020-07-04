@extends('master.master')

@section('title')
    Edit Data
@endsection

@section('container')

    <h1>Form Edit Data Mahasiswa</h1>
    <div class="row">
        <div class="col-6">
        <form action="/mahasiswa/{{ $student->id }}" method="post">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $student->nama }}">
                </div>
                <div class="form-group">
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat" name="alamat" value="{{ $student->alamat }}">
                </div>
                <div class="form-group">

                <label for="jurusan">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Kimia">Kimia</option>
                    <option value="Biologi">Biologi</option>
                    <option value="Teknik Biomedis">Teknik Biomedis</option>
                    <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                    <option value="Matematika">Matematika</option>
                    <option value="Statistika">Statistika</option>
                    <option value="Fisika">Fisika</option>
                </select>
                </div>

                <button type="submit" class="btn btn-primary">Edit Data</button>
                <a href="/mahasiswa/{{ $student->id }}" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
    
@endsection