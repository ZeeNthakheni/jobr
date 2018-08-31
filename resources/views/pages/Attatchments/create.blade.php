@extends('layouts.dashboard')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-home"></i>                 
        </span>
            Add Attatchment
    </h3>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <form method = "POST" action="/attatchments" class="forms-sample" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                        <label for="candidate">Candidate Name</label>
                          <select class="form-control" id="candidate" name="candidate_id">
                            @if (count($candidates)>0)
                                @foreach ($candidates as $candidate)
                                <option value="{{$candidate->id}}">{{$candidate->name}}</option>   
                                @endforeach    
                            @else
                            <option>No Candidates Available</option>
                            @endif
                               
                          </select>
                      </div>

                <div class="form-group">
                    <label>Upload Attatchment</label>
                    <input type="file" name="candidateFile" id="candidateFile" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled="" placeholder="">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                        </span>
                    </div>
                </div>

                <button type="submit" class="btn btn-gradient-primary mr-2">Add</button>
                <a href="/attatchments" class="btn btn-light float-right">Cancel</a>
            </form>   
            
        </div>   
    </div>
</div>
@endsection