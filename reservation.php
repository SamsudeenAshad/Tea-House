<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "coffee_cafe";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Use prepared statements
    $stmt = $conn->prepare("INSERT INTO reservations (name, email, reservation_date, reservation_time, person) VALUES (?, ?, ?, ?, ?)");

    if ($stmt === false) { // Check if prepare failed
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param("ssssi", $_POST['name'], $_POST['email'], $_POST['reservation_date'], $_POST['reservation_time'], intval($_POST['person'])); // "ssssi" = string, string, string, string, integer

    if ($stmt->execute()) {
        echo "<p>Reservation successful! Thank you, " . htmlspecialchars($_POST['name']) . ".</p>"; // HTML encode the name for display
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method!";
}
?>