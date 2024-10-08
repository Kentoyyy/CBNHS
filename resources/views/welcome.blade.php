@extends('home-master')

@section('title', 'Home')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">

@section('style')
    <style>
     body {
    font-family: "Lato", sans-serif;
    background-color: #f9f9f9;
    color: #333;
    margin: 0;
    padding: 0;
}

/* Slider Styles */
.slider {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    max-width: 100%;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    margin-bottom: 20px;
}

.slides {
    display: flex;
    transition: transform 0.4s ease-in-out;
}

.slides img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    border-radius: 8px;
}

.slider .prev, .slider .next {
    background-color: rgba(0,0,0,0.4);
    cursor: pointer;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    padding: 10px;
    color: white;
    font-size: 18px;
    border-radius: 50%;
    z-index: 10;
}

.slider .prev {
    left: 10px;
}

.slider .next {
    right: 10px;
}

.slider .prev:hover, .slider .next:hover {
    background-color: rgba(0,0,0,0.6);
}

/* School Division Section */
.schoolDivision {
    background: white;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    margin-bottom: 20px;
    border-left: 4px solid #0056b3;
}

.schoolDivision h3 {
    font-size: 1.4rem;
    font-weight: 600;
    color: #0056b3;
    margin-bottom: 10px;
}

.read-more-btn {
    display: inline-block;
    margin-top: 10px;
    padding: 8px 18px;
    background-color: #0056b3;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    font-size: 0.85rem;
    transition: background-color 0.3s ease;
}

.read-more-btn:hover {
    background-color: #003f75;
}

.news-bulletin .card {
    border: 1px solid #e0e0e0;
    border-radius: 6px;
    width: 100%; /* Full width within the column */
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    transition: box-shadow 0.3s ease;
    overflow: hidden;
    height: 100%; /* Ensure uniform card height */
}

.news-bulletin .card img {
    width: 100%;
    height: 180px; /* Set a uniform height for all images */
    object-fit: cover;
}

.news-bulletin .card-body {
    padding: 15px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%; /* Ensure the card body takes the remaining height */
}

.news-bulletin .card-title {
    font-size: 1rem;
    font-weight: 600;
    color: #0056b3;
}

.news-bulletin .card-title a {
    color: inherit;
    text-decoration: none;
}

.news-bulletin .card-title a:hover {
    text-decoration: underline;
}
/* Featured Videos Section */
.featured-videos {
    margin-top: 40px;
    padding: 20px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.featured-videos h2 {
    font-size: 1.4rem;
    color: #0056b3;
    margin-bottom: 20px;
    text-align: center;
    font-weight: 600;
}

.featured-videos .video-card {
    margin-bottom: 20px;
    border: 1px solid #e0e0e0;
    border-radius: 6px;
    overflow: hidden;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    transition: box-shadow 0.3s ease;
}

.featured-videos .video-card:hover {
    box-shadow: 0 4px 8px rgba(0,0,0,0.15);
}

.featured-videos .video-card-body {
    padding: 15px;
    background-color: #fff;
}
.max-w-2xl {
    max-width: 42rem;
}

.mx-auto {
    margin-left: auto;
    margin-right: auto;
}

.space-y-6 {
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
}

.bg-white {
    background-color: #ffffff;
}

.p-4 {
    padding: 1rem;
}

.rounded-lg {
    border-radius: 0.5rem;
}

.shadow-md {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

.flex {
    display: flex;
}

.space-x-4 {
    justify-content: space-between;
}

.w-24 {
    width: 6rem;
}

.h-24 {
    height: 6rem;
}

.rounded-lg {
    border-radius: 0.5rem;
}

.object-cover {
    object-fit: cover;
}

.text-red-500 {
    color: #dc2626;
}

.text-blue-500 {
    color: #3498db;
}

.text-purple-500 {
    color: #7a288a;
}

.font-semibold {
    font-weight: 600;
}

.text-lg {
    font-size: 1.125rem;
}

.font-bold {
    font-weight: 700;
}

.text-gray-600 {
    color: #6b7280;
}

.flex {
    display: flex;
}

.items-center {
    align-items: center;
}

.text-gray-500 {
    color: #6b7280;
}

.text-sm {
    font-size: 0.875rem;
}

.mt-2 {
    margin-top: 0.5rem;
}

.mx-2 {
    margin-left: 0.5rem;
    margin-right: 0.5rem;
}

.featured-videos .video-card-title {
    font-size: 1rem;
    font-weight: 600;
    color: #0056b3;
}

.featured-videos .video-card-title a {
    color: inherit;
    text-decoration: none;
}

.featured-videos .video-card-title a:hover {
    text-decoration: underline;
}

/* Footer and Related Links */
hr {
    border: none;
    border-top: 1px solid #e0e0e0;
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

.related-links {
    background-color: transparent;
    padding: 25px;
    border-radius: 8px;
    margin-bottom: 20px;
    border-left: 4px solid #0056b3;
    text-align: center;
}

.related-links h3 {
    font-size: 1.4rem;
    font-weight: 600;
    color: #0056b3;
    margin-bottom: 15px;
}

.related-links img {
    width: 100px;
    margin: 10px;
}

.related-links a {
    color: #161616;
    text-decoration: none;
    display: inline-block;
    margin-top: 10px;
    padding: 8px 18px;
    border-radius: 4px;
    font-size: 0.85rem;
}

.related-links a:hover {
    background-color: transparent;
}
.facebook-page iframe {
    width: 100%; /* Make iframe take full width of its container */
    height: 500px; /* Set a fixed height for the iframe */
    border: none; /* Remove default border */
    border-radius: 6px; /* Add rounded corners */
    box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Add a subtle shadow */
}
@media (max-width: 768px) {
    .news-bulletin .col-md-6 {
        width: 100%;
        flex: 0 0 100%;
        max-width: 100%; /* Stack cards on smaller screens */
    }
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
                    <h3>Welcome to CBNHS - Springville</h3>
                    <p>Welcome to the official website of City of Bacoor National High School - Springville, located in Bacoor, Cavite, Philippines. It is a public secondary school offering free and quality education managed by the Philippine Department of Education (DepEd).</p>
                    <a href="#" class="read-more-btn">Read more</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-8">
                <div class="news-bulletin">
                    <h2>Posts</h2>
                        <div class="max-w-2xl mx-auto space-y-6">
                        @foreach($posts as $post)
                            <div class="bg-white p-4 rounded-lg shadow-md flex flex-row">
                                <img alt="Post Image" class="w-24 h-24 rounded-lg object-cover" src="{{ asset('storage/' . $post->image) }}">
                                <a href="{{ $post->link }}" class="flex-1 ml-4">
                                    <div class="text-lg font-bold">
                                        {{ $post->title }}
                                    </div>
                                    <div class="text-gray-600">
                                        {{ $post->content }}
                                    </div>
                                    <div class="flex items-center text-gray-500 text-sm mt-2">
                                        <i class="fas fa-comment mr-1"></i>
                                        <span class="mx-2">•</span>
                                        <span>Date posted {{ $post->created_at }}</span>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="facebook-page">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDepEdTayoCBNHSS305688&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
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
            <hr>
            <div class="related-links">
                <h3>Related Links</h3>
                <a href="https://www.deped.gov.ph/" target="_blank">
                    <img src="{{ asset('images/depedlogooo.png') }}" alt="DepEd Logo">
                </a>
                <a href="https://www.deped.gov.ph/" target="_blank">Visit DepEd Website</a>
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
