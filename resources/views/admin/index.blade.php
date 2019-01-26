@extends('layouts.app')
@section('content')

<form>
<table class="table" id="table-users">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Naam</th>
        <th scope="col">Email</th>
        <th scope="col">Rol</th>
        <th scope="col">Active</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($test as $item)     
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td onclick="functie('{{$item->name}}')">
              <td>{{$item->email}}</td>
              <td>{{$item->user_id}}</td>
              <td>
              <form action="{{action('AdminsController@isAdmin', $item->id)}}" class="form" method="post">
                {{ csrf_field() }}
                    @if($item->user_id == '0')
                    <div class="form-group">
                        <label class="bs-switch">
                            <input type="checkbox" class="form-control" name="user_id">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    @endif
                    @if($item->user_id == '1')
                    <div class="form-group">
                    <label class="bs-switch">
                        <input type="checkbox" class="form-control" name="user_id" checked>
                        <span class="slider round"></span>
                    </label>
                    </div>
                    @endif
                </form>
              </td>
              
              </tr>
    @endforeach
</tbody>
</table>
</form>
@endsection
@section('script')
<script>
     </script>
@endsection