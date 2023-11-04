<!DOCTYPE html>
<html>
<head>
    <!-- Include Bootstrap CSS via a CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="card">
    <h2>Login Form</h2>
    <form action="{{ route('login-user') }}" method="post">
      @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
      @endif
      @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
      @endif
      @csrf
      
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" class="form-control" placeholder="Enter your email" value="">
        <span class="text-danger">@error('email') {{ $message }} @enderror</span>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" value="">
        <span class="text-danger">@error('password') {{ $message }} @enderror</span>
      </div>

      <button type="submit" class="btn btn-primary">Login</button>
    </form>

    <div class="switch">Don't have an account? <a href="register">Register here</a></div>
  </div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
