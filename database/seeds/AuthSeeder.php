<?php

use Illuminate\Database\Seeder;
use App\User;


class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $class= new User;
        
        $class->create([
        	"name"=>"admin",
        	"email"=>"admin@email.com",
        	"password"=>bcrypt('password')
        	]);
    }
}
