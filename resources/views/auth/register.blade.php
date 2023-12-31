@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" id="registerForm">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('Full Name') }}</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success" id="registerButton">{{ __('Register') }}</button>
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
            targets: '#registerForm',
            translateY: [-20, 0],
            opacity: [0, 1],
            easing: 'easeInOutQuad',
            duration: 800,
            delay: 300
        });

        anime({
            targets: '#registerButton',
            scale: [0.8, 1],
            easing: 'easeInOutQuad',
            duration: 500,
            delay: 800
        });
    </script>
@endsection
