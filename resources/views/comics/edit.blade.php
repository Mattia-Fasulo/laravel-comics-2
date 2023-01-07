@extends('layouts.app')
@section('content')
    <section class="jumbo">

    </section>
    <div class="blu-bar">
        {{-- <div class="comic-cover">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div> --}}
        <h1 class="d-flex h-100 justify-content-center align-items-center text-white">Edit: {{$comic->title}}</h1>
    </div>

    <div class="row justify-content-center bg-white w-100">
        <div class="col-6">
            <form action="{{route('comics.update', $comic->id)}}" method="POST" class="p-4">
                @csrf
                @method('PUT')
                  <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{old('title', $comic->title)}}" required>
                  </div>
                  <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <textarea class="form-control" id="description" name="description" >{{old('title', $comic->description)}}</textarea>
                  </div>
                  <div class="mb-3">
                    <label for="thumb" class="form-label">Url Image</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('title', $comic->thumb)}}" required>
                  </div>
                  <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{old('title', $comic->price)}}" required>
                  </div>
                  <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{old('title', $comic->series)}}" required>
                  </div>
                  <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{old('title', $comic->sale_date)}}" required>
                  </div>
                  <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{old('title', $comic->type)}}" required>

                  </div>

                  <button type="submit" class="btn border-dark">Submit</button>
                  <button type="reset" class="btn btn-primary border-dark">Reset</button>
            </form>
        </div>
    </div>

    </section>
@endsection
