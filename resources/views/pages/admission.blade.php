@extends('home-master')

@section('title', 'Admission')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">

@section('style')
<style>
    /* Header styles */
    .header {
        position: relative;
        padding: 50px 90px;
        color: #fff;
        height: 70vh; /* Adjust the height as needed */
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
        top: 60%;
        left: 15%;
        transform: translate(-50%, -50%);
        font-size: 2rem;
        font-weight: bold;
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        text-align: center;
    }
    .overlay-subtext {
        position: absolute;
        top: 70%;
        left: 7%;
        width: 80%;
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

    .content h1 {
        color: #0B4F91; /* Dark blue color */
        font-weight: bold;
        font-size: 32px;
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

    /* Style for the collapsible button */
.collapsible-btn-req {
    background-color: #0B4F91;
    color: white;
    cursor: pointer;
    padding: 20px;
    border: none;
    width: 900px;
    text-align: left;
    font-size: 16px;
    position: relative;
    display: flex;
    justify-content: space-between; /* Ensure content is spaced out */
    align-items: center;
}

/* Arrow icon (default pointing down) */
.collapsible-btn-req::after {
    content: '\25BC'; /* Unicode for down arrow */
    font-size: 16px;
    position: absolute;
    right: 10px; /* Adjust positioning */
    transition: transform 0.3s; /* Smooth transition when rotated */
}

.collapsible-content-req {
      padding: 0 18px;
      max-height: 0; /* Initially hidden */
      transition: max-height 0.5s ease-out;
      overflow: hidden;
      background-color: #f1f1f1;
      margin-top: 1px;
      width: 900px;
    }
/* Arrow icon when content is expanded (pointing up) */
.collapsible-btn-req.active::after {
    content: '\25B2'; /* Unicode for up arrow */
}
    /* Style for the collapsible button */
.collapsible-btn-step {
    margin-top: 10px;
    background-color: #0B4F91;
    color: white;
    cursor: pointer;
    padding: 20px;
    border: none;
    width: 900px;
    text-align: left;
    font-size: 16px;
    position: relative;
    display: flex;
    justify-content: space-between; /* Ensure content is spaced out */
    align-items: center;
}

/* Arrow icon (default pointing down) */
.collapsible-btn-step::after {
    content: '\25BC'; /* Unicode for down arrow */
    font-size: 16px;
    position: absolute;
    right: 10px; /* Adjust positioning */
    transition: transform 0.3s; /* Smooth transition when rotated */
}

/* Arrow icon when content is expanded (pointing up) */
.collapsible-btn-step.active::after {
    content: '\25B2'; /* Unicode for up arrow */
}

    /* Style for the content inside the collapsible div */
    .collapsible-content-step {
      padding: 0 18px;
      max-height: 0; /* Initially hidden */
      transition: max-height 0.5s ease-out;
      overflow: hidden;
      background-color: #f1f1f1;
      margin-top: 1px;
      width: 900px;
    }
    /* Style for the collapsible button */
    .collapsible-btn-trans {
    margin-top: 10px;
    background-color: #0B4F91;
    color: white;
    cursor: pointer;
    padding: 20px;
    border: none;
    width: 900px;
    text-align: left;
    font-size: 16px;
    position: relative;
    display: flex;
    justify-content: space-between; /* Ensure content is spaced out */
    align-items: center;
}

/* Arrow icon (default pointing down) */
.collapsible-btn-trans::after {
    content: '\25BC'; /* Unicode for down arrow */
    font-size: 16px;
    position: absolute;
    right: 10px; /* Adjust positioning */
    transition: transform 0.3s; /* Smooth transition when rotated */
}

/* Arrow icon when content is expanded (pointing up) */
.collapsible-btn-trans.active::after {
    content: '\25B2'; /* Unicode for up arrow */
}

    /* Style for the content inside the collapsible div */
    .collapsible-content-trans {
      padding: 0 18px;
      max-height: 0; /* Initially hidden */
      transition: max-height 0.5s ease-out;
      overflow: hidden;
      background-color: #f1f1f1;
      margin-top: 1px;
      width: 900px;
    }
</style>
@endsection

@section('content')
@include('nav.topnav')

<!-- Header section with background image and overlay text -->
<div class="header container-fluid">
    <div class="homeContainer">
        <img src="{{ asset('images/ourmission.jpg') }}" alt="Background Image" class="backgroundImage">
        <div class="overlay-text">ADMISSIONS
        </div>
        <div class="overlay-subtext">The school serves students residing in the nearby community. As a government-funded institution, it does not impose tuition fees or any miscellaneous charges on any student. Nevertheless, there might be voluntary contributions for those who choose to participate in various school organizations.</div>
    </div>
</div>

<!-- Back button section -->
<div class="back-button-container">
    <button class="back-button" onclick="goBack()">Back</button>
</div>

<!-- Content section with admission information -->
<div class="content">
    <h1>HOW TO ENROLL IN JUNIOR HIGH SCHOOL</h1>
    <p>Follow these steps to enroll your child in Junior High School:</p>

    <button class="collapsible-btn-req">REQUIREMENTS</button>

    <!-- Collapsible content -->
    <div class="collapsible-content-req">
            <ul>
                <br>
                <li>Original and photocopy of Birth Certificate</li>
                <li>Original and photocopy of Form 138 (Report Card)</li>
                <li>Original and photocopy of Certificate of Good Moral Character</li>
                <li>Recent 1x1 or 2x2 photo (usually 2 copies)</li>
                <li>Proof of Residence (e.g., Barangay Certificate)</li>
                <li>Additional documents may be required based on specific school requirements.</li>
            </ul>
        </div>
    

    <button class="collapsible-btn-step">PROCEDURE</button>

    <!-- Collapsible content -->
    <div class="collapsible-content-step">
            <ul>
                <br>
                <li><h4>Step 1</h4>
                Visit the School's Admission Office</li>
                <li><h4>Step 2</h4>
                Fill out the Enrollment Form</li>
                <li><h4>Step 3</h4>
                Submit the Required Documents</li>
                <li><h4>Step 4</h4>
                Attend the Scheduled Orientation</li>
                <li><h4>Step 5</h4>
                Complete the Additional Requirements</li>
            </ul>
        </div>

    <button class="collapsible-btn-trans">TRANSFEREES</button>

    <!-- Collapsible content -->
    <div class="collapsible-content-trans">
            <ul>
                <br>
                <li>Original Copy of Form 137</li>
                <li>Original and photocopy of Birth Certificate</li>
                <li>Original and photocopy of Form 138 (Report Card)</li>
                <li>Original and photocopy of Certificate of Good Moral Character</li>
                <li>Recent 1x1 or 2x2 photo (usually 2 copies)</li>
                <li>Proof of Residence (e.g., Barangay Certificate)</li>
                <li>Additional documents may be required based on specific school requirements.</li>
            </ul>
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
    // Get the button and the collapsible content for the Requirements
var collapsibleBtn = document.querySelector('.collapsible-btn-req');
var collapsibleContent = document.querySelector('.collapsible-content-req');

// Add click event listener to the button
collapsibleBtn.addEventListener('click', function() {
    // Toggle between hiding and showing the collapsible content
    if (collapsibleContent.style.maxHeight) {
        collapsibleContent.style.maxHeight = null; // Collapse the content
        collapsibleBtn.classList.remove('active'); // Remove 'active' class (arrow down)
    } else {
        collapsibleContent.style.maxHeight = collapsibleContent.scrollHeight + "px"; // Expand the content
        collapsibleBtn.classList.add('active'); // Add 'active' class (arrow up)
    }
});

// Get the button and the collapsible content for the Procedure
var collapsibleBtn2 = document.querySelector('.collapsible-btn-step');
var collapsibleContent2 = document.querySelector('.collapsible-content-step');

// Add click event listener to the button
collapsibleBtn2.addEventListener('click', function() {
    // Toggle between hiding and showing the collapsible content
    if (collapsibleContent2.style.maxHeight) {
        collapsibleContent2.style.maxHeight = null; // Collapse the content
        collapsibleBtn2.classList.remove('active'); // Remove 'active' class (arrow down)
    } else {
        collapsibleContent2.style.maxHeight = collapsibleContent2.scrollHeight + "px"; // Expand the content
        collapsibleBtn2.classList.add('active'); // Add 'active' class (arrow up)
    }
});

// Get the button and the collapsible content for the Procedure
var collapsibleBtn3 = document.querySelector('.collapsible-btn-trans');
var collapsibleContent3 = document.querySelector('.collapsible-content-trans');

// Add click event listener to the button
collapsibleBtn3.addEventListener('click', function() {
    // Toggle between hiding and showing the collapsible content
    if (collapsibleContent3.style.maxHeight) {
        collapsibleContent3.style.maxHeight = null; // Collapse the content
        collapsibleBtn3.classList.remove('active'); // Remove 'active' class (arrow down)
    } else {
        collapsibleContent3.style.maxHeight = collapsibleContent3.scrollHeight + "px"; // Expand the content
        collapsibleBtn3.classList.add('active'); // Add 'active' class (arrow up)
    }
});
</script>
@endsection

@section('footer')
    @include('partials.footer')
@endsection
