<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="copyright" content="MACode ID, https://macodeid.com/">
  <title>One Health - Medical Center HTML5 Template</title>
  
  <!-- Include necessary CSS files -->
  <link rel="stylesheet" href="../assets/css/maicons.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

<!-- Back to top button -->
<div class="back-to-top"></div>

<header>
  <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 text-sm">
          <div class="site-info">
            <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
            <span class="divider">|</span>
            <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
          </div>
        </div>
        <div class="col-sm-4 text-right text-sm">
          <div class="social-mini-button">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-dribbble"></span></a>
            <a href="#"><span class="mai-logo-instagram"></span></a>
          </div>
        </div>
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .topbar -->

  <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

      <!-- Search Doctor Button -->
      <a class="nav-link" style="background-color: greenyellow; color: white;" href="{{ url('searchdoctor') }}">Search</a>
      <!-- End Search Doctor Button -->

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupport">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.html">News</a>
          </li>

          @if(Route::has('login'))
            @auth
              <li class="nav-item">
                <a class="nav-link" style="background-color: greenyellow; color: white;" href="{{ url('myappointment') }}">My Appointment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="background-color: lightgreen; color: white;" href="{{ url('comment') }}">Queries</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="background-color: skyblue; color: white;" href="{{ url('myreport') }}">My Report</a>
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
</header>

<div class="container-fluid py-5">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>Patient Name</th>
              <th>Age</th>
              <th>Email Address</th>
              <th>Date of Birth</th>
              <th>Prescription</th>
              <th>Room</th>
              <th>Phone</th>
              <th>Signature</th>
              <th>Supervised By</th>
              <th>Download</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach($report as $reports)
            <tr>
              <td>{{ $reports->name }}</td>
              <td>{{ $reports->age }}</td>
              <td>{{ $reports->email }}</td>
              <td>{{ $reports->dob }}</td>
              <td>{{ $reports->prescription }}</td>
              <td>{{ $reports->room }}</td>
              <td>{{ $reports->phone }}</td>
              <td><img src="signature/{{ $reports->image }}" alt="Signature" style="max-width: 100px;"></td>
              <td>{{ $reports->treated_by }}</td>
              <td><a class="btn btn-primary" onclick="return confirm('Are you sure?')" href="{{ url('download', $reports->id) }}">Download</a></td>
              <td><a class="btn btn-danger" onclick="return confirm('Are you sure to delete?')" href="{{ url('report_delete', $reports->id) }}">Delete</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="../assets/vendor/wow/wow.min.js"></script>
<script src="../assets/js/theme.js"></script>

</body>
</html>
