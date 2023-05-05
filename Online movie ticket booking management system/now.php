<?php
    session_start();
    require_once("config.php");
    $sql="SELECT * FROM booking";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_array($result);
        $available=$row['available'];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="now.css">
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
        <a href="login.php">Switch Account</a>
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
        <div class="col-3 menu">
            <section>
                <div class="listl">
                    <form method="post" action="process.php">
                    <img src="demon.jpg" class="img">
                    <h2 class="h2">Demon Slayer</h2>
                    <input type="text" name="moviename" value="Demon Slayer">
                    <h4 class="h4">Cast:Tanjiro | Rengoku</h4>
                    <h4 class="h4">2D</h4>
                    <input type="text" name="quality" value="2D">
                    <h4 class="h4">Screen:1</h4>
                    <input type="text" name="screen" value="Screen 1">
                    <h4 class="h4">Movie time:11.00 AM-12.30 PM</h4>
                    <input type="text" name="time" value="11.00 AM">
                    <h4 class="h4">Price:100</h4>
                    <input type="text" name="price" value="100">
                    <h4 class="h4">Available:<?php echo $available ?></h4>
                    <input type="text" name="available" value="<?php $available ?>">
                    <button class="button"><span>Book Tickets</span></button>
                    </form>
                </div>
            </section>
        </div>
        <div class="col-3 menu">
            <section>
                <div class="listr">
                <form method="post" action="process.php">
                    <img src="jujutsu.jpg" class="img">
                    <h2 class="h2">Jujustsu kaisen</h2>
                    <input type="text" name="moviename" value="Jujutsu kaisen">
                    <h4 class="h4">Cast:Gojo | Megumi</h4>
                    <h4 class="h4">3D</h4>
                    <input type="text" name="quality" value="3D">
                    <h4 class="h4">Screen:1</h4>
                    <input type="text" name="screen" value="Screen 1">
                    <h4 class="h4">Movie time:6.00 PM-7.30 PM</h4>
                    <input type="text" name="time" value="6.00 PM">
                    <h4 class="h4">Price:100</h4>
                    <input type="text" name="price" value="100">
                    <h4 class="h4">Available:<?php echo $available ?></h4>
                    <input type="text" name="available" value="<?php $available ?>">
                    <button class="button"><span>Book Tickets</span></button>
                </form>
                </div>
            </section>
        </div>
        <div class="col-3 menu">
            <section>
                <div class="listl">
                <form method="post" action="process.php">
                    <img src="naruto.jpeg" class="img">
                    <h2 class="h2">Naruto</h2>
                    <input type="text" name="moviename" value="Naruto">
                    <h4 class="h4">Cast:Naruto | Sasuke</h4>
                    <h4 class="h4">2D</h4>
                    <input type="text" name="quality" value="2D">
                    <h4 class="h4">Screen:2</h4>
                    <input type="text" name="screen" value="Screen 2">
                    <h4 class="h4">Movie time:1.00 PM-2.30 PM</h4>
                    <input type="text" name="time" value="1.00 PM">
                    <h4 class="h4">Price:100</h4>
                    <input type="text" name="price" value="100">
                    <h4 class="h4">Available:<?php echo $available ?></h4>
                    <input type="text" name="available" value="<?php $available ?>">
                    <button class="button"><span>Book Tickets</span></button>
                </form>
                </div>
            </section>
        </div>
        <div class="col-3 menu">
            <section>
                <div class="listr">
                <form method="post" action="process.php">
                    <img src="onepiece.jpg" class="img">
                    <h2 class="h2">One piece</h2>
                    <input type="text" name="moviename" value="Onepiece">
                    <h4 class="h4">Cast:Luffy | Zoro</h4>
                    <h4 class="h4">3D</h4>
                    <input type="text" name="quality" value="3D">
                    <h4 class="h4">Screen:3</h4>
                    <input type="text" name="screen" value="Screen 3">
                    <h4 class="h4">Movie time:6.00 PM-7.30 PM</h4>
                    <input type="text" name="time" value="6.00 PM">
                    <h4 class="h4">Price:100</h4>
                    <input type="text" name="price" value="100">
                    <h4 class="h4">Available:<?php echo $available ?></h4>
                    <input type="text" name="available" value="<?php $available ?>">
                    <button class="button"><span>Book Tickets</span></button>
                </form>
                </div>
            </section>
        </div>
    </div>
    <div class="footer">
        <p>&copy;&nbsp;2023 Movies Mania. All rights reserved.</p>
    </div>
</body>
</html>