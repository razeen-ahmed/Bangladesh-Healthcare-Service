<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
            color: rgb(13, 226, 41); /* Change label text color to green */
        }

        .form-control {
            color: rgb(26, 236, 26); /* Change input text color to green */
            border-color: rgb(26, 236, 26); /* Change input border color to green */
        }

        .add-to-cart-btn {
            background-color: rgb(24, 243, 39); /* Change button background color to green */
            color: white; /* Change button text color to white */
            border: none; /* Remove button border */
            padding: 8px 16px; /* Add padding to the button */
            cursor: pointer; /* Change cursor to pointer on hover */
        }
    </style>

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

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-sm">
                        <div class="site-info">
                            <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                            <span class="divider">|</span>
                            <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right text-sm">
                        <div class="social-mini-button">
                            <a href="#"><span class="mai-logo-facebook-f"></span></a>
                            <a href="#"><span class="mai-logo-twitter"></span></a>
                            <a href="#"><span class="mai-logo-dribbble"></span></a>
                            <a href="#"><span class="mai-logo-instagram"></span></a>
                        </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .topbar -->
        @include('user.navbar')
    </header>

    @if (session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="container mt-5">
        <form method="POST" action="{{ route('upload_patient_report') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="report_file">Upload Patient Report</label>
                <input type="file" class="form-control" id="report_file" name="report_file">
            </div>
            <button type="submit" style="background-color:lightgreen; color: white;" >Submit</button>
        </form>
    </div>

    <!-- Include necessary JavaScript files -->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="../assets/vendor/wow/wow.min.js"></script>
    <script src="../assets/js/theme.js"></script>

</body>
</html>
