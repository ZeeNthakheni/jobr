<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CompaniesController extends Controller
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
        return view('pages.company.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.company.create');
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
            'key' => 'required|unique:companies',
            'isActive' => 'required',
        ]);

        //Create client
        $company = new Company;
        //Assign values
        $company->name = $request->input('name');
        $company->key = $request->input('key');
        $company->isActive = $request->input('isActive');
        //Get current user
        $user = Auth::user();
        //Get current users company key
        $userCompany = $user->companyKey;
        //get company that corresponds to key
        $userCompanyId = Company::where('key', $userCompany)->first();
        //Assign company id to that of the new company
        $company->company_id = $userCompanyId->id;
        //Save client
        $company->save();
        //Redirect
        return redirect('/home')->with('success','Company Created');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('pages.company.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
