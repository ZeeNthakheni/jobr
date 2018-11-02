<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use App\Attatchment;
use App\Company;
use App\Experience;
use PDF;

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
        //Create company
        $company = new Company;
        //Get current user
        $user = Auth::user();
        //Get current users company key
        $userCompany = $user->companyKey;
        //get company that corresponds to key
        $userCompanyId = Company::where('key', $userCompany)->first();
        
        $candidates = Candidate::where('company_id',$userCompanyId->id)->paginate(15);


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
        //$candidate->experience = $request->input('experience');
        $candidate->status = $request->input('status');

        //Create company
        $company = new Company;
        //Get current user
        $user = Auth::user();
        //Get current users company key
        $userCompany = $user->companyKey;
        //get company that corresponds to key
        $userCompanyId = Company::where('key', $userCompany)->first();
        //Assign company id to that of the user's company
        $candidate->company_id = $userCompanyId->id;
     
        //Save candidate
        $candidate->save();

        
        if(count($request->input('experience'))>0){
            foreach($request->input('experience') as $exp){
                $experience = new Experience;
    
                $experience->company = $exp['company'];
                $experience->startDate = $exp['startDate'];
                $experience->endDate = $exp['endDate'];
                $experience->body = $exp['body'];
                $experience->candidate_id = $candidate->id;
    
                $experience->save();
            }
        }
        

        

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
        //$candidate->experience = $request->input('experience');
        $candidate->status = $request->input('status');

        //Save candidate
        $candidate->save();

        if(count($request->input('experience'))>0){
            foreach($candidate->experiences as $exp){
                
                    $exp->delete();
            }

        }
        
        if(count($request->input('experience'))>0){

            foreach($request->input('experience') as $exp){
                
                $experience = new Experience;

                $experience->company = $exp['company'];
                $experience->startDate = $exp['startDate'];
                $experience->endDate = $exp['endDate'];
                $experience->body = $exp['body'];
                $experience->candidate_id = $candidate->id;
    
                $experience->save();
            }

        } 


        
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
        if(count($candidate->attatchment)>0){
            foreach($candidate->attatchment as $file)
            {
                Storage::delete('public/CandidateFiles/'.$file->candidateFile);
                $file->delete();  
            }
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

    public function download(Candidate $candidate) {
		
		
		$pdf = PDF::loadView('pages.candidates.view',['candidate'=>$candidate]);
		return $pdf->download($candidate->name.'.pdf');
			
    }
    
    public function deleteExperience(Experience $experience, $candidateId)
    {
        
        $experience->delete();
        return redirect('/candidates/'.$candidateId."/edit")->with('success','Experience Deleted');
    }
}
