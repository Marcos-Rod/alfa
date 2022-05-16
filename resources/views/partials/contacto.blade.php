{!! Form::open(['route' => ['contact.submit', '#contacto']]) !!}
<div class="row">
    
    <div class="form-group col-md-12  mb-3">
        {!! Form::label('name', 'Nombre', ['class' => 'visually-hidden']) !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}

        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    
    <div class="form-group col-md-12 mb-3">
        {!! Form::email('mail', null, ['class' => 'form-control', 'placeholder' => 'Correo']) !!}

        @error('mail')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    
    <div class="form-group col-md-12 mb-3">
        {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'WhatsApp']) !!}
    </div>

    <div class="form-group col-md-6 mb-3">
        {!! Form::select('team_id', $teams, null, ['class' => 'form-control', 'placeholder' => 'Barbero']) !!}

        @error('team_id')
        <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
    <div class="form-group col-md-6 mb-3">
        {!! Form::select('service_id', $services, null, ['class' => 'form-control', 'placeholder' => 'Servicio']) !!}

        @error('service_id')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group col-md-12 mb-3">
        {!! Form::date('date', null, ['class' => 'form-control', 'placeholder' => 'Fecha']) !!}

        @error('date')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="w-100 text-center">
        {!! Form::submit('Agendar', ['class' => 'btn btn-agenda px-5']) !!}
    </div>

</div>
    
{!! Form::close() !!}