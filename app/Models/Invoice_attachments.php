<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sections;
class Invoice_attachments extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_name',
        'invoice_number',
        'created_by',
        'invoice_id'
    ];
    public function section(){
        return $this->belongsTo(Sections::class);
    }
}

