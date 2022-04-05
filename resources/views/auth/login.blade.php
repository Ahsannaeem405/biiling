@extends('layout')

    @section('content')
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto pb-4" style="box-shadow: 2px 2px 20px grey; border-radius: 20px;">
              <div class="card-body text-center py-5 ">
                <h3 class=" text-cenetr mb-3">{{ __('Login') }}</h3>
                <form method="POST" action="{{ route('login') }}">
                       
                            <div class="row col-12 ">
                                <label for="email">{{ __('Email') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="password" class="mt-4 ">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <button type="submit" class="btn btn-primary w-100 mt-5">
                                    {{ __('Login') }}
                                </button>
                            </div>

                        <div class="row mb-3 pt-3">
                            <!-- <div class="col-md-6 col-12">
                                <div class="form-check d-flex">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div> -->
                        </div>
                            <!-- <div class="text-center pt-3">
                                <button type="submit" class="btn btn-primary col-11">
                                    {{ __('Login') }}
                                </button>
                            </div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                         -->

                        <!-- <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div> -->
                        <p class="sign-up">Don't have an Account?<a href="{{ route('register') }}"> Sign Up</a></p>

                    </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    @endsection
