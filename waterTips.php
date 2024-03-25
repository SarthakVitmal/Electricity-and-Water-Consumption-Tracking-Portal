<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="https://th.bing.com/th/id/R.c83b249c64943e53c12013e7a35da769?rik=xt%2bIZgvKL8%2fKLg&riu=http%3a%2f%2flofrev.net%2fwp-content%2fphotos%2f2014%2f10%2fGreen-logo.jpg&ehk=Q3AidRmxPk5TJDC%2fxeJCTBHjd2pUKm8fnsjvTKEWCjU%3d&risl=&pid=ImgRaw&r=0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    
    <title>Tips | EcoTrack</title>
    <link rel="stylesheet" href="./assets/css/dashboard.css">
</head>
<body>
<div class="dashboard">
     <button class="menu_toggle_btn" onClick="toggleMenu()" >
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.297 5.234a2.6 2.6 0 0 1 1.937-1.937 5.54 5.54 0 0 1 2.532 0 2.6 2.6 0 0 1 1.937 1.937c.195.833.195 1.7 0 2.532a2.6 2.6 0 0 1-1.937 1.937c-.833.195-1.7.195-2.532 0a2.6 2.6 0 0 1-1.937-1.937 5.55 5.55 0 0 1 0-2.532Z" stroke="#363853" stroke-width="1.5"/><path d="M3.297 16.234a2.6 2.6 0 0 1 1.937-1.937 5.55 5.55 0 0 1 2.532 0 2.6 2.6 0 0 1 1.937 1.937c.195.833.195 1.7 0 2.532a2.6 2.6 0 0 1-1.937 1.937c-.833.195-1.7.195-2.532 0a2.6 2.6 0 0 1-1.937-1.937 5.55 5.55 0 0 1 0-2.532Z" stroke="#0095FF" stroke-width="1.5"/><path d="M14.297 5.234a2.6 2.6 0 0 1 1.937-1.937 5.54 5.54 0 0 1 2.532 0 2.6 2.6 0 0 1 1.937 1.937c.195.833.195 1.7 0 2.532a2.6 2.6 0 0 1-1.937 1.937c-.833.195-1.7.195-2.532 0a2.6 2.6 0 0 1-1.937-1.937 5.55 5.55 0 0 1 0-2.532Zm0 11a2.6 2.6 0 0 1 1.937-1.937 5.55 5.55 0 0 1 2.532 0 2.6 2.6 0 0 1 1.937 1.937c.195.833.195 1.7 0 2.532a2.6 2.6 0 0 1-1.937 1.937c-.833.195-1.7.195-2.532 0a2.6 2.6 0 0 1-1.937-1.937 5.55 5.55 0 0 1 0-2.532Z" stroke="#363853" stroke-width="1.5"/></svg>
        </button>
        <aside class="search-wrap">
            <div class="search">
                <label for="search">
                <i class="fa-solid fa-location-dot"></i>
                    <p style="color:black;margin-left:5px;" id="location"></p>
                </label>
            </div>
            
            <div class="user-actions" style="display:flex;">
                <form action="logout.php" method="post">
                <button type="submit" name="logout" style="cursor:pointer;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 21c4.411 0 8-3.589 8-8 0-3.35-2.072-6.221-5-7.411v2.223A6 6 0 0 1 18 13c0 3.309-2.691 6-6 6s-6-2.691-6-6a5.999 5.999 0 0 1 3-5.188V5.589C6.072 6.779 4 9.65 4 13c0 4.411 3.589 8 8 8z"/><path d="M11 2h2v10h-2z"/></svg>
                </button>
                <form>
            </div>
        </aside>
        <header class="menu-wrap">
            <figure class="user">
                <div class="user-avatar">
                    <img src="./assets/image/userprofile.png" alt="user profile">
                </div>
                <figcaption>
                <?php
            session_start();
            
            if(isset($_SESSION['uname'])) {
                include 'db.php';
                $uname = $_SESSION['uname'];
            
                $query = $con->prepare("SELECT uname FROM newuser_credentials WHERE uname = ?");
                $query->bind_param("s", $uname);
                $query->execute();
                $result = $query->get_result();
            
                if($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $uname = $row['uname'];
            
                    echo $uname;
                } else {
                    echo "User not found.";
                }
            
                $query->close();
                $con->close();
            } else {
                echo "You are not logged in.";
            }
            ?>
            </figcaption>
            
            </figure>
            <nav>
                <section class="dicover">
                    <h3>Discover</h3>
                    
                    <ul>
                        <li>
                            <a href="waterform.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6.855 14.365l-1.817 6.36a1.001 1.001 0 0 0 1.517 1.106L12 18.202l5.445 3.63a1 1 0 0 0 1.517-1.106l-1.817-6.36 4.48-3.584a1.001 1.001 0 0 0-.461-1.767l-5.497-.916-2.772-5.545c-.34-.678-1.449-.678-1.789 0L8.333 8.098l-5.497.916a1 1 0 0 0-.461 1.767l4.48 3.584zm2.309-4.379c.315-.053.587-.253.73-.539L12 5.236l2.105 4.211c.144.286.415.486.73.539l3.79.632-3.251 2.601a1.003 1.003 0 0 0-.337 1.056l1.253 4.385-3.736-2.491a1 1 0 0 0-1.109-.001l-3.736 2.491 1.253-4.385a1.002 1.002 0 0 0-.337-1.056l-3.251-2.601 3.79-.631z"/></svg>
                                Water Consumption
                            </a>
                        </li>
                        
                        <li>
                            <a href="electricityForm.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6.855 14.365l-1.817 6.36a1.001 1.001 0 0 0 1.517 1.106L12 18.202l5.445 3.63a1 1 0 0 0 1.517-1.106l-1.817-6.36 4.48-3.584a1.001 1.001 0 0 0-.461-1.767l-5.497-.916-2.772-5.545c-.34-.678-1.449-.678-1.789 0L8.333 8.098l-5.497.916a1 1 0 0 0-.461 1.767l4.48 3.584zm2.309-4.379c.315-.053.587-.253.73-.539L12 5.236l2.105 4.211c.144.286.415.486.73.539l3.79.632-3.251 2.601a1.003 1.003 0 0 0-.337 1.056l1.253 4.385-3.736-2.491a1 1 0 0 0-1.109-.001l-3.736 2.491 1.253-4.385a1.002 1.002 0 0 0-.337-1.056l-3.251-2.601 3.79-.631z"/></svg>
                                Electricity Consumption
                            </a>
                        </li>
                    </ul>
                </section>
            
                <section class="tools">
                    <h3>Tools</h3>
                    
                    <ul>
                        <li>
                            <a href="drip_calc.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6.855 14.365l-1.817 6.36a1.001 1.001 0 0 0 1.517 1.106L12 18.202l5.445 3.63a1 1 0 0 0 1.517-1.106l-1.817-6.36 4.48-3.584a1.001 1.001 0 0 0-.461-1.767l-5.497-.916-2.772-5.545c-.34-.678-1.449-.678-1.789 0L8.333 8.098l-5.497.916a1 1 0 0 0-.461 1.767l4.48 3.584zm2.309-4.379c.315-.053.587-.253.73-.539L12 5.236l2.105 4.211c.144.286.415.486.73.539l3.79.632-3.251 2.601a1.003 1.003 0 0 0-.337 1.056l1.253 4.385-3.736-2.491a1 1 0 0 0-1.109-.001l-3.736 2.491 1.253-4.385a1.002 1.002 0 0 0-.337-1.056l-3.251-2.601 3.79-.631z"/></svg>
                                Faucet Flow Calculator
                            </a>
                        </li>

                        <li>
                            <a href="ElectricityPage.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6.855 14.365l-1.817 6.36a1.001 1.001 0 0 0 1.517 1.106L12 18.202l5.445 3.63a1 1 0 0 0 1.517-1.106l-1.817-6.36 4.48-3.584a1.001 1.001 0 0 0-.461-1.767l-5.497-.916-2.772-5.545c-.34-.678-1.449-.678-1.789 0L8.333 8.098l-5.497.916a1 1 0 0 0-.461 1.767l4.48 3.584zm2.309-4.379c.315-.053.587-.253.73-.539L12 5.236l2.105 4.211c.144.286.415.486.73.539l3.79.632-3.251 2.601a1.003 1.003 0 0 0-.337 1.056l1.253 4.385-3.736-2.491a1 1 0 0 0-1.109-.001l-3.736 2.491 1.253-4.385a1.002 1.002 0 0 0-.337-1.056l-3.251-2.601 3.79-.631z"/></svg>
                                Tips to Save Electricity
                            </a>
                        </li>

                        <li>
                            <a href="waterPage.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6.855 14.365l-1.817 6.36a1.001 1.001 0 0 0 1.517 1.106L12 18.202l5.445 3.63a1 1 0 0 0 1.517-1.106l-1.817-6.36 4.48-3.584a1.001 1.001 0 0 0-.461-1.767l-5.497-.916-2.772-5.545c-.34-.678-1.449-.678-1.789 0L8.333 8.098l-5.497.916a1 1 0 0 0-.461 1.767l4.48 3.584zm2.309-4.379c.315-.053.587-.253.73-.539L12 5.236l2.105 4.211c.144.286.415.486.73.539l3.79.632-3.251 2.601a1.003 1.003 0 0 0-.337 1.056l1.253 4.385-3.736-2.491a1 1 0 0 0-1.109-.001l-3.736 2.491 1.253-4.385a1.002 1.002 0 0 0-.337-1.056l-3.251-2.601 3.79-.631z"/></svg>
                                Tips to Save Water
                            </a>
                        </li>
                    </ul>
                </section>
                
            </nav>
        </header>
        
        <main class="content-wrap">
            <header class="content-head">
                <h1>Water Tips Based on Your Usage!!</h1>
                    
                <div class="action">
                <a style="padding: 10px; text-decoration: 10px" href="dashboard.php">
                        Dashboard
                </a>
                </div>
            </header>
            
            <div class="content">
               <section class="info-boxes">                

