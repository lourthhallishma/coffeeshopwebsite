<!DOCTYPE html>
<html lang="en">
<head>
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
        <style>
             body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url('hero-img.png'); /* Replace 'your-background-image.jpg' with your actual background image */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
            font-size: 20px;
        }

        input[type="text"],
        input[type="email"],
        select,
        input[type="date"],
        input[type="time"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4e342e; /* Brown color */
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 25px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"]:hover {
            background-color: #A0522D; /* Darker brown on hover */
        }

        input[type="submit"]:focus {
            outline: none;
        }

        input[type="submit"]:active {
            background-color: #7B3F00; /* Even darker brown on click */
        }

        .error-message {
            color: red;
            margin-top: -10px;
            margin-bottom: 10px;
            font-size: 14px;
        }
        </style>
</head>
<body>
<?php
            $con = mysqli_connect("localhost","root","","kapetann");
            
          
            
            // Check connection
            if ($con->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            
            // Process form submission
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              // Retrieve form data
              $name = $_POST["name"];
              $email = $_POST["email"];
              $phone = $_POST["phone"];
              $date = $_POST["date"];
              $time = $_POST["time"];
              $guests = $_POST["guests"];
            
              // Prepare SQL statement
              $sql = "INSERT INTO reservations (name, email, phone, date, time, guests) VALUES (?, ?, ?, ?, ?, ?)";
              $stmt = $con->prepare($sql);
              $stmt->bind_param("sssssi", $name, $email, $phone, $date, $time, $guests);
            
              // Execute SQL statement
              if ($stmt->execute() === TRUE) {
                echo "Reservation successful!";
              } else {
                echo "Error: " . $sql . "<br>" . $con->error;
              }
            
              // Close statement and connection
              $stmt->close();
              $con->close();
            }
            ?>
<h1 class="heading">Reserve Your<span> Seats</span></h1>     
<div class="content" style="text-align: center; color: white; max-width: 800px; margin: 0 auto;">
    <p style="font-size: 18px;">
        Welcome to Hallishma's Cafe!<br>
        We're delighted to offer you an unforgettable dining experience in our cozy and welcoming atmosphere. Whether you're planning a casual brunch with friends or a romantic dinner for two, we're here to make your visit special.
    </p>

    <p style="font-size: 18px;">
        <strong>How to Reserve:</strong>
        <br>
        To reserve seats at Hallishma's Cafe, simply fill out the reservation form below with your details and preferences. Our team will do their best to accommodate your request and ensure that your dining experience exceeds your expectations.
    </p>
</div>


<div class="container">
    
    <h1>Fill your information here to reserve your seat at our cafe</h1>
    <form id="reservationForm" action="reservation_handler.php" method="POST">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Your Phone Number:</label>
        <input type="text" id="phone" name="phone" required>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>

        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required>

        <label for="guests">Number of Guests:</label>
        <select id="guests" name="guests" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <!-- Add more options as needed -->
        </select>

        <input type="submit" value="Reserve Now">
    </form>
    <!-- Message to display after reservation -->
    <div id="reservationMessage" style="display: none; text-align: center; margin-top: 20px;">
        <p style:"font-weight:100px;">Your table has been reserved!</p>
    </div>
</div>

<script>
    // When form is submitted, show reservation message
    document.getElementById("reservationForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form submission
        document.getElementById("reservationMessage").style.display = "block"; // Show reservation message
    });
</script>

</body>
</html>
