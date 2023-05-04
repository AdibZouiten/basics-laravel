<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Laravel | @yield('title')
    </title>
    <link rel="stylesheet" href={{url("css/style.css")}}>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <a class="logo" href="/"><i class="fa-brands fa-blogger fa-2xl"></i></a>
        <nav class="nav">
            <ul class="nav-list">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('computers.index')}}">Computers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('computers.create')}}">Create Computer</a>
                </li>
            </ul>
        </nav>
    </header>

    @yield('content')
    
</body>
</html>