<?php

namespace Database\Seeders;
use App\Models\products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        products::updateorcreate(['product_name' => 'CC'], [
            'product_name' => 'CC',
            'section_id' => '1',
            'description' => 'Credite Card',
            'created_by' => 'mohamed',
		]);
    
        products::updateorcreate(['product_name' => 'MC'], [
            'product_name' => 'MC',
            'section_id' => '2',
            'description' => 'Master Card',
            'created_by' => 'mohamed',
		]);
        products::updateorcreate(['product_name' => 'DC'], [
            'product_name' => 'DC',
            'section_id' => '3',
            'description' => 'Depite Card',
            'created_by' => 'mohamed',
		]);
        products::updateorcreate(['product_name' => 'Pp'], [
            'product_name' => 'Pp',
            'section_id' => '1',
            'description' => 'PayPal',
            'created_by' => 'mohamed',
		]);
    
    }
}
