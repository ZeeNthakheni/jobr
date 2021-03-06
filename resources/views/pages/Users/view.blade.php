@extends('layouts.dashboard')

@section('content')
<div class="col-md-6 mx-auto grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Profile Details</h4>
          <div class="nav-profile-img" style="text-align: center">
          @if( !empty(Auth::user()->userInfo))
            @if (Auth::user()->userInfo->proPicture != 'None')
                <img class="rounded" src="/storage/UserImages/{{Auth::user()->userInfo->proPicture}}" alt="image" style="max-width:250px">
                <br>
                <br> 
            @else
                <img class="rounded" src="{{ asset('storage/UserImages/no_profile.png') }}" alt="image">
                <br>
                <br>
            @endif
          @else
              <img class="rounded" src="{{ asset('storage/UserImages/no_profile.png') }}" alt="image">
              <br>
              <br>
          @endif
          <span class="availability-status online"></span>

          </div>
            <div class="row"> 
              <div class="col-md-12">
                <form method = "POST" action="/user-update/{{Auth::user()->id}}" class="forms-sample" enctype="multipart/form-data">
                  @csrf
                  @method('PATCH')
                  <div class="form-group">

                  <label>Upload Profile Picture</label>
                  <input type="file" name="proPicture" id="proPicture" class="file-upload-default">
                  <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled="" placeholder="{{Auth::user()->proPictureName}}">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                        </span>
                    </div>
                  </div>
                  

                  <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{Auth::user()->name}}">
                  </div>

                  <div class="form-group">
                      <label for="email">Email Address</label>
                      <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{Auth::user()->email}}">
                  </div>

                  

                  @if( !empty(Auth::user()->userInfo->position))
                  <div class="form-group">
                      <label for="position">Position</label>
                      <input type="text" class="form-control" id="position" placeholder="Position" name="position" value="{{Auth::user()->userInfo->position}}">
                  </div>
                  @else
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" class="form-control" id="position" placeholder="Position" name="position" placeholder="Enter Position">
                    </div>
                   @endif
                  
                  <div class="d-flex flex-row justify-content-around align-content-stretch">
                    <button type="submit" class="btn btn-gradient-primary mr-2">Save Details</button>
                    <a href="/home" class="btn btn-gradient-info float-right">Back to Home</a>
                  </div>

                 
                  
                </form>
                
              </div>
            </div>
        </div>    
    </div>
</div>
@endsection