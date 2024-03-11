<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/waterform.css">
    <title>Water Consumption Form</title>
</head>
<body>
    <h1>Water Consumption Form</h1>
    <form action="waterform_connection.php" method="post">
        <div id="task-container">
            <div>
                <label>1.No of Persons in your house?</label>
                <input type="number" name="persons" placeholder="Eg.2"><br>

                <label>2.Do you fix dripping faucets promptly?</label>
                <div>
                <input type="radio" name="fix_faucets" value="yes" >
                <label>Yes</label>
                <input type="radio" name="fix_faucets" value="no">
                <label>No</label><br>
                </div>

                <label>3.Do you have 24hrs water supply at your home?</label>
                <div>
                <input type="radio" name="water_supply" value="yes" >
                <label>Yes</label>
                <input type="radio" name="water_supply" value="no">
                <label>No</label><br>
                </div>

                <label>4.What is the source of bath?</label>
                <div>
                <input type="radio" name="shower" value="Shower">
                <label>Shower</label>
                <input type="radio" name="shower" value="Bucket">
                <label>Bucket</label><br>
                </div>

                <label>5.If Shower? How often do you shower? (per week)</label>
                <input type="number" name="shower_frequency"><br>

                <label>6.If Buckets? How much bucket you use? (per week)</label>
                <input type="number" name="bucket_number"><br>

                <label>7.How long do you run your dishwasher or washing machine? (in minutes)</label>
                <input type="number" name="machine_runtime" placeholder="20" required><br>

                <label>8.What is the average time of washing utensils at your home? (in minutes)</label>
                <input type="number" name="utensils" placeholder="40"><br>

                <label>9.How often you clean your house in a week?</label>
                <input type="number" name="house_cleaning" placeholder="40"><br>

                <label>10.Do you turn off the tap while brushing?</label>
                <input type="radio" name="tap_while_brushing" value="yes">
                <label>Yes</label>
                <input type="radio" name="tap_while_brushing" value="no">
                <label>No</label><br>

                <label>11.Do you use water-efficient appliances like a double flush system, etc.?</label>
                <input type="radio" name="water_efficient_appliances" value="yes">
                <label>Yes</label>
                <input type="radio" name="water_efficient_appliances" value="no">
                <label>No</label><br>

                <label>12.Have you installed a rainwater harvesting system in your home?</label>
                <input type="radio" name="rainwater_harvesting" value="yes">
                <label>Yes</label>
                <input type="radio" name="rainwater_harvesting" value="no">
                <label>No</label><br>

            

                <!-- Add more questions as needed -->

            </div>
        </div>
    
        <input type="submit" name="Submit" value="Submit">
    </form>
</body>
</html>