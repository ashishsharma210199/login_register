<!DOCTYPE html>
<html>
<head>
    <!-- Include Bootstrap CSS via a CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="card">
    <h2>Register Form</h2>
    <form action="{{ route('register-user') }}" method="post">
        @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf

        <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" id="fullname" name="name" class="form-control" placeholder="Enter your full name" value="{{ old('name') }}">
            <span class="text-danger">@error('name') {{ $message }} @enderror</span>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" value="{{ old('email') }}">
            <span class="text-danger">@error('email') {{ $message }} @enderror</span>
        </div>

        <div class="form-group">
            <label for="new-password">New Password</label>
            <input type="password" id="new-password" name="password" class="form-control" placeholder="Enter your new password">
            <span class="text-danger">@error('password') {{ $message }} @enderror</span>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>

    <div class="switch">Already have an account? <a href="login">Login here</a></div>
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>