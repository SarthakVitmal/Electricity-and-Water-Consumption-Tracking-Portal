<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0">
    <title>Energy Calculator</title>
</head>    
<body>
    <div class="calculator">
    <form action="index.php" method="post">
        <label for="power">Power (Watts):</label>
        <input type="number" name="power" placeholder="Enter power" required>
        <label for="time">Time (Hours):</label>
        <input type="number" name="time" placeholder="Enter time"required>
        <button type="submit">Calculate</button>
    </form>    
    </div>
</body>
</html>

<?php
    $power = isset($_POST["power"])? (float)$_POST["power"] : 0;
    $time = isset($_POST["time"])? (float)$_POST["time"] : 0;
    if(!empty($power) && !empty($time)){
        $energy = $power * $time;
        echo"<p>Energy Consumption:<span> $energy</span> Watt-hours</p>";
    }
    else{
        echo"<p>Please enter valid numbers for power and time.</p>";
    }

?>