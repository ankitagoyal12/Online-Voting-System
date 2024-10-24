<?php
session_start();
include "connect.php";

// Check if the user is logged in
if (!isset($_SESSION['aadhar'])) {
    header('Location: login.php');
    exit();
}

$aadhar = $_SESSION['aadhar'];

// Fetch user data
$sql = "SELECT * FROM user WHERE ad_vo = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("s", $aadhar);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc(); // Store user data
} else {
    echo "<script>alert('User not found.'); window.location.href='userdash.php';</script>";
    exit();
}

$stmt->close();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fName = $_POST['fName'];
    $date = $_POST['date'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $aadharNumber = $_POST['aadhar'];

    if ($password !== $cpassword) {
        echo "<script>alert('Passwords do not match.'); window.location.href='edit_profile.php';</script>";
        exit();
    }

    if (!preg_match("/^\d{12}$/", $aadharNumber)) {
        echo "<script>alert('Aadhar number must be 12 digits.'); window.location.href='edit_profile.php';</script>";
        exit();
    }

    // Validate age 18+
    $birthDate = new DateTime($date);
    $today = new DateTime();
    $age = $today->diff($birthDate)->y;

    if ($age < 18) {
        echo "<script>alert('You must be at least 18 years old.'); window.location.href='edit_profile.php';</script>";
        exit();
    }

    // SQL query to update the user's profile
    $sql = "UPDATE user SET Fname = ?, date = ?, password = ?, ad_vo = ? WHERE ad_vo = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sssss", $fName, $date, $password, $aadharNumber, $aadhar);

    if ($stmt->execute()) {
        echo "<script>alert('Profile updated successfully.'); window.location.href='userdash.php';</script>";
    } else {
        echo "<script>alert('Error updating profile.'); window.location.href='edit_profile.php';</script>";
    }

    $stmt->close();
}

$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        .input-block {
            margin-bottom: 20px;
        }
        .input-block label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        .input-block input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
        }
        .button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form class="form" method="post" action="edit_profile.php" onsubmit="return validateForm()">
        <h1>Edit your Profile</h1>
        <div class="input-block">
            <label for="Name">Enter Your Name</label>
            <input class="input" type="text" id="fName" name="fName" value="<?php echo htmlspecialchars($user['Fname'], ENT_QUOTES, 'UTF-8'); ?>" required="">
        </div>
        <div class="input-block">
            <label for="Aadhar">Enter Your Aadhar Number</label>
            <input class="input" type="text" id="aadhar" name="aadhar" value="<?php echo htmlspecialchars($user['ad_vo'], ENT_QUOTES, 'UTF-8'); ?>" required="" pattern="\d{12}">
        </div>
        <div class="input-block">
            <input class="input" type="date" id="date" name="date" value="<?php echo htmlspecialchars($user['date'], ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>
        <div class="input-block">
            <label for="password">Create Your password</label>
            <input class="input" type="text" id="password" name="password" value="<?php echo htmlspecialchars($user['password'], ENT_QUOTES, 'UTF-8'); ?>" required="">
        </div>
        <div class="input-block">
            <label for="password">Confirm Your password</label>
            <input class="input" type="text" id="cpassword" name="cpassword" value="<?php echo htmlspecialchars($user['password'], ENT_QUOTES, 'UTF-8'); ?>" required="">
        </div>
        <div class="input-block">
            <button type="submit" class="button" name="submit">Update</button>
        </div>
        <div id="error" class="error"></div>
    </form>
    <script>
        function validateForm() {
            const password = document.getElementById('password').value;
            const cpassword = document.getElementById('cpassword').value;
            const date = document.getElementById('date').value;
            const errorDiv = document.getElementById('error');

            // Check if passwords match
            if (password !== cpassword) {
                errorDiv.innerText = 'Passwords do not match.';
                return false;
            }

            // Check if age is 18+
            const birthDate = new Date(date);
            const today = new Date();
            const age = today.getFullYear() - birthDate.getFullYear();
            const month = today.getMonth() - birthDate.getMonth();

            if (month < 0 || (month === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }

            if (age < 18) {
                errorDiv.innerText = 'You must be at least 18 years old.';
                return false;
            }

            errorDiv.innerText = '';
            return true;
        }
    </script>
</body>
</html>
