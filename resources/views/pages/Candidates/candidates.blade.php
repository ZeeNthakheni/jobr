@extends('layouts.dashboard')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-home"></i>                 
        </span>
          Candidates Page
    </h3>
    <a href="/candidates/create" class="btn btn-gradient-primary btn-rounded btn-fw float-right">+Add Candidate</a>
</div>
<div class="row">
        <div class="col-md-4 stretch-card grid-margin">
          <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
              <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">
              <h4 class="font-weight-normal mb-3">Professional
               
              </h4>
              <h2 class="mb-5">{{$candidateProf}}</h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
          <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
              <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">                  
              <h4 class="font-weight-normal mb-3">Learnership
              
              </h4>
              <h2 class="mb-5">{{$candidateLearn}}</h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
          <div class="card bg-gradient-success card-img-holder text-white">
            <div class="card-body">
              <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">                                    
              <h4 class="font-weight-normal mb-3">Internship 
               
              </h4>
              <h2 class="mb-5">{{$candidateIntern}}</h2>
              
            </div>
          </div>
        </div>
        
         <div class="card-body" style="text-align:center">
             
              <div class="template-demo">
                <a href="/candidates" class="btn btn-gradient-primary btn-rounded btn-fw">All Candidates</a>
                <a href="/candidates/listed" class="btn btn-gradient-light btn-rounded btn-fw">Listed Candidates</a>
                <a href="/candidates/placed" class="btn btn-gradient-success btn-rounded btn-fw">Placed Candidates</a>
                <a href="/candidates-pending" class="btn btn-gradient-dark btn-rounded btn-fw">Interview Pending Candidates</a>
                <a href="/candidates/shortlisted" class="btn btn-gradient-info btn-rounded btn-fw">Shortlisted Candidates</a>
                <a href="/candidates/blacklisted" class="btn btn-gradient-danger btn-rounded btn-fw">Blacklisted Candidates</a>
              </div>
            </div>           
</div>
        
@if (count($candidates)>0)
  
    <div class="card">
      <div class="card-body">
        <div style="overflow-x:auto;">  
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Name &amp; Surname</th>
                <th>Disability</th>
                <th>Contact Details</th>
                <th>Highest Grade</th>
                <th>Gender</th>
                <th>Race</th>
                <th>Category</th>
                <th>Status</th>
              </tr>
            </thead>
              <tbody>
                @foreach ($candidates as $candidate)
                <tr>
                  <td>{{$candidate->name}}</td>
                  <td>{{$candidate->disability}}</td>
                  <td>{{$candidate->contactDetails}}</td>
                  <td>{{$candidate->qualification}}</td>
                  <td>{{$candidate->gender}}</td>
                  <td>{{$candidate->race}}</td>
                  <td>{{$candidate->candidateCategory}}</td>
                  <td>{{$candidate->status}}</td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="/candidates/{{$candidate->id}}" class="btn btn-gradient-primary btn-fw" title="View" >
                        <i class="mdi mdi-glasses"></i>
                        View
                      </a>
                      <a href="/candidates/{{$candidate->id}}/edit" class="btn btn-gradient-success btn-fw" title="Edit">
                        <i class="mdi mdi-lead-pencil"></i>
                        Edit
                      </a>
                      <form id="delete-form" action="/candidates/{{$candidate->id}}" method="POST">
                        @csrf
                        @method('DELETE')  
                      <button type="submit" class="btn btn-gradient-danger btn-fw"> <i class="mdi mdi-eraser"></i>Delete</button>
                      </form>
                      
                    </div>
                  </td>                 
                </tr>
                @endforeach
              </tbody> 
            </table>   
                
            @else 
               <div class="card" style="height: 100px; text-align: center">
                 <h1 style="padding-top: 25px">No Candidates Available</h1>
                </div> 
            @endif
            <br>          
            {{ $candidates->links() }}
      </div>
    </div>
  </div>
@endsection
