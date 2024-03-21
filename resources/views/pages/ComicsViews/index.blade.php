@extends('layouts.app')

@section('title', 'Dc Comics | Comics')

@section('main')

    <main>
        <div class="card-container pt-5">

            @foreach($comics as $element)
            <div class="card-comic">
                <a href="{{ route('comics.show', $element->id) }}">
                    <img class="card-img-top" src="{{$element->thumb}}" alt="{{$element->title}}"/>
                </a>
                <div class="card-info text-center">
                    <h2 class="text-lignt fw-bold">{{$element->title}}</h2>
                    <p class="text-lignt fw-bold">Price: {{ $element->price }} $</p>
                </div>
                <div class="d-flex justify-content-center gap-3 ">
                    <a href="{{route('comics.edit', $element->id)}}" type="button"class="btn btn-primary">
                        Edit
                    </a>
                    
                    <form action="{{route('comics.destroy', $element->id)}}"
                        method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
            @endforeach

        </div>

        <a id="" class="text-decoration-none create-more" href="{{ route('comics.create') }}">Create a new comic</a>
    </main>


@endsection
