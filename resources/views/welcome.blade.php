@extends('home-master')

@section('title', 'Home')

@section('style')
    <style>
        body {
            font-family: "Lato", sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .slider {
            position: relative;
            overflow: hidden;
            border: 2px solid #007BFF; /* Add a border color to match the theme */
            border-radius: 10px;
            max-width: 100%;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* Add shadow for depth */
            margin-bottom: 20px;
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slides img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
        }

        .slider .prev, .slider .next {
            background-color: rgba(0,0,0,0.5); /* Semi-transparent background */
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: auto;
            padding: 10px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 50%;
            transition: background-color 0.3s ease;
            z-index: 10;
        }

        .slider .prev {
            left: 10px;
        }

        .slider .next {
            right: 10px;
        }

        .slider .prev:hover, .slider .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        .schoolDivision {
            background: linear-gradient(135deg, #ffffff, #f0f0f0); /* Gradient background */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            margin-bottom: 20px;
        }

        .schoolDivision h3 {
            font-size: 1.4rem;
            font-weight: 700;
            color: #007BFF;
            margin-bottom: 15px;
        }

        .read-more-btn {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
        }

        .read-more-btn:hover {
            background-color: #0056b3;
        }

        .news-bulletin {
            margin-top: 30px;
        }

        .news-bulletin h2 {
            font-size: 1.5rem;
            color: #007BFF;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .news-bulletin .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            margin-bottom: 20px;
        }

        .news-bulletin .card img {
            border-radius: 10px;
        }

        .news-bulletin .card-title {
            font-size: 1.1rem;
            font-weight: bold;
            color: #007BFF;
            margin-top: 10px;
        }

        .news-bulletin .card-title a {
            color: #007BFF;
            text-decoration: none;
        }

        .news-bulletin .card-title a:hover {
            text-decoration: underline;
        }

        hr {
            border: none;
            border-top: 2px solid #007BFF; /* Match the color of your card titles */
            margin: 40px 0; /* Adjust spacing as needed */
        }

        .footer {
            background-color: #007BFF;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .footer h1, .footer p, .footer a {
            margin: 0;
        }

        .footer a {
            color: #f0f0f0;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
@endsection

@section('content')
@include('nav.topnav')
@include('nav.officials-bar')
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
            <h3>Welcome to the Official Website of National Bacoor High School - Springville</h3><br>
            <p>Welcome to the official website of National Bacoor High School - Springville, located in Bacoor, Cavite, Philippines. It is a public secondary school offering free and quality education managed by the Philippine Department of Education (DepEd).</p>
            <p>The school offers Junior High School levels.  offering Grades 7 to 10 levels in Junior High School.</p>
            <a href="#" class="read-more-btn">Read more</a>
        </div>
            </div>
        </div>
        <hr>
        <div class="news-bulletin">
            <h2>NEWS BULLETIN</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images//newsimage/wikangfilipino.jpg') }}" class="card-img-top" alt="News 1">
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">[A] Pakikiisa sa Buwan ng Wikang Pambansa 2024</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images//newsimage/class_schedule.jpg') }}" class="card-img-top" alt="News 2">
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">We're excited to welcome everyone back to school! 📚✨ </a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images//newsimage/brigada.jpg') }}" class="card-img-top" alt="News 3">
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">TINGNAN| IKA-LIMANG ARAW NG BRIGADA ESKWELA 2024</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images//newsimage/orientation.jpg') }}" class="card-img-top" alt="News 4">
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">PARENT ORIENTATION PROGRAM</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
@endsection

@section('scripts')
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
@endsection

@section('footer')
    @include('partials.footer')
@endsection
