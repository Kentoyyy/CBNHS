@extends('layouts.admin-layout')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">

@section('title', 'Dashboard')

@section('content')

<!-- Welcome Announcement -->
<div class="announcement">
    <h2>Welcome Back, Admin!</h2>
    <p>We're glad to see you again. Here's what's happening today:</p>
</div>

<h1 class="dashboard-title">Admin Dashboard</h1>

<div class="dashboard-container">
    <div class="card">
        <div class="card-icon">
            <i class="fas fa-users"></i>
        </div>
        <div class="card-details">
            <h2>Total Students</h2>
            <p>1,250</p>
        </div>
    </div>

    <div class="card">
        <div class="card-icon">
            <i class="fas fa-chalkboard-teacher"></i>
        </div>
        <div class="card-details">
            <h2>Total Teachers</h2>
            <p>85</p>
        </div>
    </div>

    <div class="card">
        <div class="card-icon">
            <i class="fas fa-book"></i>
        </div>
        <div class="card-details">
            <h2>Courses</h2>
            <p>36</p>
        </div>
    </div>

    <div class="card">
        <div class="card-icon">
            <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="card-details">
            <h2>Upcoming Events</h2>
            <p>5</p>
        </div>
    </div>
</div>

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f6f9;
    }

    .announcement {
        background-color: #2a3b6b;
        color: #fff;
        padding: 20px;
        border-radius: 8px;
        margin: 20px auto;
        width: 80%;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .announcement h2 {
        font-size: 28px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .announcement p {
        font-size: 16px;
    }

    .dashboard-title {
        text-align: center;
        font-size: 32px;
        font-weight: 500;
        color: #333;
        margin: 20px 0;
    }

    .dashboard-container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        padding: 0 5%;
    }

    .card {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        width: 22%;
        padding: 25px;
        margin: 10px;
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
    }

    .card-icon {
        font-size: 45px;
        color: #2a3b6b;
        margin-right: 20px;
    }

    .card-details h2 {
        margin: 0;
        font-size: 20px;
        font-weight: 600;
        color: #333;
    }

    .card-details p {
        margin: 8px 0 0;
        font-size: 28px;
        font-weight: bold;
        color: #2a3b6b;
    }

    /* Add background animation to card */
    .card::before {
        content: "";
        position: absolute;
        top: -75px;
        right: -75px;
        width: 150px;
        height: 150px;
        background-color: rgba(42, 59, 107, 0.1);
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .card:hover::before {
        top: -50px;
        right: -50px;
        width: 200px;
        height: 200px;
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .card {
            width: 45%;
        }
    }

    @media (max-width: 768px) {
        .card {
            width: 90%;
        }

        .announcement {
            width: 90%;
        }
    }

    @media (max-width: 480px) {
        .card {
            width: 100%;
        }

        .announcement {
            width: 100%;
        }
    }
</style>

@endsection
