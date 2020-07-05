@extends('master.master')

@section('title')
    Larahub
@endsection

@section('container')
    <h1>Some Question here</h1>
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                    <p class="h1" style="font-size: 3em">{{$question->judul}}</p>
                    <p class="mb-4" style="font-size: 2em">{{$question->isi}}</p>
                    <div class="row ">
                        <div class="col-8">
                            @foreach ($user as $u)
                            @if ($u->id == $question->user_id)
                                
                            <p class=""><span class="card-subtitle mb-1 text-muted">{{$u->name}} - {{$question->timeLapse}}</span></p>
                            @endif
                            @endforeach
                        </div>
                        <div class="col-4 d-flex justify-content-end">
                            <button type="button" class="btn btn-success btn-sm mx-2" data-toggle="modal" data-target="#answer">
                                Add Answer
                            </button>
                            <button type="button" class="btn btn-info btn-sm mx-2" data-toggle="modal" data-target="#comment">
                                Add comment
                            </button>
                        </div>
                    </div>
                    
                    
                    {{-- <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-8">
            <div class="list-group justify-content-center">
                <div class="alert alert-success text-center">Answer Column</div>
                @foreach ($answer as $a)
                    
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        @foreach ($user as $u)
                            @if ($a->user_id == $u->id)
                            <p class="mb-1">{{$u->name}}</p>
                            {{-- <small>{{$a->timeLapse}}</small> --}}
                            <small>3 hours ago</small>
                            @endif
                        @endforeach
                        
                    </div>
                    <h5 class="mb-1">{{$a->isi}}</h5>
                    <small>Donec id elit non mi porta.</small>
                </a>
                @endforeach
            </div>
        </div>


        <div class="col-4">
            <div class="list-group">
                    <div class="alert alert-info text-center">Comments Column</div>
                @foreach ($comment as $c)
                    
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        @foreach ($user as $u)
                            @if ($c->user_id == $u->id)
                            <h5 class="mb-1">{{$u->name}}</h5>
                            {{-- <small>{{$a->timeLapse}}</small> --}}
                            <small>3 hours ago</small>
                            @endif
                        @endforeach
                        
                    </div>
                    <p class="mb-1">{{$c->isi}}</p>
                    <small>Donec id elit non mi porta.</small>
                </a>
                @endforeach
            </div>
        </div>
    </div>





{{-- ############################### MODAL BOX  --}}
        {{-- ############### ANSWER ####### MODAL BOX ######################################### --}}
            <!-- Button trigger modal -->
            
            
            <!-- Modal -->
            <div class="modal fade" id="answer" tabindex="-1" role="dialog" aria-labelledby="answerLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="answerLabel">Add Answer off the question</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>{{$question->isi}}</p>


                        <form action="/larahub/answer/store" method="post">
                            @csrf
                            <input type="hidden" name="user_id" id="user_id" value="{{Auth::id()}}">
                            <input type="hidden" name="quest_id" id="quest_id" value="{{$question->id}}">
                            <div class="form-group">
                                {{-- <label for="exampleFormControlTextarea1">Example textarea</label> --}}
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" autofocus name="isi"></textarea>
                            </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Answer</button>
                        </form>


                    </div>
                </div>
                </div>
            </div>
        {{-- ############### ANSWER ####### MODAL BOX ######################################### --}}


        {{-- ############### COMMENT ####### MODAL BOX ######################################### --}}
            <!-- Button trigger modal -->
            
            
            <!-- Modal -->
            <div class="modal fade" id="comment" tabindex="-1" role="dialog" aria-labelledby="commentLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="commentLabel">Add comment off the question</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>{{$question->isi}}</p>
                        <form action="" method="post">
                            @csrf
                            <input type="hidden" name="user_id" id="user_id" value="{{Auth::id()}}">
                            <input type="hidden" name="parent_type" id="parent_type" value="question">
                            <input type="hidden" name="quest_id" id="quest_id" value="{{$question->id}}">
                            <div class="form-group">
                                {{-- <label for="exampleFormControlTextarea1">Example textarea</label> --}}
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" autofocus name="isi"></textarea>
                            </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Answer</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        {{-- ############### COMMENT ####### MODAL BOX ######################################### --}}
{{-- ############################### MODAL BOX  --}}
@endsection