<!-- filepath: resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome to the Application</h1>
    <a href="{{ route('login') }}">
        <button>Login</button>
    </a>
</body>
</html>