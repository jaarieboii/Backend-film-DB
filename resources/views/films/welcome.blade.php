@extends('layouts.app')
@section('content')
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">Filmprogramma</div>
                        
                            <div class="col-md-8">
                                Filter: 
                                <select>
                                 @foreach ($genres as $genre)
                                <option value="{{$genre->id}}">{{$genre->naam}}</option>  
                                 @endforeach   
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row" >
                        @foreach ($films as $film)
                        <div class="col-md-4" style="margin-bottom: 5px">
                            <div class="card" style="display: inline">
                                <div class="card-header">{{$film->naam}}</div>
                
                                <div class="card-body">
                                   <img width="100%" src="/storage/cover_images/{{$film->cover_image}}">
                                    
                                </div>

                                <div class="card-footer">{{$film->lengte}} </div>
                            </div>
                        </div> 
                        @endforeach
                    </div>
                        
                    </div>
                </div>
            </div>
        </div>
@endsection
       

