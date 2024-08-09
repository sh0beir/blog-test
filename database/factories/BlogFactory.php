<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'blog' => $faker->text,
        'category_id' => factory(App\Category::class),
    ];
});
