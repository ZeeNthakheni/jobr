<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class ClientsController extends Controller
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
        $clients = Client::paginate(15);
        return view('pages.clients.viewall')->with('clients',$clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userList = User::all();
        return view('pages.clients.create')->with('userList',$userList);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Create client
        $client = new client;
        //Assign values
        $client->company = $request->input('company');
        $client->activities = $request->input('activities');
        $client->industry = $request->input('industry');
        $client->location = $request->input('location');
        $client->contact = $request->input('contact');
        $client->jobTitle = $request->input('jobTitle');
        $client->noOfEmployees = $request->input('noOfEmployees');
        $client->category = $request->input('category');
        $client->recruiter = $request->input('recruiter');
        $client->status = $request->input('status');
        //Save client
        $client->save();
        //Redirect
        return redirect('/home')->with('success','client Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }

    public function internship()
    {
        return view('pages.clients.internship');
    }

    public function learnership()
    {
        return view('pages.clients.learnership');
    }

    public function pending()
    {
        return view('pages.clients.pending');
    }

    public function professional()
    {
        return view('pages.clients.professional');
    }
}
