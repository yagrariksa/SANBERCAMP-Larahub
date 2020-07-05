@extends('master.master')

@section('title')
    Larahub
@endsection

@section('container')
    <h1>Welcome to ((QUESTION-LIST)) LARAHUB</h1>
    <a href="/larahub/quest/add" class="btn btn-primary btn-md my-3">Add Question</a>
    
    <div class="list-group">
        @foreach ($question as $q)
            @foreach ($user as $u)
                @if ($q->user_id == $u->id)   
                <a href="/larahub/quest/{{$q->id}}" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <small class="mt-1 card-subtitle">{{$u->name}}</small>
                        @if ($q->created_at == $q->updated_at)
                        <small>{{$q->timeLapse}}</small>
                        @else
                        <small>edited {{$q->timeLapse}}</small>
                        @endif
                        </div>
                        <p class="display-4" style="font-size: 3em">{{$q->judul}}</p>
                        <p class="h5" style="">{{$q->isi}}</p>
                        {{-- @if ($q->user_id == Auth::id())
                        <form action="/larahub/quest/{{$q->id}}/destroy" method="POST">
                            @csrf
                            @method('delete')
                            <a href="/larahub/quest/{{$q->id}}/edit" class="badge badge-warning badge-pill">Edit</a>
                            <button type="submit" class="badge badge-danger badge-pill">
                                    Delete
                            </button>
                        </form>
                        @endif --}}
                </a> 
                @endif
            @endforeach
        @endforeach
    </div>
@endsection