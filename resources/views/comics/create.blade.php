@extends('layouts.base')

@section('pageTitle')
    Add comics
@endsection

@section('pageContent')
    
    <div class="container">

        {{-- title --}}
        <h1 class="text-center my-3">Add new comic</h1>

        {{-- add form --}}
        <form class="mb-5">
            {{-- title --}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Add title">
            </div>
            {{-- description --}}
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="8" placeholder="Add description"></textarea>
            </div>
            {{-- image --}}
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="Add image link">
            </div>

            <div class="form-row">
                {{-- series --}}
                <div class="form-group col-6">
                    <label for="series">Series</label>
                    <input type="text" class="form-control" id="series" name="series" placeholder="Add series">
                </div>
                {{-- type --}}
                <div class="form-group col-6">
                    <label for="type">State</label>
                    <select id="type" class="form-control">
                        <option value="comic book">Comic book</option>
                        <option value="graphic novel">Graphic novel</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                {{-- sale date --}}
                <div class="form-group col-6">
                    <label for="date">Sale date</label>
                    <input type="date" class="form-control" id="date" name="sale_date" placeholder="Add sale date">
                </div>
                {{-- price --}}
                <div class="form-group col-6">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Add price">
                </div>
            </div>
            {{-- add button --}}
            <button type="submit" class="btn btn-primary">Add</button>
        </form>

        {{-- return button --}}
        <a href="{{route('comics.index')}}"><button type="button" class="btn btn-dark">Comics list</button></a>

    </div>

@endsection