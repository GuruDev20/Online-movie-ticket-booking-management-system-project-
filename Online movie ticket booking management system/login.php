<?php
require_once("config.php");
session_start();
$email=$password=$username="";
$email_err=$password_err="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty(trim($_POST["email"]))){
        $email_err="Please enter a username";
    }
    else{
        $email=$_POST["email"];
    }
    if(empty(trim($_POST["password"]))){
        $password_err="Please enter a password";
    }
    else{
        $password=$_POST["password"];
    }
    if(!empty($email) && !empty($password)){
        $sql="SELECT * FROM login WHERE email='$email' AND password='$password'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $row=mysqli_fetch_array($result);
            if($row["defaultuser"]=="user"){
                $_SESSION["username"]=$row["username"];
                $_SESSION["email"]=$email;
                $_SESSION["password"]=$password;
                header("location: main.php");
            }
            else if($row["defaultuser"]=="admin"){
                $_SESSION["email"]=$email;
                header("location:admin.php ");
            }
            else{
                echo "Invalid username or password";
            }
        }
        else{
            echo "Invalid username or password";
        }
    }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                background-image:url(limg1.jpg);
                width:100%;
                font-family: Assistant,sans-serif;
                display: flex;
                min-height: 90vh;
            }
            .login{
                background: #360033; 
                background: linear-gradient(to right, #0b8793, #360033); 
                background: -webkit-linear-gradient(to right, #0b8793, #360033);  
                box-shadow: 0px 2px 10px rgba(0,0,0,0.2),0px 10px 20px rgba(0,0,0,0.3),0px 30px 60px 1px rgba(0,0,0,0.5);
                border-radius: 8px;
                margin-left: 570px;
                margin-top: 100px;
                padding:50px;
                padding-top: 30px;
                margin-bottom: 130px;
                color:white;
            }
            .head{
                display:flex;
                align-items:center;
                justify-content:center;
            }
            .company{
                font-size: 26px;
            }
            .form-control{
                width: 100%;
                padding: 10px 10px;
                margin: 4px;
                box-sizing: border-box;
                border-radius: 5px;
                border: none;
            }
            .invalid-feedback{
                color: red;
                font-size: 15px;
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
            }
            .btn1{
                background-color: #e7e7e7;
                color: black;
                border: none;
                padding: 10px 26px;
                text-align: center;
                display: inline-block;
                font-size: 18px;
                margin: 4px 2px;
                border-radius: 5px;
            }
            a{
                color: lightblue;
            }
        </style>
        <title>Login</title>
    </head>
    <body>
        <section class="login">
            <div class="head">
                <h2 class="company">Sign in</h2><br>
            </div>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form">
                <div class="form-group">         
                    <label for="email">&nbsp;Username</label><br>
                    <input type="email" id="email" name="email" class="form-control  <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>"><br>
                    <span class="invalid-feedback">&nbsp;<?php echo $email_err; ?></span>
                </div><br>
                <div class="form-group">
                    <label for="password">&nbsp;Password</label><br>
                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>"><br>
                    <span class="invalid-feedback">&nbsp;<?php echo $password_err; ?></span>
                </div><br>
                <div class="form-group">
                    <input type="submit" class="btn" value="Login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" class="btn1" value="Reset">
                </div>
                <p>Don't have an account? <a href="register.php">Register here</a></p>
            </form>
        </section>    
    </body>
</html>