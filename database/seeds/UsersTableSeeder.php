<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            "name"=>"Franco",
            "last_name"=>"Marostica",
            "email"=>"fmarostica@automatizasa.com.ar",
            "password"=>bcrypt("Galletita2602")
        ]);
        factory(App\User::class, 29)->create();
    }
}
