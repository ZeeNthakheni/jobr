<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Attatchment;

class CandidatesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidates = Candidate::paginate(15);


        //Get Tab values
        $candidateObj = new Candidate;

        $candidateLearn = count($candidateObj::where(['candidateCategory'=>'Learnership'])->get()) ;
        $candidateProf = count($candidateObj::where(['candidateCategory'=>'Professional'])->get()) ;
        $candidateIntern = count($candidateObj::where(['candidateCategory'=>'Internship'])->get()) ;


        return view('pages.candidates.candidates')->with(['candidates'=>$candidates,'candidateLearn'=>$candidateLearn
        ,'candidateProf'=>$candidateProf,'candidateIntern'=>$candidateIntern]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('pages.candidates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request,[
            'name' => 'required',
            'idNumber' => 'required',
            'residence' => 'required',
            'contactDetails' => 'required',
            'qualification' => 'required',
            'gender' => 'required',
            'race' => 'required',
            'candidateCategory' => 'required',
            'experience' => 'required',
            'status' => 'required' 
        ]);

    

        //Create candidate
        $candidate = new Candidate;
        //Assign values
        $candidate->name = $request->input('name');
        $candidate->idNumber = $request->input('idNumber');
        $candidate->disability = $request->input('disability');
        $candidate->residence = $request->input('residence');
        $candidate->contactDetails = $request->input('contactDetails');
        $candidate->qualification = $request->input('qualification');
        $candidate->gender = $request->input('gender');
        $candidate->race = $request->input('race');
        $candidate->candidateCategory = $request->input('candidateCategory');
        $candidate->experience = $request->input('experience');
        $candidate->status = $request->input('status');
     
        //Save candidate
        $candidate->save();


        //Redirect
        return redirect('/candidates')->with('success','Candidate Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {
        $attatchments = $candidate->attatchment;
        
        return view('pages.candidates.view')->with('candidate',$candidate)->with('attatchments',$attatchments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        return view('pages.candidates.edit')->with('candidate',$candidate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate)
    {
        $this -> validate($request,[
            'name' => 'required',
            'idNumber' => 'required',
            'residence' => 'required',
            'contactDetails' => 'required',
            'qualification' => 'required',
            'gender' => 'required',
            'race' => 'required',
            'candidateCategory' => 'required',
            'experience' => 'required',
            'status' => 'required',
        ]);

       

        //Assign values
        $candidate->name = $request->input('name');
        $candidate->idNumber = $request->input('idNumber');
        $candidate->disability = $request->input('disability');
        $candidate->residence = $request->input('residence');
        $candidate->contactDetails = $request->input('contactDetails');
        $candidate->qualification = $request->input('qualification');
        $candidate->gender = $request->input('gender');
        $candidate->race = $request->input('race');
        $candidate->candidateCategory = $request->input('candidateCategory');
        $candidate->experience = $request->input('experience');
        $candidate->status = $request->input('status');

        //Save candidate
        $candidate->save();
        //Redirect
        return redirect('/candidates')->with('success','Candidate Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {

        //dd($candidate);

        //Delete image only if its not noimage
        if($candidate->cv != 'None'){
           //Delete image
           Storage::delete('public/CVs/'.$candidate->cv);
        }
        $candidate->delete();
        return redirect('/candidates')->with('success','Candidate Deleted');
    }

    public function placed()
    {
        $candidates = Candidate::where('status','Placed')->paginate(15);
        //Get Tab values
        $candidateObj = new Candidate;

        $candidateLearn = count($candidateObj::where(['candidateCategory'=>'Learnership'])->get()) ;
        $candidateProf = count($candidateObj::where(['candidateCategory'=>'Professional'])->get()) ;
        $candidateIntern = count($candidateObj::where(['candidateCategory'=>'Internship'])->get()) ;


        return view('pages.candidates.candidates')->with(['candidates'=>$candidates,'candidateLearn'=>$candidateLearn
        ,'candidateProf'=>$candidateProf,'candidateIntern'=>$candidateIntern]);
    }
    
    public function listed()
    {
        $candidates = Candidate::where('status','Listed')->paginate(15);
         //Get Tab values
        $candidateObj = new Candidate;

        $candidateLearn = count($candidateObj::where(['candidateCategory'=>'Learnership'])->get()) ;
        $candidateProf = count($candidateObj::where(['candidateCategory'=>'Professional'])->get()) ;
        $candidateIntern = count($candidateObj::where(['candidateCategory'=>'Internship'])->get()) ;


        return view('pages.candidates.candidates')->with(['candidates'=>$candidates,'candidateLearn'=>$candidateLearn
        ,'candidateProf'=>$candidateProf,'candidateIntern'=>$candidateIntern]);
    }

    public function pending()
    {
        $candidates = Candidate::where('status','Interview Pending')->paginate(15);
        //Get Tab values
        $candidateObj = new Candidate;

        $candidateLearn = count($candidateObj::where(['candidateCategory'=>'Learnership'])->get()) ;
        $candidateProf = count($candidateObj::where(['candidateCategory'=>'Professional'])->get()) ;
        $candidateIntern = count($candidateObj::where(['candidateCategory'=>'Internship'])->get()) ;


        return view('pages.candidates.candidates')->with(['candidates'=>$candidates,'candidateLearn'=>$candidateLearn
        ,'candidateProf'=>$candidateProf,'candidateIntern'=>$candidateIntern]);
    }

    public function shortlisted()
    {
        $candidates = Candidate::where('status','Shortlisted')->paginate(15);
        //Get Tab values
        $candidateObj = new Candidate;

        $candidateLearn = count($candidateObj::where(['candidateCategory'=>'Learnership'])->get()) ;
        $candidateProf = count($candidateObj::where(['candidateCategory'=>'Professional'])->get()) ;
        $candidateIntern = count($candidateObj::where(['candidateCategory'=>'Internship'])->get()) ;


        return view('pages.candidates.candidates')->with(['candidates'=>$candidates,'candidateLearn'=>$candidateLearn
        ,'candidateProf'=>$candidateProf,'candidateIntern'=>$candidateIntern]);
    }

    public function blacklisted()
    {
        $candidates = Candidate::where('status','Blacklisted')->paginate(15);
         //Get Tab values
        $candidateObj = new Candidate;

        $candidateLearn = count($candidateObj::where(['candidateCategory'=>'Learnership'])->get()) ;
        $candidateProf = count($candidateObj::where(['candidateCategory'=>'Professional'])->get()) ;
        $candidateIntern = count($candidateObj::where(['candidateCategory'=>'Internship'])->get()) ;


        return view('pages.candidates.candidates')->with(['candidates'=>$candidates,'candidateLearn'=>$candidateLearn
        ,'candidateProf'=>$candidateProf,'candidateIntern'=>$candidateIntern]);
    }
}
