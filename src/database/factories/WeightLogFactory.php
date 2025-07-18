<?php

namespace Database\Factories;

use App\Models\WeightLog;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeightLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = WeightLog::class;
    public function definition()
    {
        return [
            'date' => $this->faker->dateTimeBetween('-60 days', 'now')->format('Y-m-d'),
            'weight' => $this->faker->randomFloat(1,50,80),
            'calories' => $this ->faker->numberBetween(1500,2500),
            'exercise_time' => $this ->faker->time('H:i:s'),
            'exercise_content' =>$this ->faker->randomElement(['ランニング','ウォーキング','水泳','筋トレ','ヨガ','自転車'])
        ];
    }
}
