<?php

use Illuminate\Database\Seeder;
use App\Transport;

class TransportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           $faker = \Faker\Factory::create();
           
           for ($i=0; $i < 40; $i++){    
           $transport = new Transport();
           $transport->users_id='1';
           $transport->adress = $faker->address;
           $transport->mark_vechicle= $faker->country;
           $transport->priority = '1';
           $transport->time = '1';
           $transport->comments = $faker->text(60);
           $transport->driver='1';
           $transport->date ='2017-03-10';
           $transport->save();
           }   
           
    }
}
