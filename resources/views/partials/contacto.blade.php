{!! Form::open(['contacto.envia']) !!}

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

    {!! Form::submit('Agendar', ['class' => 'btn btn-agendar']) !!}
    
{!! Form::close() !!}