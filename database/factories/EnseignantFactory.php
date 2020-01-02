<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Enseignant::class, function (Faker $faker) {
    return [
        //
        'Nom'=>$faker->text(5),
        'Prenom'=>$faker->text(5),
        'NomUtilisateur'=>$faker->text(5),
        'MotDePasse'=>$faker->text(5),
        'ConfirmMotDePasse'=>$faker->text(5),
        'Module'=>$faker->text(5), 
    ];
});
