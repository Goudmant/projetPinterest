@extends('base')

@section('content')
    
    <section class="register-login register">
        <div class="container">
            <form action="/articles" method="post">
                @csrf
                <h1><i class="fab fa-pinterest-p"></i>interest</h1>
                <h2>Register with us !</h2>
                <label for="register-name">Enter your name</label>
                <input type="text" id="register-name" name="name" required>
                @error('name')
                    {{ $message }}
                @enderror
                <label for="register-name">Enter your email</label>
                <input type="text" id="register-email" name="email" required>
                @error('email')
                    {{ $message }}
                @enderror
                <label for="register-username">Choose a username</label>
                <input type="text" id="register-username" name="username" required>
                @error('username')
                    {{ $message }}
                @enderror
                <label for="register-password">Choose a password</label>
                <input type="password" id="register-password" name="password" required>
                @error('password')
                    {{ $message }}
                @enderror
                <label for="confirm-password">Confirm your password</label>
                <input type="password" id="confirm-password" name="confirPassword" required>
                @error('confirmPassword')
                    {{ $message }}
                @enderror
                <input type="submit" value="Register">
                <small>Already registered ? <a href="./login.html">Login</a></small>
            </form>
        </div>
    </section>
@endsection