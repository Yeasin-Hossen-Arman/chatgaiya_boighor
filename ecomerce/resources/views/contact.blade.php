<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f8f9fa;
        }
        .contact-container {
            max-width: 900px;
            margin: 50px auto;
            padding: 30px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .contact-info {
            background: #f1f3f5;
            padding: 30px;
            border-radius: 12px;
        }
    </style>
</head>
<body>

    @include('navber')
    
    <div class="container contact-container">
        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-6">
                <h2 class="mb-4">Get in Touch</h2>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea class="form-control" rows="4" placeholder="Write your message here..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                </form>
            </div>
            
            <!-- Contact Info -->
            <div class="col-md-6 contact-info d-flex flex-column justify-content-center">
                <h4>Contact Information</h4>
                <p><strong>Email:</strong> contact@company.com</p>
                <p><strong>Phone:</strong> +01867943600</p>
                <p><strong>Address:</strong> 123 Street, City, Bangladsh</p>
                <div class="mt-3">
                    <a href="#" class="me-3"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class="me-3"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#"><i class="fab fa-linkedin fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FontAwesome for icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
</body>
</html>
