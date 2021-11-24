<?php

namespace Database\Factories;

use App\Models\AllWood;
use Illuminate\Database\Eloquent\Factories\Factory;

class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }

    public function allwood()
    {
        return $this->hasMany(AllWood::class);
    }
}
