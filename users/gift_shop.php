<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <title>Gift Shop</title>
        <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
    display: flex;
    flex-direction: column; /* Setting flex direction to column */
    align-items: center; /* Centering content horizontally */
    min-height: 100vh; /* Ensuring full viewport height */
}

.container {
    max-width: 600px;
    width: 100%;
    padding: 20px;
    text-align: center;
}

.heading {
    font-size: 24px;
    color: #4e342e;
}

.products {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.product {
    text-align: center;
    width: calc(33.33% - 20px);
    border: 1px solid #8d6e63;
    border-radius: 5px;
    overflow: hidden;
    transition: transform 0.3s ease-in-out;
}

.product:hover {
    transform: translateY(-5px);
}

.product img {
    width: 100%;
    border-radius: 5px;
}

.product-content {
    padding: 20px;
    background-color: #efebe9;
}

.product-title {
    font-size: 20px;
    margin-bottom: 10px;
    color: #4e342e;
}

.product-detail {
    font-size: 16px;
    margin-bottom: 20px;
    color: #6d4c41;
}

.price {
    font-size: 18px;
    font-weight: bold;
    color: #4e342e;
}

.add-to-cart {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #4e342e;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 22px;
    transition: background-color 0.3s ease;
}

.add-to-cart:hover {
    background-color: #6d4c41;
}

.cart {
    margin-top: 20px;
    text-align: center;
}

.cart-items {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.cart-item {
    display: flex;
    justify-content: space-between;
}

.total {
    font-weight: bold;
    margin-top: 10px;
    font-size: 22px;

}

.order-now {
    margin-top: 20px;
    padding: 15px 40px; /* Increased padding */
    background-color: #4e342e;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-size: 22px;
}

.order-now:hover {
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
    </head>
    <body>
    <h1 class="heading"> <span>Our</span> Gift Shop</h1>
    <div class="content" style="text-align: center; color: white; max-width: 800px; margin: 0 auto;">
    <p style="font-size: 18px;">
        Welcome to our gift shop!<br>
        We're delighted to offer you an unforgettable dining experience in our cozy and welcoming atmosphere. Whether you're planning a casual brunch with friends or a romantic dinner for two, we're here to make your visit special.
    </p>
</div>
<br>
<br>
<br>

    <div class="products">
        <div class="product">
            <img src="product1.jpg" alt="Product 1">
            <h2>Product 1</h2>
            <p>Description of Product 1.</p>
            <p class="price">₹39.99</p>
            <button class="add-to-cart" data-price="39.99">Add to Cart</button>
        </div>
        <div class="product">
            <img src="product2.jpg" alt="Product 2">
            <h2>Product 2</h2>
            <p>Description of Product 2.</p>
            <p class="price">₹49.99</p>
            <button class="add-to-cart" data-price="49.99">Add to Cart</button>
        </div>
        <div class="product">
            <img src="product3.jpg" alt="Product 3">
            <h2>Product 3</h2>
            <p>Description of Product 3.</p>
            <p class="price">₹59.99</p>
            <button class="add-to-cart" data-price="59.99">Add to Cart</button>
        </div>
        <div class="product">
            <img src="product4.jpg" alt="Product 4">
            <h2>Product 4</h2>
            <p>Description of Product 4.</p>
            <p class="price">₹29.99</p>
            <button class="add-to-cart" data-price="29.99">Add to Cart</button>
        </div>
        <div class="product">
            <img src="product5.jpg" alt="Product 5">
            <h2>Product 5</h2>
            <p>Description of Product 5.</p>
            <p class="price">₹19.99</p>
            <button class="add-to-cart" data-price="19.99">Add to Cart</button>
        </div>
        <div class="product">
            <img src="product6.jpg" alt="Product 6">
            <h2>Product 6</h2>
            <p>Description of Product 6.</p>
            <p class="price">₹69.99</p>
            <button class="add-to-cart" data-price="69.99">Add to Cart</button>
        </div>
    </div>
    <br>
    <div class="cart">
    <h1 class="heading"> <span>Shopping</span> Cart</h1>
        <div class="cart-items">
            <!-- Cart items will be added here dynamically -->
        </div>
        <p class="total">Total: ₹0.00</p>
        <button class="order-now">Order Now</button>
    </div>
    <script src="scriptgift.js"></script>
</body>
</html>

