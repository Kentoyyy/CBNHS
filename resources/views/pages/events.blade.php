@extends('home-master')

@section('title', 'Upcoming Events')
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
        color: #520d0d;
        height: 20vh;
        background-color: #2a3b6b;
        display: flex;
        justify-content: space-between;
        align-items: center;
        overflow: hidden;
    }

    .header .logoImage {
        max-width: 90px;
        height: auto;
    }

    .logoImage-left {
        margin-right: auto;
    }

    .logoImage-right {
        max-width: 200px;
        height: auto;
    }

    .overlay-text {
        font-size: 1.5rem;
        font-weight: bold;
        color: white;
        text-align: center;
        flex: 1;
    }

    .overlay-text-p {
        font-size: 11px;
        color: white;
        text-align: center;
        margin-top: 10px;
    }

    .content-container {
        padding: 20px;
        max-width: 1000px;
        margin: 20px auto;
        background-color: white;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        font-size: 14px;
        color: #333;
    }

    .events-section {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .event-card {
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
        position: relative;
    }

    .event-card img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }

    .event-card h4 {
        color: #2a3b6b;
        margin: 10px 0;
    }

    .event-card p {
        margin: 10px 0;
    }

    .facebook-events {
        max-width: 100%;
        margin: 20px auto;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
    }

    .facebook-events iframe {
        width: 100%;
        height: 400px;
        border: none;
    }

    @media (max-width: 800px) {
        .event-card {
            padding: 15px;
        }
    }

    @media (max-width: 500px) {
        .event-card {
            padding: 10px;
        }
    }
</style>
@endsection

@section('content')
@include('nav.topnav')

<div class="header container-fluid">
    <img src="{{ asset('images/logoschool.png') }}" alt="Logo Image" class="logoImage logoImage-left">
    <div class="overlay-text">
        Upcoming Events
        <div class="overlay-text-p">City of Bacoor National High School - Springville <br> SY 2024-2025</div>
    </div>
    <img src="{{ asset('images/bannermatatag.png') }}" alt="Banner Image" class="logoImage logoImage-right">
</div>

<div class="content-container">
    <h3>Upcoming Events</h3>
    <div class="events-section">
        <div class="event-card">
            <img src="{{ asset('images/science-fair.jpg') }}" alt="Annual Science Fair">
            <h4>Annual Science Fair</h4>
            <p><strong>Date:</strong> September 15, 2024</p>
            <p><strong>Location:</strong> School Auditorium</p>
            <p>Join us for our Annual Science Fair where students will showcase their innovative science projects. All are welcome to attend and support our young scientists. <a href="https://example.com/annual-science-fair" target="_blank">Learn more</a></p>
        </div>

        <div class="event-card">
            <img src="{{ asset('images/parent-teacher-conference.jpg') }}" alt="Parent-Teacher Conference">
            <h4>Parent-Teacher Conference</h4>
            <p><strong>Date:</strong> October 10, 2024</p>
            <p><strong>Location:</strong> Classroom Building</p>
            <p>Meet with your child’s teachers to discuss their academic progress and any concerns. This is an excellent opportunity to get involved in your child’s education. <a href="https://example.com/parent-teacher-conference" target="_blank">Learn more</a></p>
        </div>

        <div class="event-card">
            <img src="{{ asset('images/winter-concert.jpg') }}" alt="Winter Concert">
            <h4>Winter Concert</h4>
            <p><strong>Date:</strong> December 20, 2024</p>
            <p><strong>Location:</strong> School Gymnasium</p>
            <p>Enjoy an evening of music and performances as our students present their Winter Concert. Don’t miss this festive event! <a href="https://example.com/winter-concert" target="_blank">Learn more</a></p>
        </div>
    </div>

    <div class="facebook-events">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDepEdTayoCBNHSS305688&tabs=events&width=1000&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
    </div>
</div>

@endsection

@section('scripts')
@endsection

@section('footer')
@include('partials.footer')
@endsection
