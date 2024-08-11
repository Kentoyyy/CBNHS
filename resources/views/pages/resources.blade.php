@extends('home-master')

@section('title', 'Superintendent Corner')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">
<!-- Add Bootstrap CSS if not already included in the master layout -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

@section('style')
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f7fa;
        color: #444;
    }

    .header {
        position: relative;
        padding: 60px 20px;
        color: #fff;
        background-color: #2a3b6b;
        text-align: center;
        border-bottom: 5px solid #d9534f;
    }

    .header .logoImage {
        max-width: 100px;
        margin-bottom: 15px;
    }

    .overlay-text {
        font-size: 2rem;
        font-weight: bold;
        color: white;
        margin-bottom: 10px;
    }

    .overlay-text-p {
        font-size: 1.2rem;
        color: white;
        margin-bottom: 20px;
    }

    .resources-container {
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        padding: 40px;
        margin: 30px auto;
        max-width: 800px;
    }

    .resources-title {
        font-size: 30px;
        color: #2a3b6b;
        margin-bottom: 20px;
        font-weight: 600;
        text-align: center;
        border-bottom: 3px solid #d9534f;
        padding-bottom: 10px;
    }

    .resource-button {
        display: block;
        padding: 15px 25px;
        margin: 15px 0;
        font-size: 18px;
        text-decoration: none;
        color: #fff;
        border-radius: 8px;
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s ease, transform 0.3s ease;
        text-align: center;
        font-weight: 500;
    }

    .resource-button i {
        margin-right: 10px;
    }

    .pdf-button {
        background-color: #d9534f; /* PDF button color */
    }

    .pdf-button:hover {
        background-color: #c9302c;
        transform: scale(1.05);
    }

    .excel-button {
        background-color: #5bc0de; /* Excel button color */
    }

    .excel-button:hover {
        background-color: #31b0d5;
        transform: scale(1.05);
    }

    .facebook-page {
        margin-top: 30px;
        text-align: center;
    }

    .facebook-page iframe {
        width: 100%;
        max-width: 600px;
        height: 400px;
        border: none;
        border-radius: 8px;
    }

    @media (max-width: 576px) {
        .resources-container {
            padding: 20px;
            margin: 20px auto;
        }

        .resource-button {
            padding: 12px 20px;
            font-size: 16px;
        }
    }
</style>
@endsection

@section('content')
@include('nav.topnav')

<div class="header container-fluid">
    <img src="{{ asset('images/logoschool.png') }}" alt="Logo Image" class="logoImage">
    <div class="overlay-text">Resources</div>
    <div class="overlay-text-p">City of Bacoor National High School - Springville <br> SY 2024-2025</div>
</div>

<div class="container resources-container">
    <h2 class="resources-title">Available Resources</h2>
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 text-center">
            <a href="{{ asset('resources/sample.pdf') }}" class="resource-button pdf-button">
                <i class="fas fa-file-pdf"></i> PDF Document
            </a>
            <a href="{{ asset('resources/sample.xlsx') }}" class="resource-button excel-button">
                <i class="fas fa-file-excel"></i> Excel Sheet
            </a>
        </div>
    </div>
    <div class="facebook-page">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDepEdTayoCBNHSS305688&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection

@section('footer')
@include('partials.footer')
@endsection
