@extends('layouts.app')

@section('title', 'Dc Comics | Show comic')

@section('main')

   <main>
        <div class="d-flex text-light">
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}" style="width: 600px; height:800px" class="p-5">
            <div class="mt-5 w-50">
                <h1 class="">{{$comic->title}}</h1>
                <h5 class="">{{$comic->price}} $</h5>
                <br>
                <p class="">{{$comic->description}}</p>
                <p class="fw-bold">Series: {{$comic->series}}</p>
                <p class="fw-bold">Release date: {{$comic->sale_date}}</p>
            </div>
        </div>
    </main>
@endsection
