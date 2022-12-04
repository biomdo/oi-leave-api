<?php

namespace Database\Seeders;

use App\Models\LeaveType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeaveTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       LeaveType::factory(5)
        ->sequence( 
            ['name'=> 'Annual'],
            ['name'=> 'Compassionate'],
            ['name'=> 'Maternity'],
            ['name'=> 'Paternal'],
            ['name'=> 'Study']
        )
        ->create();
    }
}
