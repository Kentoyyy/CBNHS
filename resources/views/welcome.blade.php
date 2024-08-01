<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Header Example</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        .body{
            font-family: 'Poppins';
            height: 100vh;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #04508c; /* The blue background color */
            padding: 40px 10px;
            color: white;
        }

        .logo {
            display: flex;
            align-items: center;
            position: absolute;
            margin-left: 100px
        }

        .logo img {
            height: 120px; 
            margin-left: 30px;
           
        }
        .ssglogo{
            display: flex;
            align-items: center;
            position: absolute;
            margin-left: 720px
        }
        .ssglogo img{
            height: 120px; 
            
            position: relative;
        }
        

        .text {
            flex-grow: 1;
        }

        .title {
            font-size: 2rem;
            font-weight: bold;
            margin-left: 270px
        }

        .subtitle {
            font-size: 1em;
            margin-top: 5px;
            margin-left: 270px
            
        }

        .time {
            text-align: right;
            margin-top:-50px
            font-size: 1r15pxem;
            
        }
    </style>
</head>
<body>

@include('nav.topnav')
    <div class="header">
        <div class="logo">
            <img src="{{ asset('images/logoschool.png') }}" id="logoschool" alt="">
           
        </div>
        <div class="text">
            <div class="title">Bacoor National High School</div>
            <div class="subtitle">City Schools </div>
            <div class="subtitle">"Numero Uno sa Kalidad Na Edukasyon para sa Batang Bacooreno"</div>
        </div>
        <div class="ssglogo">
        <img src="{{ asset('images/ssg.png') }}" id="ssg" alt="">
        </div>
       
        <div class="time">
            Philippine Standard Time: <br> {{ \Carbon\Carbon::now()->format('l, F d, Y, h:i:s A') }}
        </div>
    </div>
</body>
</html>
