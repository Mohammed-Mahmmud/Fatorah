<?php

namespace App\Http\Controllers;
use App\Models\Sections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SectionsController extends Controller {
	/**
	 * Display a listing of the resource.
	 */
	public function index() 
	{

		return view('sections.sections', ['sections' => Sections::all()]);
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store( Request $request) {
	$id=$request->id;
		$validation=$request->validate([
			'section_name' => 'required|max:255|unique:sections,section_name,'.$id,
			'description' => 'required',
		],[
			'section_name.required'=>'خظأ ﻻ يمكن للقسم أن يكون فارغا',
			'section_name.unique'=>'خظأ هذا القسم تم أدراجه مسبقا',
			'description.required'=>'خظأ ﻻ يمكن للوصف أن يكون فارغا',

		]);
				Sections::create([
				'section_name' => $request->section_name,
				'description' => $request->description,
				'created_by' => Auth::user()->name,
			]);
			return redirect('/sections')->with(['done'=>'تم اضافة القسم بنجاح']);
		}

	/**
	 * Display the specified resource.
	 */
	public function show(Sections $sections) {
		//
		return view('sections.sections', compact('sections'));
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(Request $request ,Sections $sections) {
		//
		return view('sections.sections',compact('sections'));
		
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request , Sections $sections) {
		//	
		$id=$request->id;
		$request->validate([
			'section_name' => 'required|max:255|unique:sections,section_name,'.$id,
			'description' => 'required',
		],[
			'section_name.required'=>'خظأ ﻻ يمكن للقسم أن يكون فارغا',
			'section_name.unique'=>'خظأ هذا القسم تم أدراجه مسبقا',
			'description.required'=>'خظأ ﻻ يمكن للوصف أن يكون فارغا',	
		]);
		
		 Sections::findorfail($id)->update([
			'section_name'=>$request->section_name,
			'description' =>$request->description
		]);  
			return redirect('/sections',)->with(['edit'=>'تم تعديل القسم بنجاج']);				   				   
		}




	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Request $request ) {
		//
		$id =$request->id;
		sections::findorfail($id)->delete();
		return redirect('/sections')->with(['delete'=>'تم حذف القسم بنجاح']);
	}
}
