<?php

use Faker\Generator as Faker;

$factory->define(App\film::class, function (Faker $faker) {
    return [
        //
        'naam' => $faker->name,
        'genres' => ['horror', 'action', 'sport', 'adventure'][rand(0,3)],
        'lengte' => ['01:30','02:00','02:30','03:00'][rand(0,3)],
        'cover_image'=>'noImage.png',
    ];
});
