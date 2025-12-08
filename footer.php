<!-- Enquiry Form Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="background-color: #007bff; color: white;">
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold" id="enquiryModalLabel">Enquiry Form</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="enquiryForm">
                    <div class="row g-3">
                        <!-- Name -->
                        <div class="col-md-6">
                            <label for="enqName" class="form-label">Name</label>
                            <input type="text" class="form-control form-control-lg" id="enqName"
                                placeholder="Enter your name" required>
                        </div>
                        <!-- Email -->
                        <div class="col-md-6">
                            <label for="enqEmail" class="form-label">Email</label>
                            <input type="email" class="form-control form-control-lg" id="enqEmail"
                                placeholder="Enter your email" required>
                        </div>
                        <!-- Phone -->
                        <div class="col-md-6">
                            <label for="enqPhone" class="form-label">Phone</label>
                            <input type="tel" class="form-control form-control-lg" id="enqPhone"
                                placeholder="Enter your phone" required>
                        </div>
                        <!-- Subject -->
                        <div class="col-md-6">
                            <label for="enqSubject" class="form-label">Subject</label>
                            <input type="text" class="form-control form-control-lg" id="enqSubject"
                                placeholder="Subject of your enquiry" required>
                        </div>
                        <!-- Message -->
                        <div class="col-12">
                            <label for="enqMessage" class="form-label">Message</label>
                            <textarea class="form-control form-control-lg" id="enqMessage" rows="4"
                                placeholder="Type your message here..." required></textarea>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-light btn-lg fw-bold w-50">Send via WhatsApp</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- WhatsApp Redirect Script -->
<script>
    document.getElementById('enquiryForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent default form submission

        const name = document.getElementById('enqName').value;
        const email = document.getElementById('enqEmail').value;
        const phone = document.getElementById('enqPhone').value;
        const subject = document.getElementById('enqSubject').value;
        const message = document.getElementById('enqMessage').value;

        const whatsappNumber = '919870757009'; // Replace with your WhatsApp number
        const whatsappMessage = `Enquiry from ${name}.\nEmail: ${email}\nPhone: ${phone}\nSubject: ${subject}\nMessage: ${message}`;
        const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;

        window.open(whatsappURL, '_blank');
    });
</script>

<!-- Optional: Input focus style -->

<style>
    .modal-content input:focus,
    .modal-content textarea:focus {
        border-color: #ffffff;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        background-color: rgba(255, 255, 255, 0.15);
        color: white;
    }

    .form-label {
        font-weight: 500;
    }
</style>

<!-- slider of services -->



<!-- WHATSAPP SCRIPT -->

<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Get values correctly
        const name = document.getElementById('name').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const message = document.getElementById('message').value.trim();

        const whatsappNumber = "919870757009"; // Your WhatsApp number

        // Build WhatsApp message
        const whatsappMessage =
            `Hello! My name is ${name}.\nPhone: ${phone}\nMessage: ${message}`;

        // Redirect to WhatsApp
        const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;
        window.open(whatsappURL, '_blank');
    });
</script>

<!-- footer -->
<footer class="container-fluid footer-section">
    <div class="container py-5">
        <div class="row g-4">

            <!-- About / Brand -->
            <div class="col-md-3">
                <h5 class="fw-bold">Mr Traders</h5>
                <p>Providing high-quality cleaning solutions with our signature Detergent Powder. Brightening your
                    laundry, one wash at a time.</p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-3">
                <h5 class="fw-bold">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php" class="footer-link">Home</a></li>
                    <li><a href="products.php" class="footer-link">Products</a></li>
                    <li><a href="services.php" class="footer-link">Services</a></li>
                    <li><a href="#faq" class="footer-link">FAQ</a></li>
                    <li><a href="blog.php" class="footer-link">Blogs</a></li>
                    <li><a href="contact.php" class="footer-link">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-md-3">
                <h5 class="fw-bold">Contact</h5>
                <p><i class="bi bi-telephone-fill"></i> +91 9870757009</p>
                <p><i class="bi bi-envelope-fill"></i> Parvezkhan032@gmail.com</p>
                <p><i class="bi bi-geo-alt-fill"></i> GALA no.12/2,CTS no.116 MJK compound,Yadav nagar,khairani road
                    sakinaka kurla MUMBAI MAHARASHTRA INDIA 400072</p>
            </div>

            <!-- Social Media -->
            <div class="col-md-3">
                <h5 class="fw-bold">Follow Us</h5>
                <div class="d-flex gap-3">
                    <a href="#" class="footer-social"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="footer-social"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="footer-social"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="footer-social"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

        </div>

        <hr class="footer-hr">

        <div class="text-center pt-3">
            <p class="mb-0">&copy; 2025 Mr Traders. All rights reserved. Design By <a
                    href="https://www.trade4export.com/" class="footer-link">Trade4Export</a></p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
</script>

</body>

</html>