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

    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="assets/images/logo.jpeg">
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
                <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="admissions.php">Admissions</a></li>
                <li class="nav-item"><a class="nav-link" href="academics.php">Academics</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            
                 <!-- E-PORTAL BUTTON -->
    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
        <a class="btn btn-portal" href="portal/" target="_blank">
            E-Portal
        </a>
    </li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO SLIDER -->
<section class="hero-slider">
  <div id="keenanHeroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <!-- Indicators -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#keenanHeroCarousel" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#keenanHeroCarousel" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#keenanHeroCarousel" data-bs-slide-to="2"></button>
    </div>

    <!-- Slides -->
    <div class="carousel-inner">

      <!-- SLIDE 1 -->
      <div class="carousel-item active hero-slide" style="background: url('assets/images/banner.jpeg') center/cover no-repeat fixed;">
        <div class="container">
          <h1>Keenan Institute</h1>
          <p>“Those Who Don't Know Can Know From Learning”</p>
          <a href="#" class="btn btn-keenan mt-4">Explore Our School</a>
        </div>
      </div>

      <!-- SLIDE 2 -->
      <div class="carousel-item hero-slide" style="background: url('assets/images/banner2.jpeg') center/cover no-repeat fixed;">
        <div class="container">
          <h1>Quality Education</h1>
          <p>Academic & Vocational Excellence</p>
          <a href="#" class="btn btn-keenan mt-4">Our Programs</a>
        </div>
      </div>

      <!-- SLIDE 3 -->
      <div class="carousel-item hero-slide" style="background: url('assets/images/Banner3.jpeg') center/cover no-repeat fixed;">
        <div class="container">
          <h1>Building Future Leaders</h1>
          <p>Merit-Based & Tuition-Free Opportunities</p>
          <a href="#" class="btn btn-keenan mt-4">Admissions</a>
        </div>
      </div>

    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#keenanHeroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#keenanHeroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>

  </div>
</section>

<!-- ADMISSIONS CALL TO ACTION -->
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
        <a href="#" class="btn btn-keenan btn-lg mb-3 w-100">
          Apply for Admission
        </a>
        <a href="#" class="btn btn-outline-light btn-lg w-100">
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
                    Founded on <strong>October 19, 1998</strong>, Keenan Institute was conceived
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
          Rev. Fr. Prince T. Wreh, Sr.
        </h6>
        <small class="text-muted">Founder / Principal</small>
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
            We focus on character, discipline, leadership, and moral values
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
          📞 +231 880 369 397<br>
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
</body>
</html>
