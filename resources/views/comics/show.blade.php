@extends('layouts.base')

@section('pageTitle')
    Comic info
@endsection

@section('pageContent')
    
    <div class="container">

        {{-- title --}}
        <h1 class="text-center my-3">Comic info</h1>

        {{-- comic card --}}
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-3 d-flex justify-content-center align-items-center">
                    <img src="{{$comic->image}}" alt="{{$comic->title}}" class="w-75">
                </div>
                <div class="col">
                    <div class="card-body">
                        <h4 class="card-title">{{$comic->title}}</h4>
                        <p class="card-text">{{$comic->description}}</p>
                        <p class="card-text">{{$comic->sale_date}}</p>
                        <p class="card-text">{{$comic->price}}$</p>
                        <p class="card-text mb-0"><small class="text-muted">Series: {{$comic->series}}</small></p>
                        <p class="card-text"><small class="text-muted">Type: {{$comic->type}}</small></p>
                    </div>
                </div>
            </div>
        </div>

        {{-- return button --}}
        <a href="{{route('comics.index')}}"><button type="button" class="btn btn-dark">Comics list</button></a>
        
    </div>

@endsection