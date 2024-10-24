<?php
session_start();
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $candidate = $_POST['candidate'];
    $aadhar = $_SESSION['aadhar'];

    // Check if the user has already voted
    $checkVoteSql = "SELECT * FROM votes WHERE aadhar = '$aadhar'";
    $checkVoteResult = mysqli_query($con, $checkVoteSql);

    if ($checkVoteResult === false) {
        die("Error: " . mysqli_error($con));
    }

    if (mysqli_num_rows($checkVoteResult) > 0) {
        echo "<script>
                alert('You have already voted.');
                window.location.href = 'userdash.php';
              </script>";
    } else {
        // Insert the vote
        $sql = "INSERT INTO votes (aadhar, candidate) VALUES ('$aadhar', '$candidate')";

        if ($con->query($sql) === TRUE) {
            // Check if the user is an admin or a regular user
            $redirectPage = ($_SESSION['role'] == 'admin') ? 'admindash.php' : 'userdash.php';
            echo "<script>
                    alert('Vote submitted successfully!');
                    window.location.href = '$redirectPage';
                  </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }

    $con->close();
}
?>
