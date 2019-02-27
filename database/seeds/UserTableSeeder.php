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
        if (User::whereEmail("admin@mail.ru")->first() == NULL){
            User::create([
                "email" => "admin@mail.ru",
                "name" => "admin",
                "password" => bcrypt("qwerty"),
                "fullname" => "Пушкин А.С.",
            ]);
        }
        if (User::whereEmail("author@mail.ru")->first() == NULL){
            User::create([
                "email" => "author@mail.ru",
                "name" => "author",
                "password" => bcrypt("qwerty"),
                "fullname" => "Булгаков М.А.",
            ]);
        }
    }
}
