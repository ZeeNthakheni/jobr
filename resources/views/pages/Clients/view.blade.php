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
            <p><strong>Location: </strong>{{$client->location}}</p>
            <p><strong>Contact Details: </strong>{{$client->contact}}</p>
            <p><strong>Total No of Employees Required: </strong>{{$client->noOfEmployees}}</p>
            <p><strong>Category: </strong>{{$client->category}}</p>
            <p><strong>Recruiter: </strong>{{$recruiterName}}</p>
            <p><strong>Status: </strong> {{$client->status}}</p>
        </div>           
    </div>
</div>
@endsection