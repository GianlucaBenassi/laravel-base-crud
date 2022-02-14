@extends('layouts.base')

@section('pageTitle')
    Modify comic
@endsection

@section('pageContent')
    
    <div class="container">
        {{-- title --}}
        <h1 class="text-center my-3">Modify comic: {{$comic->title}}</h1>

        {{-- add form --}}
        <form class="mb-5" action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')

            {{-- title --}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Add title" value="{{$comic->title}}">
            </div>
            {{-- description --}}
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="8" placeholder="Add description">{{$comic->description}}</textarea>
            </div>
            {{-- image --}}
            <div class="form-group">
                <label for="image">Image</label>
                <small class="form-text text-muted">If empty add standard image</small>
                <input type="text" class="form-control" id="image" name="image" placeholder="Add image link" value="{{$comic->image}}">
            </div>

            <div class="form-row">
                {{-- series --}}
                <div class="form-group col-6">
                    <label for="series">Series</label>
                    <input type="text" class="form-control" id="series" name="series" placeholder="Add series" value="{{$comic->series}}">
                </div>
                {{-- type --}}
                <div class="form-group col-6">
                    <label for="type">Type</label>
                    <select name="type" id="type" class="form-control">
                        <option value="comic book" {{$comic->type == "comic book" ? "selected" : ""}}>Comic book</option>
                        <option value="graphic novel" {{$comic->type == "graphic novel" ? "selected" : ""}}>Graphic novel</option>
                        <option value="other" {{$comic->type == "other" ? "selected" : ""}}>Other</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                {{-- sale date --}}
                <div class="form-group col-6">
                    <label for="date">Sale date</label>
                    <input type="date" class="form-control" id="date" name="sale_date" placeholder="Add sale date" value="{{$comic->sale_date}}">
                </div>
                {{-- price --}}
                <div class="form-group col-6">
                    <label for="price">Price</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Add price" value="{{$comic->price}}">
                </div>
            </div>
            {{-- add button --}}
            <button type="submit" class="btn btn-primary">Modify</button>
        </form>

        {{-- return button --}}
        <a href="{{route('comics.index')}}"><button type="button" class="btn btn-dark">Comics list</button></a>

    </div>

@endsection