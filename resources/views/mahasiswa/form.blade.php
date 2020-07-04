@extends('master.master')

@section('title')
    Form
@endsection

@section('container')

    <h1>Form Tambah Data Mahasiswa</h1>
    <div class="row">
        <div class="col-6">
            <form action="/mahasiswa" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                </div>
                <div class="form-group">
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat" name="alamat">
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

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
    
@endsection