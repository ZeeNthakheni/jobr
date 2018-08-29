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
            <p><strong>ID Number: </strong>{{$candidate->idNumber}}</p>
            <p><strong>Disability: </strong>{{$candidate->disability}}</p>
            <p><strong>Residence: </strong>{{$candidate->residence}}</p>
            <p><strong>Contact Details: </strong>{{$candidate->contactDetails}}</p>
            <p><strong>Qualification: </strong>{{$candidate->qualification}}</p>
            <p><strong>Gender: </strong>{{$candidate->gender}}</p>
            <p><strong>Race: </strong>{{$candidate->race}}</p>
            <p><strong>Category: </strong>{{$candidate->candidateCategory}}</p>
            <p><strong>Experience: </strong>{{$candidate->experience}}</p>
            <p><strong>Status: </strong>{{$candidate->status}}</p>
            <p><strong>CV: </strong>{{$candidate->cvName}}</p>
        </div>           
    </div>
</div>
@endsection