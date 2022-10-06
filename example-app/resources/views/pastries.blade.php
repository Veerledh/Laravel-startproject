@extends('web')

@section('title')
    {{$title}}
@endsection

@section('content')
    <h1>{{$title}}</h1>
    <a href="{{route('home')}}">Home</a>
@endsection


