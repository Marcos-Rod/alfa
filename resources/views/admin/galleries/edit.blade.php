@extends('adminlte::page')

@section('title', 'Galerías')

@section('content_header')
    <h1>Editar de Galería {{$gallery->title}}</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="offset-md-3 col-md-6 shadow p-3 rounded-lg">
                {!! Form::model(null, ['route' => ['admin.galleries.update', $gallery], 'method' => 'put', 'files' => true]) !!}

                    @include('admin.galleries.partials.form')

                    <div class="text-center">
                        {!! Form::submit('Agregar imagen', ['class' => 'btn btn-warning']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
            <div class="row mt-5">                
                <h2 class="mx-auto mb-4">Listado de imágenes</h2>
            </div>
            <div class="row">
                @foreach ($gallery->image as $image)
                <div class="col-md-3 mb-3">
                    <div class="shadow-sm image-wrapper">
                        <img src="{{Storage::url($image->url)}}" alt="{{$image->title}}" class="img-fluid" />
                    </div>
                    
                    <h4 class="mt-2">{{$image->title}}</h4>
                    <p class="mb-1">{{$image->description}}</p>
                    <p class="mb-1">{{$image->link}}</p>
                    <p class="mb-1">{{$image->position}}</p>
                    <p>
                        <a href="{{route('admin.galleryimages.edit', $image)}}" class="btn btn-primary btn-sm ">Editar</a>
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@stop

@section('css')
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
            overflow: hidden;
        }
        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@stop

@section('js')
    <script>
        //Cambiar imagen
        document.getElementById("image").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };
            reader.readAsDataURL(file);
        }
    </script>
@endsection
