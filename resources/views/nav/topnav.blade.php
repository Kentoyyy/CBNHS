<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Navigation Bar Example</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">CBNHS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                    </a>
                    <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                        <a class="dropdown-item" href="#">Subitem 1</a>
                        <a class="dropdown-item" href="#">Subitem 2</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="transparencyDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Transparency
                    </a>
                    <div class="dropdown-menu" aria-labelledby="transparencyDropdown">
                        <a class="dropdown-item" href="#">Subitem 1</a>
                        <a class="dropdown-item" href="#">Subitem 2</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="issuancesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Issuances
                    </a>
                    <div class="dropdown-menu" aria-labelledby="issuancesDropdown">
                        <a class="dropdown-item" href="#">Subitem 1</a>
                        <a class="dropdown-item" href="#">Subitem 2</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="schoolsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Schools
                    </a>
                    <div class="dropdown-menu" aria-labelledby="schoolsDropdown">
                        <a class="dropdown-item" href="#">Elementary Schools</a>
                        <a class="dropdown-item" href="#">Junior High Schools</a>
                        <a class="dropdown-item" href="#">Senior High Schools</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Private Schools</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Online Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <a class="dropdown-item" href="#">Service 1</a>
                        <a class="dropdown-item" href="#">Service 2</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Video Explainer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Research</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Directory</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
