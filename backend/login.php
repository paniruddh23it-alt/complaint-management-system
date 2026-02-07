<?php
include "db.php";

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    header("Location: ../dashboard.html");
} else {
    echo "Invalid Login";
}
?>
