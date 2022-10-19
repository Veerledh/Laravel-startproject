@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{$pastry->title}}</h1>
            <li>{{$pastry->notes}}</li>
            <li>{{$pastry->recipe}}</li>
            <br><br>
            <img src="{{ asset('storage/image/'.$pastry->image) }}" width="500"/>
            <br><br>
            <a href="{{route('pastries.index')}}" class="btn btn-dark">Pastries</a>
        </div>
    </div>
@endsection
