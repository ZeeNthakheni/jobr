@extends('layouts.dashboard')

@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create Message</h4>
        <p class="card-description"></p>
        <form method = "POST"  action="/messages" class="forms-sample">
          @csrf
          <div class="form-group">
            <div class="form-group">
            <label for="receipient">Send To</label>
              <select class="form-control" id="receipient" name="receipient">
                <option>Select</option>
                @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>   
                @endforeach
              </select>
            </div>
           <div class="form-group">
            <label for="body">Message</label>
            <textarea class="form-control" id="body" rows="7" name="body"></textarea>
          </div>
            <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </form>
        </div>
      </div>
    </div>
@endsection