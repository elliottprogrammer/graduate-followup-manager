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
        DB::table('users')->delete();

        DB::table('users')->insert([
            'name' => 'Bryan Elliott',
            'email' => 'bryan@elliottprogrammer.com',
            'password' => bcrypt('M3ll!4tt0'),
            'type' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Guest User',
            'email' => 'guest@elliottprogrammer.com',
            'password' => bcrypt('password'),
            'type' => 'default',
        ]);
    }
}
