@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Welkom!</h1>
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('pastries.create')}}">create</a>
                    <a href="{{route('pastries.index')}}">Pastries</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
