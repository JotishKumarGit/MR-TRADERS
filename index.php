<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MR TRADERS - Home Page</title>
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

    <!-- Hero  -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="text-white">MR TRADERS</h1>
            <p>Experience the ultimate cleanliness with our premium detergent powder. Tough on stains, gentle on
                clothes, and perfect for every home.</p>
            <a href="contact.php" class="btn">Explore Products</a>
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

            <div class="row g-4 justify-content-center align-items-center ">

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

    <!-- WHY CHOOSE US SECTION -->
    <div class="container-fluid why-choose-section py-5">
        <div class="container">

            <h2 class="text-center text-white mb-5 section-title" data-aos="fade-up" data-aos-duration="900">
                Why Choose Us
            </h2>

            <div class="row g-4  justify-content-center align-items-center ">

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
                            <p class="card-text text-dark">Effective cleaning power for bright, fresh clothes</p>
                            <a href="Detergent_Powder.php" class="btn btn-light text-primary">Details</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- blogs  -->
    <div class="container-fluid">
        <div class="container py-5">
            <div class="mb-4">
                <h2 class="text-center">Our Blogs</h2>
                <p class="text-center ">Explore tips, insights, and updates about cleaning, home care, and how
                    Mr Traders Detergent Powder can make your laundry easier and brighter.</p>
            </div>
            <div class="row g-4">
                <!-- Blog 1 -->
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="assets/img/Detergent_Powder.jpg" class="card-img-top" alt="Detergent Powder Tips">
                        <div class="card-body">
                            <h5 class="card-title">5 Tips for Bright and Fresh Clothes</h5>
                            <p class="card-text">Learn how to get your laundry looking brand new with Mr Traders
                                Detergent Powder in every wash.</p>
                            <a href="contact.php" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Blog 2 -->
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="assets/img/detergent_powder_new.jpg" class="card-img-top" alt="Eco-friendly Laundry">
                        <div class="card-body">
                            <h5 class="card-title">Eco-Friendly Laundry Tips</h5>
                            <p class="card-text">Discover simple ways to reduce your environmental impact while keeping
                                clothes clean and fresh using our detergent.</p>
                            <a href="contact.php" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Blog 3 -->
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="assets/img/baner_2.jpg" class="card-img-top" alt="Stain Removal Guide">
                        <div class="card-body">
                            <h5 class="card-title">Ultimate Stain Removal Guide</h5>
                            <p class="card-text">Tough stains? Learn the best techniques to remove them quickly and
                                safely with Mr Traders Detergent Powder.</p>
                            <a href="contact.php" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== Gallery Section Start ===== -->
    <div class="container-fluid gallery-section py-5">
        <div class="container">
            <h2 class="text-center mb-5 animate__animated animate__fadeInDown">Our Gallery</h2>

            <div class="row g-4 justify-content-center align-items-center ">
                <!-- Gallery Item 1 -->
                <div class="col-sm-6 col-md-4 col-lg-3 gallery-item animate__animated animate__zoomIn">
                    <div class="gallery-card">
                        <img src="assets/img/baner_2.jpg" alt="Gallery 1">
                        <div class="overlay">
                            <a href="assets/img/baner_2.jpg" class="view-btn" target="_blank">
                                <i class="bi bi-plus-circle-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="col-sm-6 col-md-4 col-lg-3 gallery-item animate__animated animate__zoomIn">
                    <div class="gallery-card">
                        <img src="assets/img/baner_3.jpg" alt="Gallery 2">
                        <div class="overlay">
                            <a href="assets/img/baner_3.jpg" class="view-btn" target="_blank">
                                <i class="bi bi-plus-circle-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="col-sm-6 col-md-4 col-lg-3 gallery-item animate__animated animate__zoomIn">
                    <div class="gallery-card">
                        <img src="assets/img/Detergent_Powder.jpg" alt="Gallery 3">
                        <div class="overlay">
                            <a href="assets/img/Detergent_Powder.jpg" class="view-btn" target="_blank">
                                <i class="bi bi-plus-circle-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div class="col-sm-6 col-md-4 col-lg-3 gallery-item animate__animated animate__zoomIn">
                    <div class="gallery-card">
                        <img src="assets/img/detergent_powder_new.jpg" alt="Gallery 4">
                        <div class="overlay">
                            <a href="assets/img/detergent_powder_new.jpg" class="view-btn" target="_blank">
                                <i class="bi bi-plus-circle-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item 5 -->
                <div class="col-sm-6 col-md-4 col-lg-3 gallery-item animate__animated animate__zoomIn">
                    <div class="gallery-card">
                        <img src="assets/img/gallery_1.jpg" alt="Gallery 4">
                        <div class="overlay">
                            <a href="assets/img/gallery_1.jpg" class="view-btn" target="_blank">
                                <i class="bi bi-plus-circle-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 6 -->

                <!-- Gallery Item 7 -->
                <div class="col-sm-6 col-md-4 col-lg-3 gallery-item animate__animated animate__zoomIn">
                    <div class="gallery-card">
                        <img src="assets/img/gallery_3.jpg" alt="Gallery 4">
                        <div class="overlay">
                            <a href="assets/img/gallery_3.jpg" class="view-btn" target="_blank">
                                <i class="bi bi-plus-circle-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item 8 -->
                <div class="col-sm-6 col-md-4 col-lg-3 gallery-item animate__animated animate__zoomIn">
                    <div class="gallery-card">
                        <img src="assets/img/gallery_4.webp" alt="Gallery 4">
                        <div class="overlay">
                            <a href="assets/img/gallery_4.webp" class="view-btn" target="_blank">
                                <i class="bi bi-plus-circle-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item 10 -->
                <div class="col-sm-6 col-md-4 col-lg-3 gallery-item animate__animated animate__zoomIn">
                    <div class="gallery-card">
                        <img src="assets/img/gallery_7.jpg" alt="Gallery 4">
                        <div class="overlay">
                            <a href="assets/img/gallery_7.jpg" class="view-btn" target="_blank">
                                <i class="bi bi-plus-circle-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Add more gallery items similarly -->
            </div>
        </div>
    </div>
    <!-- ===== Gallery Section End ===== -->

    <!-- CONTACT SECTION -->
    <div class="container-fluid contact-section py-5">
        <div class="container">
            <h2 class="text-center mb-5 animate__animated animate__fadeInDown" style="font-weight: 700;">
                Contact Us
            </h2>

            <div class="row g-4 align-items-center">

                <!-- Left Side: Map -->
                <div class="col-md-6 animate__animated animate__fadeInLeft">
                    <div class="rounded shadow" style="overflow: hidden;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d30162.069505009364!2d72.85968561630493!3d19.096304109414746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sGALA%20no.12%2F2%2CCTS%20no.116%20MJK%20compound%2CYadav%20nagar%2Ckhairani%20road%20sakinaka%20kurla%20MUMBAI%20MAHARASHTRA%20INDIA%20400072!5e0!3m2!1sen!2sin!4v1764826511575!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0;" allowfullscreen loading="lazy">
                        </iframe>
                    </div>
                </div>

                <!-- Right Side: Form -->
                <div class="col-md-6 animate__animated animate__fadeInRight">
                    <form id="contactForm" class="p-4 rounded shadow contact-form">

                        <div class="mb-3">
                            <label class="form-label">Your Name</label>
                            <input id="name" type="text" class="form-control form-control-lg"
                                placeholder="Enter your name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input id="phone" type="tel" class="form-control form-control-lg"
                                placeholder="Enter your phone number" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea id="message" class="form-control form-control-lg" rows="5"
                                placeholder="Type your message here..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-info btn-lg w-100 fw-bold text-white whatsapp-btn">
                            Send via WhatsApp
                        </button>

                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include('footer.php') ?>