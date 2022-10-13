@extends('layouts/app')

@section('title')
    {{$title}}
@endsection

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <h1>{{$title}}</h1>
        <a href="{{route('home')}}" class="btn btn-dark">Home</a>

        <a href="{{route('pastries.create')}}" class="btn btn-dark">Create</a>
        <div class="card">
            <table class="table">
                <tr>
                    <th>title</th>
                    <th>details</th>
                    <th>notes</th>
                    <th>image</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach($pastries as $pastry)
                    <tr>
                        <td>{{$pastry->title}}</td>
                        <td>{{$pastry->details}}</td>
                        <td>{{$pastry->notes}}</td>
                        <td class="col-sm-3"> <img class="img-fluid" src="{{$pastry->image}}"></td>
                        <td><a class="btn btn-success">Details</a></td>
                        <td><a class="btn btn-primary">Wijzigen</a></td>
                        <td><a class="btn btn-danger">{{'pastries.destroy}}</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection


