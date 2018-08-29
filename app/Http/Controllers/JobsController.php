<?php

namespace App\Http\Controllers;

use App\job;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

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
        return view('pages.jobs.viewall');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userList = User::all();
        return view('pages.jobs.create')->with('userList',$userList);
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
        $job->recruiter = $request->input('recruiter');
        $job->client = $request->input('client');
        $job->category = $request->input('category');
        $job->status = $request->input('status');
        //Save job
        $job->save();
        //Redirect
        return redirect('/home')->with('success','job Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(job $job)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(job $job)
    {
        //
    }

    public function internship()
    {
        return view('pages.jobs.internship');
    }

    public function learnership()
    {
        return view('pages.jobs.learnership');
    }

    public function pending()
    {
        return view('pages.jobs.pending');
    }

    public function professional()
    {
        return view('pages.jobs.professional');
    }
}
