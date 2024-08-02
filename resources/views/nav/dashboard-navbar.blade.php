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
            background-color: #e0dddd;
            display: flex;
            align-items: center; 
        }

        .nav-link {
            color: #000000;
            font-size: 1em;
            padding: 0.75rem 1rem;
        }

        .nav-link.dropdown-toggle{
            color: #000000;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            color: #ffffff;
        }
        .navbar-brand span{
            color:#666666;
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

        .navbar-options{
            margin-right: 40px;
        }

        

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logoschool.png') }}" alt="Logo">
            <span>Learner Information System</span>
        </a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="navbar-options" href="#" style="color: #666666">
                Login
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="navbar-options" href="#" style="color: #666666">
                Logout
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
