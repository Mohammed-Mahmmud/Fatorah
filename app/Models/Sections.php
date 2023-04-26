<?php

namespace App\Models;
use App\Models\products;
use App\Models\Invoices;
use App\Models\Invoices_details;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sections extends Model {
	use HasFactory;
	protected $fillable = [
		'section_name',
		'description',
		'created_by',
	];
	
	public function products(){
		return $this->hasMany(products::class);
	}
	public function Invoices(){
		return $this->hasMany(Invoices::class);
	}

	public function InvoiceDetails(){
		return $this->hasMany(Invoices_details::class);
	}
}