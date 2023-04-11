<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void{
		Schema::create('invoices', function (Blueprint $table) {
			$table->id();
			$table->string('invoice_number');
			$table->date('invoice_date');
			$table->date('Due_date');
			$table->string('product');
			$table->unsignedBigInteger('section_id');
			$table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
			$table->decimal('amount_collection',8,2)->nullable();
			$table->decimal('amount_Commission',8,2);
			$table->decimal('discount');
			$table->decimal('value_vat', 8, 2);
			$table->string('rate_vat');
			$table->decimal('total', 8, 2);
			$table->string('status', 50);
			$table->integer('value_status');
			$table->text('note')->nullable();
			$table->date('payment_date')->nullable();
			$table->softDeletes();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void{
		Schema::dropIfExists('invoices');
	}
};
