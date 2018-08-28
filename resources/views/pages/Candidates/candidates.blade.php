@extends('layouts.dashboard')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-home"></i>                 
        </span>
          Candidates Page
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
        
         <div class="card-body" style="text-align:center">
             
              <div class="template-demo">
                <button type="button" class="btn btn-gradient-primary btn-rounded btn-fw">Create</button>
                <button type="button" class="btn btn-gradient-primary btn-rounded btn-fw">Archive</button>
                <button type="button" class="btn btn-gradient-primary btn-rounded btn-fw">List</button>
                <button type="button" class="btn btn-gradient-primary btn-rounded btn-fw">Shortlist</button>
                <button type="button" class="btn btn-gradient-danger btn-rounded btn-fw">Blacklist</button>
                
              </div>
            </div>           
</div>
@endsection
