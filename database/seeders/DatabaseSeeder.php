<?php

namespace Database\Seeders;

use App\Models\CommJobsBoard;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CommJobsBoardSeeder::class);
        $this->call(MyJobsBoardSeeder::class);


    }
}
