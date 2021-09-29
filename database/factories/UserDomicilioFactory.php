<?php

namespace Database\Factories;

use App\Models\UserDomicilio;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserDomicilioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserDomicilio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date_time=$this->faker->date().' '.$this->faker->time();
        return [
            'user_id' => $this->faker->unique()->numberBetween(1, \App\Models\User::count()),
            'ciudad' => $this->faker->name,
            'colonia' => $this->faker->name,
            'domicilio' => $this->faker->address,
            'numero_exterior' => $this->faker->numberBetween(1,20),
            'cp' => $this->faker->numberBetween(1,20),
            'created_at'=>$date_time,
            'updated_at'=>$date_time
        ];
    }
}
