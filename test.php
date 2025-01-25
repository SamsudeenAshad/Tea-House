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
        die("Connection failed: " .$conn->connect_error);
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

<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];

//Database connection
$conn = new mysqli('localhost', 'root','', 'test');
if($conn->connect_error) {
    die('Connection Failed:' .$conn->connect_error);
}else{
$stmt = $conn->prepare("insert into registration (firstName, lastName, gender, email, password, number)
            values(?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
$stmt->execute();
echo "registration Successfully...";
$stmt->close();
$conn->close();

}   
?>