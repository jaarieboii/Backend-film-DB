@extends('layouts.app')
@section('content')
@foreach($errors->all() as $error)
    <li class="alert alert-danger" role="alert">{{$error}}</li>
@endforeach 
<div class="card">
    <div class="card-header">{{$zaal->naam}}</div>
    <div class="card-body">
    <form method="post" action="{{ action('ZaalController@update', $zaal->id) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('put') }}
    <div class="form-group">
        <label for="zaalnaam">Zaal naam</label>
        <input type="text" class="form-control" id="zaalnaam" value="{{$zaal->naam}}" name="naam">
    </div>
    <div class="form-group">
        <label for="plekken">Plekken</label>
        <input type="number" class="form-control" id="plekken" value="{{$zaal->plekken}}" name="plekken">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>
@endsection