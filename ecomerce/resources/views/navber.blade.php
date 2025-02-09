<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Tailwind (Optional) -->
    @vite('resources/css/app.css')

    <!-- Bootstrap 5 CSS (Remove Bootstrap 4 to avoid conflicts) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Navbar</title>
    <!-- Add margin to body to avoid content getting hidden behind fixed navbar -->
    <style>
      body {
          padding-top: 70px; /* Adjust based on navbar height */
      }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand" href="#">E-Commerce Site</a>

        <!-- Toggle Button (Visible on small screens) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links (Always visible on large screens, collapses on small screens) -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{url('/about')}}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{url('/contact')}}" class="nav-link">Contact Us</a></li>
                <li class="nav-item"><a href="{{url('/service')}}" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="{{url('/product')}}" class="nav-link">Product</a></li>
                <li class="nav-item"><a href="{{url('/pricing')}}" class="nav-link">Pricing</a></li>
            </ul>


            <!-- Right Section (Search & Sign in) -->
            <div class="d-flex align-items-center">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <a href="{{url('/signin')}}" class="btn btn-outline-primary ms-2">Sign In</a>
            </div>
        </div>
    </div>
</nav>

<!-- Bootstrap 5 JavaScript (Ensure Only Bootstrap 5 is Used) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
