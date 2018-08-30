@extends('layouts.dashboard')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-home"></i>                 
        </span>
            Change Attatchment
    </h3>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <form method = "POST" action="/attatchments/{{$attatchment->id}}" class="forms-sample" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
                <P><strong>Filename: </strong>{{$attatchment->candidateFileName}}</P>
                <div class="form-group">
                    <label>CV Upload</label>
                    <input type="file" name="candidateFile" id="candidateFile" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled="" placeholder="">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                        </span>
                    </div>
                </div>
                <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
                <a href="/attatchments" class="btn btn-light float-right">Cancel</a>
            </form>   
            
        </div>   
    </div>
</div>
@endsection