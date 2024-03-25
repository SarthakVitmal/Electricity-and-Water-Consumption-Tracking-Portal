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
    
    <title>Dashboard | EcoTrack</title>
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
                    <p id="location" style="color:black;margin-left:5px"></p>
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
                <h1>Welcome Back!!</h1>
                    
                <div class="action">
                <a href="tips.php" style="padding:10px;width:200px;text-decoration:none;">
                        Tips
                </a>
                </div>
            </header>
            
            <div class="content">
                <section class="info-boxes">                
                    <div class="info-box">
                        <div class="box-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20 10H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V11a1 1 0 0 0-1-1zm-1 10H5v-8h14v8zM5 6h14v2H5zM7 2h10v2H7z"/></svg>
                        </div>
                        
                        <div class="box-content">
                           <span class="big">
                           <script>
                               let data = localStorage.getItem('formData');
                                data = JSON.parse(data);
                                document.write(data.units_consumped)
                           </script>
                           </span>Units Consumed(In Last Month)
                           
                        </div>
                    </div>
                    
                    <div class="info-box active">
                        <div class="box-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3,21c0,0.553,0.448,1,1,1h16c0.553,0,1-0.447,1-1v-1c0-3.714-2.261-6.907-5.478-8.281C16.729,10.709,17.5,9.193,17.5,7.5 C17.5,4.468,15.032,2,12,2C8.967,2,6.5,4.468,6.5,7.5c0,1.693,0.771,3.209,1.978,4.219C5.261,13.093,3,16.287,3,20V21z M8.5,7.5 C8.5,5.57,10.07,4,12,4s3.5,1.57,3.5,3.5S13.93,11,12,11S8.5,9.43,8.5,7.5z M12,13c3.859,0,7,3.141,7,7H5C5,16.141,8.14,13,12,13z"/></svg>
                        </div>
                        <div class="box-content">
                            <span class="big">
                            <script>
                            let data2 = localStorage.getItem('water_data');
                            data2 = JSON.parse(data2);
                            document.write(data2.shower_frequency * 15 + data2.machine_runtime * 8 + data2.utensils * 2);
                            </script>
                            </span>
                            Water Consumed (litres)
                        </div>
                    </div>
                </section>
        </main>
    </div>
  <script>
// responcive

const toggleMenu =() =>{
    console.log('menu toggle triggered')
    document.querySelector('.dashboard').classList.toggle('toggle_active');
}

    </script>
</body>
</html>