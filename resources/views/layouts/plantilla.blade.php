<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Tailwind Css -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Google Sans Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Google+Sans:100,300,400,500,700,900,100i,300i,400i,500i,700i,900i">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">

    <!-- Owl Carrousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

    <link rel="icon" href="https://img.icons8.com/external-others-ghozy-muhtarom/64/000000/external-market-business-smooth-others-ghozy-muhtarom.png" type="image/png" />
    <!-- Estilos Propios -->
    <link rel="stylesheet" href="css/estilos_welcome.css">
</head>
<body class="relative bg-zinc-800">

    <header>
        <div class="flex flex-wrap">
            <div class="w-full">
              <nav class="relative flex flex-wrap items-center justify-between px-2 py-6 bg-gradient-to-r from-indigo-500 via-indigo-800 to-red-700">
                <div class="container mx-auto flex flex-wrap items-center justify-between">
                  <div class="w-full relative flex justify-between items-center lg:w-auto lg:static lg:block lg:justify-start">
                    <h2 class="text-lg font-bold leading-relaxed inline-block py-2 whitespace-nowrap uppercase text-white bg-zinc-800 rounded-xl px-4">
                      MarketCL
                    </h2>
                    <button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button">
                      <span class="block relative w-6 h-px rounded-sm bg-white"></span>
                      <span class="block relative w-6 h-px rounded-sm bg-white mt-1"></span>
                      <span class="block relative w-6 h-px rounded-sm bg-white mt-1"></span>
                    </button>
                  </div>
                  <div class="flex lg:flex-grow items-center" id="example-navbar-info">
                    <ul class="flex flex-col items-center lg:flex-row list-none ml-auto gap-6">
                        <li class="nav-item">
                            <div class="box">
                                <div class="container-1 bg-white py-2 px-4 rounded-xl">
                                    <span class="icon"><i class="fa fa-search pr-2 text-zinc-800"></i></span>
                                    <input class="text-zinc-800 placeholder-zinc-600 bg-white" type="search" id="search" placeholder="Buscar..." />
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="#pablo">
                             Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="#pablo">
                            Servicios
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="flex items-center text-sm uppercase font-bold leading-snug text-white hover:opacity-75" href="#!">
                                <i class="fa-solid fa-user px-3 py-3 bg-zinc-800 rounded-xl"></i>
                            </a>
                        </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
        </div>
    </header>

    @yield('content')

    <div class="menu-phone fixed bottom-0 w-full block md:hidden">
        <div class="box">
            <ul class="bg-zinc-800 border-t border-gray-500 border-opacity-25 w-full rounded-t-xl flex justify-between py-2 px-3 gap-4">
                <li>
                    <a class="text-center text-2xl block py-1 px-3 text-white hover:text-red-500" href="">
                        <i class="fas fa-home"></i>
                        <p class="text-xs">Inicio</p>
                    </a>
                </li>
                <li>
                    <a class="text-center text-2xl block py-1 px-3 text-white hover:text-red-500" href="">
                        <i class="fas fa-theater-masks"></i>
                        <p class="text-xs">Servicios</p>
                    </a>
                </li>
                <li>
                    <a class="text-center text-2xl block py-1 px-3 text-white hover:text-red-500" href="">
                        <i class="fas fa-list-ol"></i>
                        <p class="text-xs">OtrasCosas</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!--<footer class="hidden md:block border-t border-gray-600 border-opacity-25">
        <div class="w-full">
            <div class="container mx-auto my-10 px-4">
                <div class="grid grid-cols-3 lg:grid-cols-10 gap-10">
                    <div class="col-span-3 lg:col-span-4 logo-info">
                        <div class="imgFooter flex items-center justify-center lg:justify-start">
                            <img class="h-32" src="https://www.themoviedb.org/assets/2/v4/logos/v2/blue_square_2-d537fb228cf3ded904ef09b136fe3fec72548ebc1fea3fbbd1ad9e36364db38b.svg" alt="">
                        </div>
                    </div>
                    <div class="col-span-1 lg:col-span-2 list-category">
                        <h1 class="text-white text-xl mb-4">Paginas</h1>
                        <div class="categories">
                            <ul class="text-white text-sm">
                                <li class="py-1 hover:text-red-500">
                                    <a href="#">
                                        Inicio
                                    </a>
                                </li>
                                <li class="py-1 hover:text-red-500">
                                    <a href="#">
                                        Productos
                                    </a>
                                </li>
                                <li class="py-1 hover:text-red-500">
                                    <a href="#">
                                        Terminos de Uso
                                    </a>
                                </li>
                                <li class="py-1 hover:text-red-500">
                                    <a href="#">
                                        DMCA
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-span-1 lg:col-span-2 list-category">
                        <h1 class="text-white text-xl mb-4">Generos</h1>
                        <div class="categories">
                            <ul class="text-white text-sm">
                                <li class="py-1">
                                    <a href="#" class="hover:text-red-500">
                                        Acción
                                    </a>
                                </li>
                                <li class="py-1">
                                    <a href="#" class="hover:text-red-500">
                                        Terror
                                    </a>
                                </li>
                                <li class="py-1">
                                    <a href="#" class="hover:text-red-500">
                                        Comedia
                                    </a>
                                </li>
                                <li class="py-1">
                                    <a href="#" class="hover:text-red-500">
                                        Familiar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-span-1 lg:col-span-2 list-category">
                        <h1 class="text-white text-xl mb-4">Explorar</h1>
                        <div class="categories">
                            <ul class="text-white text-sm">
                                <li class="py-1 hover:text-red-500">
                                    <a href="#">
                                        Estrenos
                                    </a>
                                </li>
                                <li class="py-1 hover:text-red-500">
                                    <a href="#">
                                        Películas Top
                                    </a>
                                </li>
                                <li class="py-1 hover:text-red-500">
                                    <a href="#">
                                        Series Top
                                    </a>
                                </li>
                                <li class="py-1 hover:text-red-500">
                                    <a href="#">
                                        Más Vistas
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>-->

    <!-- JS Universal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src='https://cdn.rawgit.com/gijsroge/tilt.js/38991dd7/dest/tilt.jquery.js'></script>
    <script src="js/script.js"></script>
    <!-- JS Universal -->
</body>
</html>