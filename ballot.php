<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Official Ballot for Class President</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="ballot.css">
</head>
<body>

    <div class="nav">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                  </li>
                  
                </ul>
              </div>
            </div>
        </nav>  
    </div>
    
    <div class="ballot">
        <div class="header">        
            <img src="Images/online voting.jpeg" class="logo">
            <h1>Online Voting</h1>
            <h2>Vote your Favorite Candidate by using Online Voting System</h2>
        </div>
        <!-- <form id="myForm" method="POST" action="submit_vote.php">
            <div class="options">
                <div class="option">
                    <div class="option-logo"><img src="Images/BJP.png"></div>
                    <label for="option1">Bharatiya Janata Party (BJP)</label>
                    <input type="radio" id="option1" name="candidate" value="BJP">
                </div>
                <div class="option">
                    <div class="option-logo"><img src="Images/congress.png" class="logo"></div>
                    <label for="option2">India National Congress (INC)</label>
                    <input type="radio" id="option2" name="candidate" value="INC">
                </div>
                <div class="option">
                    <div class="option-logo"><img src="Images/AAP.jpg" class="logo"></div>
                    <label for="option3">Aam Aadmi Party (AAP)</label>
                    <input type="radio" id="option3" name="candidate" value="AAP">
                </div>
                <div class="option">
                    <div class="option-logo"><img src="Images/BSP.svg" class="logo"></div>
                    <label for="option4">Bahujan Samaj Party (BSP)</label>
                    <input type="radio" id="option4" name="candidate" value="BSP">
                </div>
                <div class="option">
                    <div class="option-logo"><img src="Images/CPI.png" class="logo"></div>
                    <label for="option5">Communist Party Of India (Marxist)</label>
                    <input type="radio" id="option5" name="candidate" value="CPI">
                </div>
            </div>
            <button type="submit">SUBMIT VOTE</button>
        </form> -->
        <?php
include "connect.php";

// Fetch candidates from the database
$sql = "SELECT * FROM candidates";
$result = $con->query($sql);
?>

<form id="myForm" method="POST" action="submit_vote.php">
    <div class="options">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='option'>
                        <div class='option-logo'><img src='" . $row['logo'] . "'></div>
                        <label for='option" . $row['party_code'] . "'>" . $row['party'] . "</label>
                        <input type='radio' id='option" . $row['party_code'] . "' name='candidate' value='" . $row['party_code'] . "'>
                      </div>";
            }
        } else {
            echo "No candidates found.";
        }
        ?>
    </div>
    <button type="submit">SUBMIT VOTE</button>
</form>
    </div>
</body>
</html>