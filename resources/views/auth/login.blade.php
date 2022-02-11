@extends('layouts.guest')
@section('content')
<div class="authincation-content">
    <div class="row no-gutters">
        <div class="col-xl-12">
            <div class="auth-form">
                <div class="text-center mb-3">
                    <a href="{{route('welcome')}}"><img src="images/logo.png" alt="" height="100"></a>
                </div>
                <h4 class="text-center mb-4">Sign in your account</h4>
                <form action="{{ route('login') }}" method="POST">@csrf
                    <div class="form-group">
                        <label class="mb-1"><strong>Email</strong></label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label class="mb-1"><strong>Password</strong></label>
                        <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-row d-flex justify-content-between mt-4 mb-2">
                        <div class="form-group">
                           <div class="custom-control custom-checkbox ml-1">
                                <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                                <label class="custom-control-label" for="basic_checkbox_1">Remember me</label>
                            </div>
                        </div>
                        <div class="form-group">
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                            @endif
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                    </div>
                </form>
                <div class="new-account mt-3">
                    <p>Don't have an account? <a class="text-primary" href="{{ route('register') }}">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
