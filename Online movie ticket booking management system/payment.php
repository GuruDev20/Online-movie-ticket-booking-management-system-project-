<?php
    require_once("config.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username=$_SESSION["username"];
        $email=$_SESSION["email"];
        $price=$_POST["price"];
        $tickets=$_POST["totaltickets"];
        $time=$_POST["time"];
        $movie=$_POST["moviename"];
        $screen=$_POST["screen"];
    }
    $sql = "SELECT available FROM booking WHERE movie_name = '$movie'";
    $tickets_available="";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_array($result);
        $available=$row['available'];
        $tickets_available=$available-$tickets;
        echo $tickets_available;
    }
    $sql1="UPDATE booking SET available='$tickets_available' WHERE movie_name='$movie'";
    $conn->query($sql1);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Ticket</title>
    <link rel="stylesheet" href="payment.css">
	<style>
		.center {
			position: fixed;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			background-color: rgba(0, 0, 0, 0.5);
			z-index: 9999;
		}
		.modal {
			background-color: white;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
		}
	</style>
</head>
<body>
    <div class="header">
        <h1>🎬Movies Mania🎬</h1>
    </div>
    <section id="pay">
        <h3 class="left">G pay<a href="#" id="btn1">Pay</a></h3>
        <h3 class="left">Phone pay<a href="#" id="btn2">Pay</a></h3>
        <h3 class="left">Paytm<a href="#" id="btn3">Pay</a></h3>
        <h3 class="left">Debit/Credit<a href="#" id="btn4">Pay</a></h3>
	    <div id="loader" style="display:none;"></div>
	    <div id="booked-modal" class="center" style="display:none;">
            <div class="modal">
                <h2>Your ticket has been booked!</h2>
                <p>Thank you for booking your ticket with us.</p>
                <p>Your booking details will be sent to your email shortly.</p>
            </div>
	    </div>
	    <script>
            document.getElementById("btn1").addEventListener("click", function(event){
                event.preventDefault();
                ajaxRequest();
            });
            document.getElementById("btn2").addEventListener("click", function(event){
                event.preventDefault();
                ajaxRequest();
            });
            document.getElementById("btn3").addEventListener("click", function(event){
                event.preventDefault();
                ajaxRequest();
            });
            document.getElementById("btn4").addEventListener("click", function(event){
                event.preventDefault();
                ajaxRequest();
            });
            function ajaxRequest(){
                var loader = document.getElementById("loader");
                loader.style.display = "block";
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "insert.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        loader.style.display = "none";
                        document.getElementById("booked-modal").style.display = "flex";
                        setTimeout(function(){
                            window.location.href = "now.php";
                        }, 2000);
                    }
                };
                xhr.send("username=" + <?php echo json_encode($username); ?> + "&movie=" + <?php echo json_encode($movie); ?> + "&price=" + <?php echo json_encode($price); ?> + "&tickets=" + <?php echo json_encode($tickets); ?> + "&time=" + <?php echo json_encode($time); ?> + "&screen=" + <?php echo json_encode($screen); ?> + "&email=" + <?php echo json_encode($email); ?>);
            }
        </script>
    </section>
</body>
</html>