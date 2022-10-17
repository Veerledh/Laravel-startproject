@extends('layouts.app')
@section('content')
    <table class="table">
        <tr>
            <th scope="pastry">Title</th>
            <th scope="pastry">Notes</th>
            <th scope="pastry">Details</th>
            <th scope="pastry">Image</th>
        </tr>
        <tr>
            <td>{{$pastry->title}}</td>
            <td>{{$pastry->notes}}</td>
            <td>{{$pastry->details}}</td>
            <td><img src="{{$pastry->image}}"></td>
        </tr>
    </table>
    <a href="{{route('pastries.index')}}" class="btn btn-dark">Pastries</a>
@endsection
