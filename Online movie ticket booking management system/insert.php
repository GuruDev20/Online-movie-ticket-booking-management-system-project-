<?php
    session_start();
    require_once("config.php");
    $sql="SELECT * FROM booking";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_array($result);
        $available=$row['available'];
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cus_name = $_POST['username'];
        $movie_name = $_POST['movie'];
        $price = $_POST['price'];
        $total_tickets = $_POST['tickets'];
        $movie_time = $_POST['time'];
        $screen = $_POST['screen'];
        $email = $_POST['email'];
        $stmt = $conn->prepare("INSERT INTO booking (cus_name, movie_name, price, total_tickets, movie_time, screen, email) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $cus_name, $movie_name, $price, $total_tickets, $movie_time, $screen, $email);
        if ($stmt->execute()) {
            echo "Booking data inserted successfully!";
            $sql = "SELECT available FROM movies WHERE movie_name = '$movie_name'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);
                $available = $row['available'];
                $tickets_available = $available - $total_tickets;
                $sql1 = "UPDATE movies SET available='$tickets_available' WHERE movie_name='$movie_name'";
                $conn->query($sql1);
                $available = $tickets_available;
            }
        } else {
            echo "Error inserting booking data";
        }
    }
?>
