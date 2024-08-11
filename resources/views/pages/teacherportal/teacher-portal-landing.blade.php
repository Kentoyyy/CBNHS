<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">
    <title>Teacher Portal</title>
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



        /* Teacher Portal Section */
        .teacher-portal-section {
            background-color: #f3f3f3;
            background-size: cover;
            padding: 120px 20px;
            text-align: center;
            color: #000;
            margin-top: 80px;
            position: relative;
        }

        .teacher-portal-section h2 {
            font-size: 36px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #000;
            animation: fadeInDown 1s ease-out;
        }

        .teacher-portal-section p {
            font-size: 18px;
            margin-bottom: 20px;
            color: #000;
            animation: fadeInUp 1s ease-out;
        }

        .teacher-portal-section .portal-buttons {
            margin-top: 20px;
        }

        .teacher-portal-section .portal-buttons a {
            padding: 10px 20px;
            background-color: #1c4587;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
            display: inline-block;
            margin: 10px 10px;
        }

        .teacher-portal-section .portal-buttons a:hover {
            background-color: #164e73;
            transform: scale(1.05);
        }
        /* Adjusted styles for welcome section with logo */
.welcome-container {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px; /* Space between logo and text */
}

.welcome-logo {
    width: 50px; /* Adjust the size of the logo as needed */
    height: auto;
    animation: fadeInDown 1s ease-out;
}

.teacher-portal-section h2 {
    font-size: 36px;
    font-weight: 600;
    margin-bottom: 15px;
    color: #fff;
    animation: fadeInDown 1s ease-out;
}

        /* Announcement Section */
        .announcement-section {
            background-color: #1c4587;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .announcement-section h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .announcement-section p {
            font-size: 16px;
        }

        /* Additional Content Below Announcements */
        .additional-content-section {
            background-color: #164e73;
            color: white;
            padding: 40px 20px;
            text-align: center;
        }

        .additional-content-section img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }

        .additional-content-section p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        /* Features Section */
        .features-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: flex-start;
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
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
        .additional-content-section img {
    max-width: 100%;  /* Ensures the image scales down to fit the container, but not larger than its original size */
    height: auto;     /* Maintains the aspect ratio of the image */
    width: 300px;     /* Sets a specific width for the image */
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
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
            background-color: #476ca9;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
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
            <span class="logo-name">City of Bacoor National High School Springville Student Portal</span>
        </div>
        <div class="nav-links">
            <a href="student" class="nav-link">Home</a>
           
            <a href="faqportal" class="nav-link">FAQ & Help</a>
            <a href="/" class="nav-button">Home Website</a>
        </div>
    </nav>

    <!-- Teacher Portal Section -->
    <section class="teacher-portal-section">
        <div class="welcome-container">
            <img src="{{ asset('images/logoschool.png') }}" alt="School Logo" class="welcome-logo">
            <h2 style="color: #000;">Welcome to the Teacher Portal</h2>
        </div>
        <p>Your gateway to essential resources and updates</p>
        <div class="portal-buttons">
            <a href="#features">Explore Features</a>
            <a href="#loginModal" id="loginBtn">Login to Your Account</a>
        </div>
    </section>

    <!-- Announcement Section -->
    <section class="announcement-section">
        <h3>Important Updates</h3>
        <p>Stay informed with the latest news and announcements</p>
    </section>

    <!-- Additional Content Section -->
    <section class="additional-content-section">
        <img src="{{ asset('images/discoverimage.png') }}" alt="Engaging Image">
        <p>Discover new tools and resources available for your classroom.</p>
    </section>

    <!-- Features Section -->
    <section class="features-section" id="features">
        <div class="feature" id="feature1">
            <img src="{{ asset('images/plan.png') }}" alt="Lesson Plans">
            <h4 class="feature-title">Lesson Plans</h4>
            <p class="feature-description">Access a wide range of lesson plans tailored to different subjects and grades.</p>
        </div>
        <div class="feature" id="feature2">
            <img src="{{ asset('images/meetings.png') }}" alt="Online Meetings">
            <h4 class="feature-title">Online Meetings</h4>
            <p class="feature-description">Easily schedule and conduct online meetings with students and parents.</p>
        </div>
        <div class="feature" id="feature3">
            <img src="{{ asset('images/interactive.png') }}" alt="Teacher Resources">
            <h4 class="feature-title">Teacher Resources</h4>
            <p class="feature-description">Explore an extensive collection of resources to enhance your teaching experience.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <a href="#privacy-policy">Privacy Policy</a>
        <a href="#terms-of-service">Terms of Service</a>
        <a href="#contact">Contact Us</a>
    </footer>

    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-header">Teacher Login</div>
            <form class="login-form">
                <input type="text" placeholder="Username">
                <input type="password" placeholder="Password">
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <!-- Modal Script -->
    <script>
        var modal = document.getElementById("loginModal");
        var btn = document.getElementById("loginBtn");
        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function () {
            modal.style.display = "block";
        }

        span.onclick = function () {
            modal.style.display = "none";
        }

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // Feature Animation on Scroll
        document.addEventListener('scroll', function () {
            var features = document.querySelectorAll('.feature');
            features.forEach(function (feature) {
                if (feature.getBoundingClientRect().top < window.innerHeight) {
                    feature.classList.add('in-view');
                }
            });
        });
    </script>
</body>

</html>
