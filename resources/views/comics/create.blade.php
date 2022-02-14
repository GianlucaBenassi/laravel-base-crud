@extends('layouts.base')

@section('pageTitle')
    Add comics
@endsection

@section('pageContent')
    
    <div class="container">

        {{-- title --}}
        <h1 class="text-center my-3">Add new comic</h1>

        {{-- add form --}}
        <form class="mb-5" action="{{route('comics.store')}}" method="POST">
            @csrf

            {{-- title --}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Add title" value="{{old('title')}}">
                @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            {{-- description --}}
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="8" placeholder="Add description">{{old('description')}}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            {{-- image --}}
            <div class="form-group">
                <label for="image">Image</label>
                <small class="form-text text-muted">If empty add standard image</small>
                <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image" placeholder="Add image link" value="{{old('image')}}">
                @error('image')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-row">
                {{-- series --}}
                <div class="form-group col-6">
                    <label for="series">Series</label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Add series" value="{{old('series')}}">
                    @error('series')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- type --}}
                <div class="form-group col-6">
                    <label for="type">Type</label>
                    <select name="type" id="type" class="form-control @error('type') is-invalid @enderror">
                        <option value="comic book" {{old('type') == 'comic book' ? 'selected' : null}}>Comic book</option>
                        <option value="graphic novel" {{old('type') == 'graphic novel' ? 'selected' : null}}>Graphic novel</option>
                        <option value="other" {{old('type') == 'other' ? 'selected' : null}}>Other</option>
                    </select>
                    @error('type')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                {{-- sale date --}}
                <div class="form-group col-6">
                    <label for="date">Sale date</label>
                    <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="date" name="sale_date" placeholder="Add sale date" value="{{old('sale_date')}}">
                    @error('sale_date')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                {{-- price --}}
                <div class="form-group col-6">
                    <label for="price">Price</label>
                    <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Add price" value="{{old('price')}}">
                    @error('price')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            {{-- add button --}}
            <button type="submit" class="btn btn-primary">Add</button>
        </form>

        {{-- return button --}}
        <a href="{{route('comics.index')}}"><button type="button" class="btn btn-dark">Comics list</button></a>

    </div>

@endsection