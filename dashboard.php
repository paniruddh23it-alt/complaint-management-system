<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <h2>Welcome to Dashboard</h2>

    <form action="backend/complaint.php" method="POST">
        <textarea name="complaint" placeholder="Write your complaint" required></textarea>
        <button type="submit">Submit Complaint</button>
    </form>

    <br>

    <a href="view_complaints.php">View Complaints</a> |
    <a href="logout.php">Logout</a>
</div>

</body>
</html>
