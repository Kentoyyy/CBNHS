<!-- resources/views/faq.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
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

        .card-header h3 {
            font-size: 1.125rem; /* Slightly larger text for section headers */
        }
        .card-body h5 {
            font-size: 1rem; /* Smaller text for questions */
            font-weight: 500;
        }
        .card-body p, .card-body ul {
            font-size: 0.875rem; /* Smaller text for paragraphs and lists */
        }
        .card-body ul {
            margin-left: 1.25rem; /* Adjust list indentation */
        }
        a {
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
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
    <div class="container mt-5">
        <h1 class="text-center mb-4">CBNHS Frequently Asked Questions</h1>
        
        <!-- Students Section -->
        <div class="card mb-4">
            <div class="card-header">
                <h3>Student Help</h3>
            </div>
            <div class="card-body">
                <h5>I don’t know my login credentials</h5>
                <p>You can access the Student Portal, eLearning Management System (eLMS), and Office 365 using your school-provided email address. The format is as follows:</p>
                <ul>
                    <li><strong>Username:</strong> [Last name].[Last six digits of student number]@school.edu.ph</li>
                    <li><strong>Password:</strong> [Last name][Birthdate in YYYYMMDD format]</li>
                </ul>
                <p><strong>Example:</strong></p>
                <ul>
                    <li><strong>Username:</strong> delacruz.123456@school.edu.ph</li>
                    <li><strong>Password:</strong> Delacruz20010515</li>
                </ul>
                <p><em>Note: Passwords are case-sensitive, so ensure the first letter of your last name is capitalized.</em></p>
                <p>If you’re new and unable to log in using these credentials, please contact your school to activate your account.</p>
                <p>For further assistance, visit the Student Support link: <a href="https://www.school.edu/support" target="_blank">https://www.school.edu/support</a></p>
                
                <h5 class="mt-4">I forgot my password</h5>
                <p>You can reset your password by clicking the ‘Forgot password?’ link on the login page. For issues related to Office 365 credentials, email support at <a href="mailto:elms@school.edu.ph">elms@school.edu.ph</a>.</p>
                
                <h5 class="mt-4">I have missing subjects</h5>
                <p>Notify your school to update your class assignment. Alternatively, email <a href="mailto:elms@school.edu.ph">elms@school.edu.ph</a> for assistance.</p>
            </div>
        </div>
        
        <!-- Teachers Section -->
        <div class="card mb-4">
            <div class="card-header">
                <h3>Teacher Help</h3>
            </div>
            <div class="card-body">
                <h5>I don’t know my eLMS login credentials</h5>
                <p>For your eLMS login credentials, please coordinate with your Academic Head or IT department.</p>
                
                <h5 class="mt-4">I don’t have any assigned courses</h5>
                <p>Ensure that your class assignments are up-to-date by contacting your school Registrar.</p>
                
                <h5 class="mt-4">I have missing students in my courses</h5>
                <p>You can manually enroll students via the People picker feature or provide them with the course access code for self-enrollment.</p>
            </div>
        </div>
        
        <!-- Parents Section -->
        <div class="card mb-4">
            <div class="card-header">
                <h3>Parent Help</h3>
            </div>
            <div class="card-body">
                <h5>How can I access my child's academic records?</h5>
                <p>Parents can view their child's academic progress, attendance, and other details through the Parent Portal. Ensure you have the login credentials provided by the school.</p>
                
                <h5 class="mt-4">I forgot my Parent Portal login credentials</h5>
                <p>If you've forgotten your Parent Portal credentials, you can reset them via the ‘Forgot password?’ option on the login page or contact the school’s administrative office for assistance.</p>
                
                <h5 class="mt-4">I need to contact my child's teacher</h5>
                <p>You can reach out to your child's teacher through the Parent Portal messaging system or email. Contact details for teachers are usually available on the Portal under the "Contacts" or "Directory" section.</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
