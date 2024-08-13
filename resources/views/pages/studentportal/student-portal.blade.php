<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">
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
            padding: 10px 20px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo-image {
            height: 30px;
            margin-right: 10px;
        }

        .logo-name {
            font-size: 16px;
            font-weight: 500;
            color: #fff;
        }

        .nav-links {
            display: flex;
            align-items: center;
        }

        .nav-link {
            text-decoration: none;
            color: #fff;
            font-size: 14px;
            font-weight: 400;
            margin-left: 20px;
            padding: 6px 12px;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
            border-bottom: 2px solid transparent;
        }

        .nav-link:hover {
            background-color: #f0f0f0;
            color: #000;
            border-bottom: 2px solid #fff;
        }

        .nav-button {
            text-decoration: none;
            color: #000;
            background-color: #fdfdfd;
            padding: 6px 25px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
            margin-left: 20px;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .nav-button:hover {
            background-color: #476ca9;
        }

        /* Student Portal Section */
        .student-portal-section {
            background: url('path_to_your_hero_image.jpg') no-repeat center center;
            background-size: cover;
            padding: 120px 20px;
            text-align: center;
            color: #000;
            margin-top: 80px;
        }

        .student-portal-section h2 {
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .student-portal-section p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .student-portal-section a {
            padding: 10px 20px;
            background-color: #1c4587;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .student-portal-section a:hover {
            background-color: #164e73;
        }

        /* Content styles */
        .content {
            background: linear-gradient(to right, #f4f4f9, #ffffff);
            padding: 60px 20px;
            text-align: center;
        }

        /* Feature Section */
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
            max-width: 350px;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .feature.in-view {
            opacity: 1;
            transform: translateY(0);
        }

        .feature img {
            width: 80px;
            height: 80px;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .feature:hover img {
            transform: scale(1.1);
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

        /* Testimonial Section */
        .testimonial-section {
            background-color: #ffffff;
            padding: 40px 20px;
            text-align: center;
            font-size: 18px;
            font-style: italic;
            color: #2C3E50;
            margin-top: 40px;
        }

        .testimonial-section p {
            opacity: 0;
            animation: fadeIn 5s ease-in-out infinite;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        /* Statistics Section */
        .statistics-section {
            display: flex;
            justify-content: space-around;
            background-color: #F4F4F9;
            padding: 40px 20px;
            margin-top: 40px;
        }

        .stat {
            text-align: center;
        }

        .stat h3 {
            font-size: 36px;
            color: #1c4587;
            margin-bottom: 10px;
        }

        .stat p {
            font-size: 16px;
            color: #7F8C8D;
        }

        /* Footer Styles */
        footer {
            padding: 20px;
            background-color: #ffffff;
            text-align: center;
            font-size: 14px;
            color: #95A5A6;
            box-shadow: 0 -1px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        footer a {
            color: #1c4587;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
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

        .modal-header {
            font-size: 20px;
            font-weight: 500;
            margin-bottom: 10px;
            text-align: center;
            color: #1c4587;
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
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-form button:hover {
            background-color: #164e73;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .nav-button {
                margin-left: 0;
                margin-top: 10px;
            }

            .feature-section {
                flex-direction: column;
            }

            .stat {
                flex-basis: 100%;
                margin-bottom: 20px;
            }

            footer {
                flex-direction: column;
            }

            footer a {
                margin-top: 5px;
            }
        }

        /* Facebook iframe styles */
        .facebook-iframe-container {
            margin-top: 40px;
            text-align: center;
        }

        .facebook-iframe {
            border: none;
            overflow: hidden;
            width: 340px; /* Adjust width as needed */
            height: 400px; /* Adjust height as needed */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <a href="/" class="logo-link">
                <img src="{{ asset('images/logoschool.png') }}" alt="City of Bacoor National High School Logo" class="logo-image">
            </a>
            <span class="logo-name">City of Bacoor National High School Springville</span>
        </div>
        <div class="nav-links">
            <a href="#" class="nav-link">Home</a>
            <a href="guideenrollment" class="nav-link">How to Enroll?</a>
            <a href="faqportal" class="nav-link">FAQ & Help</a>
            <a href="/" class="nav-button">Home Website</a>
        </div>
    </nav>

    <!-- Main Content -->
    <section class="student-portal-section">
        <h2>Welcome to the Student Portal</h2>
        <p>Your one-stop destination for academic resources and support.</p>
        <a href="#" class="enter-button">Enter Portal</a>
    </section>

    <!-- Feature Section -->
    <section class="content">
        <div class="feature-section">
            <div class="feature">
                <img src="{{ asset('images/interactive.png') }}" alt="Feature 1">
                <h3 class="feature-title">Interactive Learning</h3>
                <p class="feature-description">Engage with our interactive learning materials designed to make studying fun and effective.</p>
            </div>
            <div class="feature">
                <img src="{{ asset('images/connectimage.png') }}" alt="Feature 2">
                <h3 class="feature-title">Student Support</h3>
                <p class="feature-description">Access a wide range of support services to help you succeed academically and personally.</p>
            </div>
            <div class="feature">
                <img src="{{ asset('images/profilestudent.png') }}" alt="Feature 3">
                <h3 class="feature-title">Resource Center</h3>
                <p class="feature-description">Explore our comprehensive resource center for all your academic needs.</p>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <p>"The student portal has been a game-changer in my academic journey. Highly recommend it!"</p>
    </section>

    <!-- Statistics Section -->
    <section class="statistics-section">
        <div class="stat">
            <h3>95%</h3>
            <p>Student Satisfaction</p>
        </div>
        <div class="stat">
            <h3>54+</h3>
            <p>Courses Available</p>
        </div>
        <div class="stat">
            <h3>3k+</h3>
            <p>Active Users</p>
        </div>
    </section>

    <!-- Facebook Section -->
    <section class="facebook-iframe-container">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDepEdTayoCBNHSS305688&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
    </section>

    <!-- Footer -->
    <footer>
        <a href="#">Terms of Service</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Contact Us</a>
    </footer>

    <!-- Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-header">Student Login</div>
            <form class="login-form">
                <input type="text" placeholder="Username" required>
                <input type="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <script>
        // Modal JavaScript
        var modal = document.getElementById("loginModal");
        var btn = document.querySelector(".enter-button");
        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // Feature animation on scroll
        window.addEventListener('scroll', function() {
            var features = document.querySelectorAll('.feature');
            features.forEach(function(feature) {
                var rect = feature.getBoundingClientRect();
                if (rect.top < window.innerHeight) {
                    feature.classList.add('in-view');
                }
            });
        });
    </script>
</body>

</html>
