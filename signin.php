<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset ($_POST['login'])) {
        include "db.php";
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
        if (!empty ($uname) && !empty ($pass) && !is_numeric($uname)) {
            $query = "select * from newUser_credentials where uname ='$uname' limit 1";
            $result = mysqli_query($con, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                while ($user_data = mysqli_fetch_assoc($result)) {
                    if (password_verify($pass, $user_data['pass'])) {
                        session_start();
                        header("location: dashboard.php");
                    } else {
                        echo "<script type='text/javascript'> alert('wrong username or password')</script>";
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="https://th.bing.com/th/id/R.c83b249c64943e53c12013e7a35da769?rik=xt%2bIZgvKL8%2fKLg&riu=http%3a%2f%2flofrev.net%2fwp-content%2fphotos%2f2014%2f10%2fGreen-logo.jpg&ehk=Q3AidRmxPk5TJDC%2fxeJCTBHjd2pUKm8fnsjvTKEWCjU%3d&risl=&pid=ImgRaw&r=0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/signin.css">
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
                <div style="align-items:center; justify-content: center; display: flex;">
                    <img class="logo" style="height: 6rem;" src="assets/image/website-logo-transparent.png">
                </div>

                <canvas id="myCanvas" weight="50px" height="80px" style="border:0px solid grey;">
                </canvas>

                <div class="form-group">
                    <input type="text" name="uname" maxlength="35" required>
                    <!-- Icon for username input -->
                    <i class="fas fa-user"></i>
                    <!-- Label for username input -->
                    <label for="">username</label>
                </div>
                <!-- Form group for password input -->
                <div class="form-group">
                    <input type="password" name="pass" maxlength="10" required>
                    <!-- Icon for password input -->
                    <i class="fas fa-lock"></i>
                    <!-- Label for password input -->
                    <label for="">password</label>
                </div>
                <!-- Link for forgot password -->
                <!-- <div class="forgot-pass">                   
                    <a href="#">forgot password?</a>
                </div> -->
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
                    ctx.fillText("Login", canvas.width / 2, canvas.height / 2);
                </script>

            </form>
        </div>
    </div>
    <!-- Font Awesome kit for icons -->
    <script src="https://kit.fontawesome.com/9e5ba2e3f5.js" crossorigin="anonymous"></script>
</body>


</html>