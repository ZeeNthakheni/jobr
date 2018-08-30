@extends('layouts.dashboard')

@section('content')

<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-home"></i>                 
        </span>
        {{$candidate->name}}
    </h3>
    <a href="/attatchments/create" class="btn btn-gradient-success btn-rounded btn-fw float-right">+Add Attatchment</a>
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
            <hr>
            <div style="text-align: center">
                <h1>Attatchments</h1>
            </div>
            <hr>

            @if (count($attatchments)>0)
                @foreach ($attatchments as $file)
                    @if ($file->cv != 'None')
                    <div class="card">
                       <p class="float-left"><strong>File: </strong>  {{$file->candidateFileName}} 
                        <div class="btn-group float-right" role="group" aria-label="Basic example">
                            <a href="/attatchments/{{$file->id}}/download" class="btn btn-gradient-info btn-fw" title="View" >
                            <i class="mdi mdi-arrow-down"></i>
                                Download
                            </a>
                            <a href="/attatchments/{{$file->id}}/edit" class="btn btn-gradient-success btn-fw" title="View" >
                                <i class="mdi mdi-lead-pencil"></i>
                                Change
                            </a>
                            <form id="delete-form" action="/attatchments/{{$file->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')  
                                <button type="submit" class="btn btn-gradient-danger btn-fw"> <i class="mdi mdi-eraser"></i>Delete</button>
                            </form>  
                        </div>          
                    </p> 
                    </div>
                       
                    @endif
                @endforeach 
            @else
                <div style="text-align: center">
                    <h2>No Attatchments Available</h2>
                </div>
            @endif
        </div>           
    </div>
</div>
@endsection