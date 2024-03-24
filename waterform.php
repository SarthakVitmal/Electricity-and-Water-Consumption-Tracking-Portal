<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon"
        href="https://th.bing.com/th/id/R.c83b249c64943e53c12013e7a35da769?rik=xt%2bIZgvKL8%2fKLg&riu=http%3a%2f%2flofrev.net%2fwp-content%2fphotos%2f2014%2f10%2fGreen-logo.jpg&ehk=Q3AidRmxPk5TJDC%2fxeJCTBHjd2pUKm8fnsjvTKEWCjU%3d&risl=&pid=ImgRaw&r=0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/waterform.css">
    <title>Water Consumption Form</title>
</head>

<body>
    <div style="align-items:center; justify-content: center; display: flex;">
        <img class="logo" style="height: 3rem;" src="assets/image/website-logo-transparent.png">
        <h1 style="text-decoration:underline;">Water Consumption Form</h1>
    </div>
    <form action="waterform_connection.php" id="water_form" method="post">
        <div id="task-container">
            <div>
                <label>1.No of Persons in your house?</label>
                <input type="number" onKeyPress="if(this.value.length==2) return false;" name="persons" required placeholder="Eg.2"><br>
 
                <label>2.Do you fix dripping faucets promptly?</label>
                <div class="options">
                    <input type="radio" name="fix_faucets" required value="yes">
                    <label>Yes</label>
                    <input type="radio" name="fix_faucets" required value="no">
                    <label>No</label><br>
                </div>

                <label>3.Do you have 24hrs water supply at your home?</label>
                <div class="options">
                    <input type="radio" name="water_supply" required value="yes">
                    <label>Yes</label>
                    <input type="radio" name="water_supply" required value="no">
                    <label>No</label><br>
                </div>

                <label>4.What is the source of bath?</label>
                <div class="options">
                    <input type="radio" name="shower" required value="Shower">
                    <label>Shower</label>
                    <input type="radio" name="shower" required value="Bucket">
                    <label>Bucket</label><br>
                </div>

                <label>5.If Shower? How often do you shower? (per week)</label>
                <input type="number" onKeyPress="if(this.value.length==2) return false;" required name="shower_frequency"><br>

                <label>6.If Buckets? How much bucket you use? (per week)</label>
                <input type="number" onKeyPress="if(this.value.length==2) return false;" required name="bucket_number"><br>

                <label>7.How long do you run your dishwasher or washing machine? (in minutes)</label>
                <input type="number" onKeyPress="if(this.value.length==2) return false;" required name="machine_runtime" placeholder="20" required><br>

                <label>8.What is the average time of washing utensils at your home? (in minutes)</label>
                <input type="number" onKeyPress="if(this.value.length==2) return false;" required name="utensils" placeholder="40"><br>

                <label>9.How often you clean your house in a week?</label>
                <input type="number" onKeyPress="if(this.value.length==2) return false;" required name="house_cleaning" placeholder="40"><br>

                <label>10.Do you turn off the tap while brushing?</label>
                <div class="options">
                    <input type="radio" required name="tap_while_brushing" value="yes">
                    <label>Yes</label>
                    <input type="radio" required name="tap_while_brushing" value="no">
                    <label>No</label><br>
                </div>

                <label>11.Do you use water-efficient appliances like a double flush system, etc.?</label>
                <div class="options">
                    <input type="radio" required name="water_efficient_appliances" value="yes">
                    <label>Yes</label>
                    <input type="radio" required name="water_efficient_appliances" value="no">
                    <label>No</label><br>
                </div>

                <label>12.Have you installed a rainwater harvesting system in your home?</label>
                <div class="options">
                    <input type="radio" required name="rainwater_harvesting" value="yes">
                    <label>Yes</label>
                    <input type="radio" required name="rainwater_harvesting" value="no">
                    <label>No</label><br>
                </div>
            </div>
            <div class="submitbtn">
                <input type="submit" name="Submit" value="Submit">
            </div>
        </div>
    </form>

// //     <script>
// //         document.getElementById("water_form").addEventListener("submit", function(event) {
// //         event.preventDefault();
        
// //         const formData = new FormData(this);
// //             const formObject = {};
// //         formData.forEach(function(value, key){
// //             formObject[key] = value;
// //         });
        
// //         localStorage.setItem('water_data', JSON.stringify(formObject));
// //             this.reset();
        
// //         console.log("Form data stored in localStorage:", formObject);
// // });
// </script>
</body>

</html>
