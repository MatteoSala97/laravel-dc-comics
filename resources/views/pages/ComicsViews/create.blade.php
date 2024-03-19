@extends('layouts.app')


@section('title', 'Dc Comics | Create a comic')

@section('main')

    <main>
        {{-- form con

            form action="{{route('comics.store')}}" method ="POST"

            e ogni voce del form ha
            for="(es. 'title')"
            name="(es. 'title')"
            id="(es. 'title')"
            tutti con lo stesso nome per ogni elemento della row (ex. title, description, etc
            +
            bottone type submit form


            --}}

            <div class="container text-light p-5">
                <h1>Create a new comic</h1>

                <form action ="{{ route('comics.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumbnail URL</label>
                        <input type="text" class="form-control" id="thumb" name="thumb">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
    </main>

@endsection
