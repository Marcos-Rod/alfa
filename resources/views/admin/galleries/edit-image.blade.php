@extends('adminlte::page')

@section('title', 'Galerías')

@section('content_header')
    <h1>Editar Imagen {{$image->title}}</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="offset-md-2 col-md-8 ">
                {!! Form::model($image, ['route' => ['admin.galleryimages.update', $image], 'method' => 'put', 'files' => true]) !!}
                    <div class="row">
                        <div class="col d-flex align-items-center justify-content-center flex-column text-center">
                            <div class="form-group">
                                {!! Form::label('image', 'Imagen') !!}
                                {!! Form::file('image', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                                {!! Form::hidden('url') !!}
                                
                                @error('image')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <p>Selecciona una imagen no mayor de 200kb</p>
                        </div>
                        <div class="col">
                            <div class="shadow-sm image-wrapper">
                                <img src="{{Storage::url($image->url)}}" alt="{{$image->title}}" class="img-fluid" id="picture" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('title', 'Titulo') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('description', 'Descripción') !!}
                        {!! Form::text('description', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('link', 'Enlace') !!}
                        {!! Form::text('link', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('position', 'Posición') !!}
                        {!! Form::text('position', null, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('Guardar cambios', ['class' => 'btn btn-success']) !!}
                {!! Form::close() !!}
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