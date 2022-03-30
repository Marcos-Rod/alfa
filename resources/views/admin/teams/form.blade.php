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
                    @isset ($team->image)
                        <img src="{{Storage::url($team->image->url)}}" alt="{{$team->name}}" class="img-fluid" id="picture" />                    
                    @else
                        <img src="{{Storage::url('images/alfa-barber-primary.png')}}" alt="" class="img-fluid" id="picture" />                    
                    @endisset
                </div>
            </div>
        </div>
    </div>
<div class="col-md-12">
    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Descripción') !!}
        {!! Form::text('description', null, ['class' => 'form-control']) !!}
    </div>

</div>