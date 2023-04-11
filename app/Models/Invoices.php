<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sections;
class Invoices extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice_number',
		'invoice_date',
		'Due_date',
		'product',
		'section_id',
		'amount_collection',
		'amount_Commission',
		'discount',
		'value_vat',
		'rate_vat',
		'total',
		'note',
		'status',
		'value_status',
        'payment_date'    
    ];
	public function section(){
        return $this->belongsTo(Sections::class);
    }

}
