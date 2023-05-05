<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="admin.css">
    <script>
        $(document).ready(function(){
            $(".screen1").click(function(){
            var content=$(".content1");
            if(content.css("display")==="none"){
                $.get("screen1.php",function(response){
                $(".content2, .content3").slideUp();
                    content.html(response);
                    content.slideDown();
                });
            }
            else{
                content.slideUp();
            }
        });
        $(".screen2").click(function(){
            var content=$(".content2");
            if(content.css("display")==="none"){
                $.get("screen2.php",function(response){
                $(".content1, .content3").slideUp();
                    content.html(response);
                    content.slideDown();
                });
            }
            else{
                content.slideUp();
            }
        });
        $(".screen3").click(function(){
            var content=$(".content3");
            if(content.css("display")==="none"){
                $.get("screen3.php",function(response){
                $(".content1, .content2").slideUp();
                    content.html(response);
                    content.slideDown();
                });
            }
            else{
                content.slideUp();
            }
        }); 
    });
    </script>
    <title>Movies Mania</title>
</head>
<body>
    <div class="header">
        <h1>🎬Movies Mania🎬</h1>
    </div><br>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
        <a href="login.php">Switch Account</a>
        <a href="upcoming.php">Upcoming movies</a>
    </div>
    <div class="topnav">
        <button class="screen1">Screen 1</button>
        <button class="screen2">Screen 2</button>
        <button class="screen3">Screen 3</button>
        <button class="openbtn" onclick="openNav()">☰</button>  
    </div><br><br>
    <div class="content1"></div>
    <div class="content2"></div>
    <div class="content3"></div>
    <h3 class="h3">Now on screens</h3>
    <div class="row">
        <div class="col-3 menu">
            <section>
                <div class="listl">
                <form method="post" action="#" id="movie-form">
                    <img src="demon.jpg" class="img">
                    <h2 class="h2">Demon Slayer</h2>
                    <h4 class="h4">Cast:Tanjiro | Rengoku</h4>
                    <h4 class="h4">2D</h4>
                    <h4 class="h4">Screen:1</h4>
                    <h4 class="h4">Movie time:11.00 AM-12.30 PM</h4>
                    <h4 class="h4">Price:100</h4>
                </form>
                </div>
            </section>
        </div>
        <div class="col-3 menu">
            <section>
                <div class="listr">
                <form method="post" action="#">
                    <img src="jujutsu.jpg" class="img">
                    <h2 class="h2">Jujustsu kaisen</h2>
                    <h4 class="h4">Cast:Gojo | Megumi</h4>
                    <h4 class="h4">3D</h4>
                    <h4 class="h4">Screen:1</h4>
                    <h4 class="h4">Movie time:6.00 PM-7.30 PM</h4>
                    <h4 class="h4">Price:100</h4>
                </form>
                </div>
            </section>
        </div>
        <div class="col-3 menu">
            <section>
                <div class="listl">
                <form method="post" action="#">
                    <img src="naruto.jpeg" class="img">
                    <h2 class="h2">Naruto</h2>
                    <h4 class="h4">Cast:Naruto | Sasuke</h4>
                    <h4 class="h4">2D</h4>
                    <h4 class="h4">Screen:2</h4>
                    <h4 class="h4">Movie time:1.00 PM-2.30 PM</h4>
                    <h4 class="h4">Price:100</h4>
                </form>
                </div>
            </section>
        </div>
        <div class="col-3 menu">
            <section>
                <div class="listr">
                <form method="post" action="#">
                    <img src="onepiece.jpg" class="img">
                    <h2 class="h2">One piece</h2>
                    <h4 class="h4">Cast:Luffy | Zoro</h4>
                    <h4 class="h4">3D</h4>
                    <h4 class="h4">Screen:1</h4>
                    <h4 class="h4">Movie time:6.00 PM-7.30 PM</h4>
                    <h4 class="h4">Price:100</h4>
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