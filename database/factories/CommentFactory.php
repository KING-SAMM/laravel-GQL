<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id' => factory(App\Post::class)->create()->id,
        'reply' => $faker->text
    ];
});
