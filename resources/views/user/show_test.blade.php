<!DOCTYPE html>
<html lang="en">

<head>
<style type="text/css">
    label {
        display: inline-block;
        width: 200px;
        color: rgb(13, 226, 41); /* Change text color to white */
    }

    .form-control {
        color: rgb(26, 236, 26); /* Change input text color to green */
    }

    .add-to-cart-btn {
        background-color: rgb(24, 243, 39); /* Change button background color to green */
        color: white; /* Change button text color to white */
        border: none; /* Remove button border */
        padding: 5px 10px; /* Add padding to the button */
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
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ session()->get('message') }}
        </div>
    @endif




    <div class="page-section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">

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
                <form action="{{ url('cart_add', $test->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="add-to-cart-btn">Add to Cart</button>
</form>


                </td>
            </tr>
        @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
            <div class="page-section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">

                <table class="test">
                    <tr>
                        <th>ID</th>
                        <th> TEST NAME</th>
                        <th> PRICE</th>
                        <th> QUANTITY</th>
                        <th> TOTAL</th>
                        <th> ACTION</th>


                    </tr>
                    @foreach($testCarts as $testCart)
                    <tr>
                        <td>{{ $testCart->id }}</td>
                        <td>{{ $testCart->test_name }}</td>
                        <td>{{ $testCart->price }}</td>
                        <td>{{ $testCart->quantity }}</td>
                        <td>{{ $testCart->total }}</td>
                        <td><form action="{{ url('cart_remove', $testCart->id) }}" method="POST">
    @csrf
    <button type="submit" style="background-color: red; color: white;">Remove from Cart</button>
</form>

</td>
                    </tr>
                    
                    @endforeach
                </table>
                <p>Total amount: <strong>{{$totalAmount}}</strong></p>
                @if(session()->has('new_cart') && !empty(session('new_cart')))
    
        @csrf
        <form action="{{route('checkout')}}" method="POST">
        <button type="submit">Proceed to Checkout</button>
        @csrf
</form>
@endif
            </div>

        </div>
    </div>
    </div> <!-- .bg-light -->
    </div> <!-- .bg-light -->


    <footer class="page-footer">
        <div class="container">
            <div class="row px-md-3">
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Company</h5>
                    <ul class="footer-menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Editorial Team</a></li>
                        <li><a href="#">Protection</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>More</h5>
                    <ul class="footer-menu">
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Join as Doctors</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Our partner</h5>
                    <ul class="footer-menu">
                        <li><a href="#">One-Fitness</a></li>
                        <li><a href="#">One-Drugs</a></li>
                        <li><a href="#">One-Live</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Contact</h5>
                    <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
                    <a href="#" class="footer-link">701-573-7582</a>
                    <a href="#" class="footer-link">healthcare@temporary.net</a>

                    <h5 class="mt-3">Social Media</h5>
                    <div class="footer-sosmed mt-3">
                        <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
                    </div>
                </div>
            </div>

            <hr>

            <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>.
                All right reserved</p>
        </div>
    </footer>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>



