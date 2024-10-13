@extends('home-master')

@section('title', 'Faculty')
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

    .faculty-section {
        max-width: 1200px;
        margin: 40px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        display: flex;
    }

    .faculty-content {
        flex: 1;
    }

    .faculty-section h2 {
        text-align: center;
        color: #2a3b6b;
        font-size: 28px;
        margin-bottom: 30px;
        font-weight: bold;
    }

    .faculty-member {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
    }

    .faculty-member img {
        max-width: 100px;
        border-radius: 50%;
        margin-right: 20px;
        transition: transform 0.3s ease;
    }

    .faculty-member img:hover {
        transform: scale(1.05);
    }

    .faculty-info {
        max-width: 600px;
    }

    .faculty-info h3 {
        margin: 0 0 10px;
        font-size: 20px;
        color: #333;
    }

    .faculty-info p {
        margin: 0 0 5px;
        font-size: 14px;
        color: #666;
    }

    .faculty-info p strong {
        font-size: 16px;
        color: #444;
    }

    .faculty-category {
        margin-bottom: 50px;
    }

    .faculty-category h3 {
        font-size: 24px;
        color: #2a3b6b;
        margin-bottom: 20px;
        font-weight: bold;
    }

    .facebook-page {
        max-width: 300px;
        margin-left: 40px;
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

        .faculty-section {
            flex-direction: column;
        }

        .faculty-member {
            flex-direction: column;
            text-align: center;
        }

        .faculty-member img {
            margin: 0 0 20px 0;
        }

        .facebook-page {
            margin-top: 20px;
            margin-left: 0;
            width: 100%;
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
        Faculty
        <div class="overlay-text-p">City of Bacoor National High School - Springville <br> Sy 2024-2025</div>
    </div>
    <img src="{{ asset('images/bannermatatag.png') }}" alt="Banner Image" class="logoImage logoImage-right">
</div>

<div class="faculty-section">
    <div class="faculty-content">
        <h2>Our Faculty Team</h2>

        <!-- Faculty Members -->
        @foreach ($facultyMembers as $facultyMember)
            <div class="faculty-category">
                <h3>{{ $facultyMember->position }}</h3>
                <div class="faculty-member">
                    <img src="{{ asset('storage/' . $facultyMember->image) }}" alt="Faculty Member Image">
                    <div class="faculty-info">
                        <h3>{{ $facultyMember->name }}</h3>
                        <p>{{ $facultyMember->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@section('scripts')
@endsection

@section('footer')
@include('partials.footer')
@endsection
