@extends('base')

@section('content')
    
    <section class="register-login register">
        <div class="container">
          <div>{{ __('Register') }}</div>
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1><i class="fab fa-pinterest-p"></i>Pinterest</h1>
            <h2>Register with us !</h2>
            <label for="name">{{ __('Enter your name') }}</label>
            <input type="text" id="register-name" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
            @error('name')
                {{ $message }}
            @enderror

            <label for="register-email">{{ __('Enter your email') }}</label>
            <input type="email" id="register-email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                {{ $message }}
            @enderror

            <label for="register-username">{{ __('Choose a username') }}</label>
            <input type="text" id="register-username" class="@error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">

            @error('username')
                {{ $message }}
            @enderror

            <label for="register-password">{{ __('Choose a password') }}</label>
            <input type="password" id="register-password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                {{ $message }}
            @enderror

            <label for="confirm-password">{{ __('Confirm your password') }}</label>
            <input type="password" id="confirm-password" name="password_confirmation" required autocomplete="new-password">

            <button type="submit" value="Register"> {{ __('Register') }}
            </button>
            <small>Already registered ? <a href="./login.html">Login</a></small>
          </form>
        </div>
    </section>
@endsection