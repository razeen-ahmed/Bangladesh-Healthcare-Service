
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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

        @if (session()->has('message'))
                <div class='alert alert-success'>

                    {{ session()->get('message') }}

                </div>
        @endif

        <div class="container-fluid page-body-wrapper">
           
        <div class="container" align="center" style="padding-top: 100px;">


            <form action="{{url('add_test_form')}}" method="GET" enctype="multipart/form-data">
                @csrf

            <div style="padding:15px;">
                <label>Test Name</label>
                <input type="text" style="color:black;" name="test_name" placeholder="Write the name" required="">
            </div>

            <div style="padding:15px;">
                <label>Test Description</label>
                <input type="text" style="color:black;" name="test_description" placeholder="Write the test description" required="">
            </div>


            <div style="padding:15px;">
                <label>Department</label>
                <input type="text" style="color:black;" name="department" placeholder="Write the department" required="">
            </div>

            <div style="padding:15px;">
                <label>Price</label>
                <input type="text" style="color:black;" name="price" placeholder="Give price" required="">
            </div>

            <div style="padding:15px;">
                <label>Date</label>
                <input type="date" style="color:black;" name="date" placeholder="Give date" required="">
            </div>



            <div style="padding:15px;">
                <input type = "submit" class="btn btn-success">
            </div>
            </form>
        </div>     
       
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>