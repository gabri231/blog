<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - @yield('title')</title>
    <!-- Scripts -->
    @vite([
        'resources/sass/app.scss',
        'resources/sass/styles.sass',
        'resources/js/app.js'
    ])
</head>
<body>
    <!-- Logo -->
    <nav class="navbar navbar-light bg-main">
        <div class="container p-2">
            <a class="navbar-brand m-auto" href="#">
                <img src="{{ Vite::asset('resources/images/blog/logo.png') }}" height="80" alt="" loading="lazy">
            </a>
        </div>
    </nav>
    
    <!-- Contenido -->
    @yield('content')

    <!-- Footer -->
    <footer class="container-fluid bg-main">
        <div class="row text-center p-4">
            <div class="mb-3">
                <img src="{{ Vite::asset('resources/images/blog/logo.png') }}" alt="Strategying logo" width="120" id="logofooter">
            </div>
            <div id="col-md-10">
                <a href="https://www.facebook.com/strategying" target="_blank">
                    <img src="{{ Vite::asset('resources/images/blog/facebook.png') }}" class="img-fluid" width="40px" alt="facebook Strategying">
                </a>
                <a href="https://www.twitter.com/NewStrategying" target="_blank">
                    <img src="{{  Vite::asset('resources/images/blog/twitter.png')  }}" class="img-fluid" width="40px" alt="instagram Strategying">
                </a>
                <a href="https://www.youtube.com/channel/UC5PR7A_FBSiFl_4PVkBx--A" target="_blank">
                    <img src="{{ Vite::asset('resources/images/blog/youtube.png') }}" class="img-fluid" width="50px" alt="youtube Strategying">
                </a>
                <p class="mt-3">Copyright © 2023 Strategying, Blog. <br> Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
</body>
</html>