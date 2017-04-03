<?php

use Illuminate\Database\Seeder;
use App\SubCategoria;

class SubCategoriasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Subcategoria::class, 10)->create();
    }
}
