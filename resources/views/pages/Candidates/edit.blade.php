@extends('layouts.dashboard')

@section('content')

<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-home"></i>                 
        </span>
            Edit Candidate
    </h3>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <form method = "POST" action="/candidates/{{$candidate->id}}" class="forms-sample" enctype="multipart/form-data">
                
                @csrf
                @method('PATCH')
                
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$candidate->name}}">
                </div>
                
                <div class="form-group">
                    <label for="idNumber">ID No.</label>
                    <input type="text" class="form-control" id="idNumber" name="idNumber" placeholder="Identity Number" value="{{$candidate->idNumber}}">
                </div>
                <div class="form-group">
                    <label for="disability">Disability</label>
                    <input type="text" class="form-control" id="disability" placeholder="Disability" name="disability" value="{{$candidate->disability}}">
                </div>
              
                <div class="form-group">
                <label for="residence">Residence</label>
                    <textarea class="form-control" id="residence" name="residence" rows="7" placeholder="Residential Address" >{{$candidate->residence}}</textarea>
                </div>
                <div class="form-group">
                    <label for="contactDetails">Contact Details</label>
                    <input type="text" class="form-control" id="contactDetails" name="contactDetails" placeholder="Contact Details"  value="{{$candidate->contactDetails}}">
                </div>
                <div class="form-group">
                    <label for="qualification">Highest Qualification</label>
                    <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Grade 12" value="{{$candidate->qualification}}">
                </div>
                <div class="form-group">
                <label for="gender">Gender</label>
                  <select class="form-control" id="gender" name="gender">
                    <option>{{$candidate->gender}}</option>
                    <option disabled>----------------------</option>
                    <option>Male</option>
                    <option>Female</option>                  
                  </select>
                </div>
                <div class="form-group">
                <label for="race">Race</label>
                  <select class="form-control" id="race" name="race">
                    <option>{{$candidate->race}}</option>
                    <option disabled>----------------------</option>
                    <option>African</option>
                    <option>Indian</option>
                    <option>Coloured</option>
                    <option>Caucasian</option>                    
                  </select>
                </div>
                <div class="form-group">
                <label for="candidateCategory">Candidate Category</label>
                    <select class="form-control" id="candidateCategory" name="candidateCategory">
                        <option>{{$candidate->candidateCategory}}</option>
                        <option disabled>----------------------</option>
                        <option>Professional</option>
                        <option>Learnership</option>
                        <option>Internship</option>
                    </select>
                </div>
   
                <div class="form-group">
                    <label for="experience">Experience</label>
                    <textarea class="form-control" id="experience" name="experience" rows="8">{{$candidate->experience}}</textarea>
                </div>

                <div class="form-group">
                        <label for="status">Status</label>
                          <select class="form-control" id="status" name="status">
                            <option>{{$candidate->status}}</option>
                            <option disabled>----------------------</option>
                            <option>Listed</option>
                            <option>Placed</option>
                            <option>Shortlisted</option>
                            <option>Interview Pending</option>
                            <option>Blacklisted</option>
                          </select>
                        </div>

                <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
                <a href="/candidates" class="btn btn-light float-right">Cancel</a>
            </form>
        </div>           
    </div>
</div>
@endsection