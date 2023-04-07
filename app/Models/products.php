<?php

namespace App\Models;
use App\Models\Sections;
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

	public function section(){
        return $this->belongsTo(Sections::class);
    }
}
