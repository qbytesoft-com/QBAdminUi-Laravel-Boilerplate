@extends('layouts.app')

@section('content')
    <!-- Main content start -->
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
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <h5 class="text-dark my-3">Sign In</h5>
                            <!-- Email -->
                            <div class="form-group mb-2">
                                <label for="email" class="text-muted">Email Address</label>
                                <input id="email" type="email" class="form-control badge-pill bg-light @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Passeord -->
                            <div class="form-group mb-2">
                                <label for="Passeord" class="text-muted">Password</label>
                                <input id="Passeord" type="password" class="form-control badge-pill bg-light @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Remember me checkbox -->
                            <div class="custom-control custom-checkbox">
                                <input id="my-input" class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="my-input" class="custom-control-label">Remember me</label>
                            </div>

                            <button type="submit" class="btn btn-primary btn-outline-primary badge-pill btn-block w-75 m-auto">Sign in</button>

                            <p class="text-center mt-3">
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" >Forgot Password?</a>
                                @endif
                            </p>
                        </form>
                    </div>
                    <!-- Right side -->
                    <div class="col-md-6 d-flex flex-column justify-content-center align-items-center pt-3 pt-md-0">
                        <button class="btn btn-raised btn-google btn-icon m-2 badge-pill btn-block w-75"><i class="fab fa-google"></i> <p class="d-inline">Sign up with Google</p></button>
                        <button class="btn btn-raised btn-facebook btn-icon m-2 badge-pill btn-block w-75"><i class="fab fa-facebook-f"></i> <p class="d-inline">Sign up with Facebook</p></button>
                        <a href="{{ route('register') }}" class="w-75"><button class="btn btn-primary btn-outline-primary badge-pill btn-block"><p class="d-inline">Sign Up</p></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
