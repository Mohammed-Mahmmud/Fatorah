<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\products;
use App\Models\Sections;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
        $products = products::all();

        return view('products.products', ['products' => $products ]);
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
    public function store(Request $request ,products $products)
    {
        $sections = Sections::all();
        $id=$request->id;
		$request->validate([
			'product_name' => 'required|max:255|unique:products,'.$id,
			'description' => 'required',
		],[
			'product_name.required'=>'خظأ ﻻ يمكن للمنتج أن يكون فارغا',
			'product_name.unique'=>'خظأ هذا المنتج تم أدراجه مسبقا',
			'description.required'=>'خظأ ﻻ يمكن للوصف أن يكون فارغا',

		]);
				products::create([
				'product_name' => $request->product_name,
                'section_id'   =>$request->section_id,
                'description'  =>$request->description,
                'created_by'   =>Auth::user()->name
			]);
			return view('products.products',['sections'=>$sections,'products'=>$products])->with(['done'=>'تم اضافة المنتج بنجاح']);
    }

    /**
     * Display the specified resource.
     */
    public function show(products $products)
    {
        //
        return view('products.products', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, products $products)
    {
        //
        $id=$request->id;
		$request->validate([
			'product_name' => 'required|max:255|unique:products,product_name,'.$id,
			'description' => 'required',
		],[
			'product_name.required'=>'خظأ ﻻ يمكن للمنتج أن يكون فارغا',
			'product_name.unique'=>'خظأ هذا المنتج تم أدراجه مسبقا',
			'description.required'=>'خظأ ﻻ يمكن للوصف أن يكون فارغا',	
		]);
		
		 Sections::findorfail($id)->update([
			'product_name' =>$request->product_name,
            'section_id'   =>$request->section_id,
			'description'  =>$request->description,
            'created_by'   =>Auth::user()->name
        ]);  
			return redirect('/products',)->with(['edit'=>'تم تعديل المنتج بنجاج']);	
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        
		$id =$request->id;
		products::findorfail($id)->delete();
		return redirect('/products')->with(['delete'=>'تم حذف المنتج بنجاح']);
	
    }
}
