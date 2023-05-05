<?php
require_once "config.php";
$username=$email=$password=$confirm_password="";
$username_err=$email_err=$password_err=$confirm_password_err="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty(trim($_POST["username"]))){
        $username_err="Please enter a username";
    }
    else{
        $username=$_POST["username"];
    }
    if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
        $email_err="Please enter a valid email";
    }
    else{
        $email=$_POST["email"];
    }
    if(strlen($_POST["password"])<8){
        $password_err="Password must be at least 8 characters long";
    }
    else if(!preg_match('/[a-zA-Z]/',trim($_POST["password"]))){
        $password_err="Password must contain at least one letter";
    }
    else if(!preg_match('/[0-9]/',trim($_POST["password"]))){
        $password_err="Password must contain at least one digit";
    }
    else{
        $password=$_POST["password"];
    }
    if($_POST["password"]!==$_POST["confirm_password"]){
        $confirm_password_err="Passwords do not match";
    }
    else{
        $confirm_password=$_POST["confirm_password"];
    }
    if(!empty($username) && !empty($email) && !empty($password) && !empty($confirm_password)){
        $sql="INSERT INTO login(email,password,username)VALUES(?,?,?)";
        if($stmt=mysqli_prepare($conn, $sql)){
            mysqli_stmt_bind_param($stmt,"sss",$pass_email,$pass_password,$pass_username);
            $pass_email=$email;
            $pass_password=$password;
            $pass_username=$username;
            if(mysqli_stmt_execute($stmt)){
                header("location:login.php");
            }
            else{
                echo "Please try again later";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                background-image: linear-gradient(to left top, #051237, #004477, #007ba3, #00b5ac, #12eb94);
                background-repeat: no-repeat;
                background-attachment: fixed;
                font-family: Assistant,sans-serif;
                display: flex;
                min-height: 90vh;
            }
            .login{
                background: #360033;
                background: -webkit-linear-gradient(to right, #0b8793, #360033); 
                background: linear-gradient(to right, #0b8793, #360033);
                color:white;
                box-shadow: 0px 2px 10px rgba(0,0,0,0.2),0px 10px 20px rgba(0,0,0,0.3),0px 30px 60px 1px rgba(0,0,0,0.5);
                border-radius: 8px;
                margin-left: 570px;
                margin-top: 100px;
                padding:50px;
                padding-top: 30px;
                margin-bottom: 130px;
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
                background-color: #008CBA;
                border: none;
                color: white;
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
                <h2 class="company">Sign up</h2><br>
            </div>
            <form method="post" action="#">
                <div class="form-group">         
                    <label for="email">Username</label><br>
                    <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                    <span class="invalid-feedback">&nbsp;<?php echo $username_err; ?></span>
                </div>
                <div class="form-group">         
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" class="form-control  <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                    <span class="invalid-feedback">&nbsp;<?php echo $username_err; ?></span>
                </div>
                <div class="form-group">
                    <label for="password">Password</label><br>
                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                    <span class="invalid-feedback">&nbsp;<?php echo $password_err; ?></span>
                </div>
                <div class="form-group">
                    <label for="password">Confirm Password</label><br>
                    <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                    <span class="invalid-feedback">&nbsp;<?php echo $confirm_password_err; ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn" value="Register">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <p>Already have an account?<a href="login.php">&nbsp;Login here</a></p>
            </form>
        </section>    
    </body>
</html>