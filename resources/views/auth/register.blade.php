@extends('layouts.app')

@section('title')

    <title>{{ config('app.name', 'Laravel') }} | {{ __('Register') }}</title>

@endsection

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-md-5">

                <div class="card bg-dark-card">

                    <div class="card-header text-center">
                        <h2 class="mt-3">
                            {{ __('Register') }}
                        </h2>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group px-4">
                                <label for="name">
                                    {{ __('Name') }}
                                </label>

                                <input
                                    id="name"
                                    type="text"
                                    class="form-control @error('name') is-invalid @enderror input-dark"
                                    name="name"
                                    value="{{ old('name') }}"
                                    required
                                    autocomplete="name"
                                    autofocus
                                >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </div>

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
                                    autocomplete="email"
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
                                    autocomplete="new-password"
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
                                <label for="password-confirm">
                                    {{ __('Confirm Password') }}
                                </label>

                                <input
                                    id="password-confirm"
                                    type="password"
                                    class="form-control input-dark"
                                    name="password_confirmation"
                                    required
                                    autocomplete="new-password"
                                >
                            </div>

                            <div class="form-group px-4 py-3">
                                <div class="row">

                                    <div class="col-6 pr-1">
                                        <button
                                            type="submit"
                                            class="btn btn-primary btn-block">
                                            {{ __('Register') }}
                                        </button>
                                    </div>

                                    <div class="col-6 pl-1">
                                        <a
                                            href="{{ route('login') }}"
                                            class="btn btn-outline-primary btn-block">
                                            {{ __('Login') }}
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </form>
                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
