<?php

use Illuminate\Database\Seeder;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('vehicles')->insert([
            'owner_firstname' => 'Sandiso',
            'owner_lastname' => 'Toto',
            'owner_email' => 'sandisototo@gmail.com',
            'owner_contact_number' => '0738686012',
            'manufacturer' => 'Hyundai',
            'type' => 'i20',
            'year' => '2013',
            'colour' => 'white',
            'mileage' => '60000',
            'created_at' => '2016-10-30 00:18:06',
        ]);
    }
}
