@extends('master.master')

@section('title')
    Add Question - Larahub
@endsection

@section('container')
<div class="row justify-content-center text-center">
    <div class="col-8">
        <h1 class="mt-5">Add some Question here</h1>
        <form action="/larahub/quest/add" method="post">
            @csrf
            <input type="hidden" name="user_id" id="user_id" value="{{Auth::id()}}">
            <div class="form-group">
                <input type="text" name="judul" id="judul" class="form-control my-3" placeholder="Short Question">
                {{-- <label for="exampleFormControlTextarea1">Example textarea</label> --}}
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Explanation" name="isi"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tanyakan !!!</button>
        </form>
    </div>
</div>
    
@endsection