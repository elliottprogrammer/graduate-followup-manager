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
            'name' => 'Larry Trahant',
            'email' => 'lawrencetrahant@gmail.com',
            'password' => bcrypt('trahant!'),
            'type' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Ricky Bartleman',
            'email' => 'ricky@thebartlemans.com',
            'password' => bcrypt('SuperRicky!'),
            'type' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Bryan Elliott',
            'email' => 'bryan@drug-rehabs.org',
            'password' => bcrypt('M3ll!4tt0'),
            'type' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Blakey St John',
            'email' => 'blakey@drug-rehabs.org',
            'password' => bcrypt('fr3ed0m'),
            'type' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Jay Farrell',
            'email' => 'jay@drug-rehabs.org',
            'password' => bcrypt('K1ll1n_I+'),
            'type' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Wade Milligan',
            'email' => 'treas.ssl@nnfs.co',
            'password' => bcrypt('war2war2'),
            'type' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Judy Britt',
            'email' => 'grad.ssl@nnfs.co',
            'password' => bcrypt('ladiebuggs1219'),
            'type' => 'default',
        ]);
        DB::table('users')->insert([
            'name' => 'Amanda Hunt',
            'email' => 'doc.rcr@nnfs.co',
            'password' => bcrypt('docrcr01'),
            'type' => 'default',
        ]);
        DB::table('users')->insert([
            'name' => 'Grant Wrobel',
            'email' => 'div6.ssl@nnfs.co',
            'password' => bcrypt('D1v61117'),
            'type' => 'default',
        ]);
    }
}
