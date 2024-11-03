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
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <label>Student Number:</label>
        <input type="text" name="student_number" required><br>
        <label>PIN:</label>
        <input type="password" name="pin" required><br>
        <input type="submit" value="Login">
    </form>
</body>

</html>

<?php
// Include the database connection file
require('connect.php');

// Process the login attempt
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $student_number = $_POST['student_number'];
    $pin = $_POST['pin'];

    // Query the database for the user's information
    $sql = "SELECT * FROM students WHERE student_number='$student_number' AND pin='$pin'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // User found, redirect to success page or do further processing
        echo "Login successful!";
    } else {
        // User not found or invalid credentials
        echo "Invalid student number or PIN.";
    }
}

// Close the database connection
mysqli_close($conn);
?>
