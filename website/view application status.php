<?php
session_start();
// Check if user is logged in
if (!isset($_SESSION['student_number'])) {
    header("Location: student dashboard.php");
    exit();
}

// Retrieve student information from session or database as needed
$student_number = $_SESSION['student_number'];

// Retrieve application status from the database
// Example:
// $sql = "SELECT * FROM residence_applications WHERE student_number='$student_number'";
// Execute SQL query to fetch application status

// Display application status
// Example:
// echo "Your application status: Approved";
?>
