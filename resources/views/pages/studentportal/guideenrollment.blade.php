<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Procedure</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Body Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            color: #2C3E50;
            background-color: #FAFAFA;
            line-height: 1.6;
        }

        .navbar {
            background-color: #1c4587;
            padding: 10px 20px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo-image {
            height: 30px;
            margin-right: 10px;
        }

        .logo-name {
            font-size: 16px;
            font-weight: 500;
            color: #fff;
        }

        .nav-links {
            display: flex;
            align-items: center;
        }

        .nav-link {
            text-decoration: none;
            color: #fff;
            font-size: 14px;
            font-weight: 400;
            margin-left: 20px;
            padding: 6px 12px;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
            border-bottom: 2px solid transparent;
        }

        .nav-link:hover {
            background-color: #f0f0f0;
            color: #000;
            border-bottom: 2px solid #fff;
        }

        .nav-button {
            text-decoration: none;
            color: #000;
            background-color: #fdfdfd;
            padding: 6px 25px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
            margin-left: 20px;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .nav-button:hover {
            background-color: #476ca9;
        }

        .container {
            padding-top: 80px;
            max-width: 700px;
            margin: 0 auto;
        }

        .step {
            margin-bottom: 30px;
        }

        .step-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .step-number {
            font-size: 24px;
            font-weight: bold;
            background-color: #1c4587;
            color: #fff;
            border-radius: 50%;
            height: 40px;
            width: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 15px;
        }

        .step-title {
            font-size: 18px;
            font-weight: 500;
        }

        .step-description {
            margin-left: 55px;
            font-size: 14px;
            color: #2C3E50;
        }

        img.step-image {
            display: block;
            max-width: 100%;
            height: auto;
            margin: 15px 0;
        }

        a {
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

    </style>
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('images/logoschool.png') }}" alt="Logo" class="logo-image">
            <span class="logo-name">City of Bacoor National High School Springville Student Portal</span>
        </div>
        <div class="nav-links">
            <a href="student" class="nav-link">Home</a>
            <a href="guideenrollment" class="nav-link">How to Enroll?</a>
            <a href="faqportal" class="nav-link">FAQ & Help</a>
            <a href="/" class="nav-button">Home Website</a>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center faq-heading mb-4">Enrollment Procedure for Junior High School</h1>

        <div class="step">
            <div class="step-header">
                <div class="step-number">1</div>
                <div class="step-title">Gather Required Documents</div>
            </div>
            <div class="step-description">
                <p>Before visiting the school, make sure you have the following documents:</p>
                <ul>
                    <li>Birth Certificate (Original & Photocopy)</li>
                    <li>Form 138 (Report Card)</li>
                    <li>Good Moral Certificate</li>
                    <li>2x2 ID Photo (2 copies)</li>
                </ul>
                <img src="{{ asset('images/document.png') }}" alt="Required Documents" class="step-image">
            </div>
        </div>

        <div class="step">
            <div class="step-header">
                <div class="step-number">2</div>
                <div class="step-title">Visit the School's Admission Office</div>
            </div>
            <div class="step-description">
                <p>Go to the school's admission office to submit the required documents. The staff will guide you through the process of filling out the enrollment form.</p>
                <img src="{{ asset('images/office.png') }}" alt="Admission Office" class="step-image">
            </div>
        </div>

        <div class="step">
            <div class="step-header">
                <div class="step-number">3</div>
                <div class="step-title">Pay Enrollment Fees</div>
            </div>
            <div class="step-description">
                <p>After submitting your documents, proceed to the school's cashier to pay the necessary enrollment fees. Keep the receipt as proof of payment.</p>
                <img src="{{ asset('images/payment.png') }}" alt="Payment" class="step-image">
            </div>
        </div>

        <div class="step">
            <div class="step-header">
                <div class="step-number">4</div>
                <div class="step-title">Attend the Orientation</div>
            </div>
            <div class="step-description">
                <p>Once you've completed the enrollment process, you will be scheduled to attend an orientation session where you will receive important information about the school year, class schedules, and other relevant details.</p>
                <img src="{{ asset('images/orientation.png') }}" alt="Orientation" class="step-image">
            </div>
        </div>

        <div class="step">
            <div class="step-header">
                <div class="step-number">5</div>
                <div class="step-title">Receive Your Class Schedule</div>
            </div>
            <div class="step-description">
                <p>After the orientation, you will receive your class schedule. Make sure to review it and familiarize yourself with your class locations and teachers.</p>
                <img src="{{ asset('images/schedule.png') }}" alt="Class Schedule" class="step-image">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
