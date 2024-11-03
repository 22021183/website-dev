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

<header>
    <title>Apply for Residence</title>
</header>

<body>
    <container>
        <h2>Apply for Residence</h2>
        <form action="submit_application.php" method="post">
            <label for="residence_choice">Choose Residence:</label><br>
            <select id="residence_choice" name="residence_choice">
            <option value="Residence A">Residence A</option>
            <option value="Residence B">Residence B</option>
            <!-- Add more residence options as needed -->
        </select><br><br>
            <input type="submit" value="Submit Application">
    </container>
    </form>
</body>
<footer> copyrights@2024 </footer>

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
