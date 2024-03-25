
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href = "/public">
    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px;
        }
    </style>
    @include('admin.css')
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
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
           
        <div class="container" align="center" style="padding-top: 100px;">

        <!-- @if(session()->has('message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">x</button>
          {{session()->get('message')}}
        </div>
        @endif -->
            <form action="{{url('sendemail',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

            <div style="padding:15px;">
                <label>Greeting</label>
                <input type="text" style="color:black;" name="greeting"  required="">
            </div>

            <div style="padding:15px;">
                <label>Body</label>
                <input type="text" style="color:black;" name="body"  required="">
            </div>

            

            <div style="padding:15px;">
                <label>Action Text</label>
                <input type="text" style="color:black;" name="actiontext"  required="">
            </div>

            <div style="padding:15px;">
                <label>Action URL</label>
                <input type="text" style="color:black;" name="actionurl"  required="">
            </div>

            <div style="padding:15px;">
                <label>End Part</label>
                <input type="text" style="color:black;" name="endpart"  required="">
            </div>

            

            <div style="padding:15px;">
                <input type = "submit" class="btn btn-success">
            </div>
            </form>
</div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>