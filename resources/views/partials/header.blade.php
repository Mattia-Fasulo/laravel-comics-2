<header>
    <div id="my-nav"  class="container">
        <div class="logo">
            <a href="#">
                <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="dc logo">
            </a>
        </div>
        <div class="navbar d-flex align-item-center">
            <nav>
                <ul class="d-flex justify-content-around align-content-center">
                    @foreach ($links['linkNav'] as $link)
                        <li><a href="#">{{$link['text']}}</a></li>
                    @endforeach
                </ul>
            </nav>
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
</header>
