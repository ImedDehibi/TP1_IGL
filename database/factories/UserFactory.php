<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'Nom' => $faker->lastName(),
        'Prenom' => $faker->firstName($gender = 'male'|'female'),
        'Email' => $faker->unique()->safeEmail,
        'Prof' => $faker->numberBetween($min = 0, $max = 1),
        'Annee' => $faker->numberBetween($min = 1, $max = 5),
        'Groupe' => $faker->numberBetween($min = 1, $max = 10),
        'email_verified_at' => now(),
        'password' => 'password', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Presences::class, function (Faker $faker){
    $d=now();//$faker->numberBetween($min = 8, $max = 17);
    return[ 
        'Nom' => $faker->lastName(),
        'Prenom' => $faker->firstName($gender = 'male'|'female'),
        'Bureau' => $faker->numberBetween($min = 1, $max = 50),
        'Date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'Debut' => $d,
        'Fin' => $d//$faker->numberBetween($min = $d, $max = 17)

    ];

});
