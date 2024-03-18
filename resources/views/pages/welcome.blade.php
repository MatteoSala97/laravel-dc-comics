@extends('layouts.app')

@section('title', 'Dc Comics | Home')

@section('main')

    <main>
        <div class="row">
            @foreach($comics as $element)
            <div class="card col-3">
                <img class="card-img-top" src="{{$element['thumb']}}" alt="{{$element['title']}}" />
                <div class="card-body">
                    <h4 class="card-title">{{$element['title']}}</h4>
                    <p class="card-text">{{$element['series']}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </main>

@endsection
