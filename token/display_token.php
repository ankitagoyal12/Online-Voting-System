<?php
session_start();
include "connect.php";

// Assuming user ID is stored in session after login
$user_id = $_SESSION['user_id'];

// Generate a new token
$token = generateToken();
$sql = "INSERT INTO tokens (user_id, token, used) VALUES ('$user_id', '$token', FALSE)";

if ($con->query($sql) === TRUE) {
    // Token stored successfully
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

// Retrieve the token for display
$sql = "SELECT token FROM tokens WHERE user_id='$user_id' AND used=FALSE LIMIT 1";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $token = $row['token'];
} else {
    $token = "No valid token found.";
}

$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
</head>
<body>
    <h1>Welcome to your Dashboard</h1>
    <p>Your voting token is: <?php echo htmlspecialchars($token); ?></p>
</body>
</html>
