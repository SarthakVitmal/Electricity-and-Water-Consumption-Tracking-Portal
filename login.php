<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['register'])){
            $uname = $_POST['uname'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            if(!empty($email) && !empty($pass) && !is_numeric($email)){
                $query = "insert into form (uname, email, pass) values ('$uname', '$email', '$pass')";
                mysqli_query($con, $query);
                echo "<script type='text/javascript'> alert('Successfully Registered')</script>";
            }
            else{
                echo "<script type='text/javascript'> alert('Please enter some valid information!')</script>";
            }
        }
    }
    elseif (isset($_POST['login'])){
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
        if(!empty($uname) && !empty($pass) && !is_numeric($uname)){
            $query = "select * from form where uname ='$uname' limit 1";
            $result = mysqli_query($con, $query);

            if($result){
                if($result && mysqli_num_rows($result) > 0){
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['pass'] == $password)
                    {
                        header("location: index.html");
                    }
                }

            }
            echo "<script type='text/javascript'> alert('wrong username or password!')</script>";

        }
        else{
            echo "<script type='text/javascript'> alert('wrong username or password')</script>";

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
    <title>Signin & Sign up</title>
</head>

<body>
    <div class="wrapper">
        <div class="form-container sign-up">
            <form method="POST" action="#">
                <h2>sign up</h2>
                <div class="form-group">
                    <input type="text" name="uname" required>
                    <i class="fas fa-user"></i>
                    <label for="">username</label>
                </div>
                <div class="form-group">
                    <input type="email" name="email" required>
                    <i class="fas fa-at"></i>
                    <label for="">email</label>
                </div>
                <div class="form-group">
                    <input type="password" name="pass" required>
                    <i class="fas fa-lock"></i>
                    <label for="">password</label>
                </div>
                <button type="submit" name="register" class="btn">sign up</button>
                <div class="link">
                    <p>You already have an account?<a href="#" class="signin-link"> sign in</a></p>
                </div>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="#" method="POST">
                <h2>login</h2>
                <div class="form-group">
                    <input type="text" name="uname" required>
                    <i class="fas fa-user"></i>
                    <label for="">username</label>
                </div>
                <div class="form-group">
                    <input type="password" name="pass" required>
                    <i class="fas fa-lock"></i>
                    <label for="">password</label>
                </div>
                <div class="forgot-pass">
                    <a href="#">forgot password?</a>
                </div>
                <button type="submit" name="login" class="btn">login</button>
                <div class="link">
                    <p>Don't have an account?<a href="#" class="signup-link"> sign up</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/9e5ba2e3f5.js" crossorigin="anonymous"></script>
    <script src="/assets/js/main.js"></script>
</body>

</html>