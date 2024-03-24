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
        $energy_efficient_appliances = $_POST['energy_efficient_appliances'];
        $heating_cooling = $_POST['heating_cooling'];
        $laundry_frequency = $_POST['laundry_frequency'];
        $turn_off_lights = $_POST['turn_off_lights'];
        $lighting_type = $_POST['lighting_type'];
        $solar_panels = $_POST['solar_panels'];
        $unplug_electronics = $_POST['unplug_electronics']; 
        $units_consumped = $_POST['units_consumped'];
        $device_name = $_POST['device_name'];
        $quantity = $_POST['quantity'];
        $duration = $_POST['duration'];
        $device_name2 = $_POST['device_name2'];
        $quantity2 = $_POST['quantity2'];
        $duration2 = $_POST['duration2'];
        $device_name3 = $_POST['device_name3'];
        $quantity3 = $_POST['quantity3'];
        $duration3 = $_POST['duration3'];

    if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
        echo "Email is missing!";
        exit;
    }
    
    $email = $_SESSION['email'];

    $sql = "INSERT INTO user_electricityform_credentials (email, persons, energy_efficient_appliances, heating_cooling, laundry_frequency, turn_off_lights, lighting_type, solar_panels,        unplug_electronics, units_consumped, device_name, quantity, duration, device_name2, quantity2, duration2, device_name3, quantity3, duration3) 
            VALUES ('$email', '$persons', '$energy_efficient_appliances', '$heating_cooling', '$laundry_frequency', '$turn_off_lights', '$lighting_type', '$solar_panels',            '$unplug_electronics', '$units_consumped', '$device_name', '$quantity', '$duration', '$device_name2', '$quantity2', '$duration2', '$device_name3', '$quantity3', '$duration3')";
    
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
