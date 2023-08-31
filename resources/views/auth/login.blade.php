@extends('dashboard.layouts.master')

@push('css')
@endpush

@section('content')
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center"
         style="background:url({{ asset('dashboard/assets/images/big/auth-bg.jpg') }}) no-repeat center center;">
        <div class="auth-box">
            <div id="loginform">
                <div class="logo">
                    <span class="db"><img src="{{ asset('dashboard/assets/images/logo-icon.png') }}" alt="logo" /></span>
                    <div class="card-header">{{ __('Login') }}</div>
                </div>
                <!-- Form -->
                <div class="row">
                    <div class="col-12">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="input-group mb-3 mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="ti-email"></i></span>
                                </div>
                                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email"
                                       placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3 mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="ti-pencil"></i></span>
                                </div>
                                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
                                       name="password" value="{{ old('password') }}" required autocomplete="current-password"
                                       placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" autofocus>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheck1" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="customCheck1">{{ __('Remember Me') }}</label>
                                        <a href="#" id="to-recover" class="text-dark float-right"><i class="fa fa-lock m-r-5"></i> {{ __('Forgot Your Password?') }}</a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center">
                                <div class="col-xs-12 p-b-20">
                                    <button type="submit" class="btn btn-block btn-lg btn-info">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                    <div class="social">
                                        <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="" data-original-title="Login with Facebook"> <i aria-hidden="true" class="fab  fa-facebook"></i> </a>
                                        <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="" data-original-title="Login with Google"> <i aria-hidden="true" class="fab  fa-google-plus"></i> </a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group m-b-0 m-t-10">
                                <div class="col-sm-12 text-center">
                                    Don't have an account? <a href="#" class="text-info m-l-5"><b>{{ __('Register') }}</b></a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
