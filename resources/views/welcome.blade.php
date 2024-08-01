@include('nav.topnav')
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Anton&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        body {
            font-family: "Lato", sans-serif;
}


.slider {
    position: relative;
    max-width: 700px;
    max-height: 400px;
    margin-top: 20px;
    margin-left: 50px;
    overflow: hidden;
    border: 2px solid #ddd;
    border-radius: 10px;
}

.slides {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.slides img {
    width: 100%;
    border-radius: 10px;
}

.prev, .next {
    background-color: black;
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 14px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 10px;
    transition: 0.6s ease;
    border-radius: 0 2px 2px 0;
    user-select: none;
}

.next {
    right: 0;
    border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
}

.announcement h2{
    margin-top: 50px;
    margin-left: 50px;
    color: blue; 
    font-weight: 700;
}
.numberOne{
    margin-top: 20px;
    margin-left: 300px;
}
.numberOne h1{
    color: gold;
}
.numberOne h3{
    font-weight: 1000;
    font-size: 15px;
    margin-left: -5px
}
.numberOne h4{
    font-weight: 700;
    font-size: 40px;
    margin-left: -75px
}
.numberOne h5{
    font-size: 15px;
    margin-left: -15px
}
.prayer {
    margin-left: 50px; 
}
.footer {
    margin-top: 20px;
    height: 200px;
    background-color: #efefef;
}
.footer_cont{
    display: flex;
    flex-direction: horizontal;
    margin-left: 50px;
}
.first{
    margin-top: 100px;
    width: 100px;
    height: 10px;
}
.second {
    width: 200px;
    margin-left: 200px;
    margin-top: 25px;
}
.second h1{
    font-size: 10px;
    font-weight: 1000;
}
.third {
    width: 200px;
    margin-left: 200px;
    margin-top: 25px;
}
.third h1{
    font-size: 10px;
    font-weight: 1000;
}
.fourth {
    width: 200px;
    margin-left: 200px;
    margin-top: 25px;
}
.fourth h1{
    font-size: 10px;
    font-weight: 1000;
}
    </style>
</head>
<body>
    <div class="slider">
        <div class="slides">
            <img src="{{ asset('images/welcomeslide1.jpg') }}" alt="Image 1">
            <img src="{{ asset('images/welcomeslide2.jpg') }}" alt="Image 1">
            <img src="{{ asset('images/welcomeslide3.jpg') }}" alt="Image 1">
            <img src="{{ asset('images/welcomeslide4.png') }}" alt="Image 1">
            <img src="{{ asset('images/welcomeslide5.png') }}" alt="Image 1">
            <img src="{{ asset('images/welcomeslide6.jpg') }}" alt="Image 1">
            <img src="{{ asset('images/welcomeslide7.gif') }}" alt="Image 1">
            <img src="{{ asset('images/welcomeslide8.jpg') }}" alt="Image 1">
            <img src="{{ asset('images/welcomeslide9.jpg') }}" alt="Image 1">
            <img src="{{ asset('images/welcomeslide10.jpg') }}" alt="Image 1">
        </div>
        <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="next" onclick="moveSlide(1)">&#10095;</button>
    </div>
    <div class="announcement">
        <h2>ANNOUNCEMENTS</h2>
        <div class="numberOne">
            <h1>FORTRESS</h1>
        <h3>EDUCATION CONTINUES IN</h3>
        <h4>SDO BACOOR CITY</h4>
        <h5>For Victorious and Valiant Bacooreños</h5>
        </div>
        <div class="prayer">
            <img src="{{ asset('images/prayer.jpg') }}" alt="">
        </div>
    </div>
    <div class="footer">
        <div class="footer_cont">
            <div class="first">
                
            </div>
            <div class="second">
                <h1>REPUBLIC OF THE PHILIPPINES
                </h1>
                <p>All content is in the public domain unless otherwise stated.</p>
            </div>
            <div class="third">
                <h1>ABOUT CBNHS</h1>
                <p>
                Learn more about the Philippine government, its structure, how government works and the people behind it.
                </p>
            </div>
            <div class="fourth">
                <h1>LINKS</h1>
                <a href="#">Home</a><br>
                <a href="#">About</a> <br>
                 <a href="#">Contact</a>
            </div>
        </div>
        
    </div>
</body>
<script>
    let slideIndex = 0;
const slides = document.querySelectorAll('.slides img');
const totalSlides = slides.length;

const showSlides = (n) => {
    slides.forEach((slide, index) => {
        slide.style.display = (index === n) ? 'block' : 'none';
    });
};

const moveSlide = (n) => {
    slideIndex += n;
    if (slideIndex >= totalSlides) {
        slideIndex = 0;
    } else if (slideIndex < 0) {
        slideIndex = totalSlides - 1;
    }
    showSlides(slideIndex);
};

document.addEventListener('DOMContentLoaded', () => {
    showSlides(slideIndex);
    setInterval(() => {
        moveSlide(1);
    }, 5000); // Change image every 5 seconds
});

</script>
</html>