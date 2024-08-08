<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <style>
        /* Reset default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styles */
        body {
            font-family: 'Roboto', sans-serif;
            color: #2C3E50;
            background-color: #FAFAFA;
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* Navbar styles */
        .navbar {
            background-color: #1c4587;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 15px 40px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: background-color 0.3s;
        }

        .navbar.scrolled {
            background-color: #163d6f;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo-image {
            height: 40px;
            margin-right: 10px;
        }

        .logo-name {
            font-size: 18px;
            font-weight: 500;
            color: #fff;
        }

        .nav-links {
            display: flex;
            align-items: center;
        }

        .nav-link, .nav-button {
            margin-left: 18px;
            text-decoration: none;
            color: #fff;
            font-size: 14px;
            font-weight: 400;
            padding: 8px 20px;
            border-radius: 7px;
            transition: background-color 0.3s, color 0.3s;
        }

        .nav-link:hover {
            background-color: #ECF0F1;
            color: #164e73;
        }

        .nav-button {
            background-color: #fff;
            color: #1c4587;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .nav-button:hover {
            background-color: #fff;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
        }

        /* Slideshow styles */
        .slideshow-container {
            position: relative;
            width: 100%;
            height: 75vh;
            margin-top: 80px;
            overflow: hidden;
            border-radius: 0;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
            height: 100%;
        }

        .slide {
            min-width: 100%;
            height: 100%;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Navigation arrows */
        .prev, .next {
            position: absolute;
            top: 50%;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.8);
            color: #2C3E50;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transform: translateY(-50%);
            transition: background-color 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .prev:hover, .next:hover {
            background-color: rgba(255, 255, 255, 1);
        }

        .prev {
            left: 20px;
        }

        .next {
            right: 20px;
        }

        /* Content styles */
        .content {
            padding: 60px 20px;
            text-align: center;
            background-color: #F4F4F9;
        }

        .feature-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: flex-start;
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 0;
            gap: 40px;
        }

        .feature {
            flex: 1;
            text-align: center;
            margin: 20px;
            padding: 20px;
            background-color: #FFFFFF;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            max-width: 350px;
        }

        .feature:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        .feature img {
            width: 80px;
            height: 80px;
            margin-bottom: 20px;
        }

        .feature-title {
            font-size: 20px;
            font-weight: 500;
            color: #2C3E50;
            margin-bottom: 12px;
        }

        .feature-description {
            font-size: 16px;
            color: #7F8C8D;
            line-height: 1.5;
        }

        /* Footer Styles */
        footer {
            padding: 20px;
            background-color: #ffffff;
            text-align: center;
            font-size: 14px;
            color: #95A5A6;
            box-shadow: 0 -1px 4px rgba(0, 0, 0, 0.1);
        }

        /* Learn More Section Styles */
        .learn-more-section {
            padding: 60px 20px;
            background-color: #FFFFFF;
            text-align: center;
        }

        .learn-more-section h2 {
            font-size: 24px;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .learn-more-section p {
            font-size: 16px;
            color: #7F8C8D;
            margin-bottom: 20px;
        }

        .learn-more-section a {
            padding: 10px 20px;
            background-color: #1c4587;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .learn-more-section a:hover {
            background-color: #164e73;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1100;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .login-form {
            display: flex;
            flex-direction: column;
        }

        .login-form input {
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-form button {
            padding: 10px;
            background-color: #1c4587;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .login-form button:hover {
            background-color: #164e73;
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar" id="navbar">
        <div class="container">
            <!-- Logo and Name -->
            <div class="logo">
                <img src="{{ asset('images/logoschool.png') }}" alt="Logo" class="logo-image">
                <span class="logo-name">City of Bacoor National High School</span>
            </div>

            <!-- Navigation Links -->
            <div class="nav-links">
                <a href="#helpdesk" class="nav-link">Helpdesk</a>
                <a href="faqportal" class="nav-link">FAQ</a>
                <a href="#login" class="nav-button" id="loginBtn">Login</a>
                <a href="/" class="nav-button">Home</a>
            </div>
        </div>
    </nav>

    <!-- Slideshow Container -->
    <div class="slideshow-container">
        <div class="slides">
            <div class="slide">
                <img src="{{ asset('images/welcomeback.jpg') }}" alt="Slide 1">
            </div>
            <div class="slide">
                <img src="{{ asset('images/welcomeback.png') }}" alt="Slide 2">
            </div>
            <div class="slide">
                <img src="{{ asset('images/enrollment.png') }}" alt="Slide 3">
            </div>
        </div>
        <!-- Navigation Arrows -->
        <div class="prev">&#10094;</div>
        <div class="next">&#10095;</div>
    </div>

    <!-- Feature Section -->
    <div class="content">
        <div class="feature-section">
            <div class="feature">
                <img src="{{ asset('images/interactive.png') }}" alt="Easy access to learning modules">
                <div class="feature-title">Easy Access to Learning Modules</div>
                <div class="feature-description">
                    Students can study ahead, review past lessons, and watch instructional videos with a click or a tap
                    of a button on any gadget.
                </div>
            </div>
            <div class="feature">
                <img src="{{ asset('images/activities.png') }}" alt="Interactive activities and assessments">
                <div class="feature-title">Interactive Activities and Assessments</div>
                <div class="feature-description">
                    Students can test their knowledge and skills through interactive polls, quizzes, and debates, among
                    others.
                </div>
            </div>
        </div>
    </div>

    <!-- Learn More Section -->
    <div class="learn-more-section">
        <h2>Learn More About Our Programs</h2>
        <p>Discover a wide range of programs and opportunities designed to enhance your learning experience.</p>
        <a href="#programs">Learn More</a>
    </div>

    <!-- Footer -->
    <footer>
        &copy; 2024 City of Bacoor National High School. All Rights Reserved.
    </footer>

    <!-- Modal for Login Form -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form class="login-form">
                <input type="text" placeholder="Username" required>
                <input type="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let slides = document.getElementsByClassName("slide");
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 3000); // Change slide every 3 seconds
        }

        // Manual navigation
        const prevButton = document.querySelector(".prev");
        const nextButton = document.querySelector(".next");

        prevButton.addEventListener("click", () => {
            slideIndex = (slideIndex - 2 + slides.length) % slides.length;
            showSlides();
        });

        nextButton.addEventListener("click", () => {
            showSlides();
        });

        // Modal logic
        const modal = document.getElementById("loginModal");
        const loginBtn = document.getElementById("loginBtn");
        const closeBtn = document.getElementsByClassName("close")[0];

        loginBtn.onclick = function () {
            modal.style.display = "block";
        }

        closeBtn.onclick = function () {
            modal.style.display = "none";
        }

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // Navbar scroll effect
        window.onscroll = function () {
            const navbar = document.getElementById("navbar");
            if (window.pageYOffset > 50) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        };
    </script>
</body>

</html>
    