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
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);

    // Insert data into the messages table
    $sql = "INSERT INTO messages (name, email, subject, message) 
            VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        header("Location: messagesuccess.php"); // Redirect to success page
    } else {
        header("Location: 404.php"); // Redirect to error page
    }

    // Close connection
    $conn->close();
} else {
    echo "Invalid request method!";
}
?>
