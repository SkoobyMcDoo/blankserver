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
        $super = User::create( [
            'email' => 'shuaib.rangraje@gmail.com' ,
            'password' => Hash::make( 'supersuper' ) ,
            'name' => 'Shuaib'
        ] );
    }
}
