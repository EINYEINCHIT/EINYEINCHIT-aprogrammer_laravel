<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Programming Class')</title>
</head>
<body>
    <ul>
        <li><a href="/">Home Page</a></li>
        <li><a href="php">PHP Page</a></li>
        <li><a href="js">JS Page</a></li>
    </ul>
    @yield('content')
</body>
</html>