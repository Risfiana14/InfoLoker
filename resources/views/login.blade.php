<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    /* Reset and basic styles */
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
      background: linear-gradient(to bottom, #1815c3, #21a3bd); /* Hijau gradien */
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background: #ffffff;
      color: #333;
      border-radius: 12px;
      padding: 40px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    .login-container .logo {
      font-size: 2rem;
      font-weight: bold;
      color: #1815c3; /* Hijau tua */
      margin-bottom: 20px;
    }

    .login-container form {
      display: flex;
      flex-direction: column;
    }

    .login-container input {
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 1rem;
    }

    .login-container button {
      padding: 12px;
      background: linear-gradient(45deg, #1815c3, #1815c3); /* Hijau dengan gradien */
      color: white;
      font-size: 1rem;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      margin-top: 15px;
      transition: transform 0.3s;
    }

    .login-container button:hover {
      transform: scale(1.05);
    }

    .login-container .options {
      margin-top: 20px;
      font-size: 0.9rem;
      color: #777;
    }

    .login-container .options a {
      color: #480dde; /* Hijau */
      text-decoration: none;
    }

    .login-container .options a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <div class="logo">LokerIn</div>
    <form class="forms-sample" method="POST" action="{{ route('dashboard') }}">
        @csrf
        <div class="form-group">
                <label for="exampleInputEmail3">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword4">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
        <div class="text-center mt-3">
            <p class="mb-0">Jika belum memiliki akun, <a href="register">Sign up</a></p>
        </div>
    </form>
  </div>
</body>
</html>
