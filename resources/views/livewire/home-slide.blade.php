<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($gallery[0]->image as $item)        
            <div class="carousel-item sl-alto @if ($loop->first) active @endif" style="background: url({{Storage::url($item->url)}}) center; background-size: cover;">
                <div class="content-slide px-5 container d-flex flex-column justify-content-center align-items-center h-100 text-center">
                    @if (!empty($item->title))
                        <h2 class="text-white mb-4">
                            {{$item->title}}                            
                        </h2>
                     @endif
                     @if (!empty($item->description))                            
                        <h3 class="text-white">
                            {{$item->description}}
                        </h3>
                     @endif
                     @if (!empty($item->link))
                        <p class="mt-4"><a href="{{$item->link}}" class="btn btn-slide">Solicita Información</a></p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="" aria-hidden="true"><img src="{{asset('img/sl-left.png')}}" alt="Previous"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="" aria-hidden="true"><img src="{{asset('img/sl-right.png')}}" alt="Next"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
