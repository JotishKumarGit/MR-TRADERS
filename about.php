<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MR TRADERS </title>
    <link rel="stylesheet" href="assets/style.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <!-- bootstrap icons  -->
    <!-- Bootstrap Icons CSS (latest version) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <!-- Animate.css for animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- AOS Library -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

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
            <div class="text-center text-white animate__animated animate__fadeInDown"
                style="position: relative; z-index: 1;">
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

    <!-- ABOUT SECTION -->
    <div class="container-fluid about-section py-5">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left Side: Content -->
                <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="section-title mb-3">About Us</h2>
                    <h3 class="fw-bold text-primary mb-3">Welcome to MR TRADERS</h3>

                    <p class="about-text">
                        At <strong>MR TRADERS</strong>, we are dedicated to bringing a new level of freshness,
                        fragrance, and cleanliness to your daily life. Our high-quality
                        <strong>detergent powder</strong> removes tough stains, protects fabric color,
                        and keeps clothes fresh all day long.
                    </p>

                    <p class="about-text">
                        With years of experience, we combine advanced cleaning technology with eco-friendly
                        ingredients — ensuring your laundry stays safe for your family and the environment.
                    </p>

                    <ul class="list-unstyled about-list mt-3">
                        <li><i class="bi bi-check-circle-fill text-info me-2"></i> Powerful stain removal</li>
                        <li><i class="bi bi-check-circle-fill text-info me-2"></i> Gentle on clothes & skin</li>
                        <li><i class="bi bi-check-circle-fill text-info me-2"></i> Long-lasting fragrance</li>
                        <li><i class="bi bi-check-circle-fill text-info me-2"></i> Eco-friendly ingredients</li>
                    </ul>

                    <a href="about.php" class="btn btn-info mt-3 px-4 fw-semibold text-white">Learn More</a>
                </div>

                <!-- Right Side: Image Section (TWO IMAGES STYLE) -->
                <div class="col-md-6 position-relative image-wrapper">

                    <!-- Main Image -->
                    <img src="assets/img/Detergent_Powder.jpg" alt="Detergent Powder"
                        class="img-fluid about-main-img shadow" data-aos="zoom-in" data-aos-duration="1000">

                    <!-- Small Floating Image -->
                    <img src="assets/img/detergent_powder_new.jpg" alt="Small Product" class="about-small-img shadow"
                        data-aos="fade-up" data-aos-duration="1200">
                </div>
            </div>
        </div>
    </div>
    <!-- ===== About Section End ===== -->

    <!-- MISSION & VISION SECTION -->
    <div class="container-fluid mission-vision-section py-5">
        <div class="container">

            <h2 class="text-center mb-5 section-title" data-aos="fade-up">
                Our Mission & Vision
            </h2>

            <div class="row g-4">

                <!-- Mission -->
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="mv-card shadow-lg p-4 rounded-4 h-100">
                        <div class="mv-icon mb-3">
                            <i class="bi bi-bullseye text-info"></i>
                        </div>
                        <h4 class="fw-bold text-primary mb-3">Our Mission</h4>
                        <p class="mv-text">
                            Our mission is to deliver premium-quality detergent products that ensure
                            spotless cleaning, long-lasting freshness, and safety for both your clothing
                            and the environment. We aim to blend innovation with eco-friendly solutions
                            to build trust and satisfaction among our customers.
                        </p>
                    </div>
                </div>

                <!-- Vision -->
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="mv-card shadow-lg p-4 rounded-4 h-100">
                        <div class="mv-icon mb-3">
                            <i class="bi bi-eye-fill text-info"></i>
                        </div>
                        <h4 class="fw-bold text-primary mb-3">Our Vision</h4>
                        <p class="mv-text">
                            Our vision is to become a leading household brand recognized for quality,
                            innovation, and trust — not just in India, but across global markets. We aspire
                            to make sustainable, high-performance cleaning solutions accessible to every family.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include('footer.php') ?>