<div class="servicios py-5" id="servicios" style="background: url('{{ asset('img/bg-servicios.jpg') }}') no-repeat center; background-size: cover; background-attachment: fixed;">
  <div class="container">
    <div class="row pt-2">
      {!! $sections[3]->content !!}
    </div>
    <div class="row mt-5">
      <div class="col-lg-3 pe-lg-5 mb-4 mb-lg-0">
        <ul class="nav flex-column gap-3 tab-servicios" role="tablist">
          @foreach ($servicios as $servicio)
          <li class="nav-item" role="presentation">
            <button class="@if($loop->first) active @endif"  data-bs-toggle="tab" data-bs-target="#{{$servicio->slug}}"  aria-controls="{{$servicio->slug}}" aria-selected="true">
              {{$servicio->title}}
            </button>
          </li>
          @endforeach
        </ul>
      </div>
      <div class="col-lg-9">
        <div class="tab-content">
          @foreach ($servicios as $servicio)
            <div class="tab-pane fade @if($loop->first) active  in show @endif" id="{{$servicio->slug}}" role="tabpanel" aria-labelledby="{{$servicio->slug}}-tab">
              <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center gap-4 text-center text-lg-start">
                <div class="w-100">
                  {!!$servicio->content!!}
                  <p><a href="#contacto" class="btn btn-servicios px-4 mt-3">Agendar una cita</a></p>
                </div>
                @if ($servicio->image)
                  <div class="w-100">
                    <a href="#contacto">
                      <img src="{{Storage::url($servicio->image->url)}}" alt=""{{$servicio->title}} class="img-fluid img-servicio" />
                    </a>
                  </div>                    
                @endif
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
