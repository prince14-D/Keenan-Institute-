<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us | Keenan Institute</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="assets/images/logo.jpeg">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg keenan-navbar">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="assets/images/logo.jpeg" height="45" class="me-2">
            Keenan Institute
        </a>

        <button class="navbar-toggler bg-light" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="admissions.php">Admissions</a></li>
                <li class="nav-item"><a class="nav-link" href="academics.php">Academics</a></li>
                <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>

                <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                    <a class="btn btn-portal" href="https://portal.keenaninstitute.com" target="_blank">E-Portal</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container text-center">
        <h1>Contact Us</h1>
        <p>We are here to help — reach out to Keenan Institute</p>
    </div>
</section>

<!-- CONTACT SECTION -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <!-- CONTACT INFO -->
            <div class="col-lg-5">
                <div class="contact-info-card p-4 h-100">
                    <h4 class="section-title mb-3">Get in Touch</h4>

                    <p>
                        If you have questions about admissions, academics, or partnerships,
                        feel free to contact us using the details below or send us a message.
                    </p>

                    <ul class="contact-info-list">
                        <li><strong>📍 Address:</strong><br>
                            Goll Farm Community,<br>
                            Jorquelliah District,<br>
                            Bong County, Liberia
                        </li>

                        <li><strong>📞 Phone:</strong><br>
                            +231 880 427 277
                        </li>

                        <li><strong>✉️ Email:</strong><br>
                            info@keenaninstitute.com
                        </li>
                    </ul>
                </div>
            </div>

            <!-- CONTACT FORM -->
            <div class="col-lg-7">
                <div class="card contact-form-card p-4">

                    <h4 class="form-title">Send Us a Message</h4>

                    <form>

                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <input type="text" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" rows="4" required></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-keenan btn-lg">
                                Send Message
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- MAP -->
<section class="pb-5">
    <div class="container">
        <div class="map-card">
            <iframe
                src="https://www.google.com/maps?q=Bong%20County%20Liberia&output=embed"
                width="100%"
                height="350"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
    </div>
</section>

<!-- FULL FOOTER -->
<footer class="footer-section pt-5">
  <div class="container">

    <div class="row g-4">

      <!-- School Info -->
      <div class="col-md-4">
        <h5 class="footer-title">Keenan Institute</h5>
        <p class="footer-text">
          Keenan Institute is committed to providing inclusive, quality education
          that empowers students academically, morally, and socially.
        </p>
        <p class="footer-text">
          <strong>Motto:</strong><br>
          “Those Who Don't Know Can Know From Learning”
        </p>
      </div>

      <!-- Quick Links -->
      <div class="col-md-2">
        <h5 class="footer-title">Quick Links</h5>
        <ul class="footer-links">
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Admissions</a></li>
          <li><a href="#">Academics</a></li>
          <li><a href="#">Gallery</a></li>
        </ul>
      </div>

      <!-- Resources -->
      <div class="col-md-3">
        <h5 class="footer-title">Resources</h5>
        <ul class="footer-links">
          <li><a href="#">Student Portal</a></li>
          <li><a href="#">Results</a></li>
          <li><a href="#">News & Events</a></li>
          <li><a href="#">Policies</a></li>
          <li><a href="#">Support the School</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="col-md-3">
        <h5 class="footer-title">Contact Us</h5>
        <p class="footer-text">
          📍 Goll Farm Community,<br>
          Jorquelliah District,<br>
          Bong County, Liberia
        </p>
        <p class="footer-text">
          📞 +231 887-153-177<br>
          ✉️ info@keenaninstitute.com
        </p>

        <!-- Social Media -->
        <div class="footer-socials mt-3">
          <a href="#" aria-label="Facebook">🌐</a>
          <a href="#" aria-label="WhatsApp">💬</a>
          <a href="#" aria-label="Email">✉️</a>
        </div>
      </div>

    </div>

    <hr class="footer-divider">

    <div class="text-center pb-3">
      <small>
        &copy; <?php echo date("Y"); ?> Keenan Institute. All Rights Reserved Developed by Tec Liberia inc.
      </small>
    </div>

  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- FLOATING ACTION BUTTONS -->
<div class="floating-buttons">
    <!-- WhatsApp Button -->
    <a href="https://wa.me/231887153177?text=Hello%20Keenan%20Institute" target="_blank" class="floating-btn whatsapp-btn" title="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
    
    <!-- Call Button -->
    <a href="tel:+231887153177" class="floating-btn call-btn" title="Call us">
        <i class="fas fa-phone"></i>
    </a>
    
    <!-- Email Button -->
    <a href="mailto:info@keenaninstitute.com" class="floating-btn email-btn" title="Send us an email">
        <i class="fas fa-envelope"></i>
    </a>
</div>

</body>
</html>
