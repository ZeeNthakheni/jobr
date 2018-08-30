@extends('layouts.dashboard')

@section('content')

<div class="page-header">
  <h3 class="page-title">
    <span class="page-title-icon bg-gradient-primary text-white mr-2">
      <i class="mdi mdi-home"></i>                 
    </span>
      Edit Job
    </h3>
</div>
   
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
                
    <form method = "POST"  action="/jobs/{{$job->id}}" class="forms-sample" >
        @csrf
        @method('PATCH')
        
        <div class="form-group">
          <label for="company">Company</label>
          <input type="text" class="form-control" id="company" name="company" placeholder="Jobr" value="{{$job->company}}">
        </div>

        <div class="form-group">
          <label for="jobTitle">Job Title</label>
          <input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="Programmer" value="{{$job->jobTitle}}">
        </div>

        <div class="form-group">
          <label for="responsibilities">Responsibilities</label>
          <textarea class="form-control" id="responsibilities" name="responsibilities" rows="8">{{$job->responsibilities}}</textarea>
        </div>

        <div class="form-group">
          <label for="attributes">Key Behavioural Attributes</label>
          <textarea class="form-control" id="attributes" name="attributes" rows="8">{{$job->attributes}}</textarea>
        </div>

        <div class="form-group">
          <label for="qualifications">Required Qualifications and attributes</label>
          <textarea class="form-control" id="qualifications" name="qualifications" rows="8">{{$job->qualifications}}</textarea>
        </div>

        <div class="form-group">
          <label for="location">Location</label>
          <input type="text" class="form-control" id="location" name="location" placeholder="Johannesburg" value="{{$job->location}}">
        </div>

        <div class="form-group">
          <label for="salary">Salary</label>
          <input type="text" class="form-control" id="salary" name="salary" placeholder="10 000" value="{{$job->salary}}">
        </div>


        <div class="form-group">
          <label for="closingDate">Closing Date</label>
          <input type="date" class="form-control" id="closingDate" name="closingDate" value="{{$job->closingDate}}">
        </div>

        <div class="form-group">
          <label for="recruiter">Recruiter</label>
          <select class="form-control" id="recruiter" name="recruiter">
            <option value="{{$job->recruiter}}">{{$recruiterName}}</option>
            <option disabled>---------------</option>
            @foreach ($userList as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>   
            @endforeach
          </select>
        </div>
                
        <div class="form-group">
          <label for="client">Client</label>
            <select class="form-control" id="client" name="client">
                <option>{{$job->client}}</option>
                <option disabled>---------------</option>
                <option>Khano Consulting Services</option>
                <option>BizzWorks</option>   
            </select>
        </div>

        <div class="form-group">
          <label for="category">Category</label>
            <select class="form-control" id="category" name="category">
                <option>{{$job->category}}</option>
                <option disabled>---------------</option>
                <option>Permanent</option>
                <option>Learnership</option>
                <option>Internship</option>   
            </select>
        </div>
                    
        <div class="form-group">
          <label for="status">Status</label>
            <select class="form-control" id="status" name="status">
                <option>{{$job->status}}</option>
                <option disabled>---------------</option>
                <option>Active</option>
                <option>Pending</option>
                <option>Filled</option>  
            </select>
        </div>


        <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
        <a href="/jobs-all" class="btn btn-light float-right">Cancel</a>
      </form>
    </div>               
  </div>
</div>


@endsection
