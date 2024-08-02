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

        .nav-link {
            color: #fff;
            font-size: 1em;
            padding: 0.75rem 1rem;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            border-radius: 90%;
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        .navbar-toggler {
            border: none;
            background-color: transparent;
        }

        .navbar-nav {
            margin-left: auto;
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
        }

        .dropdown-item:hover {
            background-color: rgba(255, 255, 255, 0.1); /* Hover background color of dropdown items */
            color: #fff; /* Text color on hover */
        }

        .nav-link:hover {
            color: #f8f9fa; /* Text color on hover */
            background-color: rgba(255, 255, 255, 0.1); /* Background color on hover */
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
            <span>City of Bacoor NHS Springville</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Home
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Information for Parents</a>
                        <a class="dropdown-item" href="#">Issuance Requirements</a>
                        <a class="dropdown-item" href="#">Job Opportunities</a>
                        <a class="dropdown-item" href="#">School Calendar</a>
                        <a class="dropdown-item" href="#">Terms of Use</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Admissions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Personnel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Resources</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Site Map</a>
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
