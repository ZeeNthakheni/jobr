@extends('layouts.dashboard')

@section('content')
@if (count($users)>0 && $users!=null)
  
    <div class="card">
      <div class="card-body">
        <div style="overflow-x:auto;">  
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>User Name</th>
                <th>User Email</th>
                <th>User Role</th>
              </tr>
            </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->role}}</td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">

                      <a href="/user/{{$user->id}}" class="btn btn-gradient-info btn-fw" title="View" >
                        <i class="mdi mdi-glasses"></i>
                        View
                      </a>
                      @if (Auth::user()->id != $user->id)
                        <form id="delete-form" action="/user/{{$user->id}}" method="POST">
                            @csrf
                            @method('DELETE')  
                            <button type="submit" class="btn btn-gradient-danger btn-fw"> <i class="mdi mdi-eraser"></i>Delete</button>
                        </form>
                      @endif
                      
                    </div>
                  </td>                 
                </tr>
                @endforeach
              </tbody> 
            </table>   
                
            @else 
               <div class="card" style="height: 100px; text-align: center">
                 <h1 style="padding-top: 25px">No Users Available</h1>
                </div> 
            @endif
            <br>
      </div>
    </div>
  </div>
@endsection
