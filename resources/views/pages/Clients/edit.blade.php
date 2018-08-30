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
            <form method = "POST" action="/clients/{{$client->id}}" class="forms-sample" >
                @csrf
                @method('PATCH')
                
                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" class="form-control" id="company" name="company" placeholder="Jobr" value="{{$client->company}}">
                </div>
                
                <div class="form-group">
                    <label for="activities">Core Business Activities</label>
                    <textarea class="form-control" id="activities" rows="8" name="activities">{{$client->activities}}</textarea>
                </div>

                <div class="form-group">
                    <label for="industry">Industry</label>
                    <input type="text" class="form-control" id="industry" name="industry" placeholder="Information Technology" value="{{$client->industry}}">
                </div>


                <div class="form-group">
                    <label for="location">Business Address</label>
                    <textarea class="form-control" id="location" name="location" rows="4">{{$client->location}}</textarea>
                </div>

                <div class="form-group">
                    <label for="contact">Contact Details</label>
                    <input type="text" class="form-control" id="contact" name="contact" placeholder="076 123 4560" value="{{$client->contact}}">
                </div>
               <!-- 
                <div class="form-group">
                    <label for="jobTitle">Job Title</label>
                    <input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="Programmer" value="{{$client->jobTitle}}">
                </div>
                -->
                <div class="form-group">
                    <label for="noOfEmployees">Total No of Employees Required</label>
                    <input type="text" class="form-control" id="noOfEmployees" name="noOfEmployees" placeholder="5" value="{{$client->noOfEmployees}}">
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" id="category" name="category">
                        <option>{{$client->category}}</option>
                        <option disabled>---------------</option>
                        <option>Professional</option>
                        <option>Learnership</option>
                        <option>Internship</option>
                        <option>Pending</option>                 
                    </select>
                    </div>

                <div class="form-group">
                    <label for="recruiter">Recruiter</label>
                    <select class="form-control" id="recruiter" name="recruiter">
                        <option value="{{$client->recruiter}}">{{$recruiterName}}</option>
                        <option disabled>---------------</option>
                        @foreach ($userList as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>   
                        @endforeach
                    </select>
                    </div>
                    
                    <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option>{{$client->status}}</option>
                        <option disabled>---------------</option>
                        <option>Active</option>
                        <option>Pending</option>
                        <option>Successful</option>  
                    </select>
                </div>
                    
                <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
                <a href="/clients-all" class="btn btn-light float-right">Cancel</a>
            </form>
        </div>   
    </div>
</div>
@endsection