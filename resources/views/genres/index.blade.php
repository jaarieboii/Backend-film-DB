@extends('layouts.app')
@section('content')

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Genre</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($genres as $item)     
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->naam}}</td>
              <td width="10%">
                  <form action="{{url('/genres/'.$item->id.'/edit')}}">
                  <button type="submit" class="btn btn-primary">Update</button>
                  </form>
              </td>
                <td width="10%">
                      <form action={{url('/genres/'.$item->id)}}" method="POST">
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