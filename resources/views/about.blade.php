<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About</title>
</head>
<body>

    <h1>Welcome Back, {{ $name }}!</h1>

    <p>{{ 10 + 34 }}</p>

    <h2>Users List</h2>

    @foreach ($users as $user)
        <p>{{ $user }}</p>
    @endforeach

</body>
</html>