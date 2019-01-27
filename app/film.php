<?php

namespace App;

use App\Filters\FilmFilter;
use App\Favorite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
class film extends Model
{
    //
    public function scopeFilter(Builder $builder, $request)
    {
        return (new FilmFilter($request))->filter($builder);
    }

    public function scopeSearch($query, $s)
    {
        return $query->where('naam', 'like', '%' .$s. '%')
            ->orWhere('genres', 'like', '%' .$s. '%');
            //->orWhere('description', 'like', '%' .$s. '%');
    }
    public function favorited(){
        return (bool) Favorite::where('user_id', Auth::id())
                        ->where('film_id', $this->id)
                        ->first();
    }
}
