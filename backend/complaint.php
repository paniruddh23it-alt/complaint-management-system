<?php
include "db.php";

$complaint = $_POST['complaint'];

$query = "INSERT INTO complaints (complaint_text)
          VALUES ('$complaint')";

mysqli_query($conn, $query);

echo "Complaint Submitted Successfully";
?>
