<?php

namespace Database\Seeders;

use App\Models\MyJobsBoard;
use Illuminate\Database\Seeder;

class MyJobsBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MyJobsBoard::factory()->count(10)->create();
    }
}
