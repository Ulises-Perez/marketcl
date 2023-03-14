@extends('layouts.plantilla')

@section('title', 'MarketCL')

@section('content')

    <section id="adviser_01" class="w-full mt-10">
        <div class="container mx-auto px-4 xl:px-0 text-white">
            <div class="box-list-box rounded-xl">
                <div class="box-list-shadow bg-black bg-opacity-50 w-full h-full rounded-xl ">
                    <div class="box-list h-full w-full flex flex-col justify-center items-start px-10 py-20">
                        <h1 class="text-3xl mb-1 name-articles-title">Gasfiter a Domicilio</h1>
                        <p class="mb-6">Arreglo de todo tipo de cosas, hasta la suegra.</p>
                        <button class="py-4 px-8 text-white font-bold uppercase text-xs rounded-md bg-gray-200 text-zinc-800">
                            Ver servicio
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="w-full py-20">
            <div class="container mx-auto px-4 xl:px-0 text-white">
                <p class="text-2xl md:text-3xl tracking-wide name-articles-title">
                    Articulos Top <i class="fas fa-fire text-red-500"></i>
                </p>
                <p class="text-sm text-red-400">Solo por Hoy</p>
            </div>
            <div class="container mx-auto px-4 xl:px-0 section">
                <div class="section__item rounded-xl flex flex-col my-2 relative">
                    <img class="rounded-xl" src="https://m.media-amazon.com/images/I/51kGpDAjI4L._AC_SX522_.jpg" alt="">
                    <div class="absolute top-0 right-0">
                        <p class="bg-zinc-900 rounded-xl m-2 p-2 text-lg text-white text-center">$79.990</p>
                    </div>
                    <div class="absolute inset-x-0 bottom-0 p-2">
                        <p class="backdrop-blur-md bg-zinc-900 bg-opacity-50 text-white rounded-xl text-base text-center p-2 truncate">Iphone 4k</p>
                    </div>
                </div>
                <div class="section__item rounded-xl flex flex-col my-2 relative">
                    <img class="rounded-xl" src="https://home.ripley.cl/store/Attachment/WOP/D347/2000378718727/2000378718727_2.jpg" alt="">
                    <div class="absolute top-0 right-0">
                        <p class="bg-zinc-900 rounded-xl m-2 p-2 text-lg text-white text-center">$79.990</p>
                    </div>
                    <div class="absolute inset-x-0 bottom-0 p-2">
                        <p class="backdrop-blur-md bg-zinc-900 bg-opacity-50 text-white rounded-xl text-base text-center p-2 truncate">Audiofonos GAMER 4K</p>
                    </div>
                </div>
                <div class="section__item rounded-xl flex flex-col my-2 relative">
                    <img class="rounded-xl" src="https://tork.news/__export/1635785267573/sites/tork/img/2021/11/01/lamborghini-sian-in-purple-green-and-white-side-low-photo-by-juan-pablo-saenz.jpg_945838109.jpg" alt="">
                    <div class="absolute top-0 right-0">
                        <p class="bg-zinc-900 rounded-xl m-2 p-2 text-lg text-white text-center">$79.990</p>
                    </div>
                    <div class="absolute inset-x-0 bottom-0 p-2">
                        <p class="backdrop-blur-md bg-zinc-900 bg-opacity-50 text-white rounded-xl text-base text-center p-2 truncate">Auto Lamborghini</p>
                    </div>
                </div>
                <div class="section__item rounded-xl flex flex-col my-2 relative">
                    <img class="rounded-xl" src="https://www.hites.com/dw/image/v2/BDPN_PRD/on/demandware.static/-/Sites-mastercatalog_HITES/default/dw6cf7443d/images/original/pim/839831001/839831001_1.jpg?sw=1000&sh=1000" alt="">
                    <div class="absolute top-0 right-0">
                        <p class="bg-zinc-900 rounded-xl m-2 p-2 text-lg text-white text-center">$79.990</p>
                    </div>
                    <div class="absolute inset-x-0 bottom-0 p-2">
                        <p class="backdrop-blur-md bg-zinc-900 bg-opacity-50 text-white rounded-xl text-base text-center p-2 truncate">Aspiradora TH-2206BL</p>
                    </div>
                </div>
                <div class="section__item rounded-xl flex flex-col my-2 relative">
                    <img class="rounded-xl" src="https://www.hites.com/dw/image/v2/BDPN_PRD/on/demandware.static/-/Sites-mastercatalog_HITES/default/dw6cf7443d/images/original/pim/839831001/839831001_1.jpg?sw=1000&sh=1000" alt="">
                    <div class="absolute top-0 right-0">
                        <p class="bg-zinc-900 rounded-xl m-2 p-2 text-lg text-white text-center">$79.990</p>
                    </div>
                    <div class="absolute inset-x-0 bottom-0 text-center">
                        <p class="backdrop-blur-md bg-zinc-900 bg-opacity-50 text-white rounded-b-xl text-base py-2 truncate">Aspiradora TH-2206BL</p>
                    </div>
                </div>
                <div class="section__item rounded-xl">Item 2</div>
                <div class="section__item rounded-xl">Item 3</div>
                <div class="section__item rounded-xl">Item 4</div>
                <div class="section__item rounded-xl">Item 5</div>
                <div class="section__item rounded-xl">Item 6</div>
                <div class="section__item rounded-xl">Item 7</div>
                <div class="section__item rounded-xl">Item 8</div>
                <div class="section__item rounded-xl">Item 9</div>
                <div class="section__item rounded-xl">Item 10</div>
            </div>
        </div>
    </section>

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
    
@endsection
