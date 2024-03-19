@extends('layouts.app')

@section('title', 'Dc Comics | Comics')

@section('main')

    {{-- ciclo prima del tablerow --}}

    {{-- qui andrebbe fatto con una tabella

        vanno ciclate le informazioni dopo il table header, per singolo td

        poi ho inserito {{route('comics.show', item->id)}} all'interno di un tag con dentro il title del fumetto nel table body

        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Thumb</th>
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td>R1C1</td>
                        <td>R1C2</td>
                        <td>R1C3</td>
                    </tr>

                </tbody>
            </table>
        </div>

        --}}

    <main>
        <div class="card-container pt-5">
            @foreach($comics as $element)
            <div class="card-comic">
                <a href="{{ route('comics.show', $element->id) }}">
                    <img class="card-img-top" src="{{$element->thumb}}" alt="{{$element->title}}"/>
                </a>
                <div class="card-info">
                    <h2 class="text-lignt fw-bold">{{$element->title}}</h2>
                    <p class="text-lignt fw-bold">Price: {{ $element->price }}</p>
                    {{-- <p class="text-lignt fw-bold">Series: {{$element->series}}</p> --}}
                    {{-- <p class="text-lignt fw-bold">Type: {{ $element->description }}</p> --}}
                </div>
            </div>
            @endforeach


        </div>

        <div id="create-more">Create a new comic</div>
    </main>


@endsection
