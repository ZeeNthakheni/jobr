@extends('layouts.dashboard')

@section('content')

<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-home"></i>                 
        </span>
        {{$job->jobTitle}}
    </h3>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <p><strong>Company: </strong>{{$job->company}}</p>
            <p><strong>Responsibilities: </strong>{{$job->responsibilities}}</p>
            <p><strong>Key Behavioural Attributes: </strong>{{$job->attributes}}</p>
            <p><strong>Required Qualifications and attributes: </strong>{{$job->qualifications}}</p>
            <p><strong>Location: </strong>{{$job->location}}</p>
            <p><strong>Salary: </strong>{{$job->salary}}</p>
            <p><strong>Closing Date: </strong> {{$job->closingDate}}</p>
            <p><strong>Recruiter: </strong> {{$recruiterName}}</p>
            <p><strong>Client: </strong>{{$job->client->company}}</p>
            <p><strong>Category: </strong>{{$job->category}}</p>
            <p><strong>Status: </strong>{{$job->status}}</p>
        </div>           
    </div>
</div>
@endsection