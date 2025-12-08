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

    <!-- products details Us Breadcrumb -->
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
                <h1 class="fw-bold" style="font-size: 2.5rem;">Detergent Powder</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0" style="background: transparent;">
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Detergent Powder</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- Product Details Section -->
    <div class="container py-5">
        <div class="row g-4 align-items-center">

            <!-- Left side: Product Image -->
            <div class="col-md-6 animate__animated animate__fadeInLeft">
                <div class="shadow rounded" style="overflow: hidden;">
                    <img src="assets/img/detergent_powder_new.jpg" class="img-fluid" alt="Detergent Powder">
                </div>
            </div>

            <!-- Right side: Product Content -->
            <div class="col-md-6 animate__animated animate__fadeInRight">
                <h2 class="fw-bold mb-3">Detergent Powder</h2>
                <p style="font-size: 1.1rem; line-height: 1.6;">
                    Mr Traders Detergent Powder is a high-quality cleaning solution designed to make your laundry
                    bright, fresh, and spotless. Its powerful formula removes tough stains while being gentle on
                    fabrics.
                </p>

                <ul class="list-unstyled mb-4" style="font-size: 1.05rem;">
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Removes tough stains effectively</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Gentle on clothes</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Fresh fragrance for long-lasting
                        freshness</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Easy to dissolve in water</li>
                </ul>

                <button type="button" class="btn btn-primary btn-lg fw-bold" data-bs-toggle="modal"
                    data-bs-target="#enquiryModal">
                    Enquiry
                </button>
            </div>

        </div>
    </div>

    <!-- footer -->
    <?php include('footer.php') ?>