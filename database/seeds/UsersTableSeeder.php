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
        $admin->name = "administrador";
        $admin->username = "administrador";
        $admin->email = "administrador@administrador";
        $admin->password = bcrypt('administrador');
        $admin->save();

        $buyer = new User();
        $buyer->name = "comprador";
        $buyer->username = "comprador";
        $buyer->email = "comprador@gmail.com";
        $buyer->password = bcrypt('comprador');
        $buyer->save();
    }
}
