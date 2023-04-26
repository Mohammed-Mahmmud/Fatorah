<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sections;
class Invoices_details extends Model
{
    use HasFactory;
    protected $fillable=[
        'invoice_id',
        'invoice_number',
        'invoice_date',
        'product',
        'section',
        'status',
        'value_status',
        'Payment_Date',
        'note',
        'user',
        
    ];
    public function section(){
        return $this->belongsTo(Sections::class);
    }
}

