<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/login.css')}}">
  <title>Login Page</title>
</head>
<body>
  <div class="login-container">
    <div class="logo">LokerIn</div>
    <form class="forms-sample" method="POST" action="{{ route('login') }}">
      @csrf
      <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
      </div>
      <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Login</button>
      <div class="text-center mt-3">
          <p class="mb-0">Jika belum memiliki akun, <a href="{{ route('register') }}">Sign up</a></p>
      </div>
  </form>  
  </div>
</body>
</html>
