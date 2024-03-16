<?php
// $showAlert = false;
$showError = true;
// to enable successfull connection to the database

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        include"db.php";
        if(isset($_POST['register'])){
            $uname = $_POST['uname'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            
            // check whether this username exists or not
            $existSql = "SELECT * FROM `newUser_credentials` WHERE uname = '$uname'";
            $result = mysqli_query($con, $existSql);
            $numExistRows = mysqli_num_rows($result);
            if($numExistRows > 0){
                echo "<script type='text/javascript'> alert('Username Exists!'); window.location.href = 'signup.php';</script>";
                $showError = "Username Already Exists";
                exit();
            }
            $hash = password_hash($pass,PASSWORD_DEFAULT);
            if(!empty($email) && !empty($pass) && !is_numeric($email)){
                $query = "insert into newUser_credentials (uname, email, pass) values ('$uname', '$email', '$hash')";
                mysqli_query($con, $query);
                echo 'alert("Registered Successfully")';
                header("location: signin.php");
            }
            else{
                echo "alert('Please enter some valid information!')";
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
    <link rel="stylesheet" href="./assets/css/signin.css">
    <title>SignUp</title>
</head>


<body>
    <!-- Wrapper to contain the forms -->
    <div class="wrapper">
        <!-- Container for the sign-up form -->
        <div class="form-container sign-up">
            <!-- Form for sign-up -->
            <form action="#" method="POST">
                <!-- Heading </h2> -->
                <canvas id="myCanvas"
                 weight="50px" height="50px" 
                style="border:0px solid grey;">
                </canvas>
                <!-- Form group for username input -->
                    <div class="form-group">
                        <input type="text" name="uname" maxlength="10" required >
                        <!-- Icon for username input -->
                        <i class="fas fa-user"></i>
                        <!-- Label for username input -->
                        <label for="">username</label>
                    </div>
                    <!-- Form group for email input -->
                    <div class="form-group">
                        <input onclick="validateEmail" type="email" name="email" maxlength="35" required>
                        <!-- Icon for email input -->
                        <i class="fas fa-at"></i>
                        <!-- Label for email input -->
                        <label for="">email</label>
                    </div>
                    <!-- Form group for password input -->
                    <div class="form-group">
                        <input onclick="validatePassword" class="password" type="password" name="pass" maxlength="10" required>
                        <!-- Icon for password input -->
                        <i class="fas fa-lock"></i>
                        <!-- Label for password input -->
                        <label for="">password</label>
                    </div>
                    <!-- Button to submit sign-up form -->
                    <button type="submit" name="register" class="btn">sign up</button>
                    <!-- Link to sign-in form -->
                    <div class="link">
                        <p>You already have an account?<a href="signin.php" class="signin-link"> sign in</a></p>
                    </div>
                    <script>
                        const canvas = document.getElementById("myCanvas");
                        const ctx = canvas.getContext("2d");
                        
                        ctx.font = "bold 30px  Poppins";
                        ctx.textAlign = "center";
                        ctx.fillText("Sign Up",canvas.width/2, canvas.height/0.75/2);

                        document.addEventListener("DOMContentLoaded", function() {
                        var emailInput = document.querySelector("input[name='email']");
                        var passwordInput = document.querySelector("input[name='pass']");
                        var submitButton = document.querySelector("button[name='register']");
                        var form = document.querySelector("form[name='signupForm']");

                        emailInput.addEventListener("input", function() {
                        validateEmail(emailInput.value);
                        });
                        passwordInput.addEventListener("input", function() {
                            validatePassword(passwordInput.value);
                        });

                        function validateEmail(email) {
                            var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

                            if (emailRegex.test(email)) {
                                if (email.includes('@gmail.') || (email.includes(('yahoo.'))) && (email.endsWith('.com') || email.endsWith('.in'))) {
                                    return true;
                                } 
                            }
                            return false;
                            }
                        
                        function validatePassword(password) {
                            var hasUppercase = /[A-Z]/.test(password);
                            var hasLowercase = /[a-z]/.test(password);
                            var hasSpecialChar = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/.test(password);

                            if (hasUppercase && hasLowercase && hasSpecialChar) {
                                submitButton.disabled = false;
                            } else {
                                submitButton.disabled = true;
                            }
                        }
                    });                  
                    </script>
            </form>
        </div>
    <!-- Font Awesome kit for icons -->
    <script src="https://kit.fontawesome.com/9e5ba2e3f5.js" crossorigin="anonymous"></script>
</body>
</html>