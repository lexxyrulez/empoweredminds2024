@extends('layouts.appdash')

@section('content')
<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card">

                    <div class="text-center account-logo-box">
                        <div class="mt-2 mb-2">
                            <a href="/" class="text-success">
                                <span><img src="assets/images/logo.png" alt="" height="36"></span>
                            </a>
                        </div>
                    </div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <input
                                    name="email" 
                                    type="email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    id="email" 
                                    placeholder="Email Address" 
                                    value="{{ old('email') }}"
                                    required 
                                    autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group">
                                <input 
                                    id="password-field" 
                                    type="password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" 
                                    placeholder="Password" 
                                    required>
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox checkbox-success">
                                    <input 
                                        type="checkbox" 
                                        class="custom-control-input" 
                                        id="checkbox-signin" {{ old('remember') ? 'checked' : '' }} 
                                        checked>
                                    <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>

                            <div class="form-group text-center mt-4 pt-2">
                                <div class="col-sm-12">
                                    <a href="page-recoverpw.html" class="text-muted"><i class="fa fa-lock mr-1"></i> Forgot your password?</a>
                                </div>
                            </div>

                            <div class="form-group account-btn text-center mt-2">
                                <div class="col-12">
                                    <button class="btn width-md btn-bordered btn-danger waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->

                {{-- <div class="row mt-5">
                    <div class="col-sm-12 text-center">
                        <p class="text-muted">Don't have an account? <a href="page-register.html" class="text-primary ml-1"><b>Sign Up</b></a></p>
                    </div>
                </div> --}}

            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->
@endsection
