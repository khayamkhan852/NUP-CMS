@extends('auth.layout.app')

@section('title', 'CMS-Login')

@section('auth-content')
    <div>
        <h1 class="logo-name">NUP</h1>
    </div>
    <h3>Welcome to NUP CMS</h3>
    <p>Login in to National University of Pakistan CMS</p>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form class="m-t" role="form" action="{{ route('login') }}" method="POST">
        @csrf

        <div class="form-group">
            <x-text-input id="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                          name="email" :value="old('email')"
                          placeholder="Email..." autocomplete="username" autofocus
            />
            @error('email')
                <x-input-error>{{ $message }}</x-input-error>
            @enderror
        </div>

        <div class="form-group">
            <x-text-input id="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}"
                          type="password"
                          name="password"
                          placeholder="Password..."
                          autocomplete="current-password"
            />
            @error('password')
                <x-input-error>{{ $message }}</x-input-error>
            @enderror
        </div>

        <div class="form-check mt-3 mb-4 mr-sm-2">
            <input class="form-check-input" name="remember" id="remember" type="checkbox" style="transform: scale(1.5);">
            <label class="form-check-label ml-2" for="remember">{{ __('Remember me') }}</label>
        </div>

        <button type="submit" class="btn btn-primary block full-width m-b">{{ __('Log in') }}</button>

    </form>
    <p class="m-t"> <small>Copyright &copy; NUP 2025. All rights reserved</small> </p>
@endsection


