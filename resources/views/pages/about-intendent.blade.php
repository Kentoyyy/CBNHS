@extends('home-master')

@section('title', 'Superintendent Corner')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">

@section('style')
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f7fa;
        color: #444;
        line-height: 1.6;
    }

    .header {
        position: relative;
        padding: 50px 90px;
        color: #fff;
        height: 20vh; /* Adjust the height as needed */
        background-color: #2a3b6b; /* Background color instead of image */
        overflow: hidden; /* Ensure content does not overflow */
    }

    .header .logoImage {
        position: absolute;
        top: 30px; /* Adjust the top position as needed */
        left: 600px; /* Adjust the left position as needed */
        max-width: 90px; /* Adjust the max-width as needed */
    }

    .overlay-text {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 1.5rem;
        font-weight: bold;
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        text-align: center;
    }
    .overlay-text-p{
        position: absolute;
        top: 70%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 11px;
       
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        text-align: center;
    }

    .superintendent-corner {
        max-width: 1200px;
        margin: 40px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .superintendent-corner h1 {
        text-align: center;
        color: #2a3b6b;
        font-size: 28px;
        margin-bottom: 20px;
        font-weight: bold;
    }

    .main-content {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .content {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }

    .content img {
        max-width: 150px;
        border-radius: 50%;
        margin-bottom: 20px;
        transition: transform 0.3s ease;
    }

    .content img:hover {
        transform: scale(1.05);
    }

    .text-content {
        max-width: 500px;
        margin-left: 20px;
        font-size: 14px;
    }

    .text-content p {
        margin: 0 0 10px;
        text-align: justify;
    }

    .text-content p:last-child {
        margin-bottom: 0;
    }

    .text-content p strong {
        display: block;
        margin-top: 10px;
        font-size: 14px;
        color: #333;
    }

    .facebook-page {
        max-width: 340px;
        margin-left: 20px;
    }

    .facebook-page iframe {
        width: 100%;
        height: 500px;
        border: none;
    }

    @media (max-width: 600px) {
        .main-content {
            flex-direction: column;
            align-items: center;
        }

        .text-content {
            margin-left: 0;
        }

        .facebook-page {
            margin-top: 20px;
            width: 100%;
        }

        .facebook-page iframe {
            height: 400px;
        }
    }
</style>
@endsection

@section('content')
@include('nav.topnav')

<div class="header container-fluid">
    <div class="homeContainer">
        <img src="{{ asset('images/logoschool.png') }}" alt="Logo Image" class="logoImage">
        <div class="overlay-text">Superintendent's Corner</div>
        <div class="overlay-text-p">City of Bacoor National High School - Springville <br> Sy 2024-2025</div>
        
    </div>
</div>

<div class="superintendent-corner">
    <h1>SCHOOLS DIVISION SUPERINTENDENT’S CORNER</h1>
    <div class="main-content">
        <div class="content">
            <img src="{{ asset('images/super_intendent_profile.png') }}" alt="Superintendent Photo">
            <div class="text-content">
                <p>Progress is not accomplished overnight. This is a reality that we learn through the lens of any leadership journey. Achieving it is a tedious and laborious process that requires tenacity and resilience. Most importantly, it is a task that requires everyone’s efforts.</p>
                <p>With the spirit of bayanihan alive and well with our learning leaders, teaching and non-teaching personnel, stakeholders, and the Local Government Unit, our goal of providing quality education and excellent service is all within reach for the love of Batang Bacooreños.</p>
                <p>Samahan po ninyo ako sa pagbuo ng isang mas progresibong at matatag na SDO Bacoor City!</p>
                <p><strong>Babylyn M. Pambid</strong><br>Officer-in-Charge<br>Office of the Schools Division Superintendent</p>
            </div>
        </div>
        <div class="facebook-page">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDepEdTayoCBNHSS305688&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection

@section('footer')
@include('partials.footer')
@endsection
