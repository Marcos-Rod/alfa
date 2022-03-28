@extends('adminlte::page')

@section('title', 'Galerías')

@section('content_header')
    <h1>Listado de Galerías</h1>
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
                <a href="{{route('admin.galleries.create')}}" class="btn btn-secondary">Nueva galería</a>
            </div>
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
                    @foreach ($galleries as $gallery)
                        <tr>
                            <td>{{$gallery->id}}</td>
                            <td>{{$gallery->title}}</td>
                            <td>{{$gallery->slug}}</td>
                            <td width="10px">
                                <a href="{{route('admin.galleries.edit', $gallery)}}" class="btn btn-primary btn-sm ">Editar</a>
                            </td>
                            <td width="10px">
                               {{--  <form action="{{route('admin.galleries.archive', $gallery)}}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <button type="submit" class="btn btn-danger btn-sm ">Eliminar</button>
                                </form> --}}
                            </td>
                        </tr>                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop