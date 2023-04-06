<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $fillable = [
		'product_name',
        'section_id',
		'description',
		'created_by',
	];

	public function Sections(){
        return $this->belongsTo(Sections::class);
    }
}
