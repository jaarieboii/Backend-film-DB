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
              
                    @if($item->user_id == '0')
                    <form action="{{action('AdminsController@makeAdmin', $item->id)}}" class="form-inline" method="POST">
                        {{  csrf_field() }}
                    <div class="form-group">
                    <button type="submit" class="btn-primary form-control">User</button>
                    </div>
                </form>
                    @endif
                    @if($item->user_id == '1')
                    <form action="{{action('AdminsController@isNotAdmin', $item->id)}}" class="form-inline" method="POST" >
                        {{ csrf_field() }}
                        <div class="form-group">
                        <button type="submit" class="btn-secondary form-control">Admin</button>
                    </div>
                </form>
                    @endif
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