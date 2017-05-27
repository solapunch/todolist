<?php

use Illuminate\Database\Seeder;

class UserTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'admin',
        	'email' => 'testing@gmail.com',
        	'password' => bcrypt('password'),
        	'gender' => 'F'
        	]);
    }
}
