<html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "coffee_cafe";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize and retrieve form data
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $order_date = $conn->real_escape_string($_POST['order_date']);
    $order_time = $conn->real_escape_string($_POST['order_time']);
    $coffee_type = $conn->real_escape_string($_POST['coffee_type']);
    $quantity = intval($_POST['quantity']);
    $payment_type = $conn->real_escape_string($_POST['payment_type']);

    // Insert data into the CustomerOrders table
    $sql = "INSERT INTO customer_orders (name, email, order_date, order_time, coffee_type, quantity, payment_type)
            VALUES ('$name', '$email', '$order_date', '$order_time', '$coffee_type', $quantity, '$payment_type')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ordersuccess.php"); // Redirect to success page
    } else {
        header("Location: 404.php"); // Redirect to error page
    }

    // Close connection
    $conn->close();
} else {
    echo "Invalid request method!";
}
?>
</html>
