@extends('web')

@section('title')
    <h1>{{$title}}</h1>
@endsection

@section('content')
    <h1>{{$title}}</h1>
    <a href="{{route('pastries')}}">Pastries</a>
@endsection


