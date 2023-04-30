<?php

namespace App\Http\Controllers;

use App\Models\Invoices_details;
use App\Models\Invoices;
use App\Models\Invoices_attachment;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Storage;
class InvoicesDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        //
        $invoice = Invoices::where('id','=',$id)->first();
        $invoice_details = Invoices_details::where('invoice_id','=',$id)->get();
        $invoice_attachments = DB::table('invoice_attachments')
                            ->where('invoice_id','=',$id)
                            ->first();

    //     $file_name = DB::table('invoice_attachments')
    //     ->where('invoice_id','=',$id)
    //     ->first('file_name');
        
    //     if ($file_name!=null) {
    //         $file_url = "/Attachments/$invoice_attachments->invoice_number/$invoice_attachments->file_name";
    //      }else {
    //         $file_url = 'ﻻ يوجد ملحقات';
    // }
   
    	return view('invoices.invoice-details',compact('invoice_details','invoice_attachments','invoice'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoices_details $invoices_details)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoices_details $invoices_details)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invoices_details $invoices_details)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoices_details $invoices_details)
    {
        //
    }
}
