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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


/*$factory->define(App\Test_table::class, function (Faker\Generator $faker) {
    return [
        'full_name' => $faker->name($gender = 'male'),
        'position' => $faker->randomElement($array = array ('директор')),
        'salary' => $faker->numberBetween($min = 25000, $max = 30000),
        'date' => $faker->date('Y-m-d'),
    ];
});*/

/*$factory->define(App\Test_table::class, function (Faker\Generator $faker) {
    return [
        'full_name' => $faker->name($gender = 'male'),
        'parent_id' => $faker->randomElement($array = array (1)),
        'position' => $faker->randomElement($array = array ('зам. директора')),
        'salary' => $faker->numberBetween($min = 22000, $max = 25000),
        'date' => $faker->date('Y-m-d'),
    ];
});*/

/*$factory->define(App\Test_table::class, function (Faker\Generator $faker) {
    return [
        'full_name' => $faker->name($gender = 'male'),
        'parent_id' => $faker->numberBetween($min = 2, $max = 6),
        'position' => $faker->randomElement($array = array ('начальник отдела')),
        'salary' => $faker->numberBetween($min = 18000, $max = 22000),
        'date' => $faker->date('Y-m-d'),
    ];
});*/

/*$factory->define(App\Test_table::class, function (Faker\Generator $faker) {
    return [
        'full_name' => $faker->name($gender = 'male'),
        'parent_id' => $faker->numberBetween($min = 7, $max = 21),
        'position' => $faker->randomElement($array = array ('начальник бригады')),
        'salary' => $faker->numberBetween($min = 15000, $max = 18000),
        'date' => $faker->date('Y-m-d'),
    ];
});*/

$factory->define(App\Test_table::class, function (Faker\Generator $faker) {
    return [
        'full_name' => $faker->name($gender = 'male'),
        'parent_id' => $faker->numberBetween($min = 22, $max = 81),
        'position' => $faker->randomElement($array = array ('рабочий', "инженер")),
        'salary' => $faker->numberBetween($min = 5000, $max = 15000),
        'date' => $faker->date('Y-m-d'),
    ];
});
