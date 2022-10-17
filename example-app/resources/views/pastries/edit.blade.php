@extends('layouts.app')

@section('title', 'create')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>edit pastries</h1>
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('pastries.index')}}">pastries</a>
            <div class="card">
                <form action="{{route('pastries.update', [$pastries->id])}}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="m-2">
                        <label for="title" class="form-label">Naam pastry</label>
                        <input id="title"
                               type="text"
                               name="title"
                               class="@error('text') is-invalid @enderror form-control"
                               value="{{$pastries->title}}"/>
                        @error('title')
                        <span class="">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="m-2">
                        <label for="details" class="form-label">Details</label>
                        <input id="details"
                               type="text"
                               name="details"
                               class="@error('details') is-invalid @enderror form-control"
                               value="{{$pastries->details}}"/>
                        @error('details')
                        <span class="">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="m-2">
                        <label for="notes" class="form-label">Notities</label>
                        <input id="notes"
                               type="text"
                               name="notes"
                               class="@error('notes') is-invalid @enderror form-control"
                               value="{{$pastries->notes}}"/>
                        @error('notes')
                        <span class="">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="m-2">
                        <label for="image" class="form-label">image</label>
                        <input id="image"
                               type="text"
                               name="image"
                               class="@error('image') is-invalid @enderror form-control"
                               value="{{$pastries->image}}" />
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


