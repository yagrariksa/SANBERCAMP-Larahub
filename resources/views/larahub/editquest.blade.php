@extends('master.master')

@section('title')
    Add Question - Larahub
@endsection

@section('container')
<div class="row justify-content-center text-center">
    <div class="col-8">
        <h1 class="mt-5">Add some Question here</h1>
        <form action="/larahub/quest/{{$question->id}}/edit" method="post">
            @csrf
            @method('patch');
            <input type="hidden" name="user_id" id="user_id" value="{{Auth::id()}}">
            <div class="form-group">
                {{-- <label for="exampleFormControlTextarea1">Example textarea</label> --}}
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" autofocus name="isi">{{$question->isi}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Edit Pertanyaan</button>
            <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
        </form>
    </div>
</div>
    
@endsection