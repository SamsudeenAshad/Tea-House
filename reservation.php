<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details
    $servername = "localhost";
    $username = "root@localhost";
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
    $reservation_date = $conn->real_escape_string($_POST['reservation_date']);
    $reservation_time = $conn->real_escape_string($_POST['reservation_time']);
    $person = isset($_POST['person']) ? intval($_POST['person']) : 1;

    // Insert data into the reservations table
    $sql = "INSERT INTO reservations (name, email, reservation_date, reservation_time, person)
            VALUES ('$name', '$email', '$reservation_date', '$reservation_time', $person)";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Reservation successful! Thank you, $name.</p>";
    } else {
        echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }

    // Close connection
    $conn->close();
}
else {
    echo "Invalid request method!";
}
?>
