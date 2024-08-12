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
        width: 150px;
        height: 150px;
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

    .staff-member .bio {
        text-align: left;
        color: #555;
    }

    .related-content {
        margin-top: 30px;
        padding: 20px;
        background-color: #f4f7fa;
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .related-content h3 {
        color: #2a3b6b;
        margin-bottom: 20px;
    }

    .related-content ul {
        list-style: none;
        padding: 0;
    }

    .related-content li {
        margin-bottom: 15px;
    }

    .related-content a {
        color: #2a3b6b;
        text-decoration: none;
        font-weight: bold;
    }

    .related-content a:hover {
        text-decoration: underline;
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
    <p>At City of Bacoor National High School - Springville, our dedicated staff members are at the heart of our educational success. Each staff member brings unique skills and experience to ensure our students receive the highest quality education and support. Learn more about our talented team below.</p>

    <div class="staff-section">
        <div class="staff-member">
            <img src="{{ asset('images/facultygirl.png') }}" alt="Ms. Jane Doe">
            <h4>Ms. Jane Doe</h4>
            <p><strong>Head of Mathematics Department</strong></p>
            <div class="bio">
                <p>Ms. Doe holds a Master’s Degree in Mathematics Education from XYZ University and has over 10 years of experience in teaching and curriculum development. She is known for her innovative teaching methods that engage students and foster a deep understanding of mathematical concepts.</p>
                <p>Achievements: Implemented a new math curriculum that improved student performance by 20% and led several professional development workshops for teachers.</p>
            </div>
        </div>

        <div class="staff-member">
            <img src="{{ asset('images/facultyboy.png') }}" alt="Mr. John Smith">
            <h4>Mr. John Smith</h4>
            <p><strong>Science Teacher</strong></p>
            <div class="bio">
                <p>Mr. Smith earned his Bachelor’s Degree in Chemistry and a Master’s Degree in Environmental Science. He brings a wealth of research experience to the classroom, aiming to spark curiosity and enthusiasm for science among students.</p>
                <p>Achievements: Developed an interactive science lab that has become a model for hands-on learning and secured funding for student research projects.</p>
            </div>
        </div>

        <div class="staff-member">
            <img src="{{ asset('images/facultygirl.png') }}" alt="Ms. Emily Johnson">
            <h4>Ms. Emily Johnson</h4>
            <p><strong>Guidance Counselor</strong></p>
            <div class="bio">
                <p>Ms. Johnson holds a Master’s Degree in Counseling Psychology and is dedicated to supporting students' emotional and academic growth. She provides individual and group counseling, and works closely with parents and teachers to address student needs.</p>
                <p>Achievements: Established a peer mentoring program and organized a series of workshops on mental health awareness and academic success strategies.</p>
            </div>
        </div>

        <!-- Add more staff members as needed -->
    </div>

    <!-- Related Content Section -->
    <div class="related-content">
        <h3>Related Resources</h3>
        <ul>
            <li><a href="{{ url('/about-us') }}">About Us</a> - Learn more about our school's mission and values.</li>
            <li><a href="{{ url('/faculty') }}">Faculty</a> - Meet the faculty members who make a difference in our students' education.</li>
            <li><a href="{{ url('/events') }}">Upcoming Events</a> - Check out upcoming events and activities at our school.</li>
            <li><a href="{{ url('/contact') }}">Contact Us</a> - Get in touch with our school administration and support staff.</li>
        </ul>
    </div>
</div>

@endsection

@section('scripts')
@endsection

@section('footer')
@include('partials.footer')
@endsection
