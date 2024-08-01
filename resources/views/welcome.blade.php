@include('nav.topnav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Bootstrap Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Lato:wght@100;300;400;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto+Condensed:wght@100..900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        .slider {
        position: relative;
        overflow: hidden;
        border: 2px solid #ddd;
        border-radius: 10px;
        max-width: 100%;
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slides img {
            width: 100%;
            height: 400px; /* Set a fixed height for the images */
            object-fit: cover; /* Ensure images are covered within the container */
            border-radius: 10px;
        }

        .slider .prev, .slider .next {
            background-color: black;
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: auto;
            padding: 14px;
            color: white;
            font-weight: bold;
            font-size: 10px;
            transition: 0.6s ease;
            user-select: none;
            z-index: 10;
        }

        .slider .prev {
            left: 0;
            border-radius: 0 2px 2px 0;
        }

        .slider .next {
            right: 0;
            border-radius: 2px 0 0 2px;
        }

        .slider .prev:hover, .slider .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        .schoolDivision {
            background-color: #d1d1d1;
            padding: 20px;
            border-radius: 3px;
        }

        .schoolDivision h3 {
            font-size: 1.2rem;
            font-weight: 700;
        }

        .read-more-btn {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .announcement h2 {
            color: blue;
            font-weight: 800;
        }

        .numberOne h1 {
            color: gold;
        }

        .numberOne h3, .numberOne h4, .numberOne h5 {
            margin: 0;
        }

        .prayer img {
            max-width: 100%;
            height: auto;
        }

        .footer {
            background-color: #efefef;
            padding: 20px 0;
        }

        .footer h1, .footer p, .footer a {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <div class="row">
            <div class="col-lg-8">
                <div class="slider">
                    <div class="slides">
                        <img src="{{ asset('images/welcomeslide1.jpg') }}" alt="Image 1">
                        <img src="{{ asset('images/welcomeslide2.jpg') }}" alt="Image 2">
                        <img src="{{ asset('images/welcomeslide3.jpg') }}" alt="Image 3">
                        <img src="{{ asset('images/welcomeslide4.png') }}" alt="Image 4">
                        <img src="{{ asset('images/welcomeslide5.png') }}" alt="Image 5">
                        <img src="{{ asset('images/welcomeslide6.jpg') }}" alt="Image 6">
                        <img src="{{ asset('images/welcomeslide7.gif') }}" alt="Image 7">
                        <img src="{{ asset('images/welcomeslide8.jpg') }}" alt="Image 8">
                        <img src="{{ asset('images/welcomeslide9.jpg') }}" alt="Image 9">
                        <img src="{{ asset('images/welcomeslide10.jpg') }}" alt="Image 10">
                    </div>
                    <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
                    <button class="next" onclick="moveSlide(1)">&#10095;</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="schoolDivision">
                    <h3>SCHOOLS DIVISION SUPERINTENDENT'S CORNER</h3>
                    <p>Progress is not accomplished overnight. This is a reality that we learn through the lens of any leadership journey.</p>
                    <p>Achieving it is a tedious and laborious process that requires tenacity and resilience. Most importantly, it is a task that requires everyone’s efforts.</p>
                    <a href="#" class="read-more-btn">Read more</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center my-5 announcement">
        <h2>ANNOUNCEMENTS</h2>
        <div class="numberOne">
            <h1>FORTRESS</h1>
            <h3>EDUCATION CONTINUES IN</h3>
            <h4>SDO BACOOR CITY</h4>
            <h5>For Victorious and Valiant Bacooreños</h5>
        </div>
        <div class="prayer my-4">
            <img src="{{ asset('images/prayer.jpg') }}" alt="Prayer Image">
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 first">
                    <!-- Optional content -->
                </div>
                <div class="col-md-3 second">
                    <h1>REPUBLIC OF THE PHILIPPINES</h1>
                    <p>All content is in the public domain unless otherwise stated.</p>
                </div>
                <div class="col-md-3 third">
                    <h1>ABOUT CBNHS</h1>
                    <p>Learn more about the Philippine government, its structure, how government works and the people behind it.</p>
                </div>
                <div class="col-md-3 fourth">
                    <h1>LINKS</h1>
                    <a href="#">Home</a><br>
                    <a href="#">About</a> <br>
                    <a href="#">Contact</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        let slideIndex = 0;
        const slides = document.querySelectorAll('.slides img');
        const totalSlides = slides.length;

        const showSlides = (n) => {
            slides.forEach((slide, index) => {
                slide.style.display = (index === n) ? 'block' : 'none';
            });
        };

        const moveSlide = (n) => {
            slideIndex += n;
            if (slideIndex >= totalSlides) {
                slideIndex = 0;
            } else if (slideIndex < 0) {
                slideIndex = totalSlides - 1;
            }
            showSlides(slideIndex);
        };

        document.addEventListener('DOMContentLoaded', () => {
            showSlides(slideIndex);
            setInterval(() => {
                moveSlide(1);
            }, 5000); // Change image every 5 seconds
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
