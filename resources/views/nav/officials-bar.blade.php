
<style>
    .sticky-top {
            position: -webkit-sticky; /* Safari */
            position: sticky;
            top: 0;
            z-index: 1030;
        }

        .header {
            position: relative;
            padding: 50px 90px;
            color: #fff;
        }
        
        .header .backgroundImage {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
          
            filter: brightness(50%)

        }
        
        .logo img, .ssglogo img {
            max-width: 100%;
            height: auto;
            margin-top: 30px;
        }

        .title {
            font-size: 2.8rem;
            font-family: "Lato", sans-serif;
            font-weight: bold;
            font-weight: 700;
        }

        .subtitle {
            font-size: 2rem;
            font-family: "Lato", sans-serif;
            font-weight: 600;
        }

        .subtitlesmall {
            font-size: 1rem;
        }

        .time {
            font-size: 0.875rem;
            font-family: 'Poppins';
        }
</style>
<div class="header container-fluid">
        <div class="homeContainer">
            <img src="{{ asset('images/test.jpg') }}" alt="Background Image" class="backgroundImage">
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-md-2 d-flex justify-content-center">
                <div class="logo">
                    <img src="{{ asset('images/logoschool.png') }}" alt="Logo School">
                </div>
            </div>
            <div class="col-12 col-md-8 text-center">
                <div class="title">Department of Education</div>
                <div class="subtitle">Bacoor National High School - Springville</div>
                <div class="subtitlesmall">"Numero Uno sa Kalidad Na Edukasyon para sa Batang Bacooreno"</div>
            </div>
            <div class="col-12 col-md-2 d-flex justify-content-center">
                <div class="ssglogo">
                    <img src="{{ asset('images/ssg.png') }}" alt="SSG Logo">
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 text-center time">
                Philippine Standard Time:<br> {{ \Carbon\Carbon::now()->format('l, F d, Y, h:i:s A') }}
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>