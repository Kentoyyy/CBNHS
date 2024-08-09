@extends('layouts.portal-layout')

@section('content')
<div class="profile">
    <!-- Back Button -->
    <a href="{{ url('dashboard') }}" class="back-button">
        <i class="fas fa-arrow-left"></i> Back
    </a>

    <!-- Profile Header -->
    <div class="profile-header">
        <div class="profile-picture">
            <img src="{{ asset('images/profilestudent.png') }}" alt="Profile Picture">
        </div>
        <div class="profile-info">
            <h1>Juan Dela Cruz</h1>
            <p>ID: 123456789</p>
            <p>DOB: Jan 1, 2000</p>
            <p>Email: juan.delacruz@example.com</p>
        </div>
    </div>

    <!-- Content Sections -->
    <div class="profile-sections">
        <!-- Academic Information -->
        <section class="academic-info">
            <h2>Academic</h2>
            <p>Grade: 8</p>
            <p>Major: Science</p>
            <p>GPA: 3.75</p>
        </section>

        <!-- Current Courses -->
        <section class="course-info">
            <h2>Courses</h2>
            <ul>
                <li><strong>MATH 101:</strong> Dr. Smith</li>
                <li><strong>SCIENCE 102:</strong> Dr. Johnson</li>
                <li><strong>MAPEH 103:</strong> Dr. Lee</li>
            </ul>
        </section>

        <!-- Academic History -->
        <section class="academic-history">
            <h2>History</h2>
            <a href="{{ asset('files/transcripts.pdf') }}" class="button">View Transcripts</a>
        </section>

        <!-- Personal Information -->
        <section class="personal-info">
            <h2>Personal</h2>
            <p>Address: 123 Main Street</p>
            <p>Emergency: Maria Dela Cruz</p>
        </section>
    </div>
</div>
@endsection

@section('styles')
<style>
    .profile {
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .back-button {
        display: inline-flex;
        align-items: center;
        text-decoration: none;
        color: #3498db;
        font-size: 16px;
        font-weight: 500;
        transition: color 0.3s;
    }

    .back-button:hover {
        color: #2a1987;
    }

    .back-button i {
        margin-right: 8px;
        font-size: 18px;
    }

    .profile-header {
        display: flex;
        align-items: center;
        border-bottom: 1px solid #e1e1e1;
        padding-bottom: 20px;
    }

    .profile-picture img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #e1e1e1;
    }

    .profile-info {
        margin-left: 20px;
    }

    .profile-info h1 {
        font-size: 24px;
        margin: 0;
        color: #2a1987;
    }

    .profile-info p {
        font-size: 14px;
        color: #7f8c8d;
        margin: 5px 0;
    }

    .profile-info p strong {
        color: #34495e;
    }

    .profile-sections {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    section {
        flex: 1;
        min-width: 280px;
        border: 1px solid #e1e1e1;
        border-radius: 8px;
        padding: 15px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        background-color: #f9f9f9;
    }

    h2 {
        font-size: 18px;
        color: #2a1987;
        border-bottom: 2px solid #3498db;
        padding-bottom: 5px;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .course-info ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .course-info ul li {
        font-size: 14px;
        margin-bottom: 8px;
        color: #34495e;
    }

    .course-info ul li strong {
        color: #2a1987;
    }

    .button {
        display: inline-block;
        background-color: #2a1987;
        color: #ffffff;
        padding: 10px 15px;
        border-radius: 4px;
        text-decoration: none;
        font-size: 14px;
        text-align: center;
        transition: background-color 0.3s, color 0.3s;
        margin-top: 10px;
    }

    .button:hover {
        background-color: #1d1f2f;
        color: #f5f7fa;
    }
</style>
@endsection
    