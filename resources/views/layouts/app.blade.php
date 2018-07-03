<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SKOP') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <!--<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

     Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/theme.css">
</head>
<body>
  </header>
    <div id="app">
      <header>
          <nav class="navbar navbar-expand-md fixed-top violet_bg transparent">
              <a class="navbar-brand white" href="index.php">SKOP.COM</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars white"></span>
              </button>
              <div class="collapse navbar-collapse mr-auto" id="navbarCollapse">

                <form class="form-inline mt-2 mt-md-0 white_bg buscador">
                  <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
                  <button class="btn btn-link violet my-2 my-sm-0" type="submit"><i class="fas fa-search violet"></i></button>
                </form>
                <ul class="navbar-nav ml-4">
                  <li class="nav-item active ml-2">
                    <a class="nav-link violet white_bg circle" href="#"><i class="fas fa-arrow-up violet"></i></a>
                  </li>
                  <li class="nav-item ml-2">
                    <a class="nav-link violet white_bg circle" href="#"><i class="fas fa-bell violet"></i></a>
                  </li>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item ml-2">
                          <a class="nav-link violet white_bg circle" href="/login"><i class="fas fa-user violet"></i></a>
                        </li>
                        @else

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
      </header>

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="container-fluid white_bg">
            <p class="deepBlue text-center m-0 pb-2">¿Querés saber más sobre <em class="normal bold text-uppercase">skop.com</em>? Cliqueá <a href="faqs.php" class="violet" title="Preguntas frecuentes">aquí</a></p>
        </footer>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('js/validation_login.js') }}"></script>
</body>
</html>
