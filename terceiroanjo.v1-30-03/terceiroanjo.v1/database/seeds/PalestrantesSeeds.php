<?php

use Illuminate\Database\Seeder;

class PalestrantesSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Palestrante::class, 10)->create();
    }
}
