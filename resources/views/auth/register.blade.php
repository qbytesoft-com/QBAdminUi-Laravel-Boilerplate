@extends('layouts.app')

@section('content')
    <div class="login-page d-flex flex-row justify-content-center align-items-center">
        <!-- Login card -->
        <div class="card mx-3 mx-md-0 border-0 rounded-lg">
            <div class="card-body">
                <!-- Row -->
                <div class="row">
                    <!-- Left side -->
                    <div class="col-md-6 border-0 border-md-right">
                        <!-- Brand -->
                        <div class="login-brand m-3 m-md-0 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('qbadminui/img/QbyteIcon.png') }}" alt="image" class="w-25">
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <h5 class="text-dark my-3">Sign Up</h5>
                            <!-- Name -->
                            <div class="form-group mb-2">
                                <label for="name" class="text-muted">Your name</label>
                                <input id="name" type="text" class="form-control badge-pill bg-light @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Email -->
                            <div class="form-group mb-2">
                                <label for="email" class="text-muted">Email Address</label>
                                <input id="email" type="email" class="form-control badge-pill bg-light @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- password -->
                            <div class="form-group mb-2">
                                <label for="password" class="text-muted">Password</label>
                                <input id="password" type="password" class="form-control badge-pill bg-light @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Password -->
                            <div class="form-group mb-4">
                                <label for="c-pass" class="text-muted">Confirm Password</label>
                                <input id="c-pass" class="form-control badge-pill bg-light" type="password" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <button type="submit" class="btn btn-primary btn-outline-primary badge-pill btn-block w-75 m-auto">Sign Up</button>
                        </form>
                    </div>
                    <!-- Right side -->
                    <div class="col-md-6 d-flex flex-column justify-content-center align-items-center pt-3 pt-md-0">
                        <button class="btn btn-raised btn-google btn-icon m-2 badge-pill btn-block w-75"><i class="fab fa-google"></i> <p class="d-inline">Sign in with Google</p></button>
                        <button class="btn btn-raised btn-facebook btn-icon m-2 badge-pill btn-block w-75"><i class="fab fa-facebook-f"></i> <p class="d-inline">Sign in with Facebook</p></button>
                        <a href="{{ route('login') }}" class="w-75"><button class="btn btn-primary btn-outline-primary badge-pill btn-block"><p class="d-inline">Sign In</p></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
