<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Keenan Institute | Excellence in Learning</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="assets/images/logo.jpeg">
    
    <!-- PWA Manifest -->
    <link rel="manifest" href="manifest.json">
    
    <!-- PWA Meta Tags -->
    <meta name="theme-color" content="#8B0000">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="Keenan Institute">
    <link rel="apple-touch-icon" href="assets/images/logo.jpeg">
    <meta name="msapplication-TileColor" content="#8B0000">
    <meta name="msapplication-TileImage" content="assets/images/logo.jpeg">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg keenan-navbar">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="assets/images/logo.jpeg" height="45" class="me-2">
            Keenan Institute
        </a>

        <button class="navbar-toggler bg-light" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="admissions.php">Admissions</a></li>
                <li class="nav-item"><a class="nav-link" href="academics.php">Academics</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            
                 <!-- E-PORTAL BUTTON -->
    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
        <a class="btn btn-portal" href="https://portal.keenaninstitute.com" target="_blank">
            E-Portal
        </a>
    </li>
            </ul>
        </div>
    </div>
</nav>


<!-- MODERN HERO SLIDER -->
<section class="modern-slider-section">
  <div class="modern-slider">
    <!-- Slides Container -->
    <div class="slider-wrapper">
      <!-- SLIDE 1 -->
      <div class="slider-slide active" style="background-image: url('assets/images/banner.jpeg')">
        <div class="slide-overlay"></div>
        <div class="slide-content">
          <div class="slide-text">
            <h1 class="slide-title">Keenan Institute</h1>
            <p class="slide-subtitle">"Those Who Don't Know Can Know From Learning"</p>
            <a href="index.php" class="btn btn-keenan btn-lg mt-4">Explore Our School</a>
          </div>
        </div>
      </div>

      <!-- SLIDE 2 -->
      <div class="slider-slide" style="background-image: url('assets/images/banner2.jpeg')">
        <div class="slide-overlay"></div>
        <div class="slide-content">
          <div class="slide-text">
            <h1 class="slide-title">Quality Education</h1>
            <p class="slide-subtitle">Academic & Vocational Excellence</p>
            <a href="academics.php" class="btn btn-keenan btn-lg mt-4">Our Programs</a>
          </div>
        </div>
      </div>

      <!-- SLIDE 3 -->
      <div class="slider-slide" style="background-image: url('assets/images/Banner3.jpeg')">
        <div class="slide-overlay"></div>
        <div class="slide-content">
          <div class="slide-text">
            <h1 class="slide-title">Building Future Leaders</h1>
            <p class="slide-subtitle">Merit-Based & Tuition-Free Opportunities</p>
            <a href="admissions.php" class="btn btn-keenan btn-lg mt-4">Apply Now</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Navigation Arrows -->
    <button class="slider-nav slider-prev" aria-label="Previous slide">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <polyline points="15 18 9 12 15 6"></polyline>
      </svg>
    </button>
    <button class="slider-nav slider-next" aria-label="Next slide">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <polyline points="9 18 15 12 9 6"></polyline>
      </svg>
    </button>

    <!-- Dot Indicators -->
    <div class="slider-dots">
      <button class="dot active" data-slide="0" aria-label="Slide 1"></button>
      <button class="dot" data-slide="1" aria-label="Slide 2"></button>
      <button class="dot" data-slide="2" aria-label="Slide 3"></button>
    </div>
  </div>
</section>
<section class="admissions-cta py-5">
  <div class="container">
    <div class="row align-items-center text-center text-md-start">

      <div class="col-md-8">
        <h2 class="cta-title">
          Admission Is Now Open
        </h2>
        <p class="cta-text">
          Join Keenan Institute and become part of a learning community committed
          to academic excellence, character development, and opportunity for all.
          Merit-based tuition-free opportunities are available.
        </p>
      </div>

      <div class="col-md-4 text-center">
        <a href="admissions.php" class="btn btn-keenan btn-lg mb-3 w-100">
          Apply for Admission
        </a>
        <a href="contact.php" class="btn btn-outline-light btn-lg w-100">
          Contact the School
        </a>
      </div>

    </div>
  </div>
</section>



<!-- ABOUT PREVIEW -->
<section class="py-5">
    <div class="container">
        <div class="row g-4 align-items-center">

            <div class="col-md-6">
                <h2 class="section-title">About Keenan Institute</h2>
                <p>
                    Founded on <strong>November 19, 1998</strong>, Keenan Institute was conceived
                    during the Liberian civil war to provide quality education for Liberian children.
                </p>
                <p>
                    Supported by St. Christopher Episcopal Church (USA), the institution has grown
                    into a reputable junior high school serving Bong County.
                </p>
                <a href="#" class="btn btn-keenan">Read More</a>
            </div>

            <div class="col-md-6">
                <div class="card keenan-card p-4">
                    <h5 class="section-title">Why Choose Keenan Institute?</h5>
                    <ul class="mt-3">
                        <li>Merit-based tuition-free program</li>
                        <li>Academic & vocational excellence</li>
                        <li>Support for young student mothers</li>
                        <li>Qualified and caring educators</li>
                        <li>Strong moral and community values</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- PRINCIPAL MESSAGE -->
