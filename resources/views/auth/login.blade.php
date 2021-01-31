@extends('layouts.auth')

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
                        
                            <div class="col-lg-12 col-12 p-0">
                                <div class="card rounded-0 mb-0 px-2">
                                    <div class="card-header pb-1">
                                        <div class="card-title">
                                            <h4 class="mb-0">Login</h4>
                                        </div>
                                    </div>
                                    <p class="px-2">Welcome back, please login to your account.</p>
                                    <div class="card-content">
                                        <div class="card-body pt-1">
                                            <form action="{{route('login')}}" method="POST">
                                                @csrf
                                                <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" name="email" value="{{old('email')}}"required>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>
                                                    @error('email')
                                                    <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
                                                    <label for="email">email</label>
                                                </fieldset>

                                                <fieldset class="form-label-group position-relative has-icon-left">
                                                    <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" placeholder="password" name="password" required>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-lock"></i>
                                                    </div>
                                                    @error('password')
                                                    <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
                                                    <label for="password">Password</label>
                                                </fieldset>
                                                <a href="#" class="btn btn-outline-primary float-left btn-inline">kembali</a>
                                                <button type="submit" class="btn btn-primary float-right btn-inline">Login</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="login-footer">
                                        <div class="divider">
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