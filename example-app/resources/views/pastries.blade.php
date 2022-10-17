@extends('layouts/app')

@section('title')
    {{--    {{$title}}--}}
@endsection

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="{{route('home')}}" class="btn btn-dark">Home</a>

                <a href="{{route('pastries.create')}}" class="btn btn-dark">Create</a>
                <br><br>
                <h1>Pastries :)</h1>
                <form action="{{route('pastries.search')}}" method="post">
                    @csrf
                    <input type="text" name="other">
                    <input name="submit" type="submit" class="btn btn-primary"/>
                </form>
                <br><br>
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
                                <td>{{$pastry->image}}</td>
                                <td><a href="{{route('pastries.show', $pastry->id)}}"
                                       class="btn btn-success">Details</a></td>
                                <td><a href="{{route('pastries.edit', $pastry->id)}}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="{{route('pastries.destroy', $pastry->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger btn-sm" type="submit">Verwijderen</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

@endsection