<section class="principal-section py-5">
  <div class="container">
    <div class="row align-items-center g-4">

      <!-- Principal Image -->
      <div class="col-md-4 text-center">
        <img src="assets/images/Principal.jpeg"
             alt="Principal of Keenan Institute"
             class="img-fluid principal-img shadow">
      </div>

      <!-- Message -->
      <div class="col-md-8">
        <h2 class="section-title mb-3">Message from the Principal</h2>

        <p>
          Welcome to <strong>Keenan Institute</strong>, a place where learning,
          character, and opportunity come together. Since our establishment,
          we have remained committed to providing quality education that empowers
          students academically, morally, and socially.
        </p>

        <p>
          At Keenan Institute, we believe that every child deserves access to
          education regardless of background or circumstance. Our dedicated
          staff works tirelessly to nurture talent, instill discipline, and
          prepare our students to become responsible and productive citizens.
        </p>

        <p>
          We invite parents, partners, and the community to join us as we continue
          building a brighter future through learning.
        </p>

        <h6 class="mt-4 fw-bold text-keenan-red">
          Mr. Prince T. Wreh, II.
        </h6>
        <small class="text-muted">Principal</small>
      </div>

    </div>
  </div>
</section>

<!-- WHY CHOOSE US -->
<section class="why-choose-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="section-title">Why Choose Keenan Institute</h2>
      <p class="text-muted">
        We are committed to delivering inclusive, quality, and resilient education
        that transforms lives and strengthens communities.
      </p>
    </div>

    <div class="row g-4">

      <div class="col-md-4">
        <div class="why-card h-100">
          <div class="why-icon">🎯</div>
          <h5>Merit-Based Tuition-Free Program</h5>
          <p>
            Up to 200 students, including young student mothers and their children,
            benefit from our merit-based tuition-free initiative.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="why-card h-100">
          <div class="why-icon">📚</div>
          <h5>Academic & Vocational Excellence</h5>
          <p>
            Balanced learning that combines strong academics with practical
            vocational skills for real-world readiness.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="why-card h-100">
          <div class="why-icon">🛡️</div>
          <h5>Education Without Interruption</h5>
          <p>
            Even during Ebola and COVID-19 crises, learning continued safely
            and consistently for our students.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="why-card h-100">
          <div class="why-icon">🤝</div>
          <h5>Strong Community Partnerships</h5>
          <p>
            Longstanding support from St. Christopher Episcopal Church (USA)
            and community stakeholders.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="why-card h-100">
          <div class="why-icon">🌱</div>
          <h5>Holistic Student Development</h5>
          <p>
            We focus on characters, discipline, leadership, and moral values
            alongside academic achievement.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="why-card h-100">
          <div class="why-icon">📍</div>
          <h5>Community-Focused Education</h5>
          <p>
            Located in Goll Farm Community, we serve Bong County with
            accessible, affordable, and impactful education.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- SCHOOL STATISTICS -->
<section class="stats-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="section-title text-light">Our Impact in Numbers</h2>
      <p class="text-light opacity-75">
        Over two decades of transforming lives through education
      </p>
    </div>

    <div class="row g-4 text-center">

      <div class="col-md-3 col-6">
        <div class="stat-card">
          <h3>1998</h3>
          <p>Year Founded</p>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="stat-card">
          <h3>25+</h3>
          <p>Years of Service</p>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="stat-card">
          <h3>200+</h3>
          <p>Students Supported</p>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="stat-card">
          <h3>3</h3>
          <p>Core Academic Programs</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- PARTNERS & SUPPORTERS -->
<section class="partners-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="section-title">Partners & Supporters</h2>
      <p class="text-muted">
        We are grateful for the institutions and individuals who support our mission
        to provide inclusive and quality education.
      </p>
    </div>

    <div class="row justify-content-center align-items-center g-4">

      <!-- Partner 1 -->
      <div class="col-md-3 col-6 text-center">
        <div class="partner-logo">
          <img src="assets/images/St Christophers.jpg" alt="St. Christopher Episcopal Church">
          <p>St. Christopher Episcopal Church (USA)</p>
        </div>
      </div>

      <!-- Partner 2 -->
      <div class="col-md-3 col-6 text-center">
        <div class="partner-logo">
          <img src="assets/images/community.jpg" alt="Community Supporters">
          <p>Community Supporters</p>
        </div>
      </div>

      <!-- Partner 3 -->
      <div class="col-md-3 col-6 text-center">
        <div class="partner-logo">
          <img src="assets/images/Educationpartner.jpg" alt="Educational Partners">
          <p>Educational Partners</p>
        </div>
      </div>

      <!-- Partner 4 -->
      <div class="col-md-3 col-6 text-center">
        <div class="partner-logo">
          <img src="assets/images/Faith-Based.jpeg" alt="Faith-Based Organizations">
          <p>Faith-Based Organizations</p>
        </div>
      </div>

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
          📞 +231 880 427 277<br>
          ✉️ info@keenaninstitute.com
        </p>

        <!-- Social Media -->
        <div class="footer-socials mt-3">
          <a href="https://www.facebook.com/KeenanInstitute" aria-label="Facebook">🌐</a>
          <a href="https://wa.me/231880427277" aria-label="WhatsApp">💬</a>
          <a href="mailto:info@keenaninstitute.com" aria-label="Email">✉️</a>
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

