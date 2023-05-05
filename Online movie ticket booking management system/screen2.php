<?php
require_once("config.php");
$sql="SELECT * FROM booking WHERE screen='Screen 2';";
if($res=mysqli_query($conn, $sql)) {
    if(mysqli_num_rows($res) > 0) {
        echo "<div style='display: flex; justify-content: center;'>";
        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Customer Name</th>";
        echo "<th>Movie Name</th>";
        echo "<th>Price</th>";
        echo "<th>Total Tickets</th>";
        echo "<th>Show time</th>";
        echo "<th>Screen</th>";
        echo "</tr>";
        while($row = mysqli_fetch_array($res)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['cus_name']."</td>";
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
        echo "<p>No tickets booked on screen 2.</p>";
    }
}
else {
    echo "ERROR: Could not able to execute $sql. ".mysqli_error($link);
}
?>