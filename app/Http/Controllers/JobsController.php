<?php

namespace App\Http\Controllers;

use App\job;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use App\Client;

class JobsController extends Controller
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
        $jobs = job::paginate(15);
        $recruiterName = new User;
        return view('pages.jobs.viewall')->with(['jobs'=>$jobs,'recruiterName'=>$recruiterName]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userList = User::all();
        $clientList = Client::all();
        return view('pages.jobs.create')->with(['userList'=>$userList,'clientList'=>$clientList]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Create job
        $job = new Job;
        //Assign values
        $job->company = $request->input('company');
        $job->jobTitle = $request->input('jobTitle');
        $job->responsibilities = $request->input('responsibilities');
        $job->attributes = $request->input('attributes');
        $job->qualifications = $request->input('qualifications');
        $job->location = $request->input('location');
        $job->salary = $request->input('salary');
        $job->closingDate = $request->input('closingDate');
        $job->user_id = $request->input('user_id');
        $job->client_id = $request->input('client_id');
        $job->category = $request->input('category');
        $job->status = $request->input('status');
        //Save job
        $job->save();
        //Redirect
        return redirect('/jobs-all')->with('success','job Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(job $job)
    {
        $recruiterName = User::find($job->user_id)->name;
        return view('pages.jobs.view')->with(['job'=>$job,'recruiterName'=>$recruiterName]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(job $job)
    {
        $userList = User::all();
        $recruiterName = User::find($job->user_id)->name;
        $clientList = Client::all();
        return view('pages.jobs.edit')->with(['job' => $job,'userList'=>$userList,'clientList'=>$clientList,'recruiterName'=>$recruiterName]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, job $job)
    {
        //Assign values
        $job->company = $request->input('company');
        $job->jobTitle = $request->input('jobTitle');
        $job->responsibilities = $request->input('responsibilities');
        $job->attributes = $request->input('attributes');
        $job->qualifications = $request->input('qualifications');
        $job->location = $request->input('location');
        $job->salary = $request->input('salary');
        $job->closingDate = $request->input('closingDate');
        $job->user_id = $request->input('user_id');
        $job->client_id = $request->input('client_id');
        $job->category = $request->input('category');
        $job->status = $request->input('status');
        //Save job
        $job->save();
        //Redirect
        return redirect('/jobs-all')->with('success','job Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(job $job)
    {
        $job->delete();
        return redirect('/jobs-all')->with('success','Job Deleted');
    }

    public function internship()
    {
        $jobs = job::where('category','Internship')->paginate(15);
        $recruiterName = new User;
        return view('pages.jobs.internship')->with(['jobs'=>$jobs,'recruiterName'=>$recruiterName]);
    }

    public function learnership()
    {
        $jobs = job::where('category','Learnership')->paginate(15);
        $recruiterName = new User;
        return view('pages.jobs.learnership')->with(['jobs'=>$jobs,'recruiterName'=>$recruiterName]);
    }

    public function pending()
    {
        $jobs = job::where('status','Pending')->paginate(15);
        $recruiterName = new User;
        return view('pages.jobs.pending')->with(['jobs'=>$jobs,'recruiterName'=>$recruiterName]);
    }

    public function professional()
    {
        $jobs = job::where('category','Professional')->paginate(15);
        $recruiterName = new User;
        return view('pages.jobs.professional')->with(['jobs'=>$jobs,'recruiterName'=>$recruiterName]);
    }
}