<!-- Modern Slider Script -->
<script>
class ModernSlider {
    constructor() {
        this.slides = document.querySelectorAll('.slider-slide');
        this.dots = document.querySelectorAll('.dot');
        this.prevBtn = document.querySelector('.slider-prev');
        this.nextBtn = document.querySelector('.slider-next');
        this.currentSlide = 0;
        this.autoPlayTimeout = null;
        this.autoPlayDelay = 6000; // 6 seconds
        this.touchStartX = 0;
        this.touchEndX = 0;

        this.init();
    }

    init() {
        this.attachEventListeners();
        this.startAutoPlay();
    }

    attachEventListeners() {
        // Navigation buttons
        this.prevBtn.addEventListener('click', () => this.previousSlide());
        this.nextBtn.addEventListener('click', () => this.nextSlide());

        // Dot indicators
        this.dots.forEach((dot, index) => {
            dot.addEventListener('click', () => this.goToSlide(index));
        });

        // Touch/swipe support
        const sliderWrapper = document.querySelector('.slider-wrapper');
        sliderWrapper.addEventListener('touchstart', (e) => this.handleTouchStart(e), false);
        sliderWrapper.addEventListener('touchend', (e) => this.handleTouchEnd(e), false);

        // Pause auto-play on hover
        document.querySelector('.modern-slider').addEventListener('mouseenter', () => this.stopAutoPlay());
        document.querySelector('.modern-slider').addEventListener('mouseleave', () => this.startAutoPlay());

        // Pause auto-play on touch
        sliderWrapper.addEventListener('touchstart', () => this.stopAutoPlay());
    }

    showSlide(index) {
        // Remove active class from all slides and dots
        this.slides.forEach(slide => slide.classList.remove('active'));
        this.dots.forEach(dot => dot.classList.remove('active'));

        // Add active class to current slide and dot
        this.slides[index].classList.add('active');
        this.dots[index].classList.add('active');
    }

    nextSlide() {
        this.currentSlide = (this.currentSlide + 1) % this.slides.length;
        this.showSlide(this.currentSlide);
        this.resetAutoPlay();
    }

    previousSlide() {
        this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
        this.showSlide(this.currentSlide);
        this.resetAutoPlay();
    }

    goToSlide(index) {
        this.currentSlide = index;
        this.showSlide(this.currentSlide);
        this.resetAutoPlay();
    }

    startAutoPlay() {
        this.autoPlayTimeout = setInterval(() => this.nextSlide(), this.autoPlayDelay);
    }

    stopAutoPlay() {
        clearInterval(this.autoPlayTimeout);
    }

    resetAutoPlay() {
        this.stopAutoPlay();
        this.startAutoPlay();
    }

    handleTouchStart(e) {
        this.touchStartX = e.changedTouches[0].screenX;
    }

    handleTouchEnd(e) {
        this.touchEndX = e.changedTouches[0].screenX;
        this.handleSwipe();
    }

    handleSwipe() {
        const swipeThreshold = 50;
        const diff = this.touchStartX - this.touchEndX;

        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                // Swiped left - show next slide
                this.nextSlide();
            } else {
                // Swiped right - show previous slide
                this.previousSlide();
            }
        }
    }
}

// Initialize slider when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    new ModernSlider();
});
</script>

<!-- Service Worker Registration -->
<script>
if ('serviceWorker' in navigator) {
  window.addEventListener('load', () => {
    navigator.serviceWorker.register('service-worker.js')
      .then(registration => {
        console.log('Service Worker registered successfully:', registration);
      })
      .catch(error => {
        console.log('Service Worker registration failed:', error);
      });
  });
}

// Handle install prompt for "Add to Home Screen"
let deferredPrompt;
window.addEventListener('beforeinstallprompt', event => {
  event.preventDefault();
  deferredPrompt = event;
  // You can show an "Install App" button here if desired
});

window.addEventListener('appinstalled', () => {
  console.log('Keenan Institute app was installed');
});
</script>

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
