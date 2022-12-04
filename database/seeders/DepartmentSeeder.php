<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::factory(3)
        ->sequence(
            ['name'=> 'Accounts',
            'description'=>'Accounts'],
            ['name'=>'ICT',
            'description'=>'ICT'],
            ['name'=>'Human Resource',
            'description'=>'Human Resource']
        )
        ->create();
    }
}
