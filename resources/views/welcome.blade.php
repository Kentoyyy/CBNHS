@extends('home-master')

@section('title', 'Home')

@section('style')
    <style>
        body {
            font-family: "Lato", sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .slider {
            position: relative;
            overflow: hidden;
            border: 2px solid #0056b3;
            border-radius: 10px;
            max-width: 100%;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
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
            background-color: rgba(0,0,0,0.6);
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: auto;
            padding: 10px;
            color: white;
            font-weight: bold;
            font-size: 24px;
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
            background: linear-gradient(135deg, #ffffff, #f9f9f9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            border-left: 5px solid #0056b3;
        }

        .schoolDivision h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #0056b3;
            margin-bottom: 15px;
        }

        .read-more-btn {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #0056b3;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
        }

        .read-more-btn:hover {
            background-color: #004080;
        }

        .news-bulletin {
            margin-top: 50px;
        }

        .news-bulletin h2 {
            font-size: 1.5rem;
            color: #0056b3;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .news-bulletin .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            height: 100%;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .news-bulletin .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .news-bulletin .card-body {
            padding: 15px;
            flex: 1;
        }

        .news-bulletin .card-title {
            font-size: 1.1rem;
            font-weight: bold;
            color: #0056b3;
            margin-bottom: 0;
        }

        .news-bulletin .card-title a {
            color: #0056b3;
            text-decoration: none;
        }

        .news-bulletin .card-title a:hover {
            text-decoration: underline;
        }

        .featured-videos {
            margin-top: 50px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .featured-videos h2 {
            font-size: 1.5rem;
            color: #0056b3;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 700;
        }

        .featured-videos .video-card {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: box-shadow 0.3s ease;
        }

        .featured-videos .video-card:hover {
            box-shadow: 0 6px 12px rgba(0,0,0,0.2);
        }

        .featured-videos .video-card iframe,
        .featured-videos .video-card video {
            width: 100%;
            height: 200px;
            border: none;
            display: block;
        }

        .featured-videos .video-card-body {
            padding: 15px;
            background-color: #fff;
        }

        .featured-videos .video-card-title {
            font-size: 1.1rem;
            font-weight: bold;
            color: #0056b3;
            margin-bottom: 0;
        }

        .featured-videos .video-card-title a {
            color: #0056b3;
            text-decoration: none;
        }

        .featured-videos .video-card-title a:hover {
            text-decoration: underline;
        }

        hr {
            border: none;
            border-top: 2px solid #0056b3;
            margin: 40px 0;
        }

        .footer {
            background-color: #0056b3;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .footer h1, .footer p, .footer a {
            margin: 0;
        }

        .footer a {
            color: #e0e0e0;
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
                    <h3>Welcome to NBHS - Springville</h3>
                    <p>Welcome to the official website of National Bacoor High School - Springville, located in Bacoor, Cavite, Philippines. It is a public secondary school offering free and quality education managed by the Philippine Department of Education (DepEd).</p>
                    <a href="#" class="read-more-btn">Read more</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="news-bulletin">
            <h2>News Bulletin</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/newsimage/wikangfilipino.jpg') }}" class="card-img-top" alt="News 1">
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Pakikiisa sa Buwan ng Wikang Pambansa 2024</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/newsimage/class_schedule.jpg') }}" class="card-img-top" alt="News 2">
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Welcome Back to School!</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/newsimage/brigada.jpg') }}" class="card-img-top" alt="News 3">
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Brigada Eskwela 2024</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/newsimage/orientation.jpg') }}" class="card-img-top" alt="News 4">
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Parent Orientation Program</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="featured-videos">
            <h2>Featured Videos</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="video-card">
                        <video controls>
                            <source src="{{ asset('videos/welcomeback.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="video-card-body">
                            <h5 class="video-card-title"><a href="#">Welcome Back to School - July 29, 2024</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="video-card">
                        <video controls>
                            <source src="{{ asset('videos/brigadavid.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="video-card-body">
                            <h5 class="video-card-title"><a href="#">Brigada Eskwela 2024</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="video-card">
                        <iframe src="https://www.youtube.com/embed/VIDEO_ID_3" allowfullscreen></iframe>
                        <div class="video-card-body">
                            <h5 class="video-card-title"><a href="#">Video Title 3</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        }, 5000);
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@section('footer')
    @include('partials.footer')
@endsection
