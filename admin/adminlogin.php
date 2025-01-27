<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KOPPEE - Coffee Shop HTML Template</title>
    

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
   

    <!-- main Start -->
    <div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
        <div class="container py-5">
            <h1 class="display-3 text-primary mt-3">Well Come</h1>
            <h1 class="text-white mb-3">Admin Login</h1>
            <h4 class="text-white font-weight-normal mb-4 pb-3">Enter your Username and Password</h4>
           
           
            <form action="adminauthorization.php" method="POST" class="form-inline justify-content-center mb-4">
               
                    
                    <div >
                    <label for="username" class="text-white font-weight-normal mb-4 pb-3" placeholder="Name" id="name" name="name">Enter User Name:</label>
                    
                    <input name="username" type="text" class="form-control p-4" placeholder="Your Username" style="height: 60px;" required>
                    </div>

                    <div >
                    <label for="password" class="text-white font-weight-normal mb-4 pb-3" placeholder="Name" id="name" name="name">Enter  Password:</label>
                    
                     <input name="password" type="text" class="form-control p-4" placeholder="Your Email" style="height: 60px;" required>
                     </div>
                        
                    </div>
                    <button class="btn btn-primary font-weight-bold px-4" type="clear">clear </button>
                    <button class="btn btn-primary font-weight-bold px-4" type="submit">Log in</button>
            </form>



        </div>
    </div>
    <!-- main End -->

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

