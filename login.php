<?php
session_start();
include "connect.php";

if (isset($_POST['submit'])) {
    $aadhar = $_POST['aadhar'];
    $password = $_POST['password'];

    // SQL query to check if the credentials are valid
    $sql = "SELECT * FROM user WHERE ad_vo = ?";
    $stmt = $con->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: (" . $con->errno . ") " . $con->error);
    }
    $stmt->bind_param("s", $aadhar);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    // Check if a user was found and verify the password
    if ($row && password_verify($password, $row['password'])) {
        $_SESSION['aadhar'] = $aadhar;
        $_SESSION['role'] = $row['role']; 
        $_SESSION['Fname'] = $row['Fname']; 
        if ($row['role'] == 'admin') {
            header('Location: admindash.php');
        } else {
            header('Location: userdash.php');
        }
        exit();
    } else {
        echo "<script>alert('Invalid username or password.'); window.location.href='login.html';</script>";
    }

    $stmt->close();
}

$con->close();
?>
