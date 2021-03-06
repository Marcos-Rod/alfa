@extends('adminlte::page')

@section('title', 'Generales')

@section('content_header')
    <h1>Configuraciones Generales</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @else
        
    @endif
    
    <div class="card">
        <div class="card-body">
            {!! Form::model($configuration[0], ['route' => ['admin.configuration.update', $configuration[0]], 'method' => 'put', 'files' => true]) !!}

                <div class="row">
                    <div class="offset-md-2 col-md-4 d-flex align-items-center justify-content-center flex-column text-center">
                        <div class="form-group">
                            {!! Form::label('logo', 'Logo principal') !!}
                            {!! Form::file('logo', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                            
                            @error('logo')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <p>Selecciona una imagen no mayor de 200kb</p>
                    </div>
                    <div class="col-md-4">
                        <div class="image-wrapper">
                            @if (!empty($configuration[0]->image->url))
                                <img src="{{Storage::url($configuration[0]->image->url)}}" alt="{{$configuration[0]->name_business}}" class="img-fluid" id="picture" />                            
                            @else
                                <img src="{{asset('img/default-600-x-300.jpg')}}" alt="{{$configuration[0]->name_business}}" class="img-fluid" id="picture" />                            
                            @endif

                        </div>
                    </div>
                </div>
               
                
                <div class="form-group">
                    {!! Form::label('name_business', 'Nombre de la empresa') !!}
                    {!! Form::text('name_business', null, ['class' => 'form-control']) !!}

                    @error('name_business')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    {!! Form::label('mail', 'Correo') !!}
                    {!! Form::text('mail', null, ['class' => 'form-control']) !!}

                    @error('mail')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    {!! Form::label('mail_response', 'Correo de respuesta') !!}
                    {!! Form::textarea('mail_response', null, ['class' => 'form-control']) !!}

                    @error('mail_response')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('seo_term', 'T??rmino SEO') !!}
                    {!! Form::text('seo_term', null, ['class' => 'form-control']) !!}

                    @error('seo_term')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    {!! Form::label('meta_keywords', 'Meta Etiquetas') !!}
                    {!! Form::text('meta_keywords', null, ['class' => 'form-control']) !!}

                    @error('meta_keywords')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    {!! Form::label('meta_description', 'Meta descripci??n') !!}
                    {!! Form::text('meta_description', null, ['class' => 'form-control']) !!}

                    @error('meta_description')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    {!! Form::label('analytics', 'C??digo analytics') !!}
                    {!! Form::text('analytics', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('captcha_public', 'Clave publica') !!}
                    {!! Form::text('captcha_public', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('captcha_private', 'Clave privada') !!}
                    {!! Form::text('captcha_private', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary float-right']) !!}

            
            {!! Form::close() !!}
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
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25))
        }
    </style>
@stop

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>

    <script>
        /* Ck editor */

        ClassicEditor
            .create( document.querySelector( '#mail_response' ) )
            .catch( error => {
                console.error( error );
            } );
        

        //Cambiar imagen
        document.getElementById("logo").addEventListener('change', cambiarImagen);

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