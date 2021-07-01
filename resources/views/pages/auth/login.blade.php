@extends('layouts.auth')

@section('custom_styles')

@endsection

@section('prepend_script')

@endsection

@section('append_script')

@endsection

@section('title')
    Login
@endsection

@section('content')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="row flexbox-container">
                <div class="col-xl-8 col-11 d-flex justify-content-center">
                    <div class="card bg-authentication rounded-0 mb-0">
                        <div class="row m-0">
                            <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-0 py-0">
                                <img class="w-100" src="{{ url('login.jpg') }}" alt="branding logo">
                            </div>
                            <div class="col-lg-6 col-12 p-0 my-auto">
                                <div class="card rounded-0 mb-0 px-2">
                                    <div class="card-header pb-1">
                                        <div class="card-title">
                                            <h4 class="mb-0">Login</h4>
                                        </div>
                                    </div>
                                    <p class="px-2">Silahkan masukkan username dan password untuk masuk.</p>
                                    <div class="px-1">
                                        @if (\Session::has('alert'))
                                            <div class="alert alert-danger w-100" role="alert">
                                                <h4 class="alert-heading">Salah!</h4>
                                                <p class="mb-0">
                                                    {{ session()->get('alert') }}
                                                </p>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body pt-1">
                                            <form action="{{ route('loginLogic') }}" method="POST">
                                                {{ csrf_field()}}
                                                <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                    <input type="text" class="form-control" id="username" name="username" placeholder="Nama Pengguna" required>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>
                                                    <label for="username">Nama Pengguna</label>
                                                </fieldset>

                                                <fieldset class="form-label-group position-relative has-icon-left">
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi" required>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-lock"></i>
                                                    </div>
                                                    <label for="password">Kata Sandi</label>
                                                </fieldset>
                                                {{-- <div class="form-group d-flex justify-content-between align-items-center">
                                                    <div class="text-left">
                                                        <fieldset class="checkbox">
                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                <input type="checkbox">
                                                                <span class="vs-checkbox">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class="">Remember me</span>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="text-right"><a href="auth-forgot-password.html" class="card-link">Forgot Password?</a></div>
                                                </div>
                                                <a href="auth-register.html" class="btn btn-outline-primary float-left btn-inline">Register</a> --}}
                                                <button type="submit" class="btn btn-primary float-right btn-inline">Masuk</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="login-footer">
                                        <div class="divider">
                                            <div class="divider-text"></div>
                                        </div>
                                        <div class="footer-btn d-inline">
                                            {{-- <a href="#" class="btn btn-facebook"><span class="fa fa-facebook"></span></a>
                                            <a href="#" class="btn btn-twitter white"><span class="fa fa-twitter"></span></a>
                                            <a href="#" class="btn btn-google"><span class="fa fa-google"></span></a>
                                            <a href="#" class="btn btn-github"><span class="fa fa-github-alt"></span></a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>

@endsection
