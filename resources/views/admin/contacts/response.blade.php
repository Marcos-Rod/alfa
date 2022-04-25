@extends('adminlte::page')

@section('title', 'Contactos')

@section('content_header')
    <h1>Respuesta a {{$contact->name}}</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.response.submit')}}" method="post">
                @csrf

                <div class="form-group">
                    <label for="asunto">Asunto</label>
                    <input type="text" id="asunto" name="asunto" class="form-control" value="Confirmación de cita">

                    @error('asunto')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="mail">Destinatario</label>
                    <input type="mail" id="mail" name="mail" class="form-control" value="{{$contact->mail}}">

                    @error('mail')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="response">Respuesta</label>
                    @error('response')
                        <span class="text-danger"><br />La respuesta es obligatoria</span>
                    @enderror
                    <textarea name="response" id="response" class="form-control"></textarea>
                    
                </div>
            
                <button type="submit" class="btn btn-success">Responder</button>
            </form>
        </div>
    </div>

@stop

@section('js')

    <script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>

    <script>
        CKEDITOR.replace( 'response', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            customConfig: '/js/ckeditor_settings/config.js'
        } );
        
    </script>
@endsection