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
        }

        .nav-link:hover {
            background-color: #f0f0f0;
            color: #000;
        }

        .nav-button {
            text-decoration: none;
            color: #fff;
            background-color: #1c4587;
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
            margin-left: 20px;
            transition: background-color 0.3s;
        }

        .nav-button:hover {
            background-color: #164e73;
        }
        /* Content styles */
        .content {
            padding: 60px 20px;
            text-align: center;
            background-color: #F4F4F9;
        }

        /* Student Portal Section */
        .student-portal-section {
            background-color: #ffffff;
            padding: 120px 20px;
            text-align: center;
        
            margin-top: 80px; /* Adjusted margin-top for better positioning */
        }

        .student-portal-section h2 {
            font-size: 24px;
            font-weight: 500;
            margin-bottom: 20px;
            color: #1c4587;
        }

        .student-portal-section p {
            font-size: 16px;
            color: #7F8C8D;
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
    <nav class="navbar">
        <!-- Logo and Name -->
        <div class="logo">
            <img src="{{ asset('images/logoschool.png') }}" alt="Logo" class="logo-image">
            <span class="logo-name">City of Bacoor National High School</span>
        </div>

        <!-- Navigation Links -->
        <div class="nav-links">
            <a href="#helpdesk" class="nav-link">Helpdesk</a>
            <a href="faqportal" class="nav-link">FAQ</a>
            <a href="#about" class="nav-link">About</a>
            <a href="/" class="nav-button">Home</a>
        </div>
    </nav>

    <!-- Student Portal Section -->
    <div class="student-portal-section">
        <h2>Welcome to the Student Portal</h2>
        <p>The Student Portal is your gateway to academic resources, grade tracking, class schedules, and more. Easily access your assignments, connect with your teachers, and stay updated with school announcements.</p>
        <a href="#login" id="portalLoginBtn">Access Your Portal</a>
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
                    Participate in interactive quizzes, and assessments, and track your progress through online exams.
                </div>
            </div>
            <div class="feature">
                <img src="{{ asset('images/connectimage.png') }}" alt="Connect with your teachers">
                <div class="feature-title">Connect with Your Teachers</div>
                <div class="feature-description">
                    Students can ask questions and get real-time help from teachers and counselors.
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        &copy; 2024 City of Bacoor National High School. All rights reserved.
    </footer>

    <!-- Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeBtn">&times;</span>
            <div class="modal-header">Student Login</div>
            <form class="login-form">
                <input type="text" placeholder="Enter your username" required>
                <input type="password" placeholder="Enter your password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <script>
        // Get modal elements
        const modal = document.getElementById("loginModal");
        const portalLoginBtn = document.getElementById("portalLoginBtn");
        const closeBtn = document.getElementById("closeBtn");

        // Listen for open click
        portalLoginBtn.addEventListener("click", openModal);

        // Listen for close click
        closeBtn.addEventListener("click", closeModal);

        // Listen for outside click
        window.addEventListener("click", outsideClick);

        // Function to open modal
        function openModal() {
            modal.style.display = "block";
        }

        // Function to close modal
        function closeModal() {
            modal.style.display = "none";
        }

        // Function to close modal if outside click
        function outsideClick(e) {
            if (e.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>
