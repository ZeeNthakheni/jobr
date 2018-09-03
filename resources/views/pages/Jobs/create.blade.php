@extends('layouts.dashboard')

@section('content')

<div class="page-header">
  <h3 class="page-title">
    <span class="page-title-icon bg-gradient-primary text-white mr-2">
      <i class="mdi mdi-home"></i>                 
    </span>
      Create Job
    </h3>
</div>
   
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
                
    <form method = "POST"  action="/jobs" class="forms-sample" >
      {{csrf_field()}}
        <div class="form-group">
          <label for="company">Company</label>
          <input type="text" class="form-control" id="company" name="company" placeholder="Jobr">
        </div>

        <div class="form-group">
          <label for="jobTitle">Job Title</label>
          <input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="Programmer">
        </div>

        <div class="form-group">
          <label for="responsibilities">Responsibilities</label>
          <textarea class="form-control" id="responsibilities" name="responsibilities" rows="8"></textarea>
        </div>

        <div class="form-group">
          <label for="attributes">Key Behavioural Attributes</label>
          <textarea class="form-control" id="attributes" name="attributes" rows="8"></textarea>
        </div>

        <div class="form-group">
          <label for="qualifications">Required Qualifications and attributes</label>
          <textarea class="form-control" id="qualifications" name="qualifications" rows="8"></textarea>
        </div>

        <div class="form-group">
          <label for="location">Location</label>
          <input type="text" class="form-control" id="location" name="location" placeholder="Johannesburg">
        </div>

        <div class="form-group">
          <label for="salary">Salary</label>
          <input type="text" class="form-control" id="salary" name="salary" placeholder="">
        </div>


        <div class="form-group">
          <label for="closingDate">Closing Date</label>
          <input type="date" class="form-control" id="closingDate" name="closingDate">
        </div>

        <div class="form-group">
          <label for="recruiter">Recruiter</label>
          <select class="form-control" id="recruiter" name="user_id" aria-placeholder="Select">
            
            @foreach ($userList as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>   
            @endforeach
          </select>
        </div>

        <!-- 
        <div class="form-group">
          <label for="serviceProvider">Service Provider</label>
            <select class="form-control" id="serviceProvider" name="serviceProvider">
              <option>Select</option>
              <option>Active</option>
              <option>Khano Consulting Services</option>
              <option>PNET</option>
              <option>INDEED</option>
              <option>JOBNET</option>
              <option>JOBMAIL</option>
            </select>
        </div>
        -->   
                
        <div class="form-group">
          <label for="client">Client</label>
            <select class="form-control" id="client" name="client_id" aria-placeholder="Select">
              @if (count($clientList)>0)
                @foreach ($clientList as $client)
                <option value="{{$client->id}}">{{$client->company}}</option>   
                @endforeach  
              @else
                <option>No Clients Available</option>  
              @endif
                 
            </select>
        </div>

        <div class="form-group">
          <label for="category">Category</label>
            <select class="form-control" id="category" name="category" aria-placeholder="Select">
              <option>Professional</option>
              <option>Learnership</option>
              <option>Internship</option>   
            </select>
        </div>
                    
        <div class="form-group">
          <label for="status">Status</label>
            <select class="form-control" id="status" name="status" aria-placeholder="Select">
              <option>Active</option>
              <option>Pending</option>
              <option>Filled</option>  
            </select>
        </div>


        <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
        <a href="/jobs-all" class="btn btn-light float-right">Cancel</a>
      </form>
    </div>               
  </div>
</div>


@endsection
