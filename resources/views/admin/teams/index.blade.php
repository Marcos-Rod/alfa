@extends('adminlte::page')

@section('title', 'Equipo')

@section('content_header')
    <h1>Listado del equipo</h1>
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
                <a href="{{route('admin.teams.create')}}" class="btn btn-secondary mb-3">Nuevo integrante</a>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="10px">#</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams as $team)
                            <tr>
                                <td>{{$team->id}}</td>
                                <td>{{$team->name}}</td>
                                <td>{{$team->description}}</td>
                                <td width="10px">
                                    <a href="{{route('admin.teams.edit', $team)}}" class="btn btn-primary btn-sm ">Editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{route('admin.teams.destroy', $team)}}" method="POST">
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
