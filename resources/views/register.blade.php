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
            <form method="POST" action="{{ route('register.post') }}">
                @csrf
                <div>
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
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
                <div>
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </div>
                <button type="submit">Register</button>
                <p>Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
            </form>
        </div>
    </body>

    </html>
