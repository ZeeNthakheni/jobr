@extends('layouts.dashboard')

@section('content')
<div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-home"></i>                 
          </span>
          Pending Clients Page
        </h3>
        
      </div>
      <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                  <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">
                  <h4 class="font-weight-normal mb-3">Professional
                   
                  </h4>
                  <h2 class="mb-5">200</h2>
                  
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                  <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">                  
                  <h4 class="font-weight-normal mb-3">Learnership
                  
                  </h4>
                  <h2 class="mb-5">150</h2>
                  
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                  <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">                                    
                  <h4 class="font-weight-normal mb-3">Internship 
                   
                  </h4>
                  <h2 class="mb-5">100</h2>
                  
                </div>
              </div>
            </div>
			
</div>
@if (count($clients)>0)
  
    <div class="card">
      <div class="card-body">
        <div style="overflow-x:auto;">  
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Company</th>
                <th>Location</th>
                <th>Industry</th>
                <th>Contact Details</th>
                <th>Category</th>
                <th>Recruiter</th>
                <th>Status</th>
              </tr>
            </thead>
              <tbody>
                @foreach ($clients as $client)
                <tr>
                  <td>{{$client->company}}</td>
                  <td>{{$client->location}}</td>
                  <td>{{$client->industry}}</td>
                  <td>{{$client->contact}}</td>
                  <td>{{$client->category}}</td>
                  <td>{{$recruiterName->find($client->user_id)->name}}</td>
                  <td>{{$client->status}}</td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="/clients/{{$client->id}}" class="btn btn-gradient-primary btn-fw" title="View" >
                        <i class="mdi mdi-glasses"></i>
                        View
                      </a>
                      <a href="/clients/{{$client->id}}/edit" class="btn btn-gradient-success btn-fw" title="Edit">
                        <i class="mdi mdi-lead-pencil"></i>
                        Edit
                      </a>
                      
                      <a class="btn btn-gradient-danger btn-fw" href="/clients/{{$client->id}}" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                          <i class="mdi mdi-eraser"></i>
                          Delete
                      </a>
                      <form id="delete-form" action="/clients/{{$client->id}}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                      </form>
                    </div>
                  </td>                 
                </tr>
                @endforeach
              </tbody> 
            </table>   
                
            @else 
               <div class="card" style="height: 100px; text-align: center">
                 <h1 style="padding-top: 25px">No Clients Available</h1>
                </div> 
            @endif
            <br>          
            {{ $clients->links() }}
      </div>
    </div>
  </div>
@endsection
