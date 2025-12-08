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

    <!-- Contact Us Breadcrumb -->
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