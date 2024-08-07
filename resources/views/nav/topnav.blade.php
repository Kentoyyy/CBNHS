<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>CBNHS</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        
        .sticky-top {
            position: -webkit-sticky; /* Safari */
            position: sticky;
            top: 0;
            z-index: 1030;
        }

        .navbar {
            padding: 0.5rem 1rem;
            background-color: #1c4587; 
            display: flex;
            align-items: center; 
            color: #fff;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }

        .navbar-brand span {
            font-size: 1rem;
            font-weight: 700;
        }

        .navbar-toggler {
            border: none;
            background-color: transparent;
        }

        .navbar-nav {
            margin-left: auto;
        }

        .nav-link {
            color: #fff !important; /* Ensure text color is pure white */
            font-size: 0.875rem; /* Smaller font size */
            padding: 0.5rem 1rem; /* Adjust padding for smaller size */
        }

        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu {
            background-color: #1c4587; 
            border: none;
        }

        .dropdown-item {
            color: #fff;
            padding: 0.5rem 1rem;
            font-size: 0.875rem; /* Smaller font size */
        }

        .dropdown-item:hover,
        .dropdown-item:focus,
        .dropdown-item:active {
            background-color: rgba(255, 255, 255, 0.1); /* Background color on hover, focus, and active */
            color: #8c1212; /* Text color on hover, focus, and active */
        }

        .nav-link:hover,
        .nav-link:focus,
        .nav-link:active {
            color: #165fa8; /* Text color on hover, focus, and active */
            background-color: rgba(255, 255, 255, 0.1); /* Background color on hover, focus, and active */
            border-radius: 0.25rem;
        }

        .navbar-collapse {
            margin-left: auto; 
            padding-left: 2rem; 
        }

        @media (max-width: 991.98px) {
            .navbar-expand-lg .navbar-nav {
                text-align: center;
            }

            .navbar-expand-lg .navbar-collapse {
                margin-top: 0.5rem;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logoschool.png') }}" alt="Logo">
            <span>City of Bacoor National High School Springville</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="homeDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Home
                    </a>
                    <div class="dropdown-menu" aria-labelledby="homeDropdown">
                        <a class="dropdown-item" href="#">Information for Parents</a>
                        <a class="dropdown-item" href="#">Issuance Requirements</a>
                        <a class="dropdown-item" href="#">Job Opportunities</a>
                        <a class="dropdown-item" href="#">School Calendar</a>
                        <a class="dropdown-item" href="#">Terms of Use</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                    </a>
                    <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                        <a class="dropdown-item" href="mission">Our Mission</a>
                        <a class="dropdown-item" href="intendent">Superintendent's Corner</a>
                        <a class="dropdown-item" href="#">Team</a>
                        <a class="dropdown-item" href="#">Contact</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="admissionsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admissions
                    </a>
                    <div class="dropdown-menu" aria-labelledby="admissionsDropdown">
                        <a class="dropdown-item" href="admission">Application Process</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="personnelDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Personnel
                    </a>
                    <div class="dropdown-menu" aria-labelledby="personnelDropdown">
                        <a class="dropdown-item" href="#">Administration</a>
                        <a class="dropdown-item" href="#">Faculty</a>
                        <a class="dropdown-item" href="#">Staff</a>
                        <a class="dropdown-item" href="#">Support Services</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="studentsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Students
                    </a>
                    <div class="dropdown-menu" aria-labelledby="studentsDropdown">
                        <a class="dropdown-item" href="#">Student Life</a>
                        <a class="dropdown-item" href="#">Extracurriculars</a>
                        <a class="dropdown-item" href="#">Student Support</a>
                        <a class="dropdown-item" href="#">Student Handbook</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="resourcesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Resources
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
