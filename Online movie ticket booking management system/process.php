<?php
    session_start();
    require_once("config.php");
    $movie=$quality=$screen=$time=$price=$tickets=$tickets_err=$available=$available_now="";
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $movie=$_POST["moviename"];
        $quality=$_POST["quality"];
        $screen=$_POST["screen"];
        $time=$_POST["time"];
        $price=$_POST["price"];
        if(empty($tickets)){
            $tickets_err="please enter total tickets";
        }
        else{
            $tickets=$_POST["totaltickets"];
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="main.css">
    <script src="main.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        input[type="text"]{
            color: black;
            width:90%;
            background-color: lightgray;
        }
        input[type="number"]{
            background-color: lightgray;
            width:90%;
        }
        #small{
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-40%,-90%);
            background-color: white;
            border: 1px solid #ccc;
            padding: 24px;
            z-index: 9999;
            max-width: 700px;
            border-radius: 5px;
            color: black;
        }
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
                <input type="text" id="moviename" name="moviename" class="form-control" value="<?php echo $movie; ?>" readonly><br>
            </div>
            <div class="form-group">         
                <label for="quality">Quality</label>
                <input type="text" id="quality" name="quality" class="form-control" value="<?php echo $quality; ?>" readonly><br>
            </div>
            <div class="form-group">         
                <label for="screen">Screen</label>
                <input type="text" id="screen" name="screen" class="form-control" value="<?php echo $screen; ?>" readonly><br>
            </div>
            <div class="form-group">         
                <label for="time">Time</label>
                <input type="text" id="time" name="time" class="form-control" value="<?php echo $time; ?>" readonly><br>
            </div>
            <div class="form-group">         
                <label for="price">Price</label>
                <input type="text" id="price" name="price" class="form-control" value="<?php echo $price; ?>" readonly><br>
            </div>
            <div class="form-group">         
                <label for="tickets">Tickets</label><br>
                <input type="number" id="tickets" name="totaltickets" class="form-control <?php echo (!empty($tickets_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $tickets; ?>" required><br>
            </div><br>
            <div class="form-group">
                <button type="button" id="open" class="btn" value="Book">Book</button>
            </div>
            <div id="small">
                <h1>Confirmation</h1>
                <p>Do you want to continue to payment?</p>
                <button id="yes" name="redirect" value="yes">Yes</button>
                <button id="no" name="redirect" value="no">No</button>
            </div>       
        </form>
    </section>
    <div class="footer">
        <p>&copy;&nbsp;2023 Movies Mania. All rights reserved.</p>
    </div>
</body>
</html>