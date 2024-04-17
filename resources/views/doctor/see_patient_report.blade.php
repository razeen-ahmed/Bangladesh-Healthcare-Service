<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
      
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Set body background color */
            color: #343a40; /* Set text color */
            padding-top: 50px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: inherit; /* Inherit background color from body */
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Add box shadow */
            border-radius: 8px; /* Add border radius */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #343a40; /* Set table background color */
            color: #ffffff; /* Set table text color */
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #dee2e6; /* Set border color for table rows */
        }

        th {
            background-color: #ffc107; /* Set table header background color */
            color: #343a40; /* Set table header text color */
            font-weight: bold;
        }

        a {
            color: #007bff; /* Set link text color */
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline; /* Add underline on hover */
        }

        .alert {
            margin-top: 20px;
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
        <div class="container" align="center" style="padding-top: 100px;">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{ session()->get('message') }}
                </div>
            @endif
            <table>
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reports as $report)
                        <tr>
                            <td>{{ $report->patient_name }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ $report->url }}">Download</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('doctor.script')
</body>
</html>
