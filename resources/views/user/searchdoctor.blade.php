<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

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
        <form action="" class="col-9">
            <div class="form-group">
              
                <input type="search" name="search" id="" class="form-control" placeholder="Search by name" >
              
            </div>  
            <button class="btn btn-primary">Search</button> 
        </form>
        <div align="center" style="padding: 100px;">
        <table>
            <tr>
                <th>Doctor Name</th>
                <th>Date of Birth</th>
                <th>Phone</th>
                <th>Speciality</th>
                <th>Room number</th>
                <th>Image</th>
            
               
            </tr>
            @foreach($data as $doctor)
            <tr>
                <td>{{$doctor->name}}</td>
                <td>{{$doctor->dob}}</td>
                <td>{{$doctor->phone}}</td>
                <td>{{$doctor->specialty}}</td>
                <td>{{$doctor->room}}</td>
                <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}"></td>
                
            
            </tr> 
            @endforeach
        </table>
        </div>
    </div>
</x-app-layout>

</body>
</html>