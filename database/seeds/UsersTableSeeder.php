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
    	 DB::table('users')->insert([
             'name' => 'Methys',
	         'email' => 'methys@vehicles.com',
	         'password' => bcrypt('methys')
        ]);
        
    }
}
