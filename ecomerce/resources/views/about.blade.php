<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- MDB UI Kit -->
    <script src="https://cdn.jsdelivr.net/npm/mdb-ui-kit@5.0.0-beta4/dist/mdb.min.js"></script>

    <style>
        .scrollspy-example {
            height: 300px;
            overflow-y: auto;
        }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="100" tabindex="0">

    @include('navber')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#"><i class="fas fa-home me-1"></i>Home</a>
          </li>
          <li class="breadcrumb-item">
            <a href="#">Library</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            <a href="#">Data</a>
          </li>
        </ol>
      </nav>

    <div class="container d-flex justify-content-center mt-5 pb-5">
        <div class="row">
            <div class="col-md-8">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-150" src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" alt="Tokyo">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Tokyo (Japan)</h5>
                                <p>Beautiful cityscape of Tokyo.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-150" src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" alt="Shanghai">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Shanghai (China)</h5>
                                <p>A stunning view of Shanghai.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-150" src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" alt="New York">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>New York (USA)</h5>
                                <p>The skyline of New York City.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- About Under Section -->
    {{-- <div class="container d-flex justify-content-center p-5 m-3">
        <div class="row">
            <div class="col-4">
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
                </div>
            </div>
            <div class="col-8">
                <div class="scrollspy-example">
                    <h4 id="list-item-1">Item 1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                    <h4 id="list-item-2">Item 2</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                    <h4 id="list-item-3">Item 3</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                    <h4 id="list-item-4">Item 4</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                </div>
            </div>
        </div>
    </div> --}}
        {{-- about under section start --}}
        <div class="container d-flex justify-content-center p-10 m-8">
            <div class="row">
                <div class="col-4">
                    <div id="list-example" class="list-group">
                        <a class="list-group-item list-group-item-action h-20" href="#list-item-1">Item 1</a>
                        <a class="list-group-item list-group-item-action h-20" href="#list-item-2">Item 2</a>
                        <a class="list-group-item list-group-item-action h-20" href="#list-item-3">Item 3</a>
                        <a class="list-group-item list-group-item-action h-20" href="#list-item-4">Item 4</a>
                    </div>
                </div>
                <div class="col-8">
                    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true"
                        class="scrollspy-example" tabindex="0">
                        <h4 id="list-item-1">Item 1</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti aperiam doloribus, ullam iste
                            aliquid dolores blanditiis aspernatur repellat vero. Assumenda, facere sapiente nemo odit atque
                            debitis doloremque ex voluptas ipsum cumque deleniti labore in ea officia voluptatem quod sequi.
                            Aspernatur et consectetur obcaecati culpa quia nostrum dolore officiis laudantium repudiandae!
                        </p>
                        <h4 id="list-item-2">Item 2</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi error adipisci saepe nemo ipsam
                            odio perferendis, itaque, voluptas amet delectus corporis quam assumenda repudiandae voluptatem
                            veniam temporibus illum, quod id? Voluptate et alias aliquam ea, voluptatibus, provident,
                            impedit fuga maiores deleniti voluptatem atque mollitia magni minima maxime. Fugiat, veniam
                            earum?</p>
                        <h4 id="list-item-3">Item 3</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et odio blanditiis ratione quaerat sed
                            neque. Perferendis sequi corporis explicabo quisquam cupiditate recusandae, reiciendis magnam.
                            Perferendis, animi vitae. Voluptates adipisci, nobis tenetur quam eaque alias sequi sunt!
                            Laboriosam amet voluptate voluptatem facilis nam ipsa. Exercitationem laborum sequi aliquid
                            neque maiores perspiciatis.</p>
                        <h4 id="list-item-4">Item 4</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit temporibus excepturi aliquam
                            earum ratione aspernatur a eum exercitationem aut quasi expedita ut numquam similique, quia ea
                            unde laborum fugit vel quisquam mollitia tempora libero. Dignissimos itaque placeat aspernatur
                            molestias eos explicabo tenetur, ducimus ut, nobis aut architecto fuga ipsum atque!</p>
                    </div>
                </div>
            </div>
    
        </div>
    
        {{-- about under section end --}}
    <!-- End Section -->

    @include('footer')

</body>

</html>
