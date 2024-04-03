<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <style type="text/css">
        label {
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
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and
                                more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                                target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
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
            <style>
                .green-text {
                    color: green;
                }
            </style>

            <div class="container-fluid page-body-wrapper">
                <form action="{{ url('change_test_form') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="test_id">Test ID:</label>
                        <input type="number" id="test_id" name="test_id" class="form-control green-text"
                            placeholder="Enter test ID">
                    </div>

                    <div class="form-group">
                        <label for="test_name">Test Name:</label>
                        <input type="text" id="test_name" name="test_name" class="form-control green-text"
                            placeholder="Enter test name">
                    </div>


                    <div class="form-group">
                        <label for="test_description">Test Description:</label>
                        <input type="text" id="test_description" name="test_description" class="form-control"
                            placeholder="Enter test_description">
                    </div>


                    <div class="form-group">
                        <label for="department">Department:</label>
                        <input type="text" id="department" name="department" class="form-control"
                            placeholder="Enter  Department">
                    </div>



                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="text" id="price" name="price" class="form-control"
                            placeholder="Enter price">
                    </div>



                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <table class="table">
              <thead>
                  <tr>
                      <th class="text-uppercase">ID</th>
                      <th class="text-uppercase">Test Name</th>
                      <th class="text-uppercase">Description</th>
                      <th class="text-uppercase">Department</th>
                      <th class="text-uppercase">Price</th>


                  </tr>
              </thead>
              <tbody>
                  @foreach ($tests as $test)
                      <tr>
                          <td>{{ $test->id }}</td>
                          <td>{{ $test->test_name }}</td>
                          <td>{{ $test->test_description }}</td>
                          <td>{{ $test->department }}</td>
                          <td>{{ $test->price }}</td>
                   

                      </tr>
                  @endforeach
              </tbody>
          </table>

        </div>

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
</body>

</html>
