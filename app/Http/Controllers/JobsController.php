<?php

namespace App\Http\Controllers;

use App\job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.jobs.create');
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
        $job->dueDate = $request->input('dueDate');
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
}