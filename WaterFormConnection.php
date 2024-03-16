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

            $sql = "INSERT INTO `water_form1` (`persons`, `fix_faucets`, `water_supply`, `shower`, `shower_frequency`, `bucket_number`, `machine_runtime`, `utensils`, `house_cleaning`, `tap_while_brushing`, `water_efficient_appliances`, `rainwater_harvesting`) 
                    VALUES ('$persons', '$fix_faucets', '$water_supply', '$shower', '$shower_frequency', '$bucket_number', '$machine_runtime', '$utensils', '$house_cleaning', '$tap_while_brushing', '$water_efficient_appliances', '$rainwater_harvesting');";

            $result = mysqli_query($conn, $sql);
        }
?>
