<div class="hd-contactos d-flex align-items-center text-white fs-6"  id="inicio">
    <div class="container">
        <div class="row">
            <div class="d-flex flex-wrap flex-column flex-sm-row align-items-center justify-content-center justify-content-md-between gap-3">
                <div class="">
                    <p class="m-0">
                        <a href="">
                            <img src="{{asset('img/ico-ubicacion.png')}}" alt="Ubicación" class="img-fluid me-1" />
                            Ubicación
                        </a>
                    </p>
                </div>
                <div class="">
                    <a href="">
                        <img src="{{asset('img/ico-correo.png')}}" alt="Correo" class="img-fluid me-1" />
                        contacto@alfa-barber.com
                    </a>
                </div>
                <div class="">
                    <a href="">
                        <img src="{{asset('img/ico-telefono.png')}}" alt="teléfono" class="img-fluid me-1" />
                        55 5555 5555
                    </a>
                </div>
                <div class="d-flex gap-2">
                    <a href="www.facebook.com">
                        <img src="{{asset('img/ico-facebook.png')}}" alt="Facebook">
                    </a>
                    <a href="www.instagram.com">
                        <img src="{{asset('img/ico-instagram.png')}}" alt="Instagram">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="banner position-relative">
    <div class="menu-hd w-100" id="hd-menu">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 text-lg-start text-center item">
                    <a href="{{route('home.index')}}">
                        <img src="{{Storage::url($configuracion->image->url)}}" alt="{{$configuracion->name_business}}" class="img-fluid" width="200" />
                    </a>
                </div>
                <div class="col-lg-6 order-3 order-lg-2 align-self-center">
                    @livewire('navigation')
                </div>
                <div class="col-lg-3 text-lg-end text-center order-2 order-lg-3 mt-3 mt-lg-0 align-self-center item">
                    <p class="mb-0">
                        <a href="#contacto" class="btn btn-agenda-hd px-4">Agenda tu cita</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    @livewire('home-slide')
</div>