<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snappy Services</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        .service-card { border-radius: 10px; transition: 0.3s; }
        .service-card:hover { transform: translateY(-5px); }
        .cta-section { background: url('https://source.unsplash.com/1600x900/?technology') no-repeat center center/cover; color: white; }
    </style>
</head>
<body>
    
    <!-- Navbar -->
    @include('navber')

    <!-- Hero Section -->
    <header class="text-center py-5">
        <div class="container">
            <h1 class="fw-bold">Elevate Your Chatting, Simplify Your Life</h1>
            <p class="text-muted">Discover professional services, appointments, and secure transactions – all in one place.</p>
        </div>
    </header>
    
    <!-- Services Grid -->
    <section class="container m-2 py-4">
        <div class="row text-center g-4">
            <div class="col-md-3">
                <div class="p-3 border service-card">
                    <h5>Customizable Theme</h5>
                    <p class="text-muted">Tailor the app to match your unique style.</p>
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" alt="img1">
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 border service-card">
                    <h5>Secure File Sharing</h5>
                    <p class="text-muted">Share files securely with end-to-end encryption.</p>
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" alt="img1">
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 border service-card">
                    <h5>Health Reminders</h5>
                    <p class="text-muted">Schedule messages and reminders for self-care.</p>
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" alt="img1">
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 border service-card">
                    <h5>Secure Communication</h5>
                    <p class="text-muted">Communicate securely with service providers.</p>
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" alt="img1">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Call to Action -->
    <section class="cta-section text-center py-5">
        <div class="container">
            <h2>Experience the speed and simplicity of Snappy</h2>
            <button class="btn btn-light mt-3">Get Started</button>
            <button class="btn btn-outline-light">Learn More</button>
        </div>
    </section>

    <!-- Services Section -->
    <div class="container py-5">
        <h2 class="text-center mb-4">Elevate Every Experience, Simplify Your Needs</h2>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="service-card">
                    <h5><i class="fas fa-shopping-cart text-primary"></i> Instant Purchases</h5>
                    <p>One-click purchases for easy shopping.</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="service-card">
                    <h5><i class="fas fa-calendar-check text-primary"></i> Scheduled Messages</h5>
                    <p>Plan important business messages ahead.</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="service-card">
                    <h5><i class="fas fa-users text-primary"></i> Effortless Collaboration</h5>
                    <p>Boost productivity with quick updates.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- <!-- CTA Section -->
    <div class="cta-section">
        <h2>Ready to experience the speed and simplicity of Snappy?</h2>
        <button class="btn btn-light me-2">Get Started</button>
        <button class="btn btn-outline-light">Learn More</button>
    </div> --}}
    
    <!-- Footer -->
    @include('footer')
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
