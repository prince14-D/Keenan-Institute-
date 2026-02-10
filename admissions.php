<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admissions | Keenan Institute</title>
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
                <li class="nav-item"><a class="nav-link active" href="admissions.php">Admissions</a></li>
                <li class="nav-item"><a class="nav-link" href="academics.php">Academics</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

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
        <h1>Student Admission Form</h1>
        <p>Register a student for admission at Keenan Institute</p>
    </div>
</section>

<!-- ADMISSION FORM -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-8">
                <div class="card admission-form-card p-4">

                    <h4 class="form-title">Student Admission Registration</h4>

                    <form id="admissionForm">

                        <div class="mb-3">
                            <label class="form-label">Full Name <span class="required">*</span></label>
                            <input type="text" name="fullName" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Grade <span class="required">*</span></label>
                            <input type="text" name="grade" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Student Type <span class="required">*</span></label>
                            <select name="studentType" class="form-select" required>
                                <option value="">Select</option>
                                <option value="New Student">New Student</option>
                                <option value="Old Student">Old Student</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Class <span class="required">*</span></label>
                            <input type="text" name="studentClass" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Parent / Guardian Contact <span class="required">*</span></label>
                            <input type="text" name="guardianContact" class="form-control" required>
                        </div>

                         <div class="mb-3">
                            <label class="form-label">Registration User Email <span class="required">*</span></label>
                            <input type="email" name="userRegisterEmail" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Fees Payment Status <span class="required">*</span></label>
                            <select name="feesPayment" class="form-select" required>
                                <option value="">Select</option>
                                <option value="Paid">Paid</option>
                                <option value="Partially Paid">Partially Paid</option>
                                <option value="Not Paid">Not Paid</option>
                            </select>
                        </div>

                            

                        <div class="mb-3">
                            <label class="form-label">Comment</label>
                            <textarea name="comment" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-keenan btn-lg">
                                Submit Admission
                            </button>
                        </div>

                        <div id="formMessage" class="mt-3 text-center"></div>

                    </form>

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



<!-- FORM SCRIPT -->
<script>
const scriptURL = "https://script.google.com/macros/s/AKfycbxB2a8Rb4XaAl3vyIZYi1xu4iD5KV9LoN_f0HoUgjRYCipiG_ImhPZK7sO357BuIgrdmQ/exec";

document.getElementById("admissionForm").addEventListener("submit", e => {
    e.preventDefault();

    const form = e.target;
    const message = document.getElementById("formMessage");

    message.innerHTML = `
        <div class="alert alert-info">
            Submitting your admission, please wait...
        </div>
    `;

    fetch(scriptURL, {
        method: "POST",
        body: new FormData(form)
    })
    .then(() => {
        message.innerHTML = `
            <div class="alert alert-success">
                <strong>Registration Successful!</strong><br>
                Your admission information has been received.<br>
                Kindly visit the Registrar’s Office to complete the registration.<br><br>
                <em>You will be redirected to the home page shortly...</em>
            </div>
        `;

        form.reset();

        // ⏳ Redirect after 3 seconds
        setTimeout(() => {
            window.location.href = "index.php";
        }, 3000);
    })
    .catch(() => {
        message.innerHTML = `
            <div class="alert alert-danger">
                Submission failed. Please try again.
            </div>
        `;
    });
});
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
