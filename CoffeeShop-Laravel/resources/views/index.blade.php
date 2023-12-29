<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'Coffee - DC</title>
    <link rel="stylesheet" href="{{ asset('styleHome.css') }}">
</head>
<body>
    <!-- Start Header -->
    <header class="header">
        <a href="#" class="logo">
            <img src="{{ asset('logo.webp.jpg') }}" alt=""> 
        </a>
        <nav class="navbar">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/menu') }}">Menu</a> 
            <a href="{{ url('/about') }}">About</a>
            <a href="#Home">Product</a>
            <a href="#Home">Contact</a>
            <div class="logreg">
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            </div>
        </nav>
    </header>
    <!-- End Header -->

    <!-- Start Section 1 -->
    <section class="container-1">
        <div class="slider-wrapper">
            <div class="slider">
                <img src="{{ asset('2306501.jpg') }}" alt="" id="slide-1">
                <img src="{{ asset('WHA_vince_Stars (2).jpg') }}" alt="" id="slide-2">
                <img src="{{ asset('WHA_vince_Stars.jpg') }}" alt="" id="slide-3">
            </div>
        </div>
    </section>
    <!-- End Section 1 -->

    <!-- Start Section 2 -->
    <section class="container-2">
        <div class="slider-wrapper">
            <div class="slider">
                <img src="{{ asset('2306501.jpg') }}" alt="" id="slide-1">
                <img src="{{ asset('WHA_vince_Stars (2).jpg') }}" alt="" id="slide-2">
                <img src="{{ asset('WHA_vince_Stars.jpg') }}" alt="" id="slide-3">
            </div>
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
                <p>Mon - Fri 08:00 AM - 09:00 PM</p>
                <p>Sat - Sun 08:00 AM - 10:00 PM</p>
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
</html>
