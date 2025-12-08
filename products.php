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
                <h1 class="fw-bold" style="font-size: 2.5rem;">Products</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0" style="background: transparent;">
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Products</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- products sections  -->
    <div class="container-fluid products-section py-5">
        <div class="container">
            <h2 class="text-center mb-5 animate__animated animate__fadeInDown">Our Products</h2>

            <div class="row g-4 justify-content-center">
                <!-- Product 1 -->
                <div class="col-md-4">
                    <div class="card product-card animate__animated animate__zoomIn">
                        <img src="assets/img/detergent_powder_new.jpg" class="card-img-top" alt="Product 1">
                        <div class="card-body text-center">
                            <h5 class="card-title text-dark">Detergent Powder</h5>
                            <p class="card-text text-dark ">Effective cleaning power for bright, fresh clothes</p>
                            <a href="Detergent_Powder.php" class="btn btn-light text-primary">Details</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- WHY CHOOSE US SECTION -->
    <div class="container-fluid why-choose-section py-5">
        <div class="container">

            <h2 class="text-center text-white mb-5 section-title" data-aos="fade-up" data-aos-duration="900">
                Why Choose Us
            </h2>

            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-md-4" data-aos="zoom-in" data-aos-duration="900">
                    <div class="choose-card shadow-lg p-4 text-center rounded-4">
                        <div class="choose-icon mb-3">
                            <i class="bi bi-stars"></i>
                        </div>
                        <h4 class="fw-bold text-primary">Premium Quality</h4>
                        <p class="choose-text">
                            Our detergent powder is crafted with advanced technology to ensure deep cleaning,
                            bright colors, and long-lasting fragrance.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1100">
                    <div class="choose-card shadow-lg p-4 text-center rounded-4">
                        <div class="choose-icon mb-3">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4 class="fw-bold text-primary">Trusted & Safe</h4>
                        <p class="choose-text">
                            Skin-friendly, fabric-safe, and eco-conscious ingredients keep your family and the
                            environment protected.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1300">
                    <div class="choose-card shadow-lg p-4 text-center rounded-4">
                        <div class="choose-icon mb-3">
                            <i class="bi bi-gear-wide-connected"></i>
                        </div>
                        <h4 class="fw-bold text-primary">Advanced Technology</h4>
                        <p class="choose-text">
                            Powered by modern formulation techniques that remove even the toughest stains with
                            ease and efficiency.
                        </p>
                    </div>
                </div>

            </div>

            <div class="row g-4 mt-3">

                <!-- Card 4 -->
                <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1500">
                    <div class="choose-card shadow-lg p-4 text-center rounded-4">
                        <div class="choose-icon mb-3">
                            <i class="bi bi-globe2"></i>
                        </div>
                        <h4 class="fw-bold text-primary">Growing Brand</h4>
                        <p class="choose-text">
                            MR TRADERS is expanding rapidly with customer trust, quality assurance, and
                            innovative products and more.
                        </p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1700">
                    <div class="choose-card shadow-lg p-4 text-center rounded-4">
                        <div class="choose-icon mb-3">
                            <i class="bi bi-emoji-smile-fill"></i>
                        </div>
                        <h4 class="fw-bold text-primary">Customer Satisfaction</h4>
                        <p class="choose-text">
                            Thousands of customers trust us for reliable cleaning performance and consistent
                            product quality.
                        </p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1900">
                    <div class="choose-card shadow-lg p-4 text-center rounded-4">
                        <div class="choose-icon mb-3">
                            <i class="bi bi-recycle"></i>
                        </div>
                        <h4 class="fw-bold text-primary">Eco-Friendly</h4>
                        <p class="choose-text">
                            Our formula ensures powerful cleaning while reducing impact on nature with
                            biodegradable components.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- footer -->
    <?php include('footer.php') ?>