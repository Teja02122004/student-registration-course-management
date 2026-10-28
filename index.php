```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>StudentHub | Student Course Management</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
    <div class="container">

        <a class="navbar-brand fw-bold" href="index.php">
            🎓 StudentHub
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainNavbar"
            aria-controls="mainNavbar"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link active" href="index.php">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="courses.php">
                        Courses
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="register.php">
                        Register
                    </a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-light text-primary ms-lg-3 mt-2 mt-lg-0"
                       href="login.php">
                        Student Login
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>


<section class="hero-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-7">

                <span class="badge rounded-pill bg-light text-primary px-3 py-2 mb-3">
                    Welcome to StudentHub
                </span>

                <h1 class="hero-title">
                    Your Education.<br>
                    Your Future.<br>
                    <span class="highlight-text">Your Journey.</span>
                </h1>

                <p class="hero-description mt-4">
                    Register as a student, explore available courses,
                    and manage your learning journey in one place.
                    Simple, organized, and student-friendly.
                </p>

                <div class="d-flex flex-wrap gap-3 mt-4">

                    <a href="register.php" class="btn btn-light btn-lg text-primary">
                        Get Started →
                    </a>

                    <a href="courses.php" class="btn btn-outline-light btn-lg">
                        Explore Courses
                    </a>

                </div>

            </div>

            <div class="col-lg-5">

                <div class="hero-card">

                    <div class="hero-icon">📚</div>

                    <h3 class="fw-bold mt-3">
                        Learn Something New
                    </h3>

                    <p class="text-secondary">
                        Discover courses, register your details,
                        and take the next step in your academic journey.
                    </p>

                    <div class="feature-row">
                        <span>✓</span>
                        Easy Student Registration
                    </div>

                    <div class="feature-row">
                        <span>✓</span>
                        Organized Course Information
                    </div>

                    <div class="feature-row">
                        <span>✓</span>
                        Responsive Website Design
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<section class="container py-5">

    <div class="text-center mb-5">

        <span class="section-label">OUR FEATURES</span>

        <h2 class="section-title mt-2">
            Everything You Need to Get Started
        </h2>

        <p class="text-secondary">
            A simple web application designed for students.
        </p>

    </div>


    <div class="row g-4">

        <div class="col-md-4">

            <div class="feature-card h-100">

                <div class="feature-icon">👩‍🎓</div>

                <h4>Student Registration</h4>

                <p>
                    Enter your personal and academic details
                    through an interactive registration form.
                </p>

                <a href="register.php" class="feature-link">
                    Register Now →
                </a>

            </div>

        </div>


        <div class="col-md-4">

            <div class="feature-card h-100">

                <div class="feature-icon">📖</div>

                <h4>Course Management</h4>

                <p>
                    Explore available courses and view their
                    codes, durations, and descriptions.
                </p>

                <a href="courses.php" class="feature-link">
                    View Courses →
                </a>

            </div>

        </div>


        <div class="col-md-4">

            <div class="feature-card h-100">

                <div class="feature-icon">🔐</div>

                <h4>Student Login</h4>

                <p>
                    Sign in to access your student dashboard
                    and view your registration information.
                </p>

                <a href="login.php" class="feature-link">
                    Login →
                </a>

            </div>

        </div>

    </div>

</section>


<footer class="site-footer">

    <div class="container text-center">

        <h5 class="fw-bold">🎓 StudentHub</h5>

        <p class="mb-1">
            Student Registration and Course Management System
        </p>

        <small>
            Academic Project | Built with HTML, CSS, Bootstrap,
            JavaScript, PHP and XML
        </small>

        <p class="mt-3 mb-0">
            © <?php echo date("Y"); ?> StudentHub. All rights reserved.
        </p>

    </div>

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
```
