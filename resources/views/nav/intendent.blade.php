<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Superintendent's Corner</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fa;
            color: #444;
            line-height: 1.6;
        }

        .superintendent-corner {
            max-width: 900px;
            margin: 60px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }

        .superintendent-corner h1 {
            text-align: center;
            color: #2a3b6b;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .content {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        .content img {
            max-width: 180px;
            border-radius: 50%;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .content img:hover {
            transform: scale(1.05);
        }

        .text-content {
            max-width: 500px;
            margin-left: 20px;
        }

        .text-content p {
            margin: 0 0 15px;
            text-align: justify;
        }

        .text-content p strong {
            display: block;
            margin-top: 10px;
            font-size: 16px;
            color: #333;
        }

        @media (max-width: 600px) {
            .content {
                flex-direction: column;
                align-items: center;
            }

            .text-content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <div class="superintendent-corner">
        <h1>SCHOOLS DIVISION SUPERINTENDENT’S CORNER</h1>
        <div class="content">
            <img src="{{ asset('images/super_intendent_profile.png') }}" alt="Superintendent Photo">
            <div class="text-content">
                <p>Progress is not accomplished overnight. This is a reality that we learn through the lens of any leadership journey. Achieving it is a tedious and laborious process that requires tenacity and resilience. Most importantly, it is a task that requires everyone’s efforts.</p>
                <p>With the spirit of bayanihan alive and well with our learning leaders, teaching and non-teaching personnel, stakeholders, and the Local Government Unit, our goal of providing quality education and excellent service is all within reach for the love of Batang Bacooreños.</p>
                <p>Samahan po ninyo ako sa pagbuo ng isang mas progresibong at matatag na SDO Bacoor City!</p>
                <p><strong>Babylyn M. Pambid</strong><br>Officer-in-Charge<br>Office of the Schools Division Superintendent</p>
            </div>
        </div>
    </div>
</body>
</html>