</section>
        </main>
    </div>

  <script>

const toggleMenu =() =>{
    console.log('menu toggle triggered')
    document.querySelector('.dashboard').classList.toggle('toggle_active');
}

    let tips = [];

    let data = localStorage.getItem('water_data');
    data = JSON.parse(data);


    if (data.water_efficient_appliances === "yes") {
        tips.push("Consider replacing old appliances with water-efficient models to reduce water usage.");
    }
    if (data.water_supply === "no") {
        tips.push("Check for leaks in your water supply system and repair them promptly to avoid wastage.");
    }
    if (parseInt(data.bucket_number) > 100) {
        tips.push("Reuse water from buckets or containers for activities like watering plants or cleaning.");
    }
    if (data.fix_faucets === "yes") {
        tips.push("Fix leaking faucets and pipes to prevent water wastage.");
    }
    if (parseInt(data.house_cleaning) > 20) {
        tips.push("Limit the frequency of house cleaning to conserve water.");
    }
    if (parseInt(data.machine_runtime) > 60) {
        tips.push("Reduce the runtime of washing machines to conserve water.");
    }
    if (parseInt(data.persons) > 10) {
        tips.push("Encourage family members to take shorter showers to save water.");
    }
    if (data.rainwater_harvesting === "yes") {
        tips.push("Consider installing a rainwater harvesting system to collect rainwater for various purposes.");
    }
    if (data.shower === "Shower" && parseInt(data.shower_frequency) > 90) {
        tips.push("Shorten your shower time and install water-saving showerheads to reduce water usage.");
    }
    if (data.tap_while_brushing === "yes") {
        tips.push("Turn off the tap while brushing your teeth to save water.");
    }
    if (parseInt(data.utensils) > 40) {
        tips.push("Hand wash utensils in a basin instead of running water continuously to conserve water.");
    }

    const infoBoxes = document.querySelector('.info-boxes');

     tips.forEach(tip => {
        const infoBox = document.createElement('div');
        infoBox.classList.add('info-box', 'active');
        
        const boxIcon = document.createElement('div');
        boxIcon.classList.add('box-icon');
        boxIcon.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20 10H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V11a1 1 0 0 0-1-1zm-1 10H5v-8h14v8zM5 6h14v2H5zM7 2h10v2H7z"/></svg>';

        const boxContent = document.createElement('div');
        boxContent.classList.add('box-content');
        boxContent.innerHTML = tip;

        infoBox.appendChild(boxIcon);
        infoBox.appendChild(boxContent);

        infoBoxes.appendChild(infoBox);
    });

    console.log("Tips:", tips);


        function getUserLocation() {
            fetch('https://api.ipify.org?format=json')
                .then(response => response.json())
                .then(data => {
                    const userIP = data.ip;
                    fetch(`http://ip-api.com/json/${userIP}`)
                        .then(response => response.json())
                        .then(locationData => {
                            const { city, country, lat, lon } = locationData;
                            const locationElement = document.getElementById("location");
                            locationElement.textContent = `${city}, ${country} | Lat: ${lat}, Long: ${lon}`;

                            // Store location data in local storage
                            localStorage.setItem("city", city);
                            localStorage.setItem("country", country);
                            localStorage.setItem("latitude", lat);
                            localStorage.setItem("longitude", lon);
                        })
                        .catch(error => console.error('Error fetching location data:', error));
                })
                .catch(error => console.error('Error fetching IP address:', error));
        }

        window.onload = function() {
            const city = localStorage.getItem("city");
            const country = localStorage.getItem("country");
            const latitude = localStorage.getItem("latitude");
            const longitude = localStorage.getItem("longitude");

            // Check if location data exists in localstorage
            if (!city || !country || !latitude || !longitude) {
                getUserLocation();
            } else {
                // Display location data from localstorage
                const locationElement = document.getElementById("location");
                locationElement.textContent = `${city}, ${country} | Lat: ${latitude}, Long: ${longitude}`;
            }
        };
</script>

</body>
</html>