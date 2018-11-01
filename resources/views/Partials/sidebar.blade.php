<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

          <!-- Profile Nav item-->
          <li class="nav-item nav-profile">
            <a href="/user-view" class="nav-link">
              <div class="nav-profile-image">
                @if( !empty(Auth::user()->userInfo))
                  @if (Auth::user()->userInfo->proPicture != 'None')
                      <img class="rounded" src="/storage/UserImages/{{Auth::user()->userInfo->proPicture}}" alt="image" style="max-width:250px">
                      <br>
                      <br> 
                  @else
                      <img class="rounded" src="{{ asset('storage/UserImages/no_profile.png') }}" alt="image">
                      <br>
                      <br>
                  @endif
                @else
                <img class="rounded" src="{{ asset('storage/UserImages/no_profile.png') }}" alt="image">
                      <br>
                      <br>
                @endif
                <span class="login-status online"></span> <!--change to offline or busy as needed-->              
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">{{Auth::user()->name}}</span>
                @if( !empty(Auth::user()->userInfo))
                  @if (Auth::user()->userInfo->position != 'None')
                      <span class="text-secondary text-small">{{Auth::user()->userInfo->position}}</span>  
                  @else
                      <span class="text-secondary text-small">-</span>
                  @endif
                @else
                <span class="text-secondary text-small">-</span>
                @endif
                
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <!-- Profile Nav item ends-->


          <!-- Home Nav item-->
          <li class="nav-item">
              <a class="nav-link" href="/home">
                <span class="menu-title">Home</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
          <!-- Home Nav item ends-->


          <!-- Jobs Nav item-->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Jobs</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/jobs-all">View All</a></li>
                <li class="nav-item"> <a class="nav-link" href="/jobs-create">Create Job</a></li>
                <li class="nav-item"> <a class="nav-link" href="/jobs-professional">Professional</a></li>
                <li class="nav-item"> <a class="nav-link" href="/jobs-leanership">Learnership</a></li>
                <li class="nav-item"> <a class="nav-link" href="/jobs-internship">Internship</a></li> 
                <li class="nav-item"> <a class="nav-link" href="/jobs-pending">Pending</a></li>
              </ul>
            </div>
          </li>
          <!-- Jobs Nav item ends-->


          <!-- Clients Nav item-->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
              <span class="menu-title">Clients</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/clients-all">View All</a></li>
                <li class="nav-item"> <a class="nav-link" href="/clients-create">Create Client</a></li>
                <li class="nav-item"> <a class="nav-link" href="/clients-professional">Professional</a></li>
                <li class="nav-item"> <a class="nav-link" href="/clients-leanership">Learnership</a></li>
                <li class="nav-item"> <a class="nav-link" href="/clients-internship">Internship</a></li>
                <li class="nav-item"> <a class="nav-link" href="/clients-pending">Pending</a></li>
              </ul>
              </div>
          </li>
          <!-- Clients Nav item ends-->

          <!-- Candidates Nav item-->
          <li class="nav-item">
            <a class="nav-link" href="/candidates">
              <span class="menu-title">Candidates</span>
              <i class="mdi mdi-contacts menu-icon"></i>
            </a>
          </li>
          <!-- Candidates Nav item ends-->

          <!-- Attachments Nav item-->
          <li class="nav-item">
            <a class="nav-link" href="/attatchments">
              <span class="menu-title">Attachments</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
          <!-- Attachments Nav item ends-->

          <br>
          <br>
          @if (Auth::user()->role == 'SuperAdmin' || Auth::user()->role == 'Admin')
            <!-- Admin menu Seperator Nav item-->
            <li class="nav-item">
              <div class="border-bottom">
                  <h6 class="font-weight-normal mb-3">    Admin Menu</h6>                
              </div>
            </li>
            <!-- Admin menu Seperator Nav item ends-->

            <!-- Companies Nav item-->
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#company-pages" aria-expanded="false" aria-controls="company-pages">
                <span class="menu-title">Companies</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="company-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="/companies-all">View All</a></li>
                  <li class="nav-item"> <a class="nav-link" href="/company-create">Create Company</a></li>
                </ul>
                </div>
            </li>
            <!-- Companies Nav item ends-->

            <!-- Users Nav item-->
            <li class="nav-item">
              <a class="nav-link" href="/users-all">
                <span class="menu-title">Users</span>
                <i class="mdi mdi-account menu-icon"></i>
              </a>
            </li>
            <!-- Users Nav item ends-->
          @endif
          
          
      </nav>