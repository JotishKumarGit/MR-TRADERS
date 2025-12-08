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

    <!-- Blog Us Breadcrumb -->
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
                <h1 class="fw-bold" style="font-size: 2.5rem;">Blog</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0" style="background: transparent;">
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

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

        <!-- footer -->
    <?php include('footer.php') ?>