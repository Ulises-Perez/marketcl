@extends('layouts.plantilla')

@section('title', 'MarketCL')

@section('content')

    <main class="p-4">
        <section id="adviser_01" class="w-full mt-5">
            <div class="container mx-auto px-4 xl:px-0 text-white">
                <div class="box-list-box rounded-xl">
                    <div class="box-list-shadow bg-black bg-opacity-50 w-full h-full rounded-xl ">
                        <div class="box-list h-full w-full flex flex-col justify-center items-center px-10 py-20">
                            <h1 class="text-4xl md:text-6xl mb-1 leading-relaxed uppercase font-extrabold text-white bg-clip-text bg-gradient-to-r from-indigo-400 to-indigo-700">Gasfiter a Domicilio</h1>
                            <p class="mb-10 text-zinc-200">Arreglo de todo tipo de cosas, hasta la suegra.</p>
                            <button class="py-4 px-8 font-bold uppercase text-xs rounded-md bg-zinc-200 text-zinc-800 drop-shadow-md">
                                Ver servicio
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="app" class="container mx-auto px-4 py-12 transition-all duration-500 ease-linear">
            <div class="mb-2 text-white">
                <p class="leading-relaxed inline-block py-2 whitespace-nowrap font-extrabold text-white text-2xl">
                    Articulos Top
                </p>
            </div>
            <div class="relative">
                <div class="slides-container h-72 flex snap-x snap-mandatory overflow-hidden overflow-x-auto space-x-2 rounded scroll-smooth before:w-[45vw] before:shrink-0 after:w-[45vw] after:shrink-0 md:before:w-0 md:after:w-0">
                    <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded-xl overflow-hidden relative">
                        <a href="#!">
                            <img class="w-full h-full object-cover" src="https://www.hites.com/dw/image/v2/BDPN_PRD/on/demandware.static/-/Sites-mastercatalog_HITES/default/dw6cf7443d/images/original/pim/839831001/839831001_1.jpg?sw=1000&sh=1000" alt="mountain_image">
                            <div class="absolute inset-0 flex justify-center items-center verProductoButton hidden">
                                <button class="py-4 px-8 text-white font-bold uppercase text-xs rounded-md text-white bg-indigo-600">
                                    Ver Más
                                </button>
                            </div>
                            <div class="absolute top-0 right-0">
                                <p class="backdrop-blur-md bg-zinc-900 bg-opacity-75 rounded-xl m-3 p-2 text-lg text-white text-center">$79.990</p>
                            </div>
                            <div class="absolute inset-x-0 bottom-0 p-3">
                                <p class="backdrop-blur-md bg-zinc-900 bg-opacity-75 text-white rounded-xl text-base text-center p-2 truncate">Aspiradora TH-2206BL</p>
                            </div>
                        </a>
                    </div>
                    <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded-xl overflow-hidden relative">
                        <img class="w-full h-full object-cover" src="https://m.elmostrador.cl/media/2016/12/coluision-del-confort.jpg" alt="mountain_image">
                        <div class="absolute inset-0 flex justify-center items-center verProductoButton hidden">
                            <button class="py-4 px-8 text-white font-bold uppercase text-xs rounded-md text-white bg-indigo-600">
                                Ver Más
                            </button>
                        </div>
                        <div class="absolute top-0 right-0">
                            <p class="backdrop-blur-md bg-zinc-900 bg-opacity-75 rounded-xl m-3 p-2 text-lg text-white text-center">$79.990</p>
                        </div>
                        <div class="absolute inset-x-0 bottom-0 p-3">
                            <p class="backdrop-blur-md bg-zinc-900 bg-opacity-75 text-white rounded-xl text-base text-center p-2 truncate">Aspiradora TH-2206BL</p>
                        </div>
                    </div>
                    <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://images.pexels.com/photos/3026364/pexels-photo-3026364.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="mountain_image">
                    </div>
                    <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://images.pexels.com/photos/10343729/pexels-photo-10343729.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="mountain_image">
                    </div>
                    <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://images.pexels.com/photos/13860053/pexels-photo-13860053.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="mountain_image">
                    </div>
                    <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://images.pexels.com/photos/8576739/pexels-photo-8576739.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="mountain_image">
                    </div>
                    <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://images.pexels.com/photos/1743367/pexels-photo-1743367.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="mountain_image">
                    </div>
                    <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://images.pexels.com/photos/5920021/pexels-photo-5920021.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="mountain_image">
                    </div>
                    <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://images.pexels.com/photos/12805075/pexels-photo-12805075.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="mountain_image">
                    </div>
                    <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://images.pexels.com/photos/547115/pexels-photo-547115.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="mountain_image">
                    </div>

                </div>

                <div class="absolute top-0 -left-4 h-full items-center hidden md:flex">
                    <button role="button" class="prev px-2 py-2 rounded-full bg-neutral-100 text-neutral-900 group" aria-label="prev"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-active:-translate-x-2 transition-all duration-200 ease-linear">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>

                    </button>
                </div>
                <div class="absolute top-0 -right-4 h-full items-center hidden md:flex">
                    <button role="button" class="next px-2 py-2 rounded-full bg-neutral-100 text-neutral-900 group" aria-label="next"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-active:translate-x-2 transition-all duration-200 ease-linear">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <section>
            <div class="w-full mt-10 mb-20">
                <div class="container mx-auto px-4 xl:px-0 text-white mb-4">
                    <p class="text-xl uppercase">
                        <b>Tecnologia</b>
                    </p>
                </div>
                <div class="container mx-auto px-4 xl:px-0 mb-6">
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4 text-white mb-6">
                        <a href="#!" class="item">
                            <div class="rounded-xl w-auto h-52" style="background-image: url('https://m.elmostrador.cl/media/2016/12/coluision-del-confort.jpg'); background-position:center center; background-size: cover; background-repeat: no-repeat;">
                            </div>
                            <p class="truncate w-full px-2 py-1 text-xl">$1.500</p>
                            <p class="truncate w-full px-2 text-sm">Confort Noble 3 Hojas</p>
                        </a>
                        <a href="#!" class="item">
                            <div class="rounded-xl w-auto h-52" style="background-image: url('https://m.elmostrador.cl/media/2016/12/coluision-del-confort.jpg'); background-position:center center; background-size: cover; background-repeat: no-repeat;">
                            </div>
                            <p class="truncate w-full px-2 py-1 text-xl">$1.500</p>
                            <p class="truncate w-full px-2 text-sm">Confort Noble 3 Hojas</p>
                        </a>
                        <a href="#!" class="item">
                            <div class="rounded-xl w-auto h-52" style="background-image: url('https://m.elmostrador.cl/media/2016/12/coluision-del-confort.jpg'); background-position:center center; background-size: cover; background-repeat: no-repeat;">
                            </div>
                            <p class="truncate w-full px-2 py-1 text-xl">$1.500</p>
                            <p class="truncate w-full px-2 text-sm">Confort Noble 3 Hojas</p>
                        </a>
                        <a href="#!" class="item">
                            <div class="rounded-xl w-auto h-52" style="background-image: url('https://m.elmostrador.cl/media/2016/12/coluision-del-confort.jpg'); background-position:center center; background-size: cover; background-repeat: no-repeat;">
                            </div>
                            <p class="truncate w-full px-2 py-1 text-xl">$1.500</p>
                            <p class="truncate w-full px-2 text-sm">Confort Noble 3 Hojas</p>
                        </a>
                        <a href="#!" class="item">
                            <div class="rounded-xl w-auto h-52" style="background-image: url('https://m.elmostrador.cl/media/2016/12/coluision-del-confort.jpg'); background-position:center center; background-size: cover; background-repeat: no-repeat;">
                            </div>
                            <p class="truncate w-full px-2 py-1 text-xl">$1.500</p>
                            <p class="truncate w-full px-2 text-sm">Confort Noble 3 Hojas</p>
                        </a>
                        <a href="#!" class="item">
                            <div class="rounded-xl w-auto h-52" style="background-image: url('https://www.gasfiteralgarrobo.com/wp-content/uploads/2021/11/pic01.jpg'); background-position:center center; background-size: cover; background-repeat: no-repeat;">
                            </div>
                            <p class="truncate w-full px-2 py-1 text-xl">$10.500</p>
                            <p class="truncate w-full px-2 text-sm">Gasfiter a Domicilio</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="w-full mt-10 mb-20">
                <div class="container mx-auto px-4 xl:px-0 text-white mb-4">
                    <p class="text-xl uppercase">
                        <b>Otras Categorias</b>
                    </p>
                </div>
                <div class="container mx-auto px-4 xl:px-0 mb-6">
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4 text-white mb-6">
                        <a href="#!" class="item">
                            <div class="rounded-xl w-auto h-52" style="background-image: url('https://m.elmostrador.cl/media/2016/12/coluision-del-confort.jpg'); background-position:center center; background-size: cover; background-repeat: no-repeat;">
                            </div>
                            <p class="truncate w-full px-2 py-1 text-xl">$1.500</p>
                            <p class="truncate w-full px-2 text-sm">Confort Noble 3 Hojas</p>
                        </a>
                        <a href="#!" class="item">
                            <div class="rounded-xl w-auto h-52" style="background-image: url('https://m.elmostrador.cl/media/2016/12/coluision-del-confort.jpg'); background-position:center center; background-size: cover; background-repeat: no-repeat;">
                            </div>
                            <p class="truncate w-full px-2 py-1 text-xl">$1.500</p>
                            <p class="truncate w-full px-2 text-sm">Confort Noble 3 Hojas</p>
                        </a>
                        <a href="#!" class="item">
                            <div class="rounded-xl w-auto h-52" style="background-image: url('https://m.elmostrador.cl/media/2016/12/coluision-del-confort.jpg'); background-position:center center; background-size: cover; background-repeat: no-repeat;">
                            </div>
                            <p class="truncate w-full px-2 py-1 text-xl">$1.500</p>
                            <p class="truncate w-full px-2 text-sm">Confort Noble 3 Hojas</p>
                        </a>
                        <a href="#!" class="item">
                            <div class="rounded-xl w-auto h-52" style="background-image: url('https://m.elmostrador.cl/media/2016/12/coluision-del-confort.jpg'); background-position:center center; background-size: cover; background-repeat: no-repeat;">
                            </div>
                            <p class="truncate w-full px-2 py-1 text-xl">$1.500</p>
                            <p class="truncate w-full px-2 text-sm">Confort Noble 3 Hojas</p>
                        </a>
                        <a href="#!" class="item">
                            <div class="rounded-xl w-auto h-52" style="background-image: url('https://m.elmostrador.cl/media/2016/12/coluision-del-confort.jpg'); background-position:center center; background-size: cover; background-repeat: no-repeat;">
                            </div>
                            <p class="truncate w-full px-2 py-1 text-xl">$1.500</p>
                            <p class="truncate w-full px-2 text-sm">Confort Noble 3 Hojas</p>
                        </a>
                        <a href="#!" class="item">
                            <div class="rounded-xl w-auto h-52" style="background-image: url('https://www.gasfiteralgarrobo.com/wp-content/uploads/2021/11/pic01.jpg'); background-position:center center; background-size: cover; background-repeat: no-repeat;">
                            </div>
                            <p class="truncate w-full px-2 py-1 text-xl">$10.500</p>
                            <p class="truncate w-full px-2 text-sm">Gasfiter a Domicilio</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
@endsection
