<?php

namespace App\Http\Controllers;
use App\Models\Invoices_details;
use App\Models\Sections;
use App\Models\Invoices;
use App\Models\products;
use App\Models\Invoice_attachments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class InvoicesController extends Controller {
	/**
	 * Display a listing of the resource.
	 */
	public function index() {
	 	$invoices = Invoices::all();
	return view('invoices.invoices',compact('invoices'));

	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create() {
		$sections = Sections::all();
		$products = products::all();
		return view('invoices.add-invoice',compact('sections','products'));
	}
	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request) {
	//validation

	 Invoices::create([
		'invoice_number'=>$request->invoice_number,
		'invoice_date'=>$request->invoice_Date,
		'Due_date'=>$request->Due_date,
		'product'=>$request->product,
		'section_id'=>$request->Section,
		'amount_collection'=>$request->Amount_collection,
		'amount_Commission'=>$request->Amount_Commission,
		'discount'=>$request->Discount,
		'value_vat'=>$request->Value_VAT,
		'rate_vat'=>$request->Rate_VAT,
		'total'=>$request->Total,
		'note'=>$request->note,
		'status'=>'غير مدفوعة',
		'value_status'=>2,
	]);

$invoice_id =Invoices::latest()->first()->id;
	Invoices_details::create([
	'invoice_id'=>$invoice_id,
	'invoice_number'=>$request->invoice_number,
	'invoice_date'=>$request->invoice_Date,
	'product'=>$request->product,
	'section'=>$request->Section,
	'status'=>'غير مدفوعة',
	'value_status'=>2,
	'note'=>$request->note,
	'user'=>(Auth::user()->name),
]);

if($request->hasFile('pic')){
	$invoice_id=Invoices::latest()->first()->id ;
	$image = $request->file('pic');
	$file_name = $image->getClientOriginalName();
	Invoice_attachments::create([
	'file_name'=>$file_name ,
	'invoice_number'=>$request->invoice_number,
	'created_by'=>(Auth::user()->name),
	'invoice_id'=>$invoice_id
]);
	//move pic
	$imageName = $request->pic->getClientOriginalName();
	$invoice_number = $request->invoice_number;
	$request->pic->move(public_path("Attachments/$invoice_number"),$imageName);
}
	return redirect('/invoices/create')->with('Add','تم أضافة الفاتورة بنجاح');
}

	/**
	 * Display the specified resource.
	 */
	public function show(Invoices $invoices) {
		$invoices =Invoices::all();
		$Sections =Sections::all();
		$products =products::all();

		return view('invoices.invoices',compact('invoices','Sections','products'));
	}


	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(Invoices $invoices) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, Invoices $invoices) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Invoices $invoices) {
		//
	}
	
	public function getProducts($id){
		$products = DB::table('products')->where('section_id',$id)->pluck('product_name','id');
		return json_encode($products);
	}
}