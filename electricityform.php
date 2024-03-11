<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Electricity Consumption</title>
</head>
<body>
    <h1>Electricity Consumption Form</h1>
    <form action="datab.php" method="post">
        <div id="task-container">
            <div>
                <label for="persons">1. Number of occupants in your house?</label>
                <input type="number" name="persons" placeholder="Eg. 2" required><br>

                <label>2. Do you use energy-efficient appliances and light bulbs?</label>
                <div>
                    <input type="radio" name="energy_efficient_appliances" value="yes">
                    <label>Yes</label>
                    <input type="radio" name="energy_efficient_appliances" value="no">
                    <label>No</label><br>
                </div>

                <label>3. Do you use air conditioning or heating systems at home?</label>
                <div>
                    <input type="radio" name="heating_cooling" value="yes">
                    <label>Yes</label>
                    <input type="radio" name="heating_cooling" value="no">
                    <label>No</label><br>
                </div>

                <label>4. How often do you do laundry in a week?</label>
                <input type="number" name="laundry_frequency" placeholder="Example : 2"><br>

                <label>5. Do you turn off lights and electronic devices when not in use?</label>
                <div>
                    <input type="radio" name="turn_off_lights" value="yes">
                    <label>Yes</label>
                    <input type="radio" name="turn_off_lights" value="no">
                    <label>No</label><br>
                </div>

                <label>6. What type of lighting do you use predominantly?</label>
                <div>
                    <input type="radio" name="lighting_type" value="LED">
                    <label>LED</label>
                    <input type="radio" name="lighting_type" value="Incandescent">
                    <label>Incandescent</label>
                    <input type="radio" name="lighting_type" value="CFL">
                    <label>CFL</label><br>
                </div>

                <label>7. Do you have solar panels installed at your home?</label>
                <div>
                    <input type="radio" name="solar_panels" value="yes">
                    <label>Yes</label>
                    <input type="radio" name="solar_panels" value="no">
                    <label>No</label><br>
                </div>

                <label>8. Do you unplug chargers and electronics when not in use?</label>
                <div>
                    <input type="radio" name="unplug_electronics" value="yes">
                    <label>Yes</label>
                    <input type="radio" name="unplug_electronics" value="no">
                    <label>No</label><br>
                </div>

                <label>9. Have you conducted an energy audit for your home?</label>
                <div>
                    <input type="radio" name="energy_audit" value="yes">
                    <label>Yes</label>
                    <input type="radio" name="energy_audit" value="no">
                    <label>No</label><br>
                </div>

                <label>10. Enter the devices name you use daily along with the duration.</label>
                <div class="devices" id="devices-container">
                    <span>1]</span>
                    <input placeholder="Enter the device name" name="device_name">
                    <input placeholder="Enter the quantity" name="quantity">
                    <input placeholder="Enter the duration" name="duration">
                </div>

                <div class="devices" id="devices-container">
                    <span>2]</span>
                    <input placeholder="Enter the device name" name="device_name2">
                    <input placeholder="Enter the quantity" name="quantity2">
                    <input placeholder="Enter the duration" name="duration2">
                </div>

                <div class="devices" id="devices-container">
                    <span>3]</span>
                    <input placeholder="Enter the device name" name="device_name3">
                    <input placeholder="Enter the quantity" name="quantity3">
                    <input placeholder="Enter the duration" name="duration3">
                </div>

                
                
            </div>
        </div>
        <div style="justify-content: center;align-items: center;display: flex;">
        <input class="submit" type="submit" name="Submit" value="Submit">
        </div>

    </form>
</body>
<script src="script.js"></script>
</html>