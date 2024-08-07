<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEPEd Mission, Vision, and Values</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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

        /* Mission, Vision, and Values styles */
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
    </style>
</head>
<body>

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

    <!-- Content section with mission, vision, and values statements -->
    <div class="content">
        <p> The school serves students residing in the nearby community. As a government-funded institution, it does not impose tuition fees or any miscellaneous charges<br> on any student. Nevertheless, there might be voluntary contributions for those who choose to participate in various school organizations.</p>
        <br>
        <h2>OFFERINGS</h2>
        <p>The school is offering the following courses in both Junior and Senior High School levels.</p>
        
        <!-- Collapsible sections for Junior and Senior High School -->
        <div>
            <h2>
                <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#juniorHighSchool" aria-expanded="false" aria-controls="juniorHighSchool">
                    Junior High School
                </button>
            </h2>
            <div class="collapse" id="juniorHighSchool">
                <ul>
                    <li>Grade 7</li>
                    <li>Grade 8</li>
                    <li>Grade 9</li>
                    <li>Grade 10</li>
                </ul>
            </div>
        </div>

        <div>
            
            <div class="collapse" id="seniorHighSchool">
                <!-- Add the content for Senior High School here -->
                <p>Content for Senior High School</p>
            </div>
        </div>
        
        <h2>DEPED VISION</h2>
        <p>We dream of Filipinos who passionately love their country and whose values and competencies enable them to realize their full potential and contribute meaningfully to nation-building.</p>
        <p>As a learner-centered public institution, the Department of Education continuously improves itself to better serve its stakeholders.</p>
        
        <h2>SERVICE PLEDGE</h2>
        <p>The Department of Education is committed to providing learners with quality basic education that is accessible, inclusive, and liberating through:</p>
        <ul>
            <li>Proactive leadership</li>
            <li>Shared governance</li>
            <li>Evidence-based policies, standards, and programs</li>
            <li>A responsive and relevant curriculum</li>
            <li>Highly competent and committed officials, and teaching and non-teaching personnel</li>
            <li>An enabling learning environment</li>
        </ul>
        
        <h2>CORE VALUES</h2>
        <ul>
            <li>Maka-Diyos</li>
            <li>Maka-tao</li>
            <li>Makakalikasan</li>
            <li>Makabansa</li>
        </ul>
        
        <h2>SCHOOL MISSION</h2>
        <!-- Add your school mission statement here -->
        <p>Our school is committed to nurturing each student's academic and personal growth, fostering a community of lifelong learners dedicated to excellence, respect, and responsibility.</p>

        <h2>SCHOOL VISION</h2>
        <!-- Add your school mission statement here -->
        <p>A caring, functional institution that transforms knowledge into actualities, nurtures intelligence with values and radiates wisdom in discovering new horizon. </p>
    </div>

    <!-- Bootstrap JS and dependencies -->
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
</body>
</html>
