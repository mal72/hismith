<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::whereEmail("adad@mail.ru")->first() == NULL){
            User::create([
                "email" => "adad@mail.ru",
                "name" => "Пушкин А.С.",
                "password" => bcrypt("qwerty"),
            ]);
        }
        if (User::whereEmail("btest@mail.ru")->first() == NULL){
            User::create([
                "email" => "btest@mail.ru",
                "name" => "Булгаков М.А.",
                "password" => bcrypt("qwerty"),
            ]);
        }
    }
}
