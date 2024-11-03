<!DOCTYPE html>
<html>
    <style>
body {
        text-align: center;
        background-color: #fff;
        font-size: large;
    }
    /* Header */
    
    .header {
        background-color: #333;
        color: #fff;
        padding: 20px;
    }
    /* Footer */
    
    .footer {
        background-color: #333;
        color: #fff;
        padding: 20px;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
    /* Container */
    
    .container {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
    }
</style>
<head>
    <title>Student Dashboard</title>
</head>
<body>
    <h2>Welcome to the Student Dashboard</h2>
    <ul>
        <li><a href="apply_residence.php">Apply for Residence</a></li>
        <li><a href="view_application_status.php">View Application Status</a></li>
    </ul>
</body>
</html>

<?php
session_start();
// Check if user is logged in
if (!isset($_SESSION['student_number'])) {
    header("Location: student dashboard.php");
    exit();
}

// Retrieve form data
$residence_choice = $_POST['residence_choice'];

// Process application submission (you can insert into the database here)
// Example:
// $student_number = $_SESSION['student_number'];
// $sql = "INSERT INTO residence_applications (student_number, residence_choice) VALUES ('$student_number', '$residence_choice')";
// Execute SQL query

echo "Application submitted successfully!";
?>
