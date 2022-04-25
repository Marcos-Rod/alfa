<nav class="navbar navbar-expand-lg navbar-light m-auto">
    <div class="container-fluid justify-content-end text-center">
        {{-- <a class="navbar-brand" href="#">Navbar</a> --}}

        <button class="navbar-toggler border-white text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
              </svg>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                @foreach ($sections as $section)
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#{{$section->slug}}">{{$section->title}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        
    </div>
</nav>