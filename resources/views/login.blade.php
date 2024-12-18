<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <title>Login Page</title>
</head>

<body>
    <div class="login-container">
        <div class="logo">LokerIn</div>
        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <button type="submit">Login</button>
            <p>Belum punya akun? <a href="{{ route('register') }}">Register</a></p>
        </form>
    </div>
</body>

</html>
