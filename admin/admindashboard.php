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

// Fetch Reservations
$reservationQuery = "SELECT * FROM reservations ORDER BY reservation_date, reservation_time";
$reservationResult = mysqli_query($conn, $reservationQuery);

// Fetch Orders
$orderQuery = "SELECT * FROM customer_orders ORDER BY order_date, order_time";
$orderResult = mysqli_query($conn, $orderQuery);

// Fetch Messages
$messagesQuery = "SELECT * FROM client_messages ORDER BY created_at DESC";
$messagesResult = mysqli_query($conn, $messagesQuery);

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
    <a href="adminlogin.php">Logout</a>

    <!-- Reservation Details -->
    <h3 class="text-white mb-3 mt-4">Reservation Details</h3>
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

    <!-- Order Details -->
    <h3 class="text-white mb-3 mt-4">Customer Orders:</h3>
    <table class="text-white font-weight-normal mb-4 pb-3" border="2">
        <tr>
            <th>ID</th>
            <th>Customer Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>Time</th>
            <th>Coffee Type</th>
            <th>Quantity</th>
            <th>Payment Type</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($orderResult)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['order_date']; ?></td>
            <td><?php echo $row['order_time']; ?></td>
            <td><?php echo $row['coffee_type']; ?></td>
            <td><?php echo $row['quantity']; ?></td>
            <td><?php echo $row['payment_type']; ?></td>
            
        </tr>
        <?php } ?>
    </table>

    <!-- Messages -->
    <h3 class="text-white mb-3 mt-4">Customer Messages</h3>
    <table class="text-white font-weight-normal mb-4 pb-3" border="2">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Date</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($messagesResult)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['subject']; ?></td>
            <td><?php echo $row['message']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
        </tr>
        <?php } ?>
    </table>
</div>
</div>

    
</body>
</html>

