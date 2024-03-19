@extends('layouts.app')

@section('title', 'Dc Comics | Show comic')

@section('main')

   <main>
        <div class="d-flex text-light">
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}" style="width: 600px; height:800px" class="p-5">
            <div>
                <h1>{{$comic->title}}</h1>
                <h5>{{$comic->price}}</h5>
                <p>{{$comic->description}}</p>

            </div>
        </div>
    </main>
@endsection
