<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoices>
 */
class InvoicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoice_number' => fake()->number(),     
            'invoice_date'=> fake()->now(),
            'Due_date' => fake()->dateTimeBetween($startDate='now',$endDate='+20 days'),
            'product' => fake()->name,
            'section_id '=> fake()->numberBetween($int1=1,$int2=5),
            'amount_collection' =>fake()->numberBetween($int1=1000,$int2=50000),
            'amount_Commission'=>fake()->numberBetween($int1=1000,$int2=50000),
            'discount'=>fake()->numberBetween($int1=100,$int2=500),
            'value_vat'=>fake()->numberBetween($int1=1,$int2=300),
            'rate_vat'=>fake()->numberBetween($int1=1,$int2=100).'%',
            'total'=>fake()->numberBetween($int1=1,$int2=50000),
            'note'=>fake()->name(),
            'status'=>fake()->name(),
            'value_status'=>fake()->numberBetween($int1=1,$int2=3),
            'payment_date' =>fake()
        ];
    }
}
