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

    <!-- Services Us Breadcrumb -->
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

    <!-- services sections  -->
    <div class="container py-5">
        <h2 class="text-center mb-5 animate__animated animate__fadeInDown">Our Services</h2>
        <div class="row g-4">
            <!-- Service 1 -->
            <div class="col-md-4">
                <div class="service-card animate__animated animate__fadeInUp">
                    <i class="bi bi-basket-fill"></i>
                    <h5>Stain Removal</h5>
                    <p>Powerful detergent formula removes tough stains effortlessly.</p>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="col-md-4">
                <div class="service-card animate__animated animate__fadeInUp animate__delay-1s">
                    <i class="bi bi-brush-fill"></i>
                    <h5>Bright & Fresh</h5>
                    <p>Keeps clothes bright and fresh after every wash.</p>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="col-md-4">
                <div class="service-card animate__animated animate__fadeInUp animate__delay-2s">
                    <i class="bi bi-shield-fill-check"></i>
                    <h5>Gentle on Fabric</h5>
                    <p>Protects your fabric while giving it a deep clean.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- faq sections  -->
    <div class="container faq-section">
        <h2 class="faq-title animate__animated animate__fadeInDown">Frequently Asked Questions - Mr Traders</h2>

        <div class="accordion animate__animated animate__fadeInUp" id="faqAccordion">

            <!-- FAQ 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                        What is the main feature of Mr Traders Detergent Powder?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="faq1"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        It effectively removes tough stains while keeping clothes bright and fresh.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        Is Mr Traders Detergent Powder safe for all fabrics?
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, it is gentle on fabrics while giving a thorough clean.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        How do I use the detergent powder for best results?
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Use the recommended amount per load, and wash with water at suitable temperature for the fabric
                        type.
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        Does it leave any residue on clothes?
                    </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        No, Mr Traders Detergent Powder rinses completely, leaving no residue.
                    </div>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                        Is this detergent suitable for hand wash?
                    </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="faq5"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, it works efficiently for both hand wash and machine wash.
                    </div>
                </div>
            </div>

            <!-- FAQ 6 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq6">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                        Can it remove tough stains like grease and oil?
                    </button>
                </h2>
                <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="faq6"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Absolutely, it is specially formulated to tackle tough stains effectively.
                    </div>
                </div>
            </div>

            <!-- FAQ 7 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq7">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                        Is Mr Traders Detergent Powder eco-friendly?
                    </button>
                </h2>
                <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="faq7"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        It is made with biodegradable ingredients that are safe for the environment.
                    </div>
                </div>
            </div>

            <!-- FAQ 8 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq8">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                        How should I store the detergent powder?
                    </button>
                </h2>
                <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="faq8"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Store in a cool, dry place, away from moisture and direct sunlight.
                    </div>
                </div>
            </div>

            <!-- FAQ 9 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq9">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                        What sizes are available for purchase?
                    </button>
                </h2>
                <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="faq9"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Mr Traders Detergent Powder comes in multiple sizes to suit different household needs.
                    </div>
                </div>
            </div>

            <!-- FAQ 10 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq10">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                        How can I contact Mr Traders for further support?
                    </button>
                </h2>
                <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="faq10"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        You can reach out via our website contact form, email, or customer support phone number.
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- footer -->
    <?php include('footer.php') ?>