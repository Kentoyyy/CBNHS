<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
      body {
    margin: 0;
    padding: 0;
    font-family: 'Lato', sans-serif;
    background-color: #f8f9fa;
}

.header {
    position: relative;
    padding: 80px 20px;
    color: #fff;
    text-align: center;
    height: 100vh; /* Full viewport height */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    overflow: hidden; /* Hide overflow to prevent scrollbars from appearing */
}

.backgroundImage {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1;
    filter: brightness(50%);
    background-attachment: scroll; /* Background image scrolls with content */
}

.logo img {
    width: 80px;
    height: 80px;
    margin-bottom: 20px;
}

.title {
    font-size: 2rem;
    font-weight: 700;
}

.subtitle {
    font-size: 1.5rem;
    font-weight: 600;
}

.subtitlesmall {
    font-size: 1rem;
    margin-bottom: 20px;
}

.time {
    font-size: 1rem;
    font-family: 'Poppins', sans-serif;
   
    padding: 10px;
    border-radius: 5px;
    display: inline-block;
}
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ asset('images/bannerschool.jpg') }}" alt="Background Image" class="backgroundImage">
        <div class="logo">
            <img src="{{ asset('images/logoschool.png') }}" alt="Logo School">
        </div>
        <div class="title">Department of Education</div>
        <div class="subtitle">City of Bacoor National High School - Springville</div>
        <div class="subtitlesmall">"Bukal ng Karunugan sa Springville Asahan!"</div>
        <div class="time" id="clock"></div>
    </div>

    <script>
        function updateClock() {
            const now = new Date();
            const options = {
                timeZone: 'Asia/Manila',
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: true
            };
            const formatter = new Intl.DateTimeFormat('en-US', options);
            const timeString = formatter.format(now);
            
            document.getElementById('clock').textContent = timeString;
        }

        updateClock();
        setInterval(updateClock, 1000);
    </script>
</body>
</html>
