<?php

namespace Database\Factories;

use App\Models\MyJobsBoard;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CommJobsBoard;
use App\Models\User;



class MyJobsBoardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MyJobsBoard::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            // 'JobTitle'=>CommJobsBoard::all()->random
            'Job_id'=> CommJobsBoard::all ()->random()->id,
            'Description'=> $this->faker->catchPhrase(),
            'CreatedBy'=> $this->faker->name,
            'CompanyName'=> $this->faker->name,
            'Link'=> $this->faker->url,
            'Salary'=> $this->faker->numberBetween($min = 30000, $max = 80000) // 8567

            // $this->faker->words($nd=2,$variableNbWords = true),
            // 'author'=> $this->faker->name,
            // // why 
            // // 'author_id' =>Author::all()->random()->id,
            // // 'author'=> Author::all()->random()->name,

          

        ];

        }
        
    }