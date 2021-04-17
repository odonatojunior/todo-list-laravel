<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />

</head>

<body class="bg-gray-900 text-white">

  <header class="bg-purple-700  p-4">

    <div class="container flex justify-between mx-auto max-w-5xl">
      <h1 class="font-bold text-3xl"><a href="{{ route('todo.index') }}">{{ env('APP_NAME') }}</a></h1>
      <nav>
        <ul>
          <li>
            <a class="bg-white px-3 py-2 rounded hover:bg-purple-100 text-purple-900" href="{{ route('todo.create') }}" title="Adicionar">
              <i class="fas fa-plus"></i>
            </a>
          </li>
        </ul>
      </nav>
    </div>

  </header>
  <div class="mx-auto max-w-5xl">
      <div id="container">
          <div class="content">
              @yield('content')
          </div>
      </div>

      <footer class="text-center py-4">
          <small>
              <p>{{ env('APP_NAME') }} | Feito com carinho por <a class="underline hover:text-gray-300" href="https://github.com/odonatojunior">odonatojunior</a> | 2021</p>
          </small>
      </footer>
    </div>
    
</body>

</html>
