@extends('layouts.app')

@section('content')

    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                <div class="row flex-grow">
                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <div class="auth-form-transparent text-left p-3">
                            <div class="brand-logo">
                                <img src="assets/images/logo.svg" alt="logo">
                            </div>
                            <h4>Welcome back!</h4>
                            <h6 class="font-weight-light">Happy to see you again!</h6>
                         <form class="pt-3" method="POST" action="{{ route('login') }}">
                                <div class="form-group">
                                    @csrf
                                    <label for="exampleInputEmail">Username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                              <span class="input-group-text bg-transparent border-right-0">
                                                <i class="fa fa-user text-primary"></i>
                                              </span>
                                        </div>
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror form-control-lg border-left-0"
                                               id="exampleInputEmail" name="email" value="{{ old('email') }}" required
                                               autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword">Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                              <span class="input-group-text bg-transparent border-right-0">
                                                <i class="fa fa-lock text-primary"></i>
                                              </span>
                                        </div>
                                        <input id="password" type="password"
                                               class="form-control form-control-lg border-left-0 @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="my-3">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                       >LOGIN</button>
                                </div>
                                <div class="mb-2 d-flex">
                                    <button type="button" class="btn btn-facebook auth-form-btn flex-grow mr-1">
                                        <i class="fab fa-facebook-f mr-2"></i>Facebook
                                    </button>
                                    <button type="button" class="btn btn-google auth-form-btn flex-grow ml-1">
                                        <i class="fab fa-google mr-2"></i>Google
                                    </button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Don't have an account? <a href="{{ route("register") }}" class="text-primary">Create</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 login-half-bg d-flex flex-row">
                        <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy;
                            2018 All rights reserved.</p>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

@endsection
