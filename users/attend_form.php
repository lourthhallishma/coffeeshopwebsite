<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>RSVP Form</title>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <title>Hallishma's Cafe</title>

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
                            <a href="#contact" class="text-decoration-none">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="reservation_handler.php" class="text-decoration-none">Reserve!!</a>
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
            </div>
            </div>
            
</header>            
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: url('hero-img.png'); /* Replace 'your-background-image.jpg' with your actual background image */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
    }

    .title {
        text-align: center;
        font-size: 28px;
        margin-bottom: 15px;
        color: #4e342e;
    }

    .subtitle {
        text-align: center;
        font-size: 18px;
        color: #6d4c41;
        margin-bottom: 20px;
    }

    .form-container {
        max-width: 500px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #6d4c41;
        font-size: 20px;
    }

    input[type="text"],
    input[type="email"],
    select,
    input[type="number"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 16px;
    }

    select {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        background-image: url('data:image/svg+xml;utf8,<svg fill="#6d4c41" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M7 10l5 5 5-5z"/></svg>');
        background-position: right 10px center;
        background-repeat: no-repeat;
    }

    input[type="submit"] {
        width: 100%;
        padding: 12px;
        background-color: #4e342e;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 20px;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #6d4c41;
    }

    .success-message {
        text-align: center;
        color: #388e3c;
        font-weight: bold;
        margin-top: 20px;
    }

    .error-message {
        text-align: center;
        color: #d32f2f;
        font-weight: bold;
        margin-top: 20px;
    }
</style>
</head>
<body>
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

<h1 class="heading">Attend Our <span>Events</span></h1>
<div class="subtitle">Please fill out the form to reserve your seat for the event.</div>
<div class="form-container">
    <form action="#" method="POST">
        <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="guests">Number of Guests:</label>
            <input type="number" id="guests" name="guests" min="1" max="10" required>
        </div>
        <div class="form-group">
            <label for="event">Which event do you want to attend?</label>
            <select id="event" name="event" required>
                <option value="">Select an event</option>
                <option value="Live Karaoke">Live Karaoke</option>
                <option value="Coffee Tasting">Coffee Tasting</option>
                <option value="Open Mic">Open Mic</option>
                <option value="Book Club">Book Club</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" value="Book my seat">
        </div>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $guests = $_POST["guests"];
        $event = $_POST["event"];

        // Validate and process form submission
        if (!empty($name) && !empty($email) && !empty($guests) && !empty($event)) {
            echo "<p class='success-message'>Your seat for the event '$event' is booked for $name and $guests guests! We look forward to seeing you.</p>";
        } else {
            echo "<p class='error-message'>Please fill out all the fields in the form.</p>";
        }
    }
    ?>
</div>

</body>
</html>
