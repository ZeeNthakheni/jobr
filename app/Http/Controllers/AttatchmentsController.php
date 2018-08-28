<?php

namespace App\Http\Controllers;

use App\Attatchment;
use Illuminate\Http\Request;

class AttatchmentsController extends Controller
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
        return view('pages.attatchments.attatchments');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attatchment  $attatchment
     * @return \Illuminate\Http\Response
     */
    public function show(Attatchment $attatchment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attatchment  $attatchment
     * @return \Illuminate\Http\Response
     */
    public function edit(Attatchment $attatchment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attatchment  $attatchment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attatchment $attatchment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attatchment  $attatchment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attatchment $attatchment)
    {
        //
    }
}
