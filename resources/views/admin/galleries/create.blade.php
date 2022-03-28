@extends('adminlte::page')

@section('title', 'Galerías')

@section('content_header')
    <h1>Crear de Galería</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.galleries.store']) !!}
            <div class="form-group">
                {!! Form::label('title', 'Titulo de la galería') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                
                @error('title')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('slug', 'Slug de la galería') !!}
                {!! Form::text('slug', null, ['class' => 'form-control']) !!}

                @error('slug')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            {!! Form::submit('Crear Galería', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>


    <script>
        //slug
        $(document).ready( function() {
            $("#title").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endsection