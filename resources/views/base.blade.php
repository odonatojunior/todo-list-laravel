<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />

</head>

<body>

    <header>
        <div class="title-wrapper">
            <h1 class="title"><a href="{{ route('todo.index') }}">{{ env('APP_NAME') }}</a></h1>
            <nav>
                <ul>
                    <li>
                        <a class="btn btn-menu" href="{{ route('todo.create') }}" title="Adicionar">
                            <i class="fas fa-plus"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div id="container" style="min-height: 800px">
        <div class="content">
            @yield('content')
        </div>
    </div>

    <footer>
        <small>
            <p>{{ env('APP_NAME') }} | Alguns direitos reservados</p>
        </small>
    </footer>
    
</body>

</html>
