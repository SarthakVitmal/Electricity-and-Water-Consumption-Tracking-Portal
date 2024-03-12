<?php
$showError=true;
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['login'])){
        include "db.php";
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
        if(!empty($uname) && !empty($pass) && !is_numeric($uname)){
            $query = "select * from form where uname ='$uname' limit 1";
            $result = mysqli_query($con, $query);
            if($result && mysqli_num_rows($result) > 0){
                while($user_data = mysqli_fetch_assoc($result)){
                    if(password_verify($pass, $user_data['pass'])){
                        session_start();
                        header("location: index.html");
                    }
                    
                echo "<script type='text/javascript'> alert('wrong username or password')</script>";
                $showError = "Incorrect credentials!";
                exit();
            }
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style_1.css">
    <title>Login</title>
</head>

<!-- The HTML structure for the sign-in and sign-up forms -->
<body>
    <div class="wrapper">
        <!-- Container for the sign-in form -->
        <div class="form-container sign-in">
            <!-- Form for sign-in -->
            <form action="#" method="POST">
                <!-- Heading for the sign-in form -->
                <canvas id="myCanvas" weight="50px" height="80px" 
                style="border:0px solid grey;">
            </canvas>
                
                <div class="form-group">
                    <input type="text" name="uname" required>
                    <!-- Icon for username input -->
                    <i class="fas fa-user"></i>
                    <!-- Label for username input -->
                    <label for="">username</label>
                </div>
                <!-- Form group for password input -->
                <div class="form-group">
                    <input type="password" name="pass" required>
                    <!-- Icon for password input -->
                    <i class="fas fa-lock"></i>
                    <!-- Label for password input -->
                    <label for="">password</label>
                </div>
                <!-- Link for forgot password -->
                <div class="forgot-pass">                   
                    <a href="#">forgot password?</a>
                </div>
                <!-- Button to submit login form -->
                <button type="submit" class="btn" name="login">login</button>
                <!-- Link to sign-up form -->
                <div class="link">
                    <p>Don't have an account?<a href="signup.php" class="signup-link"> sign up</a></p>
                </div>
                <script>
                    const canvas = document.getElementById("myCanvas");
                    const ctx = canvas.getContext("2d");                                
                    ctx.font = "bold 30px  Poppins";
                    ctx.textAlign = "center";
                    ctx.fillText("Login",canvas.width/2, canvas.height/2);
                </script>
                           
            </form>
        </div>
    </div>
    <!-- Font Awesome kit for icons -->
    <script src="https://kit.fontawesome.com/9e5ba2e3f5.js" crossorigin="anonymous"></script>
</body>


</html>
