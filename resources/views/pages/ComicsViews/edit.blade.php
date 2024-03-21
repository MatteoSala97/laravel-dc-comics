@extends('layouts.app')


@section('title', 'Dc Comics | Edit a comic')

@section('main')

    <main>


            <div class="container text-light p-5">
                <h1>Edit an existing comic</h1>

                <form action ="{{ route('comics.update', $comic->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                        value="{{old('title') ?? $comic->title}}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description') ?? $comic->thumb}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumbnail URL</label>
                        <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb"
                        value="{{old('thumb') ?? $comic->thumb}}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                        value="{{old('price') ?? $comic->price}}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series"
                        value="{{old('series') ?? $comic->series}}">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                        value="{{old('type') ?? $comic->type}}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Release Date</label>
                        <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date"
                        value="{{old('sale_date') ?? $comic->sale_date}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
    </main>



@endsection
