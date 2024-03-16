<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "water_form";
    
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Sorry!! Failed to connect: " . mysqli_connect_error());
    } else {
        echo "Connection was successful<br>";
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
        $device_name2 = $_POST['$device_name2'];
        $quantity2 = $_POST['$quantity2'];
        $duration2 = $_POST['$duration2'];
        $device_name3 = $_POST['$device_name3'];
        $quantity3 = $_POST['$quantity3'];
        $duration3 = $_POST['$duration3'];

        $sql = $sql = "INSERT INTO `elec_form` (`persons`, `energy_efficient_appliances`, `heating_cooling`, `laundry_frequency`, `turn_off_lights`, `lighting_type`, `solar_panels`, `unplug_electronics`, `units_consumped`, `device_name`, `quantity`, `duration`, `device_name2`, `quantity2`, `duration2`, `device_name3`, `quantity3`, `duration3`) 
        VALUES ('$persons', '$energy_efficient_appliances', '$heating_cooling', '$laundry_frequency', '$turn_off_lights', '$lighting_type', '$solar_panels', '$unplug_electronics', '$units_consumped', '$device_name', '$quantity', '$duration', '$device_name2', '$quantity2', '$duration2', '$device_name3', '$quantity3', '$duration3')";

        $result = mysqli_query($conn, $sql);
    }
?>
