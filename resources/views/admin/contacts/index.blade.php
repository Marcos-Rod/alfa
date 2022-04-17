@extends('adminlte::page')

@section('title', 'Contactos')

@section('content_header')
    <h1>Listado de Contactos</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th width="10px">#</th>
                        <th>Nombre</th>
                        <th>Datos de contacto</th>
                        <th>Datos de la cita</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{$contact->id}}</td>
                            <td>{{$contact->name}}</td>
                            <td>
                                <p class="mb-1"><strong>Correo:</strong>{{$contact->email}}</p>
                                
                                @if (isset($contact->phone))
                                    <p class="mb-1"><strong>Teléfono: </strong>{{$contact->phone}}</p>
                                @endif
                            </td>
                            <td>
                                @if (isset($contact->team->name))
                                    <p class="mb-1"><strong>Barbero: </strong>{{$contact->team->name}}</p>                                    
                                @endif
                                @if (isset($contact->service->title))
                                    <p class="mb-1"><strong>Servicio: </strong>{{$contact->service->title}}</p>                                    
                                @endif
                                @if (isset($contact->date))
                                    <p class="mb-1"><strong>Fecha de cita: </strong>{{$contact->date}}</p>                                    
                                @endif
                            </td>
                            <td width="10px" class="align-middle">
                                <a href="{{route('admin.contacts.edit', $contact)}}" class="btn btn-primary btn-sm">Responder</a>
                            </td>
                        </tr>                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop