@extends('master.master')

@section('title')
    Larahub
@endsection

@section('container')
    <div class="jumbotron">
        <h1 class="display-4">Welcome to LARAHUB Homepage</h1>
        <p class="lead mr-4">Sebuah web portal bagi para developer yang menggunakan Laravel untuk menyimpan profil pribadi, forum tanya jawab dan forum lowongan project/ kerja.</p>
        <hr class="my-4">
        <p class="mr-4">Di dalam aplikasi tersebut, user dapat membuat dan memperbaharui profil pribadi. Selain itu user dapat bertanya jawab mengenai hal-hal seputar Laravel.</p>
        @include('larahub.laranavbar')
    </div>
@endsection