@extends('layouts.app')
@section('content')
@foreach($errors->all() as $error)
    <li class="alert alert-danger" role="alert">{{$error}}</li>
@endforeach 
<div class="card">
    <div class="card-header">{{$genre->naam}}</div>
    <div class="card-body">
    <form method="post" action="{{ action('GenreController@update', $genre->id) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('put') }}
    <div class="form-group">
        <label for="genres">Filmnaam</label>
        <input type="text" class="form-control" id="genres" value="{{$genre->naam}}" name="naam">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>
@endsection