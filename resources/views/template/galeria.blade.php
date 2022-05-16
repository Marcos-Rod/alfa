<div class="galeria py-5" id="galeria" style="background: url('{{ asset('img/bg-galeria.jpg') }}') no-repeat center; background-size: cover; background-attachment: fixed;">
    <div class="container">
        <div class="row pt-2">
            {!! $sections[4]->content !!}
            <div class="col-12">
                <div class="glide2 mt-5">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            @foreach ($gallery[0]->image as $item)
                                <li class="glide__slide">
                                    <div class="card-galeria">
                                        <img src="{{Storage::url($item->url)}}" alt="{{$item->name}}" class="img-cover" />
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>