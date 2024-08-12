@extends('home-master')

@section('title', 'Support Services')
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
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        text-align: center;
        flex: 1;
    }

    .overlay-text-p {
        font-size: 11px;
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        text-align: center;
        margin-top: 10px;
    }

    .content-container {
        padding: 30px;
        max-width: 850px;
        margin: 30px auto;
        background-color: #ffffff;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        font-size: 16px;
    }

    .content-container p {
        text-align: center;
        color: #333;
        margin-bottom: 25px;
    }

    .content-container h3 {
        color: #2a3b6b;
        font-size: 1.3rem;
        margin-top: 25px;
        margin-bottom: 15px;
        text-align: left;
    }
</style>
@endsection

@section('content')
@include('nav.topnav')

<div class="header container-fluid">
    <img src="{{ asset('images/logoschool.png') }}" alt="Logo Image" class="logoImage logoImage-left">
    <div class="overlay-text">
        Support Services
        <div class="overlay-text-p">City of Bacoor National High School - Springville <br> SY 2024-2025</div>
    </div>
    <img src="{{ asset('images/bannermatatag.png') }}" alt="Banner Image" class="logoImage logoImage-right">
</div>

<div class="content-container">
    <p>At City of Bacoor National High School - Springville, we are deeply committed to fostering the well-being and academic success of our students through comprehensive support services. Our dedicated team offers personalized academic assistance, guidance counseling, health and wellness resources, and more, all tailored to empower each student to achieve their fullest potential. We strive to create a nurturing and supportive environment where every student can thrive.</p>

    <h3>Guidance and Counseling</h3>
    <p>Our guidance and counseling services are integral to supporting students in both their academic journey and personal growth. We provide individual and group counseling sessions that address academic challenges, career planning, and personal issues, helping students navigate their educational and personal paths with clarity and confidence.</p>

    <h3>Academic Support</h3>
    <p>We offer a range of academic support programs, including tutoring, study groups, and remedial classes. These resources are designed to assist students in overcoming academic difficulties, improving their performance, and reaching their academic goals.</p>

    <h3>Health and Wellness</h3>
    <p>The health and wellness of our students are paramount. We offer access to school nurses, mental health resources, and wellness programs focused on physical, emotional, and mental well-being. Our objective is to ensure that students are healthy in both mind and body, enabling them to fully engage in their education.</p>

    <h3>Parent and Community Engagement</h3>
    <p>We believe that the collaboration between the school, parents, and the community is essential to student success. We regularly organize workshops, seminars, and meetings to engage parents and the community, fostering a cooperative environment that supports our students' educational journeys.</p>

    <h3>Financial Assistance</h3>
    <p>Recognizing that financial challenges can impact a student’s education, we provide various forms of financial assistance, including scholarships, grants, and subsidies. These programs are designed to ensure that all students have equitable access to educational opportunities, regardless of their financial circumstances.</p>
</div>

@endsection

@section('scripts')
@endsection

@section('footer')
@include('partials.footer')
@endsection
