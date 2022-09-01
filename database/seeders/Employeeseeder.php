<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Location;
use App\Models\Shedule;
use App\Models\Shift;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class Employeeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Employee::create([
            'id' => '1',
            'name' => 'nadeesha',
            'email' => 'nadeesha@gmail.com',
            'adress' => 'colombo',
            'phone' => '0788765678',


        ]);

        Employee::create([
            'id' => '2',
            'name' => 'jhon',
            'email' => 'johon@gmail.com',
            'adress' => 'india',
            'phone' => '0558765678',


        ]);

        Shift::create([
            'id' => '1',
            'shift_type' => 'night',
            'start_time' => '2022-09-01 01:30:55',
            'end_time' => '2022-09-01 05:30:55',


        ]);

        
        Location::create([
            'id' => '1',
            'location_name' => 'colombo',

        ]);


        Shedule::create([
            'id' => '1',
            'employee_id' => '1',
            'location_id' => '1',
            'shift_id' => '1',
            'date' => '2022-09-01',

        ]);

        Shedule::create([
            'id' => '2',
            'employee_id' => '2',
            'location_id' => '1',
            'shift_id' => '1',
            'date' => '2022-09-01',

        ]);


    }
}
