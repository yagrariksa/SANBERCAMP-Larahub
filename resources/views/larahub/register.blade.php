@extends('master.master')


@section('title')
    Sign Up - Larahub
@endsection

@section('container')
<div class="row justify-content-center">
    <div class="col-6">
        
        <div class="text-center">
            <h1>Register to LARAHUB</h1>
                <form class="form-signin" action="/larahub/register" method="POST">
                    @csrf
                    {{-- {{ dump($errors)}} --}}
                    <img class="mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                    <h1 class="h3 mb-3 font-weight-normal">Please Register</h1>
                    <label for="inputName" class="sr-only">Name</label>
                    <input type="text" id="inputName" class="form-control mt-3 {{ $errors->has('nama') ? 'is-invalid' : ''}}" placeholder="Your Name" required value="{{ old('nama') }}" name="nama">
                    @if ($errors->has('nama'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nama') }}
                      </div>
                    @endif

                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control mt-3 {{ $errors->has('email') ? 'is-invalid' : ''}}" placeholder="Email address" required value="{{ old('email') }}" name="email">
                    @if ($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                      </div>
                    @endif

                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control mt-3 {{ $errors->has('password') ? 'is-invalid' : ''}}" placeholder="Password" required name="password">
                    @if ($errors->has('password'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                      </div>
                    @endif

                    <label for="inputPasswordConfirmation" class="sr-only">Password Confirmation</label>
                    <input type="password" id="inputPasswordConfirmation" class="form-control mt-3 {{ $errors->has('password_confirmation') ? 'is-invalid' : ''}}" placeholder="Password Confirmation" required name="password_confirmation">
                    @if ($errors->has('password_confirmation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password_confirmation') }}
                      </div>
                    @endif
                    <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Register</button>
                    <a href="/larahub/login" class="btn btn-lg btn-light btn-block mt-3" type="submit">Log In</a>
                    <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
                </form>
                {{-- @include('larahub.laranavbar') --}}
            </div>
        </div>
    </div>
@endsection