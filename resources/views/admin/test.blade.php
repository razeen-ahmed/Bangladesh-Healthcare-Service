<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }

        /* Custom button styling */
        .custom-btn {
            padding: 12px 24px;
            font-size: 16px;
            border-radius: 8px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            margin: 8px;
            transition: background-color 0.3s ease;
            text-decoration: none;
            /* Ensure buttons look like links */
            display: inline-block;
        }

        .custom-btn:hover {
            background-color: #45a049;
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

          <div class="container" align="center" style="padding-top: 100px;">
            <a href="{{ url('add_test_view') }}" class="custom-btn">Add Test</a>
            <a href="{{ url('change_test_view') }}" class="custom-btn">Change Test</a>
        
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-uppercase">ID</th>
                        <th class="text-uppercase">Test Name</th>
                        <th class="text-uppercase">Description</th>
                        <th class="text-uppercase">Department</th>
                        <th class="text-uppercase">Price</th>
                        <th class="text-uppercase">Action</th>
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
                        <td>
                            <form action="{{ route('tests.destroy', $test->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
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
