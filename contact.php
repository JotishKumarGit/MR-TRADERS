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
                <h1 class="fw-bold" style="font-size: 2.5rem;">Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0" style="background: transparent;">
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- contact us  -->
    <div class="container-fluid py-5" style="background-color: #007bff; color: white;">
        <div class="container">
            <h2 class="text-center mb-5 animate__animated animate__fadeInDown" style="font-weight: 700;">Contact Us</h2>
            <div class="row g-4 align-items-center">

                <!-- Left side: Map -->
                <div class="col-md-6 animate__animated animate__fadeInLeft">
                    <div class="rounded shadow" style="overflow: hidden;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15079.893790928742!2d72.86998550031036!3d19.10882073909258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sGALA%20no.12%2F2%2CCTS%20no.116%20MJK%20compound%2CYadav%20nagar%2Ckhairani%20road%20sakinaka%20kurla%20MUMBAI%20MAHARASHTRA%20INDIA%20400072!5e0!3m2!1sen!2sin!4v1764406429573!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <!-- Right side: Contact Form -->
                <div class="col-md-6 animate__animated animate__fadeInRight">
                    <form id="contactForm" class="p-4 rounded shadow"
                        style="background-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(8px);">
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control form-control-lg" id="name"
                                placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control form-control-lg" id="phone"
                                placeholder="Enter your phone number" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control form-control-lg" id="message" rows="5"
                                placeholder="Type your message here..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-light btn-lg w-100 fw-bold"
                            style="transition: all 0.3s;">Send via WhatsApp</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include('footer.php') ?>