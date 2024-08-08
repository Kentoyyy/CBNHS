@extends('home-master')

@section('title', 'CBNHS')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">

@section('style')
<style>
    /* Header styles */
    .header {
        position: relative;
        padding: 50px 90px;
        color: #fff;
        height: 30vh; /* Adjust the height as needed */
        overflow: hidden; /* Ensure content does not overflow */
    }

    .header .backgroundImage {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
        filter: brightness(40%);
    }

    .overlay-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 2rem;
        font-weight: bold;
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        text-align: center;
    }

    /* Back button styles */
    .back-button-container {
        display: flex;
        justify-content: flex-end; /* Align the button to the right */
        margin: 20px 100px 20px 0; 
    }

    .back-button {
        padding: 8px 70px;
        background-color: #0B4F91; /* Dark blue color */
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1rem;
       
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        transition: background-color 0.3s ease;
    }

    .back-button:hover {
        background-color: #083a68; /* Slightly darker blue on hover */
    }

    /* Admission content styles */
    .content {
        padding: 40px 15%;
        color: #333;
        line-height: 1.6;
    }

    .content h2 {
        color: #0B4F91; /* Dark blue color */
        font-weight: bold;
        font-size: 18px;
        margin-bottom: 20px;
    }

    .content p {
        margin-bottom: 15px;
        font-size: 15px;
    }

    .content ul {
        list-style-type: disc;
        margin-left: 20px;
        font-size: 14px;
        margin-bottom: 20px;
    }

    .content ul li {
        margin-bottom: 10px;
    }

    .step {
        margin-bottom: 40px;
    }

    .step img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
    }

    .step h3 {
        color: #0B4F91; /* Dark blue color */
        font-size: 16px;
        margin-top: 10px;
        font-weight: bold;
    }

    .step p {
        font-size: 14px;
    }
</style>
@endsection

@section('content')
@include('nav.topnav')

<!-- Header section with background image and overlay text -->
<div class="header container-fluid">
    <div class="homeContainer">
        <img src="{{ asset('images/ourmission.jpg') }}" alt="Background Image" class="backgroundImage">
        <div class="overlay-text">ADMISSION</div>
    </div>
</div>

<!-- Back button section -->
<div class="back-button-container">
    <button class="back-button" onclick="goBack()">Back</button>
</div>

<!-- Content section with admission information -->
<div class="content">
    <p>The school serves students residing in the nearby community. As a government-funded institution, it does not impose tuition fees or any miscellaneous charges on any student. Nevertheless, there might be voluntary contributions for those who choose to participate in various school organizations.</p>
    
    <h2>HOW TO ENROLL IN JUNIOR HIGH SCHOOL</h2>
    <p>Follow these steps to enroll your child in Junior High School:</p>
    
    <!-- Step-by-step instructions -->
    <div class="step">
        <img src="{{ asset('images/step1.jpg') }}" alt="Visit Admission Office">
        <h3>Step 1: Visit the School’s Admission Office</h3>
        <p>Go to the school's admission office or visit our official website to get the enrollment form.</p>
    </div>

    <div class="step">
        <img src="{{ asset('images/step2.jpg') }}" alt="Fill Out Form">
        <h3>Step 2: Fill Out the Enrollment Form</h3>
        <p>Complete the form with accurate information about the student.</p>
    </div>

    <div class="step">
        <img src="{{ asset('images/step3.jpg') }}" alt="Submit Documents">
        <h3>Step 3: Submit the Required Documents</h3>
        <p>Provide the following documents:
            <ul>
                <li>Original and photocopy of Birth Certificate</li>
                <li>Original and photocopy of Form 138 (Report Card)</li>
                <li>Original and photocopy of Certificate of Good Moral Character</li>
                <li>Recent 1x1 or 2x2 photo (usually 2 copies)</li>
                <li>Proof of Residence (e.g., Barangay Certificate)</li>
                <li>Additional documents may be required based on specific school requirements.</li>
            </ul>
        </p>
    </div>

    <div class="step">
        <img src="{{ asset('images/step4.jpg') }}" alt="Attend Orientation">
        <h3>Step 4: Attend the Scheduled Orientation</h3>
        <p>If applicable, attend the orientation session to learn more about the school and the enrollment process.</p>
    </div>

    <div class="step">
        <img src="{{ asset('images/step5.jpg') }}" alt="Complete Additional Requirements">
        <h3>Step 5: Complete Any Additional Requirements</h3>
        <p>Follow any additional instructions provided by the school to finalize the enrollment process.</p>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // JavaScript function to go back to the previous page
    function goBack() {
        window.history.back();
    }
</script>
@endsection

@section('footer')
    @include('partials.footer')
@endsection
