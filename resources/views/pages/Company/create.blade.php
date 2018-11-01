@extends('layouts.dashboard')

@section('content')



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-home"></i>                 
      </span>
        Create Company
      </h3>
  </div>
     
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
                  
      <form method = "POST"  action="/company" class="forms-sample" >
        @csrf
          
        <div class="form-group">
            <label for="name">Company Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Company name">
        </div>

          
        <div class="form-group">
            <label for="key">Company Key</label>
            <div class="input-group"> 
                <input type="text" id="key" name="key"  class="form-control" placeholder="Click Generate" aria-label="Company Key" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-sm btn-gradient-primary" id="genRandom" type="button">Generate</button>
                </div>
            </div>
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

          

          <button type="submit" class="btn btn-gradient-primary mr-2">Create</button>
          <a href="/companies-all" class="btn btn-light float-right">Cancel</a>
        </form>
        
      </div>               
    </div>
  </div>


  <script>
    $(document).ready(function(){
    
        $("#genRandom").click(function(event){
            event.preventDefault();
            
            function makeid() {
                var text = "";
                var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
              
                for (var i = 0; i < 64; i++)
                  text += possible.charAt(Math.floor(Math.random() * possible.length));
              
                return text;
              }

                $('#key').val(makeid());
            });
        });
    </script>
  
@endsection
