<?php 
session_start();

// Check if the user is logged in and is an admin
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header('Location: login.html');
    exit();
}

$Fname = isset($_SESSION['Fname']) ? $_SESSION['Fname'] : 'Guest'; 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="admindash.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-ionic"></ion-icon>
                        </span>
                        <span class="title"><?php echo $Fname; ?></span>
                    </a>
                </li>

                <li>
                    <a href="admindash.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="ballot.php">
                        <span class="icon">
                            <ion-icon name="snow-outline"></ion-icon>
                        </span>
                        <span class="title">Vote Now</span>
                    </a>
                </li>

                <li>
                    <a href="add_candidate.html">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Add Candidates</span>
                    </a>
                </li>

                <li>
                    <a href="displayresult.php">
                        <span class="icon">
                            <ion-icon name="earth-outline"></ion-icon>
                        </span>
                        <span class="title">Results</span>
                    </a>
                </li>

                <li>
                    <a href="ad_register.html">
                        <span class="icon">
                            <ion-icon name="person-add-outline"></ion-icon>
                        </span>
                        <span class="title">Voter's Registration</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help Support</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Setting</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="notifications-outline"></ion-icon>
                        </span>
                        <span class="title">Notification</span>
                    </a>
                </li>

                <li>
                    <a href="logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    Welcome, <?php echo $Fname; ?>!

                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div  onclick="gotoVotePage()">
                        <div class="numbers">Vote Here!!!</div>
                        <div class="cardName">Cast Your Vote here..</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="snow-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div onclick="gotoRegisterpage()">
                        <div class="numbers">Registration</div>
                        <div class="cardName">Register </div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="person-add-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div onclick="gotoAddCandidate()">
                        <div class="numbers">Add Candidates</div>
                        <div class="cardName">View <br>Candidates</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div onclick=" gotoresults()">
                        <div class="numbers">Results</div>
                        <div class="cardName">View Results</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
            <div class="recentOrders">
    <h3>Latest News</h3>
    <div class="cardHeader">
        <!-- News Item 1 -->
        <div class="newsItem">
            <img src="https://via.placeholder.com/150" alt="News Image 1">
            <div class="newsContent">
                <h4>News Title 1</h4>
                <p>Brief description of the news item 1. This is a summary of the latest news.</p>
            </div>
        </div>
        <!-- News Item 2 -->
        <div class="newsItem">
            <img src="https://via.placeholder.com/150" alt="News Image 2">
            <div class="newsContent">
                <h4>News Title 2</h4>
                <p>Brief description of the news item 2. This is a summary of the latest news.</p>
            </div>
        </div>
        <!-- News Item 3 -->
        <div class="newsItem">
            <img src="https://via.placeholder.com/150" alt="News Image 3">
            <div class="newsContent">
                <h4>News Title 3</h4>
                <p>Brief description of the news item 3. This is a summary of the latest news.</p>
            </div>
        </div>
    </div>
</div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <h3>Notification regarding Election</h3>
                    

                    
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="js/dashboard.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>