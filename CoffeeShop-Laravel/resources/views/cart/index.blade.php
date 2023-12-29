<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>D'Coffee - DC</title>
        <link rel="stylesheet" href="styleCart.css">
    </head>
    <body>
        <!-- Start Header -->
        <header class="header">
            <a href="#" class="l    ogo">
                <img src="logo.webp.jpg" alt="">
            </a>
            <nav class="navbar">
                <a href="#Home">Home</a>
                <a href="/CoffeeShop/Menu/index.html">Menu</a>
                <a href="/CoffeeShop/Contact/index.html">About</a>
                <a href="#Home">Product</a>
                <a href="#Home«">Contact</a>
            </nav>
            <!-- Add these buttons to the header section -->
            <div class="user-buttons">
                <button id="login-btn">Login</button>
                <button id="register-btn">Register</button>
            </div>
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
        <section class="container-1">
          <div class="slider-wrapper">
            <div class="slider">
              <img src="2306501.jpg" alt="" id="slide-1">
              <img src="WHA_vince_Stars (2).jpg" alt="" id="slide-2">
              <img src="WHA_vince_Stars.jpg" alt="" id="slide3">
            </div>
          </div>
        </section>
        <!-- End Section 1 -->
        <!-- Start Section 2 -->
        <section class="container-2">
            <!-- Add Items to Cart Button -->
            <h1>Add Items to Cart</h1>

            <!-- Cart Page -->
            <div class="cart-page" id="cart-page">
                <h2>Your Cart</h2>
                <ul id="cart-list"></ul>
                <p>Total: $<span id="cart-total">0.00</span></p>
                <button id="place-order">Place Order</button>
            </div>

            <div class="icon">
                <div class="ic-search" id="search-btn">D</div>
                <div class="ic-bars" id="menu-btn">D</div>
                <button class="ic-shopping-cart" id="cart-btn">Cart</button>
            </div>
        
            <div class="cart-overlay" id="cart-overlay">
                <div class="cart">
                    <span class="close-cart" id="close-cart">&times;</span>
                    <h2>Your Cart</h2>
                    <div id="cart-items" class="cart-items"></div>
                    <h3>Total: $<span id="cart-total">0.00</span></h3>
                    <button id="place-order">Place Order</button>
                </div>
            </div>
        
            <div class="products" id="products">
                <!-- Coffee product cards go here -->
                <div class="product" data-name="Coffee 1" data-price="5.99">Coffee 1 - $5.99</div>
                <div class="product" data-name="Coffee 2" data-price="7.99">Coffee 2 - $7.99</div>
                <div class="product" data-name="Coffee 3" data-price="4.99">Coffee 3 - $4.99</div>
            </div>        
        </section>
        <!-- End Section 2 -->
        <!-- Start Footer -->
        <footer class="footer">
            <div class="footer-content">
                <div class="contact-info">
                    <h3>- Contact Us -</h3>
                    <p>Area 51</p>
                    <p>D' Coffee - DC</p>
                    <p>Email: d.eph.me@gmail.com</p>
                    <p>Phone: (+62) 815-7537-3148</p>
                </div>
                <div class="open-time">
                    <h3>- Open Hours -</h3>
                    <p>Mon - Fri 08:00 Am - 09:00 PM</p>
                    <p>Sat - Sun 08:00 Am - 10:00 PM</p>
                </div>
                <div class="social-links">
                    <h3>- Follow Us -</h3>
                    <a href="" class="social-icon">Facebook</a>
                    <a href="" class="social-icon">Instagram</a>
                    <a href="" class="social-icon">X</a>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 D' Coffee - DC. All right reserved.</p>
            </div>
        </footer>
        <!-- End Footer -->
    </body>
    <script src="scriptCart.js"></script>
</html>