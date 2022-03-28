<div class="offset-md-3 col-md-6 mb-3">
<div class="row">
        <div class="col d-flex align-items-center justify-content-center flex-column text-center">
            <div class="form-group">
                {!! Form::label('file', 'Imagen') !!}
                {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                {{-- {!! Form::hidden('url', $service->image->url) !!} --}}
                
                @error('image')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <p>Selecciona una imagen no mayor de 200kb</p>
        </div>
        <div class="col">
            <div class="shadow-sm image-wrapper">
                @isset ($service->image)
                    <img src="{{Storage::url($service->image->url)}}" alt="{{$service->title}}" class="img-fluid" id="picture" />                    
                @else
                    <img src="{{Storage::url('images/alfa-barber-primary.png')}}" alt="" class="img-fluid" id="picture" />                    
                @endisset
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('title', 'Titulo del servicio') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}

    @error('title')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}

    @error('slug')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('content', 'Contenido') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('status', 'Estado') !!}
    {!! Form::select('status', ['1' => 'Publicado', '2' => 'Borrador'], null, ['class' => 'form-control']) !!}
</div>