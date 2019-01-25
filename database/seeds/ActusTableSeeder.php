<?php

use Illuminate\Database\Seeder;

class ActusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Actu::class, 5)->create();
    }
}
