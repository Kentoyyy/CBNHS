@extends('layouts.admin-layout')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">

@section('title', 'Dashboard')

@section('content')

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
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        width: 22%;
        padding: 20px;
        margin: 10px;
        display: flex;
        align-items: center;
        transition: all 0.2s ease;
        position: relative;
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
        color: #555;
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
    }

    @media (max-width: 480px) {
        .card {
            width: 100%;
        }
    }
</style>

@endsection
