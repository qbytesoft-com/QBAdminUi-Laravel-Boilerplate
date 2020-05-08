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

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form  method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <h5 class="text-dark my-4">Forgot Password</h5>
                            <!-- Email -->
                            <div class="form-group mb-4">
                                <label for="email" class="text-muted">Email Address</label>
                                <input id="email" type="email" class="form-control badge-pill bg-light @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-outline-primary badge-pill btn-block w-75 m-auto">Reset Password</button>
                            <p class="text-center mt-3"><a href="{{ route('login') }}" >Sign in</a></p>
                        </form>
                    </div>
                    <!-- Right side -->
                    <div class="col-md-6 d-flex flex-column justify-content-center align-items-center pt-3 pt-md-0">
                        <button class="btn btn-raised btn-primary btn-icon m-2 badge-pill btn-block w-75"><i class="fas fa-at"></i> <p class="d-inline">Sign up with Email</p></button>
                        <button class="btn btn-raised btn-google btn-icon m-2 badge-pill btn-block w-75"><i class="fab fa-google"></i> <p class="d-inline">Sign up with Google</p></button>
                        <button class="btn btn-raised btn-facebook btn-icon m-2 badge-pill btn-block w-75"><i class="fab fa-facebook-f"></i> <p class="d-inline">Sign up with Facebook</p></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
