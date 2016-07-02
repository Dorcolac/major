<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'lastname' => $faker->lastName,
        'nickname' => $faker->userName,
        'phone1' => $faker->phoneNumber,
        'phone2' => $faker->phoneNumber,
        'location' => $faker->sentence(3),
        'area_id' => $faker->numberBetween(1, 5),
        'bio' => $faker->paragraph(4),
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
