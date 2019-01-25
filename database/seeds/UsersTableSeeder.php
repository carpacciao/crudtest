<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 5)->create();
        User::create([
            'name' => 'lucas',
            'email' => 'lucasvd@msn.com',
            'password' => bcrypt('lucas'),
            'remember_token' => str_random(10),
        ]);
    }
}
