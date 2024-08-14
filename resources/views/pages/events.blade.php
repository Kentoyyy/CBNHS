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
        padding: 40px 80px;
        color: #520d0d;
        height: 20vh;
        background-color: #2a3b6b;
        display: flex;
        justify-content: space-between;
        align-items: center;
        overflow: hidden;
    }

    .header .logoImage {
        max-width: 80px;
        height: auto;
    }

    .logoImage-left {
        margin-right: auto;
    }

    .logoImage-right {
        max-width: 180px;
        height: auto;
    }

    .overlay-text {
        font-size: 1.4rem;
        font-weight: bold;
        color: white;
        text-align: center;
        flex: 1;
    }

    .overlay-text-p {
        font-size: 0.8rem;
        color: white;
        text-align: center;
        margin-top: 5px;
    }

    .content-container {
        padding: 20px;
        max-width: 1000px;
        margin: 20px auto;
        background-color: white;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        font-size: 14px;
        color: #333;
    }

    .events-section {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
    }

    .event-card {
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
        padding: 15px;
        text-align: center;
        width: calc(33.333% - 15px);
        position: relative;
        box-sizing: border-box;
        transition: box-shadow 0.3s;
    }

    .event-card img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin-bottom: 10px;
    }

    .event-card h4 {
        color: #2a3b6b;
        margin: 10px 0;
        font-size: 1rem;
    }

    .event-card p {
        margin: 5px 0;
        font-size: 0.9rem;
    }

    .event-card a {
        display: inline-block;
        margin-top: 10px;
        padding: 8px 15px;
        background-color: #4267b2;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        font-size: 0.9rem;
        transition: background-color 0.3s, transform 0.3s;
    }

    .event-card a:hover {
        background-color: #a6a6a6;
        transform: scale(1.05);
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
            width: calc(50% - 15px);
        }
    }

    @media (max-width: 500px) {
        .event-card {
            width: 100%;
        }
    }
</style>
@endsection

@section('content')
@include('nav.topnav')

<div class="header container-fluid">
    <img src="{{ asset('images/logoschool.png') }}" alt="Logo Image" class="logoImage logoImage-left">
    <div class="overlay-text">
        Upcoming Events - 2024-2025
        <div class="overlay-text-p">City of Bacoor National High School - Springville <br> SY 2024-2025</div>
    </div>
    <img src="{{ asset('images/bannermatatag.png') }}" alt="Banner Image" class="logoImage logoImage-right">
</div>

<div class="content-container">
    <h3>Upcoming Events</h3>
    <div class="events-section">
        <div class="event-card">
            <img src="{{ asset('images/kuwento.jpg') }}" alt="Annual Science Fair">
            <h4>Annual Science Fair</h4>
            <p><strong>Date:</strong> September 15, 2024</p>
            <p><strong>Location:</strong> School Auditorium</p>
            <p>Join us for our Annual Science Fair where students will showcase their innovative science projects. All are welcome to attend and support our young scientists.</p>
            <a href="https://example.com/annual-science-fair" target="_blank">Learn more</a>
        </div>

        <div class="event-card">
            <img src="{{ asset('images/timpalak.jpg') }}" alt="Parent-Teacher Conference">
            <h4>Parent-Teacher Conference</h4>
            <p><strong>Date:</strong> October 10, 2024</p>
            <p><strong>Location:</strong> Classroom Building</p>
            <p>Meet with your child’s teachers to discuss their academic progress and any concerns. This is an excellent opportunity to get involved in your child’s education.</p>
            <a href="https://example.com/parent-teacher-conference" target="_blank">Learn more</a>
        </div>

        <div class="event-card">
            <img src="{{ asset('images/magbasa.jpg') }}" alt="Winter Concert">
            <h4>Winter Concert</h4>
            <p><strong>Date:</strong> December 20, 2024</p>
            <p><strong>Location:</strong> School Gymnasium</p>
            <p>Enjoy an evening of music and performances as our students present their Winter Concert. Don’t miss this festive event!</p>
            <a href="https://example.com/winter-concert" target="_blank">Learn more</a>
        </div>

        <!-- Additional Event Cards -->
        <div class="event-card">
            <img src="{{ asset('images/debate.jpg') }}" alt="Fun Fair">
            <h4>Fun Fair</h4>
            <p><strong>Date:</strong> November 5, 2024</p>
            <p><strong>Location:</strong> School Grounds</p>
            <p>Join us for a day of games, food, and entertainment at our annual Fun Fair. Bring your family and friends for a day full of excitement!</p>
            <a href="https://example.com/fun-fair" target="_blank">Learn more</a>
        </div>

        <div class="event-card">
            <img src="{{ asset('images/pagkukuwento.jpg') }}" alt="Book Fair">
            <h4>Book Fair</h4>
            <p><strong>Date:</strong> November 20, 2024</p>
            <p><strong>Location:</strong> School Library</p>
            <p>Explore a wide range of books at our annual Book Fair. Find your next great read and support our library.</p>
            <a href="https://example.com/book-fair" target="_blank">Learn more</a>
        </div>

        <div class="event-card">
            <img src="{{ asset('images/pagbigkas.jpg') }}" alt="Sports Day">
            <h4>Sports Day</h4>
            <p><strong>Date:</strong> January 15, 2025</p>
            <p><strong>Location:</strong> School Sports Field</p>
            <p>Cheer on our students as they compete in various athletic events. It’s a day full of sportsmanship and school spirit!</p>
            <a href="https://example.com/sports-day" target="_blank">Learn more</a>
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
