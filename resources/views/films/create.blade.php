@extends('layouts.app')
@section('content')
@foreach($errors->all() as $error)
    <li class="alert alert-danger" role="alert">{{$error}}</li>
@endforeach 

<div class="card">
    <div class="card-header">Film toevoegen</div>
    <div class="card-body">
<form method="post" action="{{url('/films')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="filmnaam">Filmnaam</label>
        <input type="text" class="form-control" id="filmnaam" placeholder="Filmnaam" name="naam">
    </div>
    <div class="form-group">
        <label for="genres">Genres</label>
        <input type="text" class="form-control" id="genres" placeholder="Genres" name="genres">
    </div>
    <div class="form-group">
            <label for="lengte">Lengte</label>
            <input type="time" class="form-control" id="lengte" placeholder="Lengte" name="lengte">
    </div>
    <div class="form-group">
           
            <input type="file" id="cover_image" name="cover_image">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>
@endsection