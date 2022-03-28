@extends('adminlte::page')

@section('title', 'Servicios')

@section('content_header')
    <h1>Listado de servicios</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="row">
                <a href="{{route('admin.services.create')}}" class="btn btn-secondary">Nuevo servicio</a>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="10px">#</th>
                            <th>Galería</th>
                            <th>URL</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td>{{$service->id}}</td>
                                <td>{{$service->title}}</td>
                                <td>{{$service->slug}}</td>
                                <td width="10px">
                                    <a href="{{route('admin.services.edit', $service)}}" class="btn btn-primary btn-sm ">Editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{route('admin.services.destroy', $service)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
    
                                        <button type="submit" class="btn btn-danger btn-sm ">Eliminar</button>
                                    </form>
                                </td>
                            </tr>                        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
