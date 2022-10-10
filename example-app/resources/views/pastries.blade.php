@extends('layouts/app')

@section('title')
    {{$title}}
@endsection

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <h1>{{$title}}</h1>
        <a href="{{route('home')}}">Home</a>
        <div class="card">
            <table class="table">
                <tr>
                    <th>title</th>
                    <th>details</th>
                    <th>notes</th>
                    <th>image</th>
                </tr>
                @foreach($pastries as $pastry)
                    <td>{{$pastry->title}}</td>
                    <td>{{$pastry->details}}</td>
                    <td>{{$pastry->notes}}</td>
                    <td class="col-sm-3"> <img class="img-fluid" src="{{$pastry->image}}"></td>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection


