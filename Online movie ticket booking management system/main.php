<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <script src="main.js" defer></script>
    <title>Movies Mania</title>
</head>
<body>
    <div class="header">
        <h1>🎬Movies Mania🎬</h1>
    </div>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
        <img src="user.png">
        <a href="user.php">User</a>
        <a href="logout.php">Switch Account</a>
    </div>
    <div id="main">
        <div class="open">
            <button class="openbtn"><a href="main.php">Home</a></button>
            <button class="openbtn"><a href="upcoming.php">Upcoming Movies</a></button>
            <button class="openbtn"><a href="now.php">Now Showing</a></button>
            <button class="openbtn" onclick="openNav()">☰ More</button>  
        </div>
    </div><br>
    <div class="row">
        <div class="column">
            <a href="details1.html"><img src="img11.jpg" style="width:100%"></a>
            <a href="details2.html"><img src="img3.jpg" style="width:100%"></a>
            <a href="details3.html"><img src="img7.jpg" style="width:100%"></a>
        </div>
        <div class="column">
            <a href="details2.html"><img src="img6.jpg" style="width:100%"></a>
            <a href="details3.html"><img src="img5.jpg" style="width:100%"></a>
            <a href="details1.html"><img src="img9.jpg" style="width:100%"></a>
        </div>
        <div class="column">
            <a href="details1.html"><img src="img4.jpg" style="width:100%"></a>
            <a href="details2.html"><img src="img10.jpg" style="width:100%"></a>
            <a href="details3.html"><img src="img1.jpg" style="width:100%"></a>
        </div>
        <div class="column">
            <a href="details1.html"><img src="img2.jpg" style="width:100%"></a>
            <a href="details2.html"><img src="img13.jpg" style="width:100%"></a>
            <a href="details3.html"><img src="img14.jpg" style="width:100%"></a>
        </div>
    </div>
    <div class="footer">
        <p>&copy;&nbsp;2023 Movies Mania. All rights reserved.</p>
    </div>
</body>
</html>