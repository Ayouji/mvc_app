<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contoso University</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Contoso University</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('student') }}">Students</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('course.index')}}">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/instructors">Instructors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/depa">Departement</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="container py-4">
            @yield('content')
        </main>
    </div><br><br>
    <footer class="text-center">&copy; 2013 - Contoso University</footer>
</body>
</html>