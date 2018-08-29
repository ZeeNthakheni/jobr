<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

          <!-- Profile Nav item-->
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="{{ asset('storage/UserImages/no_profile.png') }}" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->              
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">{{Auth::user()->name}}</span>
                <span class="text-secondary text-small">Project Manager</span>
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

          <!-- Messages button-->
          <div class="card-body">    
            <div class="template-demo">
              <a class="btn btn-gradient-success btn-rounded btn-fw" href="messages/create">+ Send Message</a>
            </div>
          </div>
          <!-- Messages button ends-->
        </ul>
      </nav>