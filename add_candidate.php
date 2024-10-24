<?php
// connect.php should have your database connection details
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $party = $_POST['party'];
    $logo = $_POST['logo'];
    $party_code = $_POST['party_code'];

    // Save to database
    $sql = "INSERT INTO candidates (party, logo, party_code) VALUES (?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sss", $party, $logo, $party_code);

    if ($stmt->execute()) {
        echo "<script>alert('Candidate added successfully!'); window.location.href=document.referrer;</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "'); window.location.href=document.referrer;</script>";
    }

    $stmt->close();
}

$con->close();
?>
