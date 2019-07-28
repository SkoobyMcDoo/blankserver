<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super = new Role();
        $super->name         = 'super';
        $super->display_name = 'Super Administrator'; // optional
        $super->description  = 'Highest access level, can see and do anything.'; // optional
        $super->save();

        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'Administrator'; // optional
        $admin->description  = 'Can see and do almost anything.'; // optional
        $admin->save();

        $user = new Role();
        $user->name         = 'user';
        $user->display_name = 'User'; // optional
        $user->description  = 'Access user system.'; // optional
        $user->save();

        User::where('email', '=', 'shuaib.rangraje@gmail.com')->first()->attachRole($super);
    }
}
