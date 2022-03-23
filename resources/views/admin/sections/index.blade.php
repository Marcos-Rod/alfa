@extends('adminlte::page')

@section('title', 'Secciones')

@section('content_header')
    <h1>Secciones</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif
    
    <div class="card">
        <div class="card-body">
            <div>
                <a href="{{route('admin.sections.create')}}" class="btn btn-default">Nueva sección</a>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th width="10px">#</th>
                        <th>Sección</th>
                        <th>URL</th>
                        <th>Estatus</th>
                        <th {{-- colspan="2" --}}>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sections as $section)
                        <tr>
                            <td>{{$section->id}}</td>
                            <td>{{$section->title}}</td>
                            <td>{{$section->slug}}</td>
                            <td>
                                @if ($section->status == '1')
                                    Publicado
                                @else
                                    Borrador
                                @endif
                            </td>
                            <td width="10px">
                                <a href="{{route('admin.sections.edit', $section)}}" class="btn btn-primary btn-sm ">Editar</a>
                            </td>
                            {{-- <td width="10px">
                                <form action="{{route('admin.sections.archive', $section)}}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <button type="submit" class="btn btn-danger btn-sm ">Eliminar</button>
                                </form>
                            </td> --}}
                        </tr>                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop