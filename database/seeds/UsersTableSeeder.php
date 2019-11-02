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
        $user = new App\User();
        $user->name = 'Emily Wallace';
        $user->is_admin = '1';
        $user->password = Hash::make('Tyrese1984');
        $user->email = 'emilyprice84@outlook.com';
        $user->save();
    }
}
