@extends('layouts.app')

@section('title')

    <title>{{ config('app.name', 'Laravel') }} | {{ __('Login') }}</title>

@endsection

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-md-5">

                <div class="card bg-dark-card">

                    <div class="card-header text-center">
                        <h2 class="mt-3">
                            {{ __('Login') }}
                        </h2>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group px-4">
                                <label for="email">
                                    {{ __('E-Mail Address') }}
                                </label>

                                <input
                                    id="email"
                                    type="email"
                                    class="form-control @error('email') is-invalid @enderror input-dark"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="off"
                                    autofocus
                                >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group px-4">
                                <label for="password">
                                    {{ __('Password') }}
                                </label>

                                <input
                                    id="password"
                                    type="password"
                                    class="form-control @error('password') is-invalid @enderror input-dark"
                                    name="password"
                                    required
                                    autocomplete="current-password"
                                >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group px-4">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="remember"
                                        id="remember"
                                        {{ old('remember') ? 'checked' : '' }}
                                    >

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <div class="form-group px-4">
                                <div class="row">

                                    <div class="col-6 pr-1">
                                        <button
                                            type="submit"
                                            class="btn btn-primary btn-block">
                                            {{ __('Login') }}
                                        </button>
                                    </div>

                                    <div class="col-6 pl-1">
                                        <a
                                            href="{{ route('register') }}"
                                            class="btn btn-outline-primary btn-block">
                                            {{ __('Register') }}
                                        </a>
                                    </div>

                                </div>
                            </div>

                            @if (Route::has('password.request'))
                                <div class="form-group px-2">
                                    <a
                                        class="btn btn-link"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            @endif

                        </form>
                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
