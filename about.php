<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MR TRADERS</title>
    <link rel="stylesheet" href="assets/style.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <!-- bootstrap icons  -->
    <!-- Bootstrap Icons CSS (latest version) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <!-- Animate.css for animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
        body {
            background-color: #007bff;
            /* Blue background */
            color: white;
            /* White text for brand color */
        }

        .product-card {
            background-color: rgba(255, 255, 255, 0.1);
            /* Slightly transparent white */
            border: none;
            border-radius: 15px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .product-card img {
            border-radius: 15px 15px 0 0;
        }

        .product-card h5,
        .product-card p {
            color: white;
        }

        .service-card {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 30px 20px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .service-card i {
            font-size: 50px;
            margin-bottom: 20px;
            color: white;
        }

        .service-card h5 {
            margin-bottom: 15px;
            color: white;
        }

        .service-card p {
            color: white;
            font-size: 0.95rem;
        }


        .faq-section {
            padding: 60px 20px;
        }

        .accordion-button {
            background-color: rgba(255, 255, 255, 0.1);
            color: #000;
            font-weight: 500;
        }

        .accordion-button:focus {
            box-shadow: none;
        }

        .accordion-button:not(.collapsed) {
            background-color: rgba(123, 133, 165, 0.808);
            color: rgb(53, 51, 51);
        }

        .accordion-body {
            background-color: rgba(255, 255, 255, 0.05);
            color: rgb(0, 0, 0);
        }

        .accordion-item {
            border: none;
            margin-bottom: 10px;
        }

        .faq-title {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2rem;
        }

        #contactForm button:hover {
            transform: scale(1.05);
            background-color: white;
            color: #007bff;
        }

        #contactForm input:focus,
        #contactForm textarea:focus {
            border-color: #ffffff;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
            background-color: rgba(255, 255, 255, 0.15);
            color: white;
        }

        .form-label {
            font-weight: 500;
        }
    </style>
</head>

<body>

    <!-- header -->

    <?php include('header.php') ?>

    <!-- About Us Breadcrumb -->
    <section class="breadcrumb-section" style="position: relative;">
        <div class="breadcrumb-bg" style="
      background-image: url('assets/img/baner_3.jpg'); 
      background-size: cover; 
      background-position: center; 
      height: 250px; 
      width: 100%; 
      display: flex; 
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;">
            <!-- Overlay for dark effect -->
            <div style="
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background-color: rgba(0, 123, 255, 0.6);">
            </div>

            <!-- Breadcrumb Content -->
            <div class="text-center text-white animate__animated animate__fadeInDown" style="position: relative; z-index: 1;">
                <h1 class="fw-bold" style="font-size: 2.5rem;">About Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0" style="background: transparent;">
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- ===== About Section Start ===== -->
    <div class="container-fluid about-section py-5" style="background-color: rgb(0, 224, 224);">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left Side: Content -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <h2 class="section-title mb-3">About Us</h2>
                    <h3 class="fw-bold text-primary mb-3">Welcome to MR TRADERS</h3>
                    <p class="about-text">
                        At <strong>MR TRADERS</strong>, we are dedicated to bringing a new level of freshness and
                        cleanliness
                        to your daily life. Our premium <strong>detergent powder</strong> is specially formulated to
                        remove
                        tough stains, protect fabric color, and leave your clothes smelling fresh all day long.
                    </p>
                    <p class="about-text">
                        With years of experience and a commitment to quality, we blend advanced cleaning technology
                        with eco-friendly ingredients — ensuring your laundry is not only clean but also safe for your
                        family
                        and the environment.
                    </p>
                    <ul class="list-unstyled about-list mt-3">
                        <li><i class="bi bi-check-circle-fill text-warning me-2"></i> Powerful stain removal</li>
                        <li><i class="bi bi-check-circle-fill text-warning me-2"></i> Gentle on clothes & skin</li>
                        <li><i class="bi bi-check-circle-fill text-warning me-2"></i> Long-lasting fragrance</li>
                        <li><i class="bi bi-check-circle-fill text-warning me-2"></i> Eco-friendly ingredients</li>
                    </ul>
                    <a href="#" class="btn btn-warning mt-3 px-4 fw-semibold">Learn More</a>
                </div>

                <!-- Right Side: Image -->
                <div class="col-md-6 text-center">
                    <img src="assets/img/Detergent_Powder.jpg" alt="Detergent Powder"
                        class="img-fluid rounded shadow about-img">
                </div>

            </div>
        </div>
    </div>
    <!-- ===== About Section End ===== -->


    <!-- footer -->
    <?php include('footer.php') ?>