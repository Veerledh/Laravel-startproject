@extends('web')

@section('title')
    {{$title}}
@endsection

@section('content')
    <h1>{{$title}}</h1>
    <a href="{{route('pastries')}}">Pastries</a>

@endsection


