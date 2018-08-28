@extends('layouts.dashboard')

@section('content')
<div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-home"></i>                 
      </span>
      Dashboard
    </h3>
    <nav aria-label="breadcrumb">
      <ul class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
          <span></span>Overview
          <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
        </li>
      </ul>
    </nav>
  </div>

  <div class="row">
        <div class="col-md-4 stretch-card grid-margin">
          <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
              <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">
              <h4 class="font-weight-normal mb-3">Total No of Candidates
                <i class="mdi mdi-chart-line mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">500</h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
          <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
              <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">
              <h4 class="font-weight-normal mb-3">Total No of Hosted Candidates
                <i class="mdi mdi-chart-line mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">500</h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
          <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
              <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">
              <h4 class="font-weight-normal mb-3">Total No of Interviewed Candidates
                <i class="mdi mdi-chart-line mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">500</h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
          <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
              <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">
              <h4 class="font-weight-normal mb-3">Total No of Shortlisted Candidates 
                <i class="mdi mdi-chart-line mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">500</h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
          <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
              <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">
              <h4 class="font-weight-normal mb-3">Total No of Blacklisted Candidates
                <i class="mdi mdi-chart-line mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">500</h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
          <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
              <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">
              <h4 class="font-weight-normal mb-3">Total No of Interview Schedules 
                <i class="mdi mdi-chart-line mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">500</h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
          <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
              <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">                  
              <h4 class="font-weight-normal mb-3">Total No of Candidates
                <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">2100</h2>
            
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
          <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
              <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">                  
              <h4 class="font-weight-normal mb-3">Total No of Successful Candidates 
                <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">2100</h2>
            
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
          <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
              <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">                  
              <h4 class="font-weight-normal mb-3">Total No of Interviewed Candidates 
                <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">2100</h2>
            
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
          <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
              <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">                  
              <h4 class="font-weight-normal mb-3">Total No of Shortlisted Candidates 
                <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">2100</h2>
            
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
          <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
              <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">                  
              <h4 class="font-weight-normal mb-3">Total No of Interview Candidates 
                <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">2100</h2>
            
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
          <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
              <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">                  
              <h4 class="font-weight-normal mb-3">Total No of Part Time Candidates 
                <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">2100</h2>
            
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
          <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
              <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">                  
              <h4 class="font-weight-normal mb-3">Total No of Permanent Candidates 
                <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">2100</h2>
            
            </div>
          </div>
        </div>
  </div>
  <div class="row">
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
          <div class="card-body">
            <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">
            <h4 class="font-weight-normal mb-3">Total No of Candidates
              <i class="mdi mdi-chart-line mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">500</h2>
            
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
          <div class="card-body">
            <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">
            <h4 class="font-weight-normal mb-3">Total No of Hosted Candidates
              <i class="mdi mdi-chart-line mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">500</h2>
            
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
          <div class="card-body">
            <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">
            <h4 class="font-weight-normal mb-3">Total No of Interviewed Candidates
              <i class="mdi mdi-chart-line mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">500</h2>
            
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                  <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">
                  <h4 class="font-weight-normal mb-3">Total No of Shortlisted Candidates 
                    <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">500</h2>
                  
                </div>
              </div>
            </div>
      <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                  <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">
                  <h4 class="font-weight-normal mb-3">Total No of Blacklisted Candidates
                    <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">500</h2>
                  
                </div>
              </div>
            </div>
      <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                  <img src="{{ asset('storage/LayoutImages/circle.svg') }}" class="card-img-absolute" alt="circle-image">
                  <h4 class="font-weight-normal mb-3">Total No of Interview Schedules 
                    <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">500</h2>
                  
                </div>
              </div>
            </div>
  </div>
@endsection
