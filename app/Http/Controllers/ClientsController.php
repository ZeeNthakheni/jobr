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
        $recruiterName = new User;
        return view('pages.clients.viewall')->with(['clients'=>$clients,'recruiterName'=>$recruiterName]);
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
        $client->jobTitle = 'None';
        $client->noOfEmployees = $request->input('noOfEmployees');
        $client->category = $request->input('category');
        $client->user_id = $request->input('user_id');
        $client->status = $request->input('status');
        //Save client
        $client->save();
        //Redirect
        return redirect('/clients-all')->with('success','client Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        $recruiterName = User::find($client->user_id)->name;
        return view('pages.clients.view')->with(['client'=>$client,'recruiterName'=>$recruiterName]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        $userList = User::all();
        $recruiterName = User::find($client->user_id)->name;
        return view('pages.clients.edit')->with(['client' => $client,'userList'=>$userList,'recruiterName'=>$recruiterName]);
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
        //Assign values
        $client->company = $request->input('company');
        $client->activities = $request->input('activities');
        $client->industry = $request->input('industry');
        $client->location = $request->input('location');
        $client->contact = $request->input('contact');
        $client->jobTitle = 'None';
        $client->noOfEmployees = $request->input('noOfEmployees');
        $client->category = $request->input('category');
        $client->user_id = $request->input('user_id');
        $client->status = $request->input('status');
        //Save client
        $client->save();
        //Redirect
        return redirect('/clients-all')->with('success','Client Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect('/clients-all')->with('success','Client Deleted');
    }

    public function internship()
    {
        $clients = Client::where('category','Internship')->paginate(15);
        $recruiterName = new User;
        return view('pages.clients.internship')->with(['clients'=>$clients,'recruiterName'=>$recruiterName]);
    }

    public function learnership()
    {
        $clients = Client::where('category','Learnership')->paginate(15);
        $recruiterName = new User;
        return view('pages.clients.learnership')->with(['clients'=>$clients,'recruiterName'=>$recruiterName]);
    }

    public function pending()
    {
        $clients = Client::where('status','Pending')->paginate(15);
        $recruiterName = new User;
        return view('pages.clients.pending')->with(['clients'=>$clients,'recruiterName'=>$recruiterName]);
    }

    public function professional()
    {
        $clients = Client::where('category','Professional')->paginate(15);
        $recruiterName = new User;
        return view('pages.clients.professional')->with(['clients'=>$clients,'recruiterName'=>$recruiterName]);
    }
}
