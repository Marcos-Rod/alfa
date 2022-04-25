<div class="row">
    <div class="col d-flex align-items-center justify-content-center flex-column text-center">
        <div class="form-group">
            {!! Form::label('image', 'Imagen') !!}
            {!! Form::file('image', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            
            @error('image')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <p>Selecciona una imagen no mayor de 200kb</p>
    </div>
    <div class="col">
        <div class="shadow-sm image-wrapper">
            <img src="{{asset('img/default-1920-x-600.jpg')}}" alt="{{$gallery->title}}" class="img-fluid" id="picture" />
        </div>
    </div>
</div>
<div class="form-group">
    {!! Form::label('title', 'Titulo de la imagen') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Descripción de la imagen') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('link', 'Enlace de la imagen') !!}
    {!! Form::text('link', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('position', 'Posición de la imagen') !!}
    {!! Form::text('position', '1', ['class' => 'form-control', 'placeholder' => '1']) !!}
</div>