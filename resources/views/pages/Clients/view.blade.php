@extends('layouts.dashboard')

@section('content')

<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-home"></i>                 
        </span>
        {{$candidate->name}}
    </h3>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <p>ID Number: {{$candidate->idNumber}}</p>
            <p>Disability: {{$candidate->disability}}</p>
            <p>Residence: {{$candidate->residence}}</p>
            <p>Contact Details: {{$candidate->contactDetails}}</p>
            <p>Qualification: {{$candidate->qualification}}</p>
            <p>Gender: {{$candidate->gender}}</p>
            <p>Race: {{$candidate->race}}</p>
            <p>Category: {{$candidate->candidateCategory}}</p>
            <p>Experience: {{$candidate->experience}}</p>
            <p>Status: {{$candidate->status}}</p>
            <p>CV: {{$candidate->cvName}}</p>
        </div>           
    </div>
</div>
@endsection