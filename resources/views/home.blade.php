@extends('layouts.app')

@section('page-title', 'Comics')

@section('content')

    {{-- jumbo --}}
    <section class="jumbo">

    </section>

    {{-- current series --}}
    <section id="current-series" class="current-series">
        <div class="title-current-series">
            <h2>Current series</h2>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                        </div>
                        <div class="card-text">
                            <h4>{{ $comic['series'] }}</h4>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <div class="container">
            <div class="row">
                <button type="button" class="btn-current-series">Load More</button>
            </div>
        </div>
    </section>

    {{-- menu section --}}
    <section id="menu-section">
        <div class="container">
            <ul>
                @foreach ($links['linkMenu'] as $link)
                    <li>
                    <div class="img-menu">
                        <a href="{{$link['url']}}"><img src="{{Vite::asset($link['img'])}}" alt="{{$link['title']}}"></a>
                    </div>
                    <div class="title-menu">
                        <a href="{{$link['url']}}">{{ $link['title'] }}</a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </section>


@endsection
