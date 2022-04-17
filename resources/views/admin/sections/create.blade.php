@extends('adminlte::page')

@section('title', 'Secciones')

@section('content_header')
    <h1>Crear sección</h1>
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

            {!! Form::open(['route' => 'admin.sections.store']) !!}

                @include('admin.sections.partials.form')

                {!! Form::submit('Crear sección', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
            
        </div>
    </div>

@stop

@section('js')

    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>

    <script>
        //slug
        $(document).ready( function() {
            $("#title").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
        
        CKEDITOR.replace( 'content', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            customConfig: '/js/ckeditor_settings/config.js'
        } );

        
        
    </script>
@endsection