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
        $admin = new User();
        $admin->name = "Rafael";
        $admin->username = "administrador";
        $admin->email = "animasdelmundo2@gmail.com";
        $admin->password = bcrypt('administrador');
        $admin->save();

        $buyer = new User();
        $buyer->name = "Ricardo";
        $buyer->username = "comprador";
        $buyer->email = "0.ricardogonzalez.0@gmail.com";
        $buyer->password = bcrypt('comprador');
        $buyer->save();
    }
}
