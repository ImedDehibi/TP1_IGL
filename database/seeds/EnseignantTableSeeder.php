<?php

use Illuminate\Database\Seeder;

class EnseignantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Enseignant::class,30)->create();
    }
}
