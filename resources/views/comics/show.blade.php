@extends('layouts.app')
@section('content')

    <section class="jumbo">

    </section>
    <div class="blu-bar">
        <div class="comic-cover">
            <img src="{{$comic['thumb']}}" alt="">
        </div>
    </div>

    <section id="container-details" class="container mt-5">
        <div class="row">
            <div class="col-7">
                <h2>{{$comic->title}}</h2>
                <p>{{$comic->description}}</p>
            </div>
            <div class="img-details col-5 d-flex flex-column align-items-end justify-content-sm-start
            ">
                <span>advirsment</span>
                <img src="{{Vite::asset('/resources/img/adv.jpg')}}" alt="">
            </div>
        </div>

    </section>
@endsection
