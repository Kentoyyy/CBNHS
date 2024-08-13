@extends('layouts.admin-layout')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">

@section('title', 'Dashboard')

@section('content')

<!-- Welcome Announcement -->
<div class="announcement">
    <h2>Welcome Back, Admin!</h2>
    <p>We’re glad to see you again. Here’s what’s happening today:</p>
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

<div class="content-section">
    <h3>Recent Activity</h3>
    <ul>
        <li>New student registrations: <strong>25</strong></li>
        <li>Teachers on leave today: <strong>3</strong></li>
        <li>Pending approvals: <strong>12</strong></li>
    </ul>
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
        font-size: 24px;
        font-weight: 500;
        margin-bottom: 8px;
    }

    .announcement p {
        font-size: 14px;
        margin: 0;
    }

    .dashboard-title {
        text-align: center;
        font-size: 28px;
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
        border-radius: 8px;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        width: 22%;
        padding: 15px;
        margin: 10px;
        display: flex;
        align-items: center;
        transition: all 0.2s ease;
        position: relative;
        overflow: hidden;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .card-icon {
        font-size: 40px;
        color: #2a3b6b;
        margin-right: 15px;
    }

    .card-details h2 {
        margin: 0;
        font-size: 18px;
        font-weight: 500;
        color: #333;
    }

    .card-details p {
        margin: 5px 0 0;
        font-size: 24px;
        font-weight: bold;
        color: #2a3b6b;
    }

    .card::before {
        content: "";
        position: absolute;
        top: -60px;
        right: -60px;
        width: 120px;
        height: 120px;
        background-color: rgba(42, 59, 107, 0.1);
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .card:hover::before {
        top: -40px;
        right: -40px;
        width: 150px;
        height: 150px;
    }

    .content-section {
        margin: 30px auto;
        width: 80%;
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .content-section h3 {
        font-size: 20px;
        font-weight: 500;
        color: #2a3b6b;
        margin-bottom: 15px;
    }

    .content-section ul {
        list-style-type: none;
        padding: 0;
    }

    .content-section li {
        font-size: 16px;
        margin-bottom: 8px;
        color: #333;
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .card {
            width: 45%;
        }

        .content-section {
            width: 90%;
        }
    }

    @media (max-width: 768px) {
        .card {
            width: 90%;
        }

        .announcement,
        .content-section {
            width: 90%;
        }
    }

    @media (max-width: 480px) {
        .card {
            width: 100%;
        }

        .announcement,
        .content-section {
            width: 100%;
        }
    }
</style>

@endsection
