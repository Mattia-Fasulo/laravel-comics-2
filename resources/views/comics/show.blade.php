@extends('layouts.app')
@section('content')
    <section class="jumbo">

    </section>
    <div class="blu-bar">
        <div class="comic-cover">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>
    </div>

    <section id="container-details-top" class="container mt-5">
        <div class="row">
            <div class="col-7">
                <h1>{{ $comic->title }}</h1>
                <p>{{ $comic->description }}</p>
            </div>
            <div class="img-details col-5 d-flex flex-column align-items-end justify-content-sm-start
            ">
                <span>advirsment</span>
                <img src="{{ Vite::asset('/resources/img/adv.jpg') }}" alt="">
            </div>
        </div>
    </section>

    <section id="container-details-bot" >
        <div class="container">
            <div class="table-left">
                <table class="table">
                    <thead>
                        <h3 scope="col">Talent</h3>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Art by:</th>
                            <td>José Luis García-López,
                                Clay Mann,
                                Rafael Albuquerque,
                                Patrick Gleason,
                                Dan Jurgens,
                                Joe Shuster,
                                Neal Adams,
                                Curt Swan,
                                John Cassaday,
                                Olivier Coipel,
                                Jim Lee</td>
                        </tr>
                        <tr>
                            <th scope="row">Written by:</th>
                            <td>Brad Meltzer,
                                Tom King,
                                Scott Snyder,
                                Geoff Johns,
                                Brian Michael Bendis,
                                Paul Dini,
                                Louise Simonson,
                                Richard Donner,
                                Marv Wolfman,
                                Peter J. Tomasi,
                                Dan Jurgens,
                                Jerry Siegel,
                                Paul Levitz</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-right">
                <table class="table">
                    <thead>
                        <h3 scope="col">Specs</h3>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Series:</th>
                            <td class="text-uppercase">{{$comic->series}}</td>
                        </tr>
                        <tr>
                            <th scope="row">U.S. Price:</th>
                            <td>{{$comic->price}}</td>
                        </tr>
                        <tr>
                            <th scope="row">On Sale Date:</th>
                            <td>{{$comic->sale_date}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
@endsection
