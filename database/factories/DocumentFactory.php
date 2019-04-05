<?php

use Faker\Generator as Faker;

$factory->define(App\Document::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        "title"=>$title,
        "slug"=>str_slug($title),
        "short_desc"=>$faker->text(200)
    ];
});
