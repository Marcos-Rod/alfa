{!! Form::open(['route' => 'contact.submit']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('mail', 'Correo') !!}
        {!! Form::email('mail', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('phone', 'WhatsApp') !!}
        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
    </div>

    <div>
        {!! Form::label('team', 'Barbero') !!}
        {!! Form::select('team_id', $teams, null, ['class' => 'form-control']) !!}
    </div>
    <div>
        {!! Form::label('service', 'Servicio') !!}
        {!! Form::select('service_id', $services, null, ['class' => 'form-control']) !!}
    </div>
    <div>
        {!! Form::label('date', 'Fecha') !!}
        {!! Form::date('date', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Agendar', ['class' => 'btn btn-agendar']) !!}
    
{!! Form::close() !!}