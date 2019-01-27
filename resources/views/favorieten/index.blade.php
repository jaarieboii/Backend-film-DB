@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="page-header">
                <h3>My Favorites</h3>
            </div>
            @forelse ($myFavorites as $myFavorite)
                <div class="card" style="margin-bottom: 5px">
                    <div class="card-header">
                        {{ $myFavorite->naam }}
                    </div>

                    <div class="card-body">
                        <img width="100%" src="storage/cover_images/{{ $myFavorite->cover_image }} ">
                    </div>
                    @if (Auth::check())
                        <div class="card-footer">
                            <favorite
                                :film={{ $myFavorite->id }}
                                :favorited={{ $myFavorite->favorited() ? 'true' : 'false' }}
                            ></favorite>
                        </div>
                    @endif
                </div>
            @empty
                <p>You have no favorite posts.</p>
            @endforelse
         </div>
    </div>
</div>
@endsection