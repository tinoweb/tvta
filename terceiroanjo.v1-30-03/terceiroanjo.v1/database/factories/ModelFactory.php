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
        'profissao'=>$faker->name,
        'descricao'=>$faker->text($maxNbChars = 50),
        'imagem'=>$faker->imageUrl(266, 218),
        'tipo' => $faker->name
    ];
});

$factory->define(App\Categoria::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name
    ];
});

$factory->define(App\Subcategoria::class, function (Faker\Generator $faker) {
    return [
        'id_categoria' => $faker->numberBetween($min = 1, $max = 10),
        'nome' => $faker->name
    ];
});

$factory->define(App\Palestrante::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
        'profissao'=>$faker->name,
        'descricao'=>$faker->text($maxNbChars = 100),
        'imagem'=>$faker->imageUrl(266, 218)
    ];
});

$factory->define(App\Video::class, function (Faker\Generator $faker) {
    return [
        //'id_categoria' => $faker->numberBetween($min = 1, $max = 10),
        //'id_subcategoria' => $faker->numberBetween($min = 1, $max = 10),
        'id_palestrante' => $faker->numberBetween($min = 1, $max = 10),
        'nome' => $faker->name,
        'descricao'=>$faker->text($maxNbChars = 100),
        'imagem'=>$faker->imageUrl(266, 218),
        'link_video' => $faker->url,
    ];
});

$factory->define(App\Artigo::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
        'conteudo'=>$faker->text($maxNbChars = 600),
        'data' => $faker->date,
        'imagem'=>$faker->imageUrl(266, 218),
        'file'=>$faker->name
    ];
});
