<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite('resources/css/app.css') --}}
    {{-- <script src="https://unpkg.com/@tailwindcss/browser@4"></script> --}}
    <!-- Include MDB JS -->
    <script src="https://cdn.jsdelivr.net/npm/mdb-ui-kit@5.0.0-beta4/dist/mdb.min.js"></script>
    <title>home</title>
</head>
<body>
    @include('navber')
    <!-- Hero -->
        <div class="p-5 text-center bg-image rounded-3" style="
        background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
        height: 400px;
        ">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white p-4">
            <h1 class="mb-3">Heading</h1>
            <h4 class="mb-3">Subheading</h4>
            <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="#!" role="button">Call to action</a>
        </div>
        </div>
        </div>
        </div>
        <!-- Hero -->
        <br>
        <div class="container">
            <nav aria-label="...">
                <ul class="pagination d-flex justify-content-center">
                    <h2>We are Offer <span class="badge badge-primary">New Product</span></h2>
                </ul>
            </nav>
        </div>
        
        <br>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                    <div class="card p-3 shadow-sm">
                        <div class="bg-image hover-overlay">
                            <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid rounded"/>
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card Title</h5>
                            <p class="card-text">Example text to build on the card title.</p>
                            <a href="#!" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                    <div class="card p-3 shadow-sm">
                        <div class="bg-image hover-overlay">
                            <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid rounded"/>
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card Title</h5>
                            <p class="card-text">Example text to build on the card title.</p>
                            <a href="#!" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                    <div class="card p-3 shadow-sm">
                        <div class="bg-image hover-overlay">
                            <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid rounded"/>
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card Title</h5>
                            <p class="card-text">Example text to build on the card title.</p>
                            <a href="#!" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            {{-- pagination --}}

            <div class="container">
                <nav aria-label="...">
                    <ul class="pagination d-flex justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2 <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
            
       
        

        <!-- Carousel wrapper -->


        <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <!-- Inner -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(15).webp" class="d-block w-100" alt="Sunset Over the City"/>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(22).webp" class="d-block w-100" alt="Canyon at Night"/>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(23).webp" class="d-block w-100" alt="Cliff Above a Stormy Sea"/>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Carousel wrapper -->
         
    @include('footer')
</body>
</html>