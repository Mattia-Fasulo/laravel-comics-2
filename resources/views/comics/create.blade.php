@extends('layouts.app')
@section('content')
    <section class="jumbo">

    </section>
    <div class="blu-bar">
        {{-- <div class="comic-cover">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div> --}}
        <h1 class="d-flex h-100 justify-content-center align-items-center text-white">Add a New Comic</h1>
    </div>

    <div class="row justify-content-center bg-white w-100">
        <div class="col-6">
            <form action="{{route('comics.store')}}" method="POST" class="p-4">
                @csrf
                  <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror"  id="title" name="title" required>
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"></textarea>
                    @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="thumb" class="form-label">Image Url</label>
                    <input type="url" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" required>
                    @error('thumb')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required>
                    @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" required>
                    @error('series')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" required>
                    @error('sale_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" required>
                    @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                  </div>

                  <button type="submit" class="btn border-dark">Submit</button>
                  <button type="reset" class="btn btn-primary border-dark">Reset</button>
            </form>
        </div>
    </div>

    </section>
@endsection
