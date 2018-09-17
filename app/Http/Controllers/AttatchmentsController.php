<?php

namespace App\Http\Controllers;

use App\Attatchment;
use App\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AttatchmentsController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//Get All attatchments
		$attatchmentObj = Attatchment::all();

		$attatchmentProfessional = 0;
		$attatchmenLearnership = 0;
		$attatchmentInternship = 0;
		//Find and sort category for attatcment candidate
		foreach ($attatchmentObj as $obj) {
			if ($obj->candidate->candidateCategory == 'Professional') {
				$attatchmentProfessional++;
			}
			if ($obj->candidate->candidateCategory == 'Learnership') {
				$attatchmenLearnership++;
			}
			if ($obj->candidate->candidateCategory == 'Internship') {
				$attatchmentInternship++;
			}
		}

		$attatchments = Attatchment::paginate(10);
		return view('pages.attatchments.attatchments')->with(['attatchments' => $attatchments, 'attatchmentProfessional' => $attatchmentProfessional,
			'attatchmenLearnership' => $attatchmenLearnership,
			'attatchmentInternship' => $attatchmentInternship]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$candidates = Candidate::all();
		return view('pages.attatchments.create')->with('candidates', $candidates);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$this->validate($request, [
			'candidateFile' => 'required|max:7999',
			'candidate_id' => 'required',
		]);

		//Get filename with extension
		$fileNameWithExt = $request->file('candidateFile')->getClientOriginalName();
		//Get filename
		$fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
		//Get file extension
		$fileExt = $request->file('candidateFile')->getClientOriginalExtension();
		//Filename to store
		$fileNameToStore = $fileName . '_' . time() . '.' . $fileExt;
		//Upload Image
		$path = $request->file('candidateFile')->storeAs('public/CandidateFiles', $fileNameToStore);
		// run php artisan storage:link to link storage folder with public, run only once.

		//Create Post
		$attatchment = new Attatchment;
		//Assign values
		$attatchment->candidateFileName = $request->file('candidateFile')->getClientOriginalName();
		$attatchment->candidate_id = $request->input('candidate_id');
		$attatchment->candidateFile = $fileNameToStore;

		//Save Post
		$attatchment->save();

		return redirect('/attatchments')->with('success', 'Attatchment Added');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Attatchment  $attatchment
	 * @return \Illuminate\Http\Response
	 */
	public function show(Attatchment $attatchment) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Attatchment  $attatchment
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Attatchment $attatchment) {

		return view('pages.attatchments.edit')->with('attatchment', $attatchment);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Attatchment  $attatchment
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Attatchment $attatchment) {
		$this->validate($request, [
			'candidateFile' => 'required|max:7999',
		]);

		//Get filename with extension
		$fileNameWithExt = $request->file('candidateFile')->getClientOriginalName();
		//Get filename
		$fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
		//Get file extension
		$fileExt = $request->file('candidateFile')->getClientOriginalExtension();
		//Filename to store
		$fileNameToStore = $fileName . '_' . time() . '.' . $fileExt;
		//Upload Image
		$path = $request->file('candidateFile')->storeAs('public/CandidateFiles', $fileNameToStore);
		// run php artisan storage:link to link storage folder with public, run only once.

		//Assign values
		if (Storage::exists('public/CandidateFiles/' . $attatchment->candidateFile)) {
			Storage::delete('public/CandidateFiles/' . $attatchment->candidateFile);
		}
		$attatchment->candidateFileName = $request->file('candidateFile')->getClientOriginalName();
		$attatchment->candidateFile = $fileNameToStore;

		//Save attatchment
		$attatchment->save();

		$attatchments = Attatchment::paginate(10);
		return redirect('/attatchments')->with(['attatchments' => $attatchments, 'success' => 'Attatchment Updated']);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Attatchment  $attatchment
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Attatchment $attatchment) {
		//$pathToFile = public_path().'/storage/CVs/' . $attatchment->candidateFile;
		$pathToFile = storage_path('app/public/CandidateFiles/' . $attatchment->candidateFile);

		Storage::delete($pathToFile);
		$attatchment->delete();

		return back()->with('success', 'Attatchment Deleted');
	}

	public function download(Attatchment $attatchment) {
		//dd($attatchment);
		$pathToFile = storage_path('app/public/CandidateFiles/' . $attatchment->candidateFile);
		
		return response()->download($pathToFile);
		
		//return response()->download($pathToFile);

	}
}
