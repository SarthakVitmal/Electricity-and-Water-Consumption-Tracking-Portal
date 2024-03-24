<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "ecotrack";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Sorry!! Failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful<br>";
}

if (isset($_SESSION['uname'])) {
    $uname = $_SESSION['uname'];
    
    $fetch_email_sql = "SELECT email FROM newuser_credentials WHERE uname = ?";
    $stmt = $conn->prepare($fetch_email_sql);
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $email = $row['email'];

    $_SESSION['email'] = $email;
}

if (isset($_POST['Submit'])) {
            $persons = $_POST['persons'];
            $fix_faucets = $_POST['fix_faucets'];
            $water_supply = $_POST['water_supply'];
            $shower = $_POST['shower'];
            $shower_frequency = $_POST['shower_frequency'];
            $bucket_number = $_POST['bucket_number'];
            $machine_runtime = $_POST['machine_runtime'];
            $utensils = $_POST['utensils']; 
            $house_cleaning = $_POST['house_cleaning'];
            $tap_while_brushing = $_POST['tap_while_brushing'];
            $water_efficient_appliances = $_POST['water_efficient_appliances'];
            $rainwater_harvesting = $_POST['rainwater_harvesting'];

    if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
        echo "Email is missing!";
        exit;
    }
    
    $email = $_SESSION['email'];

    $sql = "INSERT INTO `user_waterform_credentials` (`email`,`persons`, `fix_faucets`, `water_supply`, `shower`, `shower_frequency`, `bucket_number`, `machine_runtime`, `utensils`, `house_cleaning`, `tap_while_brushing`, `water_efficient_appliances`, `rainwater_harvesting`) 
VALUES ('$email','$persons', '$fix_faucets', '$water_supply', '$shower', '$shower_frequency', '$bucket_number', '$machine_runtime', '$utensils', '$house_cleaning', '$tap_while_brushing', '$water_efficient_appliances', '$rainwater_harvesting');";
    
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>
            alert('Form data submitted successfully')
            window.location.href='dashboard.php'
            </script>";
    } else {
        echo '<script>alert("Some internal error occurred..Try again")</script>';
    }
}
?>
