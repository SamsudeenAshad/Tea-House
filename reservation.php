
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$reservation_date = $_POST['reservation_date'];
$reservation_time = $_POST['reservation_time'];
$person = $_POST['person'];

//Database connection
$conn = new mysqli('localhost', 'root','', 'test');
if($conn->connect_error) {
    die('Connection Failed:' .$conn->connect_error);
}else{
$stmt = $conn->prepare("insert into reservations (name, email, reservation_date, reservation_time, person)
            values(?, ?, ?, ?, ?)");
$stmt->bind_param("ssssi", $name, $email, $reservation_date, $reservation_time, $person);
$stmt->execute();

echo "registration Successfully...";
$stmt->close();
$conn->close();

}   
?>