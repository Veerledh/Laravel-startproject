@extends('layouts.app')

@section('title', 'create')

@section('content')
    <h1>Create pastries</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action="{{route('pastries.store')}}" method="post">
                    <div>
                        <label for="title" class="form-label">Naam pastry</label>
                        <input id="title"
                               type="text"
                               name="text"
                               class="@error('text') is-invalid @enderror form-conrol"
                               value="{{ old('title') }}"/>
                        @error('title')
                        <span class="">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="details" class="form-label">Details</label>
                        <input id="details"
                               type="text"
                               name=details"
                               class="@error('details') is-invalid @enderror form-conrol"
                               value="{{ old('details') }}"/>
                        @error('details')
                        <span class="">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="notes" class="form-label">Notities</label>
                        <input id="notes"
                               type="text"
                               name=notes"
                               class="@error('notes') is-invalid @enderror form-conrol"
                               value="{{ old('notes') }}"/>
                        @error('notes')
                        <span class="">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="image" class="form-label">image</label>
                        <input id="image"
                               type="file"
                               name=image"
                               class="@error('image') is-invalid @enderror form-conrol"
                               value="{{ old('image') }}" />
                        @error('image')
                        <span class="">{{ $message }}</span>
                        @enderror
                    </div>

                    <input name="submit" type="submit" class="btn btn-primary"/>


            </form>
        </div>
    </div>
    </div>
@endsection
