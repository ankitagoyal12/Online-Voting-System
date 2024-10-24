<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST['token'];
    $sql = "SELECT * FROM tokens WHERE token='$token' AND used=FALSE";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // Token is valid
        $sql = "UPDATE tokens SET used=TRUE WHERE token='$token'";
        if ($conn->query($sql) === TRUE) {
            echo "Vote recorded successfully!";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "Invalid or already used token.";
    }
}

$con->close();
?>