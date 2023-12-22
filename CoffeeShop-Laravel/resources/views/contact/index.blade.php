<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>D'Coffee - DC</title>
        <link rel="stylesheet" href="styleContact.css">
    </head>
    <body>
        <!-- Start Header -->
        <header class="header">
            <a href="#" class="logo">
                <img src="" alt="">
            </a>
            <nav class="navbar">
                <a href="#Home">Home</a>
                <a href="/CoffeeShop/Menu/index.html">Menu</a>
                <a href="/CoffeeShop/Contact/index.html">About</a>
                <a href="#Home">Product</a>
                <a href="#Home«">Contact</a>
            </nav>
            <div class="icon">
                <div class="ic-search" id="search-btn">D</div>
                <div class="ic-shopping-cart" id="cart-btn">D</div>
                <div class="ic-bars" id="menu-btn">D</div>
            </div>
            <div class="search-form">
                <input type="search" id="search-box" placeholder="Search here...">
                <label for="search-box" class="fas fa-search"></label>
            </div>
        </header>
        <!-- End Header -->
        <!-- Start Section 1 -->
        <section class="container">
          <div class="slider-wrapper">
            <div class="slider">
                <img src="2306501.jpg" alt="" class="active" id="slide-1">
                <img src="WHA_vince_Stars (2).jpg" alt="" id="slide-2">
                <img src="WHA_vince_Stars.jpg" alt="" id="slide-3">
            </div>
            <div class="slider-controls">
                <button onclick="prevSlide()">Previous</button>
                <button onclick="nextSlide()">Next</button>
            </div>
            </div>
          </div>
        </section>
        <!-- End Section 1 -->

        <!-- Start Script -->
        <script src="scriptContact.js"></script>
        <!-- End Script -->
    </body>
</html>