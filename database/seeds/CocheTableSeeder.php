<?php

use Illuminate\Database\Seeder;
use App\Coche;

class CocheTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Coche::class, 5)->create();
    }
}
