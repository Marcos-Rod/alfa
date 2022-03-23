@extends('adminlte::page')

@section('title', 'Secciones')

@section('content_header')
    <h1>Editar Seccion</h1>
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
            {!! Form::model($section, ['route' => ['admin.sections.update', $section], 'method' => 'put']) !!}

                @include('admin.sections.partials.form')

                {!! Form::submit('Actualizar información', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop

@section('js')

    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
            $("#title").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endsection