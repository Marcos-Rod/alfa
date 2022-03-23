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
                    <div class="col d-flex align-items-center justify-content-center flex-column text-center">
                        <div class="form-group">
                            {!! Form::label('logo', 'Logo principal') !!}
                            {!! Form::file('logo', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                            
                            @error('logo')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <p>Selecciona una imagen no mayor de 200kb</p>
                    </div>
                    <div class="col">
                        {{-- {{print_r($configuration[0]->image->url)}} --}}
                        @if (!empty($configuration[0]->image->url))
                            <img src="{{Storage::url($configuration[0]->image->url)}}" alt="{{$configuration[0]->name_business}}" class="img-fluid" id="picture" />                            
                        @else
                            <img src="{{Storage::url('images/alfa-barber-primary.png')}}" alt="{{$configuration[0]->name_business}}" class="img-fluid" id="picture" />                            
                        @endif
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
                    {!! Form::label('seo_term', 'Término SEO') !!}
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
                    {!! Form::label('meta_description', 'Meta descripción') !!}
                    {!! Form::text('meta_description', null, ['class' => 'form-control']) !!}

                    @error('meta_description')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    {!! Form::label('analytics', 'Código analytics') !!}
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

@section('js')
    <script>
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