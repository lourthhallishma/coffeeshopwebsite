<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <title>Ongoing Events</title>
        <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
    }
    .title {
        text-align: center;
        font-size: 24px;
        margin-bottom: 10px;
        color: #4e342e;
    }
    .subtitle {
        text-align: center;
        font-size: 16px;
        color: #6d4c41;
        margin-bottom: 20px;
    }
    .container {
        max-width: 1200px;
        margin: 20px auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .card {
        width: calc(33.33% - 20px);
        margin-bottom: 20px;
        border: 1px solid #8d6e63;
        border-radius: 5px;
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .card img {
        width: 100%;
        height: auto;
        border-bottom: 1px solid #8d6e63;
    }
    .card-content {
        padding: 20px;
        background-color: #efebe9;
    }
    .card-title {
        font-size: 30px;
        margin-bottom: 10px;
        color: #4e342e;
    }
    .card-detail {
        font-size: 20px;
        margin-bottom: 20px;
        color: #6d4c41;
    }
    .card-button {
        display: block;
        width: 100%;
        padding: 10px;
        text-align: center;
        background-color: #4e342e;
        color: #fff;
        text-decoration: none;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 20px;
    }
    .card-button:hover {
        background-color: #6d4c41;
    }
</style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2Hhh_14Uam62GXGaTMcXWhhVkYg0EbDY&callback=initMap" async defer></script>

        <!-- Custom CSS File Link -->
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/convo.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"><!-- font awesome cdn link -->
        <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico"><!-- Favicon / Icon -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!-- Google font cdn link -->
    </head>
    <body>
        <!-- HEADER SECTION -->
        <header class="header">
            <a href="#" class="logo">
                <img src="../assets/images/logo.png" class="img-logo" alt="KapeTann Logo">
            </a>

            <!-- MAIN MENU FOR SMALLER DEVICES -->
            <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="index.php" class="text-decoration-none">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="text-decoration-none">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#menu" class="text-decoration-none">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a href="#gallery"class="text-decoration-none">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a href="#blogs" class="text-decoration-none">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a href="reservation_handler.php" class="text-decoration-none">Reserve!!</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="text-decoration-none">Contact</a>
                        </li>

                        <li class="nav-item">
                            <a href="events.php" class="text-decoration-none">Ongoing Events</a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="text-decoration-none">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
</header>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1 class="heading"> <span>Ongoing</span> Events</h1>
<div class="subtitle">Join us for exciting events happening at our cafe. Reserve your spot now!</div>
<br><br>
<div class="container">
    <div class="card">
        <img src="events1.jpg" alt="Event 1">
        <div class="card-content">
            <h2 class="card-title">Live Karaoke!</h2>
            <p class="card-detail">Details: "Step into the limelight and unleash your inner rockstar at our electrifying karaoke night! Sing your heart out and make unforgettable memories with friends and family under the sparkling lights."</p>
            <p class="card-detail">Date & Time: March 28, 2024, 3:00 PM</p>
            <a href="attend_form.php" class="card-button">Attend</a>
        </div>
    </div>
    <div class="card">
        <img src="event2.jpg" alt="Event 2">
        <div class="card-content">
            <h2 class="card-title">Coffee Tasting</h2>
            <p class="card-detail">Details: Embark on a sensory journey with our exclusive coffee tasting event. Explore rich flavors, aromatic blends, and indulge in the art of coffee appreciation with fellow enthusiasts.</p>
            <p class="card-detail">Date & Time: June 1, 2024, 4:00 PM</p>
            <a href="attend_form.php" class="card-button">Attend</a>
        </div>
    </div>
    <div class="card">
        <img src="event3.jpg" alt="Event 3">
        <div class="card-content">
            <h2 class="card-title">Open Mic Night</h2>
            <p class="card-detail">Details: Experience the thrill of expression at our Open Mic Night. Showcase your talent, connect with the audience, and create memorable moments in our vibrant atmosphere.</p>
            <p class="card-detail">Date & Time: June 14, 2024, 5:00 PM</p>
            <a href="attend_form.php" class="card-button">Attend</a>
        </div>
    </div>
    <div class="card">
        <img src="event4.jpg" alt="Event 4">
        <div class="card-content">
            <h2 class="card-title">Book Club</h2>
            <p class="card-detail">Details: Join our book club for lively discussions, literary exploration, and the joy of shared reading experiences in a cozy cafe setting.</p>
            <p class="card-detail">Date & Time: June 31, 2024, 6:00 PM</p>
            <a href="attend_form.php" class="card-button">Attend</a>
        </div>
    </div>
</div>
</body>
</html>
