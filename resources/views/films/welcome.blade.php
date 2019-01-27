@extends('layouts.app')
@section('content')
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-2">Filmprogramma</div>
                        
                            <div class="col-md-3">
                                <form action="{{url('/films')}}" method="get" class="form-inline">
                                    <div class="form-group">
                                        <select name="genres">
                                        @foreach ($genres as $genre)
                                            <option value="{{$genre->naam}}">{{$genre->naam}}</option>  
                                        @endforeach   
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit" style="padding: 0.375rem 0.75rem !important;">filter</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-7"> 
                            <form action="{{url('/films')}}" method="get" class="form-inline">
                                <div class="form-group"> 
                                    <input type="text" name="s" class="form-control" value="{{ isset($s) ? $s : '' }}" placeholder="Search on fields">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit" style="padding: 0.375rem 0.75rem !important;">Search</button>
                                </div>
                                {{ csrf_field() }}
                            </form>
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
                                   <img width="100%" src="storage/cover_images/{{$film->cover_image}}">
                                </div>

                                @if (Auth::check() && Auth::user()->times_logged_in == 5)
                                    <div class="card-footer">
                                        <favorite
                                            :film={{ $film->id }}
                                            :favorited={{ $film->favorited() ? 'true' : 'false' }}
                                        ></favorite>
                                    </div>
                                @endif
                            </div>
                        </div> 
                        @endforeach
                    </div>
                    </div>
                    {{$films->appends(['s' => $s])->links()}}
                </div>
            </div>
        </div>
@endsection
       

