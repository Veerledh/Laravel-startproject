@extends('layouts.app')

@section('title', 'create')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Create pastries</h1>
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('pastries.index')}}">pastries</a>
            <div class="card">
                <form action="{{route('pastries.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="m-2">
                        <label for="category_id" class="form-label">Kies een baksel:</label>
                        <select id="category_id"
                                name="category_id"
                                class="@error('category_id') is-invalid @enderror form-select">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" class="dropdown-item">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <span class="">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="m-2">
                        <label for="title" class="form-label">Naam pastry</label>
                        <input id="title"
                               type="text"
                               name="title"
                               class="@error('text') is-invalid @enderror form-control"
                               value="{{ old('title') }}"/>
                        @error('title')
                        <span class="">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="m-2">
                        <label for="recipe" class="form-label">Recept</label>
                        <input id="recipe"
                               type="text"
                               name="recipe"
                               class="@error('recipe') is-invalid @enderror form-control"
                               value="{{ old('recipe') }}"/>
                        @error('recipe')
                        <span class="">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="m-2">
                        <label for="notes" class="form-label">Notities</label>
                        <input id="notes"
                               type="text"
                               name="notes"
                               class="@error('notes') is-invalid @enderror form-control"
                               value="{{ old('notes') }}"/>
                        @error('notes')
                        <span class="">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="m-2">
                        <label for="image" class="form-label">image</label>
                        <input id="file"
                               type="file"
                               name="image"
                               class="@error('image') is-invalid @enderror form-control"
                               value="{{ old('image') }}"/>
                        @error('image')
                        <span class="">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="m-2">
                        <input name="submit" type="submit" class="btn btn-primary"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


