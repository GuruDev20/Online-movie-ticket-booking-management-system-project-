<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="upcoming.css">
    <script src="main.js" defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Movies Mania</title>
    <style>
        img{
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>🎬Movies Mania🎬</h1>
    </div>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
        <img src="user.png">
        <a href="user.php">User</a>
        <a href="login.php">Switch Account</a>
    </div>
    <div id="main">
        <div class="open">
            <button class="openbtn"><a href="main.php">Home</a></button>
            <button class="openbtn"><a href="upcoming.html">Upcoming Movies</a></button>
            <button class="openbtn"><a href="now.php">Now Showing</a></button>
            <button class="openbtn" onclick="openNav()">☰ More</button>  
        </div>
    </div><br>
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                <img src="goku1.jpg">
            </div>
            <div class="item">
                <img src="naruto1.jpeg">
            </div>
            <div class="item">
                <img src="jujutsu1.jpg">
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
    <div class="footer">
        <p>&copy;&nbsp;2023 Movies Mania. All rights reserved.</p>
    </div>
</body>
</html>