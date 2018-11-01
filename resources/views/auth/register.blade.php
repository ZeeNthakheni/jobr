@extends('layouts.app')

@section('content')

<div class="row w-100">
        <div class="col-lg-4 mx-auto">
          <div class="auth-form-light text-left p-5">
            <div class="brand-logo">
                <img src="{{ asset('storage/LayoutImages/jobr.png') }}"  style="max-width:100px" alt="Jobr">
            </div>
            <h4>New here?</h4>
            <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
            <form class="pt-3" method="POST" action="{{ route('register') }}">
                @csrf
                
              <div class="form-group">                   
                    <div>
                        <input id="name" type="text" class="form-control form-control-lg {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Username">

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

              <div class="form-group">
                    <div>
                        <input id="email" type="email" placeholder="Email" class="form-control form-control-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">                   
                        <div>
                            <input id="companyKey" type="text" class="form-control form-control-lg {{ $errors->has('companyKey') ? ' is-invalid' : '' }}" name="companyKey" value="{{ old('companyKey') }}" required autofocus placeholder="Company Key">
    
                            @if ($errors->has('companyKey'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('companyKey') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
    

                <div class="form-group">
                        <div>
                            <input id="password" placeholder="Password" type="password" class="form-control form-control-lg {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

              <div class="form-group">
                    <div>
                        <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control form-control-lg" name="password_confirmation" required>
                    </div>
                </div>

              <div class="mb-4">
                <div class="form-check">
                  <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input" id="terms" name="terms">
                    I agree to all Terms &amp; Conditions
                  <i class="input-helper"></i></label>

                  @if ($errors->has('terms'))
                    <br>
                    <br>
                    <div class="card">
                        <span class="alert alert-danger">
                            <strong>{{ $errors->first('terms') }}</strong>
                        </span>
                    </div>
                         
                    @endif
                  
                </div>
              </div>


              <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                            SIGN UP
                    </button>
              </div>

              <div class="text-center mt-4 font-weight-light">
                Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
              </div>
            </form>
          </div>
        </div>
      </div>
@endsection
