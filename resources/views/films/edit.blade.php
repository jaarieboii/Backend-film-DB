@extends('layouts.app')
@section('content')
@foreach($errors->all() as $error)
    <li class="alert alert-danger" role="alert">{{$error}}</li>
@endforeach 
<div class="card">
    <div class="card-header">{{$films->naam}}</div>
    <div class="card-body">
    <form method="post" action="{{ action('FilmController@update', $films->id) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('put') }}
    <div class="form-group">
        <label for="filmnaam">Filmnaam</label>
        <input type="text" class="form-control" id="filmnaam" value="{{$films->naam}}" name="naam">
    </div>
    <div class="form-group">
        <label for="genres">Genres</label>
        <input type="text" class="form-control" id="genres" value="{{$films->genres}}" name="genres">
    </div>
    <div class="form-group">
            <label for="lengte">Lengte</label>
            <input type="time" class="form-control" id="lengte" value="{{$films->lengte}}" name="lengte">
    </div>
    <div class="form-group">
           
            <input type="file" id="cover_image" name="cover_image">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>
@endsection