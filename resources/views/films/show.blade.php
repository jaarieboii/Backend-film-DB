@extends('layouts.app')
@section('content')

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">naam</th>
        <th scope="col">Genre</th>
        <th scope="col">Lengte</th>
        <th scope="col">Image</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach ($films as $item)     
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->naam}}</td>
              <td>{{$item->genre}}</td>
              <td>{{$item->lengte}}</td>
              <td>{{$item->cover_image}}</td>
              <td>
                <form action="{{url('/films/'.$item->id.'/edit')}}">
                <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </td>
              <td>
                    <form action="{{url('/films/'.$item->id)}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
              </td>
              </tr>
    @endforeach
</tbody>
</table>

@endsection