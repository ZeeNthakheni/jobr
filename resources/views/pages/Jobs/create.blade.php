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
          <input type="text" class="form-control" id="salary" name="salary" placeholder="10 000">
        </div>


        <div class="form-group">
          <label for="closingDate">Closing Date</label>
          <input type="date" class="form-control" id="closingDate" name="closingDate">
        </div>

        <div class="form-group">
          <label for="recruiter">Recruiter</label>
          <select class="form-control" id="recruiter" name="recruiter">
            <option>Select</option>
            <option>Ramari Booi</option>
            <option>Happy Booi</option>
            <option>Kananelo Mooko</option>
            <option>Ziyanda Muvhango</option>
            <option>Ndima Maphaha</option>
            <option>Keitumetse Mabele</option>
            <option>Kgotatso Mokoke</option>
          </select>
        </div>

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
                    
        <div class="form-group">
          <label for="client">Client</label>
            <select class="form-control" id="client" name="client">
              <option>Select</option>
              <option>Khano Consulting Services</option>
              <option>BizzWorks</option>   
            </select>
        </div>

        <div class="form-group">
          <label for="category">Category</label>
            <select class="form-control" id="category" name="category">
              <option>Select</option>
              <option>Permanent</option>
              <option>Learnership</option>
              <option>Internship</option>   
            </select>
        </div>
                    
        <div class="form-group">
          <label for="status">Status</label>
            <select class="form-control" id="status" name="status">
              <option>Select</option>
              <option>Active</option>
              <option>Pending</option>
              <option>Filled</option>  
            </select>
        </div>


        <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>               
  </div>
</div>


@endsection
