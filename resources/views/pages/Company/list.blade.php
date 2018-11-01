@extends('layouts.dashboard')

@section('content')
<div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-home"></i>                 
          </span>
           All Companies Page
        </h3>  
      </div>


    @if (count($companies)>0)
  
        <div class="card">
            <div class="card-body">
                <div style="overflow-x:auto;">  
             
                
    @else 
        <div class="card" style="height: 100px; text-align: center">
            <h1 style="padding-top: 25px">No jobs Available</h1>
        </div> 
    @endif
                <br>          
                {{ $companies->links() }}
                </div>
            </div>
        </div>
@endsection
