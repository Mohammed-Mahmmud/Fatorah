<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Invoices;
class InvoicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Invoices::create([        
			'invoice_number' =>'123',     
            'invoice_date'=>'2023-04-25',
            'Due_date' =>'2023-05-30',
            'product' =>'CC',
            'section_id '=>1,
            'amount_collection' =>'50000.00',
            'amount_Commission'=>'10000.00',
            'discount'=>'1500.00',
            'value_vat'=>'850.00',
            'rate_vat'=>'10%',
            'total'=>'41500',
            'note'=>'أول فاتورة',
            'status'=>'غير مدفوعة',
            'value_status'=>'2'
        ]);


    }
}
