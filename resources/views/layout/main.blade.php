<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div>
<nav>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href={{route('employee.index')}}>Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href={{route('auth.signIn')}}>Sign In</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href={{route('auth.signUp')}}>Sign Up</a>
        </li>
    </ul>
</nav>
</div>
@yield('content')

</body>
</html>
