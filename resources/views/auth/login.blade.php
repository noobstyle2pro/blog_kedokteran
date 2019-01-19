@extends('layouts.app')

@section('content')    
<div class="content-wrapper d-flex align-items-center auth">
<div class="row w-100">
  <div class="col-lg-4 mx-auto">
    <div class="auth-form-light text-left p-5">
      <div class="brand-logo">
      </div>
      <h4>Hello! let's get started</h4>
      <h6 class="font-weight-light">Sign in to continue.</h6>
      <form class="pt-3" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <input id="email" type="email" class="form-control-lg form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <input id="password" type="password" class="form-control-lg form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                {{ __('SIGN IN') }}
            </button>
        </div>
        <div class="my-2 d-flex justify-content-between align-items-center">
          <div class="form-check">
            <label class="form-check-label text-muted">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              Keep me signed in
            </label>
          </div>
        @if (Route::has('password.request'))
            <a class="auth-link text-black" href="{{ route('password.request') }}">
                {{ __('Forgot password?') }}
            </a>
        @endif
        </div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection
