@extends('layouts.app')

@section('content')

<div class="row w-100">
        <div class="col-lg-4 mx-auto">
          <div class="auth-form-light text-left p-5">
            <div class="brand-logo">
              <img src="{{ asset('storage/LayoutImages/jobr.png') }}"  style="max-width:100px" alt="Jobr">
            </div>
            <h4>Welcome!</h4>
            <h6 class="font-weight-light">Sign in to continue.</h6>
            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" class="pt-3">
                @csrf
              <div class="form-group">
                <div>
                <input id="email" type="email" class="form-control form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}" 
                    name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
              </div>

              
                <div class="form-group">
                        <div>
                            <input id="password" type="password" class="form-control form-control-lg {{ $errors->has('password') ? ' is-invalid' : '' }}" 
                                name="password" required placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                </div>
        

              <div class="mt-3">
                <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                        {{ __('Login') }}
                </button>
              </div>
              

              <div class="my-2 d-flex justify-content-between align-items-center">
                <div class="form-check">
                    <label class="form-check-label text-muted" for="remember">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <i class="input-helper"></i>
                                {{ __('Remember Me') }} 
                    </label>
                </div>

               
                <a class="auth-link text-black" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                </a>
              </div>

              <div class="text-center mt-4 font-weight-light">
                Not Registered? <a href="{{ route('register') }}" class="text-primary">Create an account</a>
              </div>
            </form>
          </div>
        </div>
      </div>


@endsection
