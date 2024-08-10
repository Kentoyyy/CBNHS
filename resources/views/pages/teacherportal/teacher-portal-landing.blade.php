<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            background: url('path_to_your_hero_image.jpg') no-repeat center center;
            background-size: cover;
            padding: 120px 20px;
            text-align: center;
            color: #fff;
            margin-top: 80px;
        }

        .teacher-portal-section h2 {
            font-size: 36px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #fff;
        }

        .teacher-portal-section p {
            font-size: 18px;
            margin-bottom: 20px;
            color: #fff;
        }

        .teacher-portal-section a {
            padding: 10px 20px;
            background-color: #1c4587;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .teacher-portal-section a:hover {
            background-color: #164e73;
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

            .features-section {
                flex-direction: column;
            }

            footer {
                flex-direction: column;
            }

            footer a {
                margin-top: 5px;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('images/logoschool.png') }}" alt="Laravel Logo" class="logo-image">
            <span class="logo-name">City of Bacoor National High School Springville Teacher Portal</span>
        </div>
        <div class="nav-links">
            <a href="#" class="nav-link">Home</a>
            <a href="#" class="nav-link">About</a>
            <a href="#" class="nav-link">FAQ & Help</a>
            <a href="/" class="nav-button">Home Website</a>
        </div>
    </nav>

    <!-- Main Content -->
    <section class="teacher-portal-section">
        <h2>Welcome to the Teacher Portal</h2>
        <p>Manage your classes, track student progress, and access teaching resources.</p>
        <a href="#" id="login-button">Login to Your Account</a>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="feature">
            <img src="{{ asset('images/grade.png') }}" alt="Grade Management Icon">
            <h3 class="feature-title">Grade Management</h3>
            <p class="feature-description">Easily manage and submit grades for your students with our intuitive tools.</p>
        </div>
        <div class="feature">
            <img src="{{ asset('images/attendance.png') }}" alt="Attendance Tracking Icon">
            <h3 class="feature-title">Attendance Tracking</h3>
            <p class="feature-description">Track student attendance seamlessly with our integrated system.</p>
        </div>
        <div class="feature">
            <img src="{{ asset('images/resources.png') }}" alt="Teaching Resources Icon">
            <h3 class="feature-title">Teaching Resources</h3>
            <p class="feature-description">Access a wealth of teaching resources to support your curriculum planning.</p>
        </div>
    </section>

    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-header">Teacher Login</div>
            <form class="login-form">
                <input type="email" placeholder="Email Address" required>
                <input type="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
        <a href="#">Contact Us</a>
    </footer>

    <script>
        // Modal Logic
        var modal = document.getElementById("loginModal");
        var btn = document.getElementById("login-button");
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
    </script>
</body>

</html>
