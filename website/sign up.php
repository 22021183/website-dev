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
    <title>Sign Up</title>
</head>

<body>
    <h2>Sign Up</h2>
    <form action="sign up.php" method="post">
        <label>Surname:</label>
        <input type="text" name="surname" required><br>
        <label>Full Name:</label>
        <input type="text" name="full_name" required><br>
        <label>Student Email:</label>
        <input type="email" name="student_email" required><br>
        <label>Student Number:</label>
        <input type="text" name="student_number" required><br>
        <label>PIN:</label>
        <input type="password" name="pin" required><br>
        <input type="submit" value="Sign Up">
    </form>
</body>

</html>

<?php
// Include the database connection file

require('connect.php');

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $surname = $_POST['surname'];
    $full_name = $_POST['full_name'];
    $student_email = $_POST['student_email'];
    $student_number = $_POST['student_number'];
    $pin = $_POST['pin'];

    // Insert user data into the database
    $sql = "INSERT INTO students (surname, full_name, student_email, student_number, pin) 
            VALUES ('$surname', '$full_name', '$student_email', '$student_number', '$pin')";

    if (mysqli_query($conn, $sql)) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
$conn->close();
?>
