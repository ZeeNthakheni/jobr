@extends('layouts.dashboard')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-home"></i>                 
        </span>
          Attachments Page
    </h3>
    <a href="/attatchments-create" class="btn btn-gradient-success btn-rounded btn-fw float-right">+Add Attatchment</a>
</div>

<div class="row">
        <div class="col-md-4 stretch-card grid-margin">
          <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
              <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">
              <h4 class="font-weight-normal mb-3">Professional Attatchments</h4>
              <h2 class="mb-5">{{$attatchmentProfessional}}</h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
          <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
              <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">                  
              <h4 class="font-weight-normal mb-3">Learnership Attatchments</h4>
              <h2 class="mb-5">{{$attatchmenLearnership}}</h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
          <div class="card bg-gradient-success card-img-holder text-white">
            <div class="card-body">
              <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">                                    
              <h4 class="font-weight-normal mb-3">Internship Attatchments</h4>
              <h2 class="mb-5">{{$attatchmentInternship}}</h2>
              
            </div>
          </div>
        </div>           
</div>

@if (count($attatchments)>0)
  
    <div class="card">
      <div class="card-body">
        <div style="overflow-x:auto;">  
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Attachment</th>
                <th>Candidate Name</th>
                <th>Candidate Category</th>
                <th>Date Created</th>
              </tr>
            </thead>
              <tbody>
                @foreach ($attatchments as $attatchment)
                <tr>
                  <td>{{$attatchment->candidateFileName}}</td>
                  <td>{{$attatchment->candidate->name}}</td>
                  <td>{{$attatchment->candidate->candidateCategory}}</td>
                  <td>{{$attatchment->created_at}}</td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">

                      <a href="/attatchments/{{$attatchment->id}}/download" class="btn btn-gradient-info btn-fw" title="View" >
                        <i class="mdi mdi-arrow-down"></i>
                        Download
                      </a>

                      <a href="/attatchments/{{$attatchment->id}}/edit" class="btn btn-gradient-success btn-fw" title="Edit">
                        <i class="mdi mdi-lead-pencil"></i>
                        Edit
                      </a>
                      
                      <form id="delete-form" action="/attatchments/{{$attatchment->id}}" method="POST">
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
                 <h1 style="padding-top: 25px">No attatchments Available</h1>
                </div> 
            @endif
            <br>          
            {{ $attatchments->links() }}
      </div>
    </div>
  </div>
@endsection
