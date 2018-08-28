@extends('layouts.dashboard')

@section('content')
<div class="col-12 grid-margin stretch-card">

        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Create Client</h4>
            <p class="card-description">
              
            </p>
            <form class="forms-sample" action="/clients" method = "POST">
              <div class="form-group">
                <label for="company">Company</label>
                <input type="text" class="form-control" id="company" name="company" placeholder="Jobr">
              </div>
              
               <div class="form-group">
                <label for="activities">Core Business Activities</label>
                <textarea class="form-control" id="activities" rows="4" name="activities"></textarea>
              </div>

               <div class="form-group">
                <label for="industry">Industry</label>
                <textarea class="form-control" id="industry" name="industry" rows="4"></textarea>
              </div>

               <div class="form-group">
                <label for="location">Location of business</label>
                <textarea class="form-control" id="location" name="location" rows="4"></textarea>
              </div>

              <div class="form-group">
                <label for="contact">Contact Details</label>
                <input type="text" class="form-control" id="contact" name="contact" placeholder="076 123 4560">
              </div>
            
              <div class="form-group">
                <label for="jobTitle">Job Title</label>
                <input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="Programmer">
              </div>

              <div class="form-group">
                <label for="noOfEmployees">Total No of Employees Required</label>
                <input type="text" class="form-control" id="noOfEmployees" name="noOfEmployees" placeholder="5">
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
