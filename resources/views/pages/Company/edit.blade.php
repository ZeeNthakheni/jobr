@extends('layouts.dashboard')

@section('content')
<div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-home"></i>                 
          </span>
            Edit Company
          </h3>
      </div>
         
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
                      
          <form method = "POST"  action="/company/{{$company->id}}" class="forms-sample" >
            @csrf
            @method('PUT')
              
            <div class="form-group">
                <label for="name">Company Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$company->name}}">
            </div>
    
              
            <div class="form-group">
                <label for="key">Company Key</label>
                <input type="text" class="form-control" id="key" name="key" value="{{$company->key}}" disabled>
            </div>

            
            
            <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Active:</label>
                    <div class="col-sm-4">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="isActive" id="activeRadioYes" value="1" checked="">
                          Yes
                        <i class="input-helper"></i></label>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="isActive" id="activeRadioNo" value="0">
                          No
                        <i class="input-helper"></i></label>
                      </div>
                    </div>
                  </div>
    
              
    
              <button type="submit" class="btn btn-gradient-primary mr-2">Edit</button>
              <a href="/companies-all" class="btn btn-light float-right">Cancel</a>
            </form>
            
          </div>               
        </div>
      </div>
@endsection
