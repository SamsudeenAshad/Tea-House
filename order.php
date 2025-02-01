<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KOPPEE - Coffee Shop </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 350px">
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Reservation Start -->
    <div class="container-fluid my-5">
        <div class="container">
            <div class="reservation position-relative overlay-top overlay-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-5 my-lg-0">
                        <div class="p-5">
                            <div class="mb-4">
                                <h1 class="display-3 text-primary">10% OFF</h1>
                                <h1 class="text-white">For Online Order</h1>
                            </div>
                            <p class="text-white">Order your Coffee online and enjoy an exclusive 10% discount on your total bill! Experience the perfect blend of convenience and savings at Thilini Cafe House.</p>
                            <ul class="list-inline text-white m-0">
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Enjoy premium coffee and delicious treats at discounted rates.</li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Hassle-free table booking with just a few clicks.</li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Your reserved spot ensures a seamless and delightful café experience.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center p-5" style="background: rgba(51, 33, 29, .8);">
                            <h1 class="text-white mb-4 mt-5">Order Your Coffee</h1>

                            <form class="mb-5" action="order.DB.php" method="POST" >
                                <div class="form-group">
                                    <input type="text" class="form-control bg-transparent border-primary p-4" placeholder="Name" id="name" name="name"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control bg-transparent border-primary p-4" placeholder="Email" id="email" name="email"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Date" id="date" name="order_date" data-target="#date" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Time" id="time" name="order_time" data-target="#time" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select bg-transparent border-primary px-4" style="height: 49px;" name="coffee_type" requiredv >
                                        <option value="" disabled selected>Coffee Type</option>
                                        <option value="Morning_Brew_Black_Coffee">Morning Brew - Black Coffee</option>
                                        <option value="Mocha_Bliss_Chocolete_Coffee">Mocha Bliss - Chocolete Coffee</option>
                                        <option value="Creamy_Comfort_Coffee_With_Milk">Creamy Comfort - Coffee With Milk</option>
                                        <option value="Iced_Bold_Black_Coffee">Iced Bold - Black Coffee</option>
                                        <option value="Creamy_Comfort_Coffee_With_Milk">Choco Chill - Chocolete Coffee</option>
                                        <option value="Iced_Bold_Black_Coffee">Milky Frost - Coffee With Milk</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select bg-transparent border-primary px-4" style="height: 49px;" name="person" requiredv >
                                        <option value="" disabled selected>Number of Coffee</option>
                                        <option value="1">1 Coffee</option>
                                        <option value="2">2 Coffee</option>
                                        <option value="3">3 Coffee</option>
                                        <option value="4">4 Coffee</option>
                                        <option value="5">5 Coffee</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select bg-transparent border-primary px-4" style="height: 49px;" name="person" requiredv >
                                        <option value="" disabled selected>Payment Type</option>
                                        <option value="1">Cash</option>
                                        <option value="2">Online Transfer</option>
                                        <option value="3">Credit Card | Debit Card</option>
                                    </select>
                                </div
                                
                                <div>
                                    <input class="btn btn-primary btn-block font-weight-bold py-3" type="submit" placeholder="Order Now" name="submit">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation End -->


    <!-- Footer Start -->
    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>NSBM Green Univercity</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+94 71 279 0070</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i>atmjayalath@students.nsbm.ac.lk</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Follow Us</h4>
                <p>Stay connected and never miss an update!<br>
                Join us on social media and be part of our growing community.</p>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Open Hours</h4>
                <div>
                    <h6 class="text-white text-uppercase">Monday - Friday</h6>
                    <p>8.00 AM - 8.00 PM</p>
                    <h6 class="text-white text-uppercase">Saturday - Sunday</h6>
                    <p>2.00 PM - 8.00 PM</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Share Your Ideas</h4>
                <p>Send us your thoughts, suggestions, or feedback and be part of our journey.</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary font-weight-bold px-3">Send Feedback</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
            <p class="mb-2 text-white"> &copy; <a class="font-weight-bold" href="admin/adminlogin.php">Web Application Development</a>. Group AD</a></p>
            <p class="m-0 text-white"> <a class="font-weight-bold" href="https://nsbm.ac.lk">NSBM Green Univercity </a></p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>