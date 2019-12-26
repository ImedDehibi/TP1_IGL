<?php

use Illuminate\Database\Seeder;

class PresencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Presences :: class, 5) -> create();
    }
}
