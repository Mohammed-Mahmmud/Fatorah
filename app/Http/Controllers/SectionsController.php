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
	public function index() {
		//
		// return view('sections.sections');
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
	public function store(Sections $sections, Request $request) {
		//
		$input = $request->all();
		$b_exist = Sections::whereSection_name($input['section_name'])->exists();

		if ($b_exist) {
			session()->flash('Error', 'خطا القسم مسجل مسبقا');
			return redirect('/sections');
		} else {

			Sections::create([
				'section_name' => $request->section_name,
				'description' => $request->description,
				'created_by' => Auth::user()->name,
			]);
			session()->flash('Add', 'تم اضافة القسم بنجاح');
			return redirect('/sections');
		}
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
	public function edit(Sections $sections) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, Sections $sections) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Sections $sections) {
		//
	}
}
