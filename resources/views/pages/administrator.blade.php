@extends('home-master')

@section('title', 'Administrator')
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
        display: flex;
        flex-wrap: wrap;
    }

    .text-content {
        flex: 1;
        margin-right: 20px;
    }

    .facebook-page {
        max-width: 300px;
    }

    .facebook-page iframe {
        width: 100%;
        height: 400px;
        border: none;
    }

    @media (max-width: 600px) {
        .header {
            padding: 30px;
            height: auto;
            flex-direction: column;
            align-items: flex-start;
        }

        .overlay-text {
            font-size: 1.2rem;
        }

        .content-container {
            flex-direction: column;
            align-items: center;
        }

        .text-content {
            margin-right: 0;
            margin-bottom: 20px;
        }

        .facebook-page {
            max-width: 100%;
        }

        .facebook-page iframe {
            height: 300px;
        }
    }
</style>
@endsection

@section('content')
@include('nav.topnav')

<div class="header container-fluid">
    <img src="{{ asset('images/logoschool.png') }}" alt="Logo Image" class="logoImage logoImage-left">
    <div class="overlay-text">
        Administrator
        <div class="overlay-text-p">City of Bacoor National High School - Springville <br> SY 2024-2025</div>
    </div>
    <img src="{{ asset('images/bannermatatag.png') }}" alt="Banner Image" class="logoImage logoImage-right">
</div>

<div class="content-container">
    <div class="text-content">
        <h3>School Administrator</h3>
        <p>The role of the school administrator at City of Bacoor National High School - Springville is integral to the effective operation and success of the institution. The administrator is responsible for overseeing the overall management of the school, ensuring that educational programs are delivered effectively and that the school environment supports both academic and personal growth.</p>

        <p>Key responsibilities include:</p>
        <ul>
            <li><strong>Strategic Leadership:</strong> Developing and implementing the school’s strategic plan, setting goals and objectives, and ensuring alignment with the school's mission and vision.</li>
            <li><strong>Academic Oversight:</strong> Supervising the curriculum and instruction, ensuring high standards of teaching and learning, and evaluating academic performance to drive continuous improvement.</li>
            <li><strong>Faculty and Staff Management:</strong> Recruiting, training, and supporting faculty and staff, fostering a collaborative and professional work environment.</li>
            <li><strong>Student Affairs:</strong> Addressing student needs and concerns, promoting a positive school culture, and implementing programs to support student well-being and success.</li>
            <li><strong>Community Engagement:</strong> Building strong relationships with parents, community members, and local organizations to enhance school programs and initiatives.</li>
            <li><strong>Financial Management:</strong> Overseeing the school’s budget and financial resources, ensuring effective allocation and utilization of funds to support educational objectives.</li>
        </ul>

        <p>Our administrator is committed to ensuring that City of Bacoor National High School - Springville remains a place where excellence in education is achieved through dedicated leadership and a collaborative approach. By working closely with the school community, the administrator plays a crucial role in shaping the future of our students and maintaining the high standards of our institution.</p>
    </div>

    <div class="facebook-page">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDepEdTayoCBNHSS305688&tabs=timeline&width=300&height=400&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
    </div>
</div>

@endsection

@section('scripts')
@endsection

@section('footer')
@include('partials.footer')
@endsection
