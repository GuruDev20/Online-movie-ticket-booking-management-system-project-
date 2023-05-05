<?php
session_start();
$username=$_SESSION["username"];
$email=$_SESSION["email"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <link rel="stylesheet" href="user.css">
    <script src="main.js" defer></script>     
</head>
<body>
    <section class="user">
        <div class="row">
            <div class="col-3 menu">
                <img src="user.png" class="img">
            </div>
            <h3 class="h31">Username<br><?php echo $username; ?></h3><br>
            <h3 class="h32">Email<br><?php echo $email; ?></h3>
        </div>
    </section>
    <section class="user">
        <div id="main">
            <div class="open">
                <button class="openbtn"><a href="main.php">Home</a></button>
                <button class="openbtn"><a href="upcoming.php">Upcoming Movies</a></button>
                <button class="openbtn"><a href="now.php">Now Showing</a></button>
                <button class="openbtn" onclick="openNav()">☰ More</button>  
            </div><br>
            <?php
                require_once("config.php");
                $sql="SELECT * FROM booking WHERE cus_name='$username';";
                if($res=mysqli_query($conn, $sql)) {
                    if(mysqli_num_rows($res) > 0) {
                        echo "<table>";
                        echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>Movie Name</th>";
                        echo "<th>Price</th>";
                        echo "<th>Total Tickets</th>";
                        echo "<th>Show time</th>";
                        echo "<th>Screen</th>";
                        echo "</tr>";
                        while($row = mysqli_fetch_array($res)) {
                            echo "<tr>";
                            echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['movie_name']."</td>";
                            echo "<td>".$row['price']*$row['total_tickets']."</td>";
                            echo "<td>".$row['total_tickets']."</td>";
                            echo "<td>".$row['movie_time']."</td>";
                            echo "<td>".$row['screen']."</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        mysqli_free_result($res);
                    }
                    else {
                        echo "<h5>No tickets booked</h5>";
                    }
                }
                else {
                    echo "ERROR: Could not able to execute $sql. ".mysqli_error($link);
                }
                ?>
        </div>
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
            <img src="user.png">
            <a href="cancel.php">Cancellation</a>
            <a href="update.php">Update booking</a>
            <a href="logout.php">Switch Account</a>
        </div>
    </section>
    <div class="footer">
        <p>&copy;&nbsp;2023 Movies Mania. All rights reserved.</p>
    </div>
</body>
</html>