<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center mt-5">
        <h1>Welcome</h1>
        <div class="mt-4">
            <a href="{{ url('/registers') }}" class="btn btn-primary">Register</a>
            <a href="{{ url('/logins') }}" class="btn btn-success">Login</a>
        </div>
    </div>
</body>
</html>
