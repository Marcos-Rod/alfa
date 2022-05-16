<div class="equipo py-5" id="equipo">
    <div class="container">
        <div class="row pt-2">
            {!! $sections[2]->content !!}            

            <div class="col-md-10 offset-md-1 mt-4">
            
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            @foreach ($team as $barber)
                                <li class="glide__slide p-4">
                                    <div class="card w-100 mx-auto">
                                        <img src="{{Storage::url($barber->image->url)}}" alt="{{$barber->name}}" class="img-cover" />
                                        <div class="card-description">
                                            <h3 class="text-white fw-normal">{{$barber->name}}</h3>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>

            <p class="mt-4 text-center"> <a href="#contacto" class="btn btn-agenda">Agendar una cita</a> </p>
        </div>
    </div>
</div>
