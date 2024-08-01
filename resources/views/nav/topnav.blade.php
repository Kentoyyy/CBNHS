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
      .header {
            background-color: #04508c;
            padding: 20px 60px;
            color: #fff
        }
        .logo img, .ssglogo img {
            max-width: 100%;
            height: auto;
            margin-top: 30px
        }
        .title {
            font-size: 2.8rem;
            font-family: 'Poppins';
            color: #fff
            font-weight: bold;
        }
        .subtitle {
            font-size: 1rem;
            color: #fff
            color: #6c757d;
        }
        .time {
            font-size: 0.875rem;
            font-family: 'Poppins';
            
        }
    </style>
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
    <div class="header container-fluid">
    <div class="row align-items-center">
        <div class="col-12 col-md-2 d-flex justify-content-center">
            <div class="logo">
                <img src="{{ asset('images/logoschool.png') }}" alt="Logo School">
            </div>
        </div>
        <div class="col-12 col-md-8 text-center">
            <div class="title">Department of Education</div>
            <div class="subtitle">Bacoor National High School - Springville</div>
            <div class="subtitle">"Numero Uno sa Kalidad Na Edukasyon para sa Batang Bacooreno"</div>
        </div>
        <div class="col-12 col-md-2 d-flex justify-content-center">
            <div class="ssglogo">
                <img src="{{ asset('images/ssg.png') }}" alt="SSG Logo">
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 text-center time">
            Philippine Standard Time:<br> {{ \Carbon\Carbon::now()->format('l, F d, Y, h:i:s A') }}
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
