<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->create([
                'name'=>'admin',
                'email'=>'admin@email.com',
                'password'=> bcrypt('password')
            ]);
    }
}
