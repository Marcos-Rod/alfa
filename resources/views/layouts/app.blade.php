<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

        <title>{{$configuracion->name_business}}</title>

        <meta name="keywords" content="{{$configuracion->meta_keywords}}">

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link href="{{asset('vendor/glide-3.4.1/dist/css/glide.core.css')}}" rel="stylesheet">

        {{-- @livewireStyles --}}

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <header>
            @include('template.header')
        </header>
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <footer>
            @include('template.footer')
        </footer>

        @stack('modals')

        @livewireScripts

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script type="text/javascript" src="{{asset('js/nav.js')}}"></script><!-- Menú active al dar scroll-->
        <script src="{{asset('js/user.js')}}"></script>

        <script type="text/javascript" src="{{asset('vendor/glide-3.4.1/dist/glide.js')}}"></script>
        <script>
            new Glide('.glide', {
                type: 'carousel',
                perView: 3,
                gap: 40,
                breakpoints:{
                    991:{
                        perView: 2,
                    },
                    576:{
                        perView: 1
                    }
                }
            }).mount()
            new Glide('.glide2', {
                type: 'carousel',
                autoplay: 4000,
                perView: 4,
                gap: 20,
                breakpoints:{
                    1200:{
                        perView: 3,
                    },
                    991:{
                        perView: 2,
                    },
                    576:{
                        perView: 1
                    }
                }
            }).mount()
        </script>

        <!-- GetButton.io widget -->
        <script type="text/javascript">
            (function () {
                var options = {
                    whatsapp: "525512345678", // WhatsApp number
                    call_to_action: "Envíanos un mensaje", // Call to action
                    button_color: "#FF6550", // Color of button
                    position: "right", // Position may be 'right' or 'left'
                };
                var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
                s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
                var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
            })();
        </script>
        <!-- /GetButton.io widget -->
    </body>
</html>
