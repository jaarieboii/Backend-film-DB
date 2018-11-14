@extends('layouts.app')
@section('content')
@foreach($errors->all() as $error)
    <li class="alert alert-danger" role="alert">{{$error}}</li>
@endforeach 
<div class="card">
    <div class="card-header">Zaal toevoegen</div>
    <div class="card-body">
<form method="post" action="/zalen" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="zalen">Zaal naam</label>
        <input type="text" class="form-control" id="Zalen" placeholder="Zaal naam" name="naam">
    </div>
    <div class="form-group">
        <label for="plekken">Genres</label>
        <input type="number" class="form-control" id="plekken" placeholder="Plekken" name="plekken">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>
@endsection