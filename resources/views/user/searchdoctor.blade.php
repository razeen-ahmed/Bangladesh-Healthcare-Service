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

<x-app-layout>
    <div class="container mx-auto px-4 py-8">

        <!-- <p class="text-lg mb-4">This is your personalized dashboard where you can manage your tasks and activities.</p> -->
        <a href="{{ url('home') }}" class="btn btn-primary">Click here to go to your dashboard</a>
    </div>

    <div class="container-fluid page-body-wrapper">
        <div class="container">
            <form action="" class="row g-3 align-items-center">
                <div class="col-md-8">
                    <input type="search" name="search" class="form-control" placeholder="Search by name">
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary w-100">Search</button>
                </div>
            </form>

            <div class="table-responsive mt-5">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Doctor Name</th>
                            <th>Date of Birth</th>
                            <th>Phone</th>
                            <th>Speciality</th>
                            <th>Room Number</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $doctor)
                        <tr>
                            <td>{{ $doctor->name }}</td>
                            <td>{{ $doctor->dob }}</td>
                            <td>{{ $doctor->phone }}</td>
                            <td>{{ $doctor->specialty }}</td>
                            <td>{{ $doctor->room }}</td>
                            <td><img src="doctorimage/{{ $doctor->image }}" alt="Doctor Image" class="img-thumbnail" style="max-width: 100px;"></td>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- Include necessary JavaScript files -->
<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="../assets/vendor/wow/wow.min.js"></script>
<script src="../assets/js/theme.js"></script>

</body>
</html>
