<?php
include "connect.php";
$sql = "SELECT candidate, COUNT(*) as votes FROM votes GROUP BY candidate ORDER BY votes DESC";
$result = $con->query($sql);

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
    }
    echo "</table>";
} else {
    echo "No votes yet.";
}

$con->close();
?>
