<br>
<br>
<br>
<br>
<br>
<br>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <!-- Tampilkan pesan kesalahan jika terjadi kesalahan validasi -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Tampilkan pesan sukses jika ada -->
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}" id="loginForm">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success" id="loginButton">{{ __('Login') }}</button>
                            </div>

                            <div class="mt-3 text-center">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-muted">{{ __('Forgot Your Password?') }}</a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Anime.js Library -->
    <script src="https://cdn.jsdelivr.net/npm/animejs"></script>

    <!-- Your Custom Animation Script -->
    <script>
        // Animasi menggunakan Anime.js
        anime({
            targets: '#loginForm',
            translateY: [-20, 0],
            opacity: [0, 1],
            easing: 'easeInOutQuad',
            duration: 800,
            delay: 300
        });

        anime({
            targets: '#loginButton',
            scale: [0.8, 1],
            easing: 'easeInOutQuad',
            duration: 500,
            delay: 800
        });
    </script>
@endsection
