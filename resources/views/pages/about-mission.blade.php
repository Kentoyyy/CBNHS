@extends('home-master')

@section('title', 'Mission & Vision')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
@section('style')
<style>
    /* General Styles */
    body {
        font-family: 'Helvetica Neue', Arial, sans-serif;
        color: #333;
        background-color: #f5f5f5;
    }

    /* Header styles */
    .header {
        position: relative;
        padding: 40px;
        color: #fff;
        height: 40vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
      
    }

    .header .backgroundImage {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
        filter: brightness(50%);
    }

    .overlay-text {
        font-size: 2.5rem;
        font-weight: bold;
        color: white;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        max-width: 70%;
    }

    /* Back button styles */
    .back-button-container {
        margin: 20px 0;
        text-align: right;
    }

    .back-button {
        padding: 10px 30px;
        background-color: transparent;
        color: #0B4F91;
        border: 2px solid #0B4F91;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .back-button:hover {
        background-color: #0B4F91;
        color: white;
    }

    /* Content styles */
    .content {
        padding: 40px 10%;
        color: #333;
        line-height: 1.6;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        margin-top: -50px;
    }

    .content h2 {
        color: #0B4F91;
        font-weight: bold;
        font-size: 22px;
        margin-bottom: 20px;
        border-bottom: 2px solid #ddd;
        padding-bottom: 10px;
        text-align: center;
    }

    .content p, .content ul {
        text-align: justify;
        font-size: 15px;
    }

    .content ul {
        list-style-type: disc;
        margin-left: 20px;
        margin-bottom: 20px;
    }

    .content ul li {
        margin-bottom: 10px;
    }

    /* Image styles */
    .content img {
        display: block;
        max-width: 100%;
        height: auto;
        margin: 20px 0;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .content .text-image-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 40px;
        text-align: center;
    }

    .content .text-image-container img {
        max-width: 80%;
        margin-bottom: 20px;
    }

    .content .text-image-container .text {
        max-width: 80%;
    }

    /* Responsive Design */
    @media (min-width: 768px) {
        .content .text-image-container {
            flex-direction: row;
            text-align: justify;
        }

        .content .text-image-container img {
            max-width: 40%;
            margin-right: 30px;
            margin-bottom: 0;
        }

        .content .text-image-container .text {
            max-width: 60%;
        }
    }
</style>
@endsection

@section('content')
@include('nav.topnav')

<!-- Header section with background image and overlay text -->
<div class="header container-fluid">
    <img src="{{ asset('images/bannerschool.jpg') }}" alt="Mission Background Image" class="backgroundImage">
    <div class="overlay-text">Mission & Vision</div>
</div>

<!-- Back button section -->
<div class="container">
    <div class="back-button-container">
        <button class="back-button" onclick="goBack()">Back</button>
    </div>
</div>

<!-- Content section with mission, vision, and values statements -->
<div class="container content">

    <!-- Vision Section -->
    <div class="text-image-container">
        <img src="{{ asset('images/vision.png') }}" alt="Vision Image">
        <div class="text">
            <h2>DEPED VISION</h2>
            <p>We dream of Filipinos who passionately love their country and whose values and competencies enable them to realize their full potential and contribute meaningfully to nation-building.</p>
            <p>As a learner-centered public institution, the Department of Education continuously improves itself to better serve its stakeholders.</p>
        </div>
    </div>

    <!-- School Vision Section -->
    <div class="text-image-container">
        <img src="{{ asset('images/mision.png') }}" alt="Vision Image">
        <div class="text">
            <h2>DEPED MISSION</h2>
            <p>To protect and promote the right of every Filipino to quality, equitable, culture-based, and complete basic education where:

                Students learn in a child-friendly, gender-sensitive, safe, and motivating environment.
                Teachers facilitate learning and constantly nurture every learner.
                Administrators and staff, as stewards of the institution, ensure an enabling and supportive environment for effective learning to happen.
                Family, community, and other stakeholders are actively engaged and share responsibility for developing life-long learners.</p>
        </div>
    </div>

    <!-- Core Values Section -->
    <div class="text-image-container">
        <img src="{{ asset('images/core.png') }}" alt="Core Values Image">
        <div class="text">
            <h2>CORE VALUES</h2>
            <ul>
                <li>Maka-Diyos</li>
                <li>Maka-tao</li>
                <li>Makakalikasan</li>
                <li>Makabansa</li>
            </ul>
        </div>
    </div>

    <!-- Our Mandate Section -->
    <div class="text-image-container">
        <img src="{{ asset('images/mandate.png') }}" alt="Mission Image">
        <div class="text">
            <h2>Our Mandate</h2>
            <p>The Department of Education was established through the Education Decree of 1863 as the Superior Commission of Primary Instruction under a Chairman. The Education agency underwent many reorganization efforts in the 20th century in order to better define its purpose vis a vis the changing administrations and charters. The present day Department of Education was eventually mandated through Republic Act 9155, otherwise known as the Governance of Basic Education act of 2001 which establishes the mandate of this agency. The Department of Education (DepEd) formulates, implements, and coordinates policies, plans, programs and projects in the areas of formal and non-formal basic education. It supervises all elementary and secondary education institutions, including alternative learning systems, both public and private; and provides for the establishment and maintenance of a complete, adequate, and integrated system of basic education relevant to the goals of national development.</p>
        </div>
    </div>

</div>

<!-- Bootstrap JS and dependencies -->
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
