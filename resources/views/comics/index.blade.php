@extends('layouts.base')

@section('pageTitle')
    Comics list
@endsection

@section('pageContent')
    
    <div class="container">

        {{-- title --}}
        <h1 class="text-center my-3">Comics list</h1>

        {{-- comics table --}}
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Type</th>
                    <th scope="col">Series</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{$comic->id}}</th>
                        <td>{{$comic->title}}</th>
                        <td>{{$comic->type}}</th>
                        <td>{{$comic->series}}</th>
                        <td>{{$comic->price}}$</th>
                        <td><a href="{{route('comics.show', $comic->id)}}"><button type="button" class="btn btn-info">Info</button></a></th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection