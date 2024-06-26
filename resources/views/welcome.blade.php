<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Location Management System</a>
        <div class="collapse navbar-collapse">
            @if (Route::has('login'))
                <ul class="navbar-nav ml-auto">
                    @auth
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Log in</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                            </li>
                        @endif
                    @endauth
                </ul>
            @endif
        </div>
    </nav>
    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to Location Management System!</h1>
            <p class="lead">Manage States, Cities, and Pincodes easily.</p>
            <hr class="my-4">
            <p>My system allows you to:</p>
            <ul>
                <li>Authenticate users via phone number and OTP.</li>
                <li>Access a dashboard for managing locations.</li>
                <li>Perform CRUD operations on States, Cities, and Pincodes.</li>
            </ul>
            <p>Requirements:</p>
            <ul>
                <li>Laravel Framework: ^11.9</li>
                <li>Laravel Breeze: ^2.1</li>
                <li>PHP: ^8.2</li>
                <li>Composer: 2.6.5</li>
            </ul>
            <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Get Started</a>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>