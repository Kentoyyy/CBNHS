<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Footer Example</title>
    <style>
    .footer {
            background-color: #f8f9fa;
            padding: 40px 0;
        }
        .footer h5 {
            color: #1c4587;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .footer .contact-info, .footer .map {
            margin-bottom: 20px;
        }
        .footer .contact-info p {
            color: #333;
            margin-bottom: 10px;
        }
        .footer .contact-info a {
            color: #007bff;
            font-weight: bold;
            text-decoration: none;
        }
        .footer .contact-info a:hover {
            color: #0056b3;
            text-decoration: underline;
        }
        .footer .map iframe {
            width: 100%;
            height: 250px;
            border: 0;
        }
        @media (max-width: 768px) {
            .footer .contact-info, .footer .map {
                text-align: center;
            }
            .footer .map iframe {
                height: 300px;
            }
        }
    </style>
</head>
<body>

<!-- Your main content goes here -->

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 contact-info">
                <h5>CONTACT INFORMATION</h5>
                <p>Address: Phase 2, West, Camella Springville, Springville Ave, Bacoor, Cavite</p>
                <p>Contact Info:</p>
                <p>School - (046) 410 9472<p>
                <p>Registrar - #</p>
                <p>Principal - #</p>
                <p>Email address: <a href="305688@deped.gov.ph">305688@deped.gov.ph</a></p>
                <p>Facebook page:</p>
                <p><a href="https://www.facebook.com/DepEdTayoCBNHSS305688" target="_blank">Main FB</a> / <a href="#" target="_blank">Registrar</a> / <a href="#" target="_blank">CBNHS SSG</a></p>
                
            </div>
            <div class="col-md-6 map">
                <h5>VICINITY MAP</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3497.3201683964626!2d120.97907297638876!3d14.38880784634219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d3d9397b8f6b%3A0xca31385c13a0ad13!2sCity%20of%20Bacoor%20National%20High%20School%20-%20Springville!5e1!3m2!1sen!2sph!4v1722561543762!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
