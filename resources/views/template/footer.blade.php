<div class="contacto py-5" id="contacto" style="background: url('{{ asset('img/bg-contacto.jpg') }}') no-repeat center; background-size: cover; background-attachment: fixed;">
    <div class="container">
        <div class="row gap-30 py-4">
            <div class="col-md-6 px-4">
                <div class="bg-bco h-100 p-4">
                    <h2 class="mb-4">Contáctanos</h2>
                    <p>
                        <a href="https://wa.me/525555555555" target="_blank">
                            <img src="{{asset('img/ico-whatsapp.png')}}" alt="WhatsApp" /> 55 5555 5555
                        </a>
                    </p>
                    <p>
                        <a href="mailto:contacto@alfa-barber.com" target="_blank">
                            <img src="{{asset('img/ico-gmail.png')}}" alt="Correo" /> contacto@alfa-barber.com
                        </a>
                    </p>
                    <p>
                        <a href="https://goo.gl/maps/ayLomtxX4Eue8oHy6" target="_blank">
                            <img src="{{asset('img/ico-maps.png')}}" alt="Ubicación" /> Av Sindicalismo 159, Plateros, 56356 Chimalhuacán, Méx.
                        </a>
                    </p>
                    <h2 class="mb-4 fs-4">Síguenos en nuestras redes</h2>
                    <div class="d-flex gap-3">
                        <a href="www.facebook.com">
                            <img src="{{asset('img/ico-facebook-2.png')}}" alt="Facebook" />
                        </a>
                        <a href="www.instagram.com">
                            <img src="{{asset('img/ico-instagram-2.png')}}" alt="Instagram" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 px-4">
                <div class="bg-bco h-100 p-4">
                    <h2 class="mb-3">Agenda tu cita</h2>
                    @if (session('status'))
                        <div class="alert alert-{{session('type')}}">
                            <p class="fw-normal mb-0">
                                {{session('info')}}
                            </p>
                        </div>
                    @endif
                    @include('partials.contacto')
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer py-3">
    <div class="container">
        <div class="row">
            <div class="d-flex align-items-center justify-content-evenly">
                <div>
                    <a href="{{route('home.index', '#inicio')}}">www.alfa-barber.com</a>
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