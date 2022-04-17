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
            <form action="{{route('admin.contacts.store')}}" method="post">

                <div class="form-group">
                    <label for="asunto">Asunto</label>
                    <input type="text" id="asunto" name="asunto" class="form-control" value="Confirmación de cita">
                </div>

                <div class="form-group">
                    <label for="asunto">Destinatario</label>
                    <input type="mail" id="asunto" name="asunto" class="form-control" value="{{$contact->mail}}">
                </div>

                <div class="form-group">
                    <label for="response">Respuesta</label>
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