@extends('home-master')

@section('title', 'Staff')
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

    .staff-section {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .staff-member {
        flex: 1 1 calc(33% - 40px);
        background-color: #f9f9f9;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
    }

    .staff-member img {
        width: 100%;
        height: auto;
        border-radius: 50%;
        margin-bottom: 15px;
    }

    .staff-member h4 {
        color: #2a3b6b;
        margin: 10px 0;
    }

    .staff-member p {
        margin: 0;
    }

    @media (max-width: 800px) {
        .staff-member {
            flex: 1 1 calc(50% - 40px);
        }
    }

    @media (max-width: 500px) {
        .staff-member {
            flex: 1 1 100%;
        }
    }
</style>
@endsection

@section('content')
@include('nav.topnav')

<div class="header container-fluid">
    <img src="{{ asset('images/logoschool.png') }}" alt="Logo Image" class="logoImage logoImage-left">
    <div class="overlay-text">
        Staff
        <div class="overlay-text-p">City of Bacoor National High School - Springville <br> SY 2024-2025</div>
    </div>
    <img src="{{ asset('images/bannermatatag.png') }}" alt="Banner Image" class="logoImage logoImage-right">
</div>

<div class="content-container">
    <p>At City of Bacoor National High School - Springville, we are proud to introduce our dedicated and talented staff members who play a crucial role in delivering quality education and supporting our students. Each member brings a unique set of skills and expertise to our school community. Below, you can learn more about our team and their contributions to our school.</p>

    <div class="staff-section">
        <div class="staff-member">
            <img src="{{ asset('images/staff1.jpg') }}" alt="Staff Member 1">
            <h4>Ms. Jane Doe</h4>
            <p>Head of Mathematics Department</p>
            <p>Ms. Doe has been with the school for over 10 years, leading the Mathematics Department with a focus on innovative teaching methods and student engagement.</p>
        </div>

        <div class="staff-member">
            <img src="{{ asset('images/staff2.jpg') }}" alt="Staff Member 2">
            <h4>Mr. John Smith</h4>
            <p>Science Teacher</p>
            <p>Mr. Smith is passionate about the sciences and has a background in research. He aims to inspire students with hands-on experiments and real-world applications.</p>
        </div>

        <div class="staff-member">
            <img src="{{ asset('images/staff3.jpg') }}" alt="Staff Member 3">
            <h4>Ms. Emily Johnson</h4>
            <p>Guidance Counselor</p>
            <p>Ms. Johnson provides support and counseling to students, helping them navigate academic and personal challenges with compassion and expertise.</p>
        </div>

        <!-- Add more staff members as needed -->
    </div>
</div>

@endsection

@section('scripts')
@endsection

@section('footer')
@include('partials.footer')
@endsection
