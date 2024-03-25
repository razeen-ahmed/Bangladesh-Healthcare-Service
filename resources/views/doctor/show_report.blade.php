
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('doctor.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('doctor.sidebar')
      <!-- partial -->
      @include('doctor.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div align="center" style="padding: 50px;">
                <table>
                    <tr>
                        <th>Patient Name</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Medical History</th>
                        <th>Symptoms</th>
                        <th>Prescriptions</th>
                        <th>Room</th>
                        <th>Phone</th>
                        <th>Signature</th>
                        <th>Update</th>
                    </tr>
                    @foreach($report as $reports)
                    <tr>
                        <td>{{$reports->name}}</td>
                        <td>{{$reports->age}}</td>
                        <td>{{$reports->email}}</td>
                        <td>{{$reports->dob}}</td>
                        <td>{{$reports->medical_history}}</td>
                        <td>{{$reports->symptoms}}</td>
                        <td>{{$reports->prescription}}</td>
                        <td>{{$reports->room}}</td>
                        <td>{{$reports->phone}}</td>
                        <td><img height="100" width="100" src="signature/{{$reports->image}}"></td>
                        <td><a class="btn btn-danger" href="{{url('updatereport',$reports->id)}}">Update</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('doctor.script')
  </body>
</html>