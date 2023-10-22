<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // this should grab random customer_id's and some null values
            'customer_id' => $this->faker->randomElement(array_merge(Customer::pluck('id')->toArray(), [null])),
            'first_name' => $this->faker->firstName,
            'last_name'=> $this->faker->lastName,
            'email'=> $this->faker->safeEmail,
            'contact_phone'=> $this->faker->phoneNumber,
            'text_capable' => $this->faker->boolean,
        ];
    }
}
