<?php

namespace App;

use App\Filters\FilmFilter;
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
}
