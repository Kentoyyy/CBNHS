@extends('home-master')

@section('title', 'DepEd Issuances - 2023')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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

    .sidebar {
        background-color: #fff;
        color: #333;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .sidebar h3 {
        margin: 0;
        font-size: 1.2rem;
        font-weight: bold;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .sidebar h3 .arrow {
        transition: transform 0.3s ease;
    }

    .sidebar h3.active .arrow {
        transform: rotate(180deg);
    }

    .sidebar .nav-item {
        margin-bottom: 5px;
    }

    .sidebar .nav-item a {
        display: block;
        color: #333;
        text-decoration: none;
        padding: 10px;
        border-radius: 3px;
        transition: background-color 0.3s ease;
    }

    .sidebar .nav-item a:hover {
        background-color: #f0f0f0;
    }

    .nav-submenu {
        display: none;
        padding-left: 15px;
        margin-top: 5px;
    }

    .nav-submenu a {
        font-size: 0.9rem;
    }

    .nav-submenu a:hover {
        background-color: #f0f0f0;
    }

    .issuances-table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .issuances-table th, .issuances-table td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
    }

    .issuances-table th {
        background-color: #f8f9fa;
        color: #333;
    }

    .issuances-table td a {
        color: #2a3b6b;
        text-decoration: none;
    }

    .issuances-table td a:hover {
        text-decoration: underline;
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
    <span class="overlay-text">DepEd Issuances</span>
    <img src="{{ asset('images/depeedlogo.png') }}" alt="Banner Image" class="logoImage">
</div>

<div class="content-container">
    <div class="content-left">
        <!-- Sidebar Navigation -->
        <div class="sidebar">
            <h3 onclick="toggleSubmenu('year-submenu')">Issuances by year <i class="fas fa-chevron-down arrow"></i></h3>
            <div id="year-submenu" class="nav-submenu">
                <div class="nav-item">
                    <a href="inssuances24">2024</a>
                </div>
                <div class="nav-item">
                    <a href="inssuances23">2023</a>
                </div>
                <div class="nav-item">
                    <a href="inssuances22">2022</a>
                </div>
                <div class="nav-item">
                    <a href="inssuances21">2021</a>
                </div>
                <div class="nav-item">
                    <a href="inssuances20">2020</a>
                </div>
            </div>
        </div>

        <!-- Issuances Table -->
        <h2>Issuances 2024</h2>
        <table class="issuances-table">
            <thead>
                <tr>
                    <th>File</th>
                    <th>Document Type</th>
                    <th>Title</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="{{ asset('documents/DM_No_413_s_2023.pdf') }}" target="_blank">DM No. 413, s. 2023</a></td>
                    <td>Memorandum</td>
                    <td>Distribution of Special Needs Education (SNED) Supplies and Equipment 2023 from the Local Government Unit (LGU)</td>
                    <td>08/13/2023</td>
                </tr>
                <tr>
                    <td><a href="{{ asset('documents/DM_No_412_s_2023.pdf') }}" target="_blank">DM No. 412, s. 2023</a></td>
                    <td>Memorandum</td>
                    <td>Submission of Application for Special Education Teacher I (SPET) in the City Schools Division of Bacoor</td>
                    <td>08/13/2023</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

    <div class="content-right">
        <!-- Facebook Page Iframe -->
        <div class="facebook-page">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDepEdTayoCBNHSS305688&tabs=events&width=1000&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
    
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function toggleSubmenu(id) {
        var submenu = document.getElementById(id);
        var header = submenu.previousElementSibling;
        if (submenu.style.display === "block") {
            submenu.style.display = "none";
            header.classList.remove('active');
        } else {
            submenu.style.display = "block";
            header.classList.add('active');
        }
    }
</script>
@endsection

@section('footer')
@include('partials.footer')
@endsection
