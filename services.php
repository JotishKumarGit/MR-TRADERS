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

    <!-- Products Us Breadcrumb -->
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
                <h1 class="fw-bold" style="font-size: 2.5rem;">Services</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0" style="background: transparent;">
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- SERVICES SLIDER SECTION -->
    <div class="container-fluid services-slider-section py-5">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-gradient-info text-white px-4 py-2 mb-3 rounded-pill">
                    <i class="bi bi-star-fill me-2"></i>What We Offer
                </span>
                <h2 class="section-title fw-bold display-5 mb-3">
                    Our Premium Services
                </h2>
                <p class="text-muted lead">Delivering excellence in detergent manufacturing and beyond</p>
            </div>

            <!-- Swiper Slider -->
            <div class="swiper myServiceSwiper position-relative" data-aos="zoom-in">
                <div class="swiper-wrapper pb-5">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="service-slide-card shadow-lg text-center h-100">
                            <div class="icon-wrapper mb-4">
                                <div class="icon-circle">
                                    <i class="bi bi-droplet-half service-slide-icon"></i>
                                </div>
                            </div>
                            <h4 class="fw-bold text-gradient mb-3">Detergent Manufacturing</h4>
                            <p class="text-muted mb-4">High-quality detergent powder crafted with advanced formula for
                                superior cleaning performance.</p>
                            <div class="service-features">
                                <span class="feature-badge"><i class="bi bi-check-circle-fill me-1"></i>ISO
                                    Certified</span>
                                <span class="feature-badge"><i
                                        class="bi bi-check-circle-fill me-1"></i>Eco-Friendly</span>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="service-slide-card shadow-lg text-center h-100">
                            <div class="icon-wrapper mb-4">
                                <div class="icon-circle icon-circle-secondary">
                                    <i class="bi bi-box-seam service-slide-icon service-slide-icon-secondary"></i>
                                </div>
                            </div>
                            <h4 class="fw-bold text-gradient mb-3">Bulk Supply</h4>
                            <p class="text-muted mb-4">Reliable wholesale & retail supply across India with competitive
                                pricing and timely delivery.</p>
                            <div class="service-features">
                                <span class="feature-badge"><i class="bi bi-check-circle-fill me-1"></i>Pan India</span>
                                <span class="feature-badge"><i class="bi bi-check-circle-fill me-1"></i>Best
                                    Rates</span>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="service-slide-card shadow-lg text-center h-100">
                            <div class="icon-wrapper mb-4">
                                <div class="icon-circle icon-circle-accent">
                                    <i class="bi bi-cart-check service-slide-icon service-slide-icon-accent"></i>
                                </div>
                            </div>
                            <h4 class="fw-bold text-gradient mb-3">Private Labeling</h4>
                            <p class="text-muted mb-4">Launch your own brand with our comprehensive OEM service and
                                custom packaging solutions.</p>
                            <div class="service-features">
                                <span class="feature-badge"><i class="bi bi-check-circle-fill me-1"></i>Custom
                                    Design</span>
                                <span class="feature-badge"><i class="bi bi-check-circle-fill me-1"></i>Low MOQ</span>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <div class="service-slide-card shadow-lg text-center h-100">
                            <div class="icon-wrapper mb-4">
                                <div class="icon-circle icon-circle-success">
                                    <i class="bi bi-truck service-slide-icon service-slide-icon-success"></i>
                                </div>
                            </div>
                            <h4 class="fw-bold text-gradient mb-3">Nationwide Delivery</h4>
                            <p class="text-muted mb-4">Fast & secured delivery with premium packaging to ensure product
                                safety and quality.</p>
                            <div class="service-features">
                                <span class="feature-badge"><i class="bi bi-check-circle-fill me-1"></i>Safe
                                    Transit</span>
                                <span class="feature-badge"><i class="bi bi-check-circle-fill me-1"></i>Track
                                    Order</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev">
                    <i class="bi bi-chevron-left"></i>
                </div>
                <div class="swiper-button-next">
                    <i class="bi bi-chevron-right"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include('footer.php') ?>