<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fName = isset($_POST["fName"]) ? $_POST["fName"] : '';
    $aadhar = isset($_POST["aadhar"]) ? $_POST["aadhar"] : '';
    $date = isset($_POST["date"]) ? $_POST["date"] : '';
    $password = isset($_POST["password"]) ? $_POST["password"] : '';
    $cpassword = isset($_POST["cpassword"]) ? $_POST["cpassword"] : '';

    // Encrypt the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL query
    $sql = "INSERT INTO user (Fname, ad_vo, date, password) 
            VALUES (?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: (" . $con->errno . ") " . $con->error);
    }
    $stmt->bind_param("ssss", $fName, $aadhar, $date, $hashedPassword);

    // Execute SQL query
    if ($stmt->execute()) {
        // Redirect to login page after successful registration
        header("Location: login.html");
        exit(); // Make sure to exit after redirection
    } else {
        // Print error message if query execution fails
        echo "Error: " . $stmt->error;
    }

    // Close statement and database connection
    $stmt->close();
    $con->close();
}
?>
