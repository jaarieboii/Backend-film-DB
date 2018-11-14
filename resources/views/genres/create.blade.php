@extends('layouts.app')
@section('content')
@foreach($errors->all() as $error)
    <li class="alert alert-danger" role="alert">{{$error}}</li>
@endforeach 
<div class="card">
    <div class="card-header">Zaal toevoegen</div>
    <div class="card-body">
<form method="post" action="/genres" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="genres">Genre</label>
        <input type="text" class="form-control" id="genres" placeholder="Genre" name="naam">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>
@endsection