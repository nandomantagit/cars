<?php

use Illuminate\Database\Seeder;
use App\Car;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // $c1 = new Car;

        // $c1->make = "Honda";
        // $c1->model = "Crv";
        // $c1->produced_on = now();
        // $c1->email = "random@gmail.com";
        // $c1->save();

    	factory(App\Car::class, 100)->create();
    }
}
