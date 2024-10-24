<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color:#000;
 
        }
        table {
            width: 50%;
            margin: 0 auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 6px solid #ddd;
        }
        th {
            background-color: rgb(255, 132, 0);
            color:#fff;


        }
    </style>
</head>
<body>
<?php
include "connect.php";

$sql = "SELECT candidate, COUNT(*) as votes FROM votes GROUP BY candidate ORDER BY votes DESC";
$result = $con->query($sql);

$winner = null;
$maxVotes = 0;

if ($result->num_rows > 0) {
    echo "<h1>Voting Results</h1>";
    echo "<table border='1'>
            <tr>
                <th>Candidate</th>
                <th>Votes</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["candidate"] . "</td>
                <td>" . $row["votes"] . "</td>
              </tr>";
        if ($row["votes"] > $maxVotes) {
            $maxVotes = $row["votes"];
            $winner = $row["candidate"];
        }
    }
    echo "</table>";
    if ($winner) {
        echo "<h2>The winner is: " . $winner . "</h2>";
    }
} else {
    echo "No votes yet.";
}

$con->close();
?>


</body>
</html>
