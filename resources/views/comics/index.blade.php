@extends('layouts.base')

@section('pageTitle')
    Comics list
@endsection

@section('pageContent')
    
    <div class="container">

        {{-- title --}}
        <h1 class="text-center my-3">Comics list</h1>

        {{-- add comic button --}}
        <div class="row mb-2">
            <div class="col d-flex justify-content-end">
                <a href="{{route('comics.create')}}"><button type="button" class="btn btn-success">Add new comic</button></a>
            </div>
        </div>

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
                        <td>{{$comic->id}}</td>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->type}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->price}}$</td>
                        <td>
                            <a href="{{route('comics.show', $comic->id)}}"><button type="button" class="btn btn-info">Info</button></a>
                            <a href="{{route('comics.edit', $comic->id)}}"><button type="button" class="btn btn-warning">Modify</button></a>
                            <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection