
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
      <style>
        /* Custom CSS for table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #0f1a33; /* Set table background color to dark blue */
            color: #fff; /* Set text color to white */
            overflow-x: auto; /* Enable horizontal scrollbar */
            white-space: nowrap; /* Prevent text wrapping */
        }

        th {
            background-color: yellow; /* Set table header background color to yellow */
            color: #1f3057; /* Set table header text color to dark blue */
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #fff; /* Set border color for rows */
        }

        /* Button styling */
        .btn {
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            color: #fff;
        }

        .btn-danger {
            background-color: #dc3545; /* Red background color for delete button */
        }

        .btn-danger:hover {
            background-color: #c82333; /* Darker red on hover */
        }

        .btn-primary {
            background-color: #007bff; /* Blue background color for update button */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
    </style>
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
            <div align="center" style="padding: 100px;">
        <table>
            <tr style="background-colour:black;">
                <th>Staff Name</th>
                <th>Phone</th>
                <th>Designation</th>
                <th>Room number</th>
                <th>Date of birth</th>
                <th>Image</th>
                <th>Delete</th>
                <th>Update</th>
               
            </tr>
            @foreach($data as $staff)
            <tr>
                <td>{{$staff->name}}</td>
                <td>{{$staff->phone}}</td>
                <td>{{$staff->designation}}</td>
                <td>{{$staff->room}}</td>
                <td>{{$staff->dob}}</td>
                <td><img height="100" width="100" src="staffimage/{{$staff->image}}"></td>
                <td><a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" href="{{url('deletestaff',$staff->id)}}">Delete</a></td>
                <td><a class="btn btn-primary" href="{{url('updatestaff',$staff->id)}}">Update</a></td>
            </tr> 
            @endforeach
        </table>
        </div>
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>