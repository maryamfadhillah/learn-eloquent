<?php

namespace Database\Seeders;

use App\Models\Dogs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dogs::truncate();

        Dogs::create(['name' => 'Joe', 'age' => 5]);
        Dogs::create(['name' => 'Jock', 'age' => 7]);
        Dogs::create(['name' => 'Jane', 'age' => 2]);
        Dogs::create(['name' => 'Jade', 'age' => 4]);
    }
}
