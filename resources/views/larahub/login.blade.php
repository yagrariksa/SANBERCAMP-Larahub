@extends('master.master')


@section('title')
    Login - Larahub
@endsection

@section('container')
<div class="row justify-content-center">
    <div class="col-6">
        
        <div class="text-center">
            <h1>Login to LARAHUB</h1>
                <form class="form-signin" method="POST" action="/larahub/login">
                    @csrf
                    <img class="mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control mt-3" placeholder="Email address" name="email" required autofocus>

                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control mt-3" placeholder="Password" name="password" required>

                    <div class="checkbox mb-3">
                        <label>
                        <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg mt-3 btn-primary btn-block" type="submit">Log In</button>
                    <a href="/larahub/register" class="btn btn-lg mt-3 btn-light btn-block" type="submit">Register</a>
                    <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
                </form>
                {{-- @include('larahub.laranavbar') --}}
            </div>
        </div>
    </div>
@endsection