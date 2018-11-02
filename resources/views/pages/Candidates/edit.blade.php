@extends('layouts.dashboard')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
        $(document).ready(function(){
            var expId = {{count($candidate->experiences)}};
        
            var removeBtn = '';
        
            $("#addExperience").click(function(event){
                event.preventDefault();
        
                expId = expId + 1;
        
               // var company = "<input type=\"text\" class=\"form-control\" name=\"experience["+expId+"][company]\" placeholder=\"Company\">";
        
                var experience = "<div id = experienceDiv"+expId+">"+
                "<div class=\"align-content-around\">"+
                    "<label for=\"experience\">Additional Experience</label>"+
                    "<button id=\"removeExperience\" class=\"btn btn-gradient-danger mr-2 float-right btn-sm btn-rounded\" onclick = \"removeRow(event,"+expId+")\">Remove Row</button>"+
                "</div>"+
                "<br>"+
                "<label>Enter Company Name:</label>" +  
                "<input type=\"text\" class=\"form-control\" name=\"experience["+expId+"][company]\" placeholder=\"Company\">" +
                "<br>" +
                "<div>" +
                    "<label for=\"experience\">Start Date:</label>" +
                    "<input type=\"date\" class=\"form-control\" id=\"startDate\" name=\"experience["+expId+"][startDate]\">" +
                    "<br>" +
                    "<label for=\"experience\">End Date:</label>" +
                    "<input type=\"date\" class=\"form-control\" id=\"endDate\" name=\"experience["+expId+"][endDate]\">" +
                "</div>" +
                "<br>" +
                "<label for=\"experienceBody\">Enter experience details:</label>" +
                "<br>" +
                "<textarea class=\"form-control\" id=\"experienceBody\" name=\"experience["+expId+"][body]\" rows=\"8\"></textarea>" +
                "<br>"+
                "</div>";
 
        
                $("#experienceDiv").append(experience);
        
        
            });      
        });
        function removeRow(event, rowId) {
            event.preventDefault();
            
            $("#experienceDiv"+rowId).empty("#experienceDiv"+rowId);
            }  
</script>

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
                
                @if (count($candidate->experiences)>0)
                    <div class="align-content-around">
                        <label for="experience">Experience</label>
                        <button id="addExperience" class="btn btn-gradient-success mr-2 float-right btn-sm btn-rounded">+ Add Row</button>
                    </div>

                    @foreach ($candidate->experiences as $exp)
                    <div class="form-group">
                            <br>
                            <div id="experienceDiv" name=''> 
                                <label>Enter Company Name:</label>   
                                <input type="text" class="form-control" name="experience[{{$exp->id}}][company]" placeholder="Company" value="{{$exp->company}}">
                                <br>
                                <div>
                                    <label for="experience">Start Date:</label>
                                    <input type="date" class="form-control" id="startDate" name="experience[{{$exp->id}}][startDate]" value="{{$exp->startDate}}">
                                    <br>
                                    <label for="experience">End Date:</label>
                                    <input type="date" class="form-control" id="endDate" name="experience[{{$exp->id}}][endDate]" value="{{$exp->endDate}}">
                                    <br>
                                </div>
                                <br>
                                <label for="experienceBody">Enter experience details:</label>
                                <br>
                                <textarea class="form-control" id="experienceBody" name="experience[{{$exp->id}}][body]" rows="8">{{$exp->body}}</textarea>
                                <br>
                            </div>

                            
                    </div>
                    @endforeach
                
                @endif
                

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