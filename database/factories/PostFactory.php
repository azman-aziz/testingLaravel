<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
	//ran(1,3) = hanya 1-3
	//factory('App\Post', 20)->create(); membuat datapalsu pada tinker
    return [
    	'category_id' => rand(1, 3),
        'title' => $faker->sentence(),
        'slug' => \Str::slug($faker->sentence()),
        'body' => $faker->paragraph(10),
    ];
});
