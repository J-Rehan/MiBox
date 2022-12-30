@extends('layouts.app_auth')
@section('content')
    <section class="login_class vh-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-6">
                    <div class="login_area">
                        <div class="title_area">
                            <h1>{{ __('Login') }}</h1>
                        </div>
                        <div>
                            @if(session()->has('success_message'))
                                <div class="alert alert-success">
                                    {{ session()->get('success_message') }}
                                </div>
                            @endif

                            @if(session()->has('login_error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('login_error') }}
                                </div>
                            @endif
                        </div>

                        <form class="text_aligment" method="POST" action="{{ route('admin.auth.login') }}">
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" placeholder="user id"
                                       aria-label="user id" aria-describedby="basic-addon2">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-group box_height">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                       name="password" placeholder="password" aria-label="password"
                                       aria-describedby="basic-addon2">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group row d-none">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="text-end">
                                <a href={{route("admin.auth.forgetPassswordForm")}} class="hero_button"> {{ __('Forgot Password ?') }} </a>
                            </div>
                            <button type="submit" class="btn btn--danger">{{ __('Login') }} </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
