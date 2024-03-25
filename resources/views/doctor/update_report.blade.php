
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">

    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px
            
        }
    </style>
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
            <div class="container" align="center" style="padding:100px">
            <form action="{{url('editreport',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding:15px;">
                    <label>Patient Name</label>
                    <input type="text" style="color:black;" name="name" value="{{$data->name}}">
                </div>

                <div style="padding:15px;">
                    <label>Date of Birth</label>
                    <input type="text" style="color:black;" name="dob" value="{{$data->dob}}">
                </div>

                <div style="padding:15px;">
                    <label>Phone</label>
                    <input type="text" style="color:black;" name="phone" value="{{$data->phone}}">
                </div>

                <div style="padding:15px;">
                    <label>Age</label>
                    <input type="text" style="color:black;" name="age" value="{{$data->age}}">
                </div>

                <div style="padding:15px;">
                    <label>Room number</label>
                    <input type="text" style="color:black;" name="room" value="{{$data->room}}">
                </div>

                <div style="padding:15px;">
                    <label>Email Address</label>
                    <input type="text" style="color:black;" name="email" value="{{$data->email}}">
                </div>

                <div style="padding:15px;">
                    <label>Medical History</label>
                    <input type="text" style="color:black;" name="medical_history" value="{{$data->medical_history}}">
                </div>

                <div style="padding:15px;">
                    <label>Symptoms</label>
                    <input type="text" style="color:black;" name="symptoms" value="{{$data->symptoms}}">
                </div>

                <div style="padding:15px;">
                    <label>Prescription</label>
                    <input type="text" style="color:black;" name="prescription" value="{{$data->prescription}}">
                </div>



                <div style="padding:15px;">
                    <label>Old Signature</label>
                    <image height="150" width="150" src="signature/{{$data->image}}">
                </div>

                <div style="padding:15px;">
                    <label>New Signature</label>
                    <input type="file" name="file">
                </div>

                <div style="padding:15px;">
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('doctor.script')
  </body>
</html>