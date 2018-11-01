@extends('layouts.dashboard')

@section('content')
<div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-home"></i>                 
          </span>
           All Companies Page
        </h3>  
      </div>


    @if (count($companies)>0)
  
        <div class="card">
            <div class="card-body">
                <div style="overflow-x:auto;"> 
                        <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>Company Name</th>
                                  </tr>
                                </thead>
                                  <tbody>
                                    @foreach ($companies as $company)
                                    <tr>
                                      <td>{{$company->name}}</td>
                                      <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                    
                                          <a href="/company-edit/{{$company->id}}" class="btn btn-gradient-info btn-fw" title="View" >
                                            <i class="mdi mdi-glasses"></i>
                                            View
                                          </a>
                                          @if (Auth::user()->companyKey != $company->key)
                                            <form id="delete-form" action="/company/{{$company->id}}" method="POST">
                                                @csrf
                                                @method('DELETE')  
                                                <button type="submit" class="btn btn-gradient-danger btn-fw"> <i class="mdi mdi-eraser"></i>Delete</button>
                                            </form>
                                          @endif
                                          
                                        </div>
                                      </td>                 
                                    </tr>
                                    @endforeach
                                  </tbody> 
                                </table>   
             
                
    @else 
        <div class="card" style="height: 100px; text-align: center">
            <h1 style="padding-top: 25px">No jobs Available</h1>
        </div> 
    @endif
                <br>          
                {{ $companies->links() }}
                </div>
            </div>
        </div>
@endsection
