@extends('layouts.dashboard')

@section('content')

<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-home"></i>                 
        </span>
        {{$client->company}}
    </h3>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <p><strong>Core Business Activities: </strong>{{$client->activities}}</p>
            <p><strong>Industry: </strong>{{$client->industry}}</p>
            <p><strong>Business Address: </strong>{{$client->location}}</p>
            <p><strong>Contact Details: </strong>{{$client->contact}}</p>
            <p><strong>Total No of Employees Required: </strong>{{$client->noOfEmployees}}</p>
            <p><strong>Category: </strong>{{$client->category}}</p>
            <p><strong>Recruiter: </strong>{{$recruiterName}}</p>
            <p><strong>Status: </strong> {{$client->status}}</p>


            <hr>
            <div style="text-align: center">
                <h2>Jobs Assigned to Client</h2>
            </div>
            <hr>


            @if (count($client->job)>0)
    
    <div class="card">
      <div class="card-body">
        <div style="overflow-x:auto;">  
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Job Title</th>
                <th>Company</th>
                <th>Location</th>
                <th>Closing Date</th>
                <th>Recruiter</th>
                <th>Client</th>
                <th>Category</th>
                <th>Status</th>
              </tr>
            </thead>
              <tbody>
                @foreach ($client->job as $job)
                <tr>
                  <td>{{$job->jobTitle}}</td>
                  <td>{{$job->company}}</td>
                  <td>{{$job->location}}</td>
                  <td>{{$job->closingDate}}</td>
                  <td>{{$job->user->name}}</td>
                  <td>{{$job->client->company}}</td>
                  <td>{{$job->category}}</td>
                  <td>{{$job->status}}</td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="/jobs/{{$job->id}}" class="btn btn-gradient-primary btn-fw" title="View" >
                        <i class="mdi mdi-glasses"></i>
                        View
                      </a>
                      <a href="/jobs/{{$job->id}}/edit" class="btn btn-gradient-success btn-fw" title="Edit">
                        <i class="mdi mdi-lead-pencil"></i>
                        Edit
                      </a>
                      
                      <form id="delete-form" action="/jobs/{{$job->id}}" method="POST">
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
                 <h1 style="padding-top: 25px">No jobs Available</h1>
                </div> 
            @endif
            <br>
      </div>
    </div>
</div>
        </div>           
    </div>
</div>

  
    

@endsection