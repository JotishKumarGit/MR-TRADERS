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
            <div class="text-center text-white animate__animated animate__fadeInDown" style="position: relative; z-index: 1;">
                <h1 class="fw-bold" style="font-size: 2.5rem;">Products </h1>
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
    <div class="container py-5">
        <h2 class="text-center mb-5 animate__animated animate__fadeInDown">Our Products</h2>
        <div class="row g-4 justify-content-center">
            <!-- Product 1 -->
            <div class="col-md-4">
                <div class="card product-card animate__animated animate__zoomIn">
                    <img src="assets/img/Detergent_Powder_n.jpg" class="card-img-top" alt="Product 1">
                    <div class="card-body  text-center">
                        <h5 class="card-title">Detergent Powder</h5>
                        <p class="card-text">Effective cleaning power for bright, fresh clothes</p>
                        <a href="Detergent_Powder.php" class="btn btn-light text-primary">Detalis</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- footer -->
    <?php include('footer.php') ?>