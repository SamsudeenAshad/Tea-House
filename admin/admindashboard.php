<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coffee_cafe";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



if (!isset($_SESSION['admin'])) {
    header("Location: adminlogin.php");
    exit();
}

// Fetch data from the reservations table
$reservationQuery = "SELECT * FROM reservations ORDER BY reservation_date, reservation_time";
$reservationResult = mysqli_query($conn, $reservationQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Coffee House </title>
    

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
<div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
<div class="container py-5">
    <h2 class="display-3 text-primary mt-3">Welcome, <?php echo $_SESSION['admin']; ?>!</h2>
    <a href="logout.php">Logout</a>

    <h3 class="text-white mb-3">Reservation Details:</h3>
    <table class="text-white font-weight-normal mb-4 pb-3" border="2">
        <tr>
            <th>ID</th>
            <th>Customer Name</th>
            <th>Contact Email</th>
            <th>Date</th>
            <th>Time</th>
            <th>Number of Guests</th>
            <th>Order Time</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($reservationResult)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['reservation_date']; ?></td>
            <td><?php echo $row['reservation_time']; ?></td>
            <td><?php echo $row['person']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
        </tr>
        <?php } ?>
    </table>
    </div>
    </div>
</body>
</html>

