<?php

// ProductFilter.php

namespace App\Filters;

use App\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class FilmFilter extends AbstractFilter
{
    protected $filters = [
        'genres' => TypeFilter::class
    ];
}