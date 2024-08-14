@extends('home-master')

@section('title', 'Deped Advisories')
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
        padding: 30px;
        background-color: #2a3b6b;
        color: #fff;
        text-align: center;
        margin-bottom: 20px;
    }

    .header .logoImage {
        max-width: 80px;
        height: auto;
        display: inline-block;
        vertical-align: middle;
    }

    .header .overlay-text {
        display: inline-block;
        vertical-align: middle;
        font-size: 1.8rem;
        font-weight: bold;
        margin: 0 15px;
    }

    .content-container {
        display: flex;
        justify-content: space-between;
        margin: 0 30px;
    }

    .content-left {
        width: 70%;
    }

    .memo-item {
        margin-bottom: 20px;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border-left: 4px solid #2a3b6b;
    }

    .memo-item h3 {
        font-size: 1.2rem;
        color: #2a3b6b;
        margin-bottom: 10px;
    }

    .memo-item p {
        font-size: 0.9rem;
        margin-bottom: 10px;
    }

    .memo-item .view-pdf {
        display: inline-block;
        padding: 8px 12px;
        background-color: #2a3b6b;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }

    .content-right {
        width: 28%;
        padding-left: 20px;
    }

    .facebook-page {
        margin-bottom: 20px;
    }

    .facebook-page iframe {
        width: 100%;
        height: 400px;
        border: none;
        overflow: hidden;
    }
</style>
@endsection

@section('content')
@include('nav.topnav')

<div class="header container-fluid">
    <img src="{{ asset('images/logoschool.png') }}" alt="Logo Image" class="logoImage">
    <span class="overlay-text">Deped Advisories</span>
    <img src="{{ asset('images/depeedlogo.png') }}" alt="Banner Image" class="logoImage">
</div>

<div class="content-container">
    <div class="content-left">
        <!-- Deped Memorandum Items -->
        <div class="memo-item">
            <h3>December 21, 2020 DM 082, S. 2020 – Guidelines on the Registration of Teachers and School Leaders for NEAP-Recognized Professional Development Programs and Courses</h3>
            <p>Guidelines on the Registration of Teachers and School Leaders for NEAP-Recognized Professional Development Programs and Courses</p>
            <a href="#" class="view-pdf">View PDF</a>
        </div>

        <div class="memo-item">
            <h3>December 14, 2020 DM 081, S. 2020 – Announcement of the Conduct of DepEd Teachers and Other Activities for the Week of December 14-19, 2020 (Mid-Year Inset Week)</h3>
            <p>Announcement of the Conduct of DepEd Teachers and Other Activities for the Week of December 14-19, 2020 (Mid-Year Inset Week)</p>
            <a href="#" class="view-pdf">View PDF</a>
        </div>

        <div class="memo-item">
            <h3>December 11, 2020 DM 080, S. 2020 – 2020-2021 Metrobank Foundation Outstanding Filipinos-Award for Teachers</h3>
            <p>2020-2021 Metrobank Foundation Outstanding Filipinos-Award for Teachers</p>
            <a href="#" class="view-pdf">View PDF</a>
        </div>
    </div>

    <div class="content-right">
        <!-- Facebook Page Iframe -->
        <div class="facebook-page">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDepEdTayoCBNHSS305688&tabs=timeline&width=300&height=400&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection

@section('footer')
@include('partials.footer')
@endsection
