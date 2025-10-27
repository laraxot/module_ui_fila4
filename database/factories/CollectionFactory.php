<?php

namespace Modules\UI\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CollectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\UI\Models\Collection::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}
