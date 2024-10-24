<?php
include "connect.php";

function generateToken($length = 10) {
    return bin2hex(random_bytes($length));
}

for ($i = 0; $i < 100; $i++) { // Generate 100 tokens
    $token = generateToken();
    $sql = "INSERT INTO tokens (token) VALUES ('$token')";
    if ($con->query($sql) === TRUE) {
        echo "Token generated: $token<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$con->close();
?>
