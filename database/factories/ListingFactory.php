<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Listing;
use Faker\Generator as Faker;

$factory->define(Listing::class, function (Faker $faker) use ($factory) {
    return [
        'user_id'=>$factory->create(App\Models\User::class)->id,
        'name'=>$faker->name,
        'address'=>$faker->address,
        'website'=>$faker->url,
        'email'=>$faker->email,
        'phone'=>$faker->phoneNumber,
        'bio'=>$faker->realText(20),
    ];
});
