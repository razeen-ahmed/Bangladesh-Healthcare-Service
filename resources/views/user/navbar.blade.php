
<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item">

              <a class="nav-link" href="{{url('/home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/show_doctor_list') }}">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/news') }}">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=" {{ url('show_test_view')}} ">Tests</a>
            </li>

            @if (Route::has('login'))
    @auth
        <li class="nav-item">
            <a class="nav-link" style="background-color:greenyellow; color: white;" href="{{ url('myappointment') }}">My Appointment</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('profile') }}">View Profile</a>
        </li>
        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/upload_patient_report') }}">Upload Your Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/see_patient_report') }}">See Your Reports</a>
                        </li>
        <!-- Logout Link -->
        <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST" id="logout-form">
                @csrf
                <button type="submit" class="btn btn-primary ml-lg-3">Logout</button>
            </form>
        </li>
    @else
        <li class="nav-item">
            <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
        </li>
    @endauth
@endif


          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>