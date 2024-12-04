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
    <form class="forms-sample" method="POST" action="{{ route('register.post') }}">
        @csrf
        <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="FalihMuachh">
        </div>
        <div class="form-group">
          <label for="username">name</label>
          <input type="text" class="form-control" name="name" placeholder="FalihGantengg" >
        </div>
        <div class="form-group">
                <label for="exampleInputEmail3">Email address</label>
                <input type="text" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword4">Password</label>
            <input type="text" class="form-control" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary w-100">Save</button>
        <div class="text-center mt-3">
            <p class="mb-0">Jika sudah memiliki akun, <a href="{{route('login')}}">Sign in</a></p>
        </div>
    </form>
  </div>
</body>
</html>
