<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => 'ルルアのアトリエ',
        'image' => 'https://m.media-amazon.com/images/I/71nXaHHRe6L._AC_UY436_FMwebp_QL65_.jpg',
        'price' => 5980,
        'text' => 'test',
        'user_id' => 1,
        'genre_id' => 1,
        'platform_id' => 1
    ];
});
