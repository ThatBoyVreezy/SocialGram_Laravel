@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 10%">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-center">
                    <img src="{{ asset('logo/socialgram.png')}}" alt="Image" width="400" >
                    <h2><strong>Welcome Back</strong></h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <x-input label="Email" name="email" type="email" />
                        <x-input label="Password" name="password" type="password" />

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <x-submitbtn text="Login" />

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
