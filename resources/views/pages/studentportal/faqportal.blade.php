<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Body Styles */
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


        .card-header h3 {
            font-size: 1rem;
            font-weight: 500;
        }

        .card-body h5 {
            font-size: 0.875rem;
            font-weight: 500;
        }

        .card-body p,
        .card-body ul {
            font-size: 0.75rem;
        }

        .card-body ul {
            margin-left: 1.25rem;
        }

        a {
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Adjusting the FAQ heading position */
        .faq-heading {
            margin-top: 80px; /* Margin to ensure it clears the navbar */
        }

        /* Container padding */
        .container {
            padding-top: 80px; /* Added padding to the container */
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('images/logoschool.png') }}" alt="Logo" class="logo-image">
            <span class="logo-name">City of Bacoor National High School Springville Student Portal</span>
        </div>
        <div class="nav-links">
            <a href="student" class="nav-link">Home</a>
            <a href="#" class="nav-link">About</a>
            <a href="faqportal" class="nav-link">FAQ & Help</a>
            <a href="/" class="nav-button">Home Website</a>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center faq-heading mb-4">CBNHS Frequently Asked Questions</h1>

        <!-- Students Section -->
        <div class="card mb-4">
            <div class="card-header">
                <h3>Student Help</h3>
            </div>
            <div class="card-body">
                <h5>I don’t know my login credentials</h5>
                <p>You can login to your Microsoft Office 365, eLearning Management System (eLMS), and One STI Student Portal accounts using your STI Microsoft O365 email address.</p>
                <p><strong>Login credentials format:</strong></p>
                <ul>
                    <li><strong>Username:</strong> [Last name . last six digits of student number@campus.edu.ph]</li>
                    <li><strong>Password:</strong> Last name + birthdate (YYYYMMDD)</li>
                </ul>
                <p><strong>Sample:</strong></p>
                <ul>
                    <li><strong>Username:</strong> delacruz.873612@cbnhs.edu.ph</li>
                    <li><strong>Password:</strong> Delacruz19900422</li>
                </ul>
                <p><em>Passwords are case sensitive, so make sure you enter it with the first letter of your last name in UPPERCASE.</em></p>
                <p>If you're a new student and you can't login using the Microsoft Office 365 login credentials from your RAF, please contact your school to term activate your account.</p>
                <p>CBNHS Student Support link: <a href="#" target="_blank">Bacoor National High School Support</a></p>

                <h5 class="mt-4">I forgot my password</h5>
                <p>You can reset forgotten passwords via ‘Forgot password?’ in the login page. For other related concerns, you may contact <a href="#">Admin in the school</a>.</p>

                <h5 class="mt-4">I have missing subjects</h5>
                <p>Please inform your school to update your class assignment. Further, you may send an email at <a href="mailto:elms@sti.edu">CBNHS Email</a>.</p>
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
