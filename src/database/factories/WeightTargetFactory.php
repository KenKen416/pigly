<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\WeightTarget;
class WeightTargetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = WeightTarget::class;
    public function definition()
    {
        return [
            'target_weight' => $this->faker->randomFloat(1,50,80)
        ];
    }
}
