@extends('layouts.dashboard')

@section('content')

<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-home"></i>                 
        </span>
            Create Candidate
    </h3>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <form method = "POST" action="/candidates" class="forms-sample" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                
                <div class="form-group">
                    <label for="idNumber">ID No.</label>
                    <input type="text" class="form-control" id="idNumber" name="idNumber" placeholder="Identity Number">
                </div>
                <div class="form-group">
                    <label for="disability">Disability</label>
                    <input type="text" class="form-control" id="disability" placeholder="Disability" name="disability">
                </div>
              
                <div class="form-group">
                <label for="residence">Residence</label>
                    <textarea class="form-control" id="residence" name="residence" rows="7" placeholder="Residential Address"></textarea>
                </div>
                <div class="form-group">
                    <label for="contactDetails">Contact Details</label>
                    <input type="text" class="form-control" id="contactDetails" name="contactDetails" placeholder="Contact Details">
                </div>
                <div class="form-group">
                    <label for="qualification">Highest Qualification</label>
                    <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Grade 12">
                </div>
                <div class="form-group">
                <label for="gender">Gender</label>
                  <select class="form-control" id="gender" name="gender">
                    <option>Select</option>
                    <option>Male</option>
                    <option>Female</option>                  
                  </select>
                </div>
                <div class="form-group">
                <label for="race">Race</label>
                  <select class="form-control" id="race" name="race">
                    <option>Select</option>
                    <option>African</option>
                    <option>Indian</option>
                    <option>Coloured</option>
                    <option>Caucasian</option>                    
                  </select>
                </div>
                <div class="form-group">
                <label for="candidateCategory">Candidate Category</label>
                    <select class="form-control" id="candidateCategory" name="candidateCategory">
                        <option>Select</option>
                        <option>Professional</option>
                        <option>Learnership</option>
                        <option>Internship</option>
                    </select>
                </div>
   
                <div class="form-group">
                    <label for="experience">Experience</label>
                    <textarea class="form-control" id="experience" name="experience" rows="8"></textarea>
                </div>

                <div class="form-group">
                        <label for="status">Status</label>
                          <select class="form-control" id="status" name="status">
                            <option>Select</option>
                            <option>Listed</option>
                            <option>Placed</option>
                            <option>Shortlisted</option>
                            <option>Interview Pending</option>
                            <option>Blacklisted</option>
                          </select>
                        </div>
                <button type="submit" class="btn btn-gradient-primary mr-2">Create</button>
                <a href="/candidates" class="btn btn-light float-right">Cancel</a>
            </form>
        </div>           
    </div>
</div>
@endsection