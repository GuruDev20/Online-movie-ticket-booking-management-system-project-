<?php
    require_once("config.php");
    session_start();
    $movie="";
    $email=$_SESSION["email"];
    $username=$_SESSION["username"];
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $movie=$_POST["moviename"];
        $sql="DELETE FROM booking WHERE movie_name='$movie'";
        if($conn->query($sql)===TRUE){
            echo "<div id='ticket-booked-message-container'>";
            echo "<div id='ticket-booked-message'>Your Ticket has been Cancelled Successfully!<br></div>";
            echo "</div>";
            echo "<style>
                #ticket-booked-message-container {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    position: fixed;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background-color: rgba(0, 0, 0, 0.5);
                    z-index: 9999;
                }
                #ticket-booked-message {
                    background-color: #fff;
                    padding: 20px;
                    border-radius: 5px;
                    font-size: 24px;
                    text-align: center;
                }
                #book-another-movie-button {
                    margin-top: 10px;
                }
            </style>";
            echo "<script>
                setTimeout(function() {
                    document.getElementById('ticket-booked-message-container').style.display = 'none';
                    }, 3000);
                        setTimeout(function() {
                            window.location.href = 'now.php';
                        }, 3000);
                    </script>";
        }
        else{
            echo "error";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Cancel</title>
    <style>
        .btn{
            background-color: palevioletred;
            border: none;
            color: white;
            padding: 10px 26px;
            text-align: center;
            display: inline-block;
            font-size: 18px;
            margin: 4px 2px;
            border-radius: 5px;
            margin-left: 90px;
        }
    </style>
</head>
<body>
    <section class="login">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form">
            <div class="form-group">         
                <label for="moviename">Movie Name</label>
                <input type="text" id="moviename" name="moviename" class="form-control"><br>
            </div>
            <div class="form-group">
                <input type="submit" id="open" class="btn" value="Book">
            </div>
        </form>
    </section>
</body>
</html>