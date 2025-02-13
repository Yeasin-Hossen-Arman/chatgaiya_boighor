<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MDB UI Kit CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>

   <div class="m-2 p-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{url('/')}}"><i class="fas fa-home me-1"></i>Home</a>
          </li>
          <li class="breadcrumb-item">
            <a href="#">Library</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            <a href="#">Data</a>
          </li>
        </ol>
      </nav>
   </div>



    <div class="container mt-2 mb-3 mx-auto w-75">
        <!-- Pills navs -->
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
                    aria-controls="pills-login" aria-selected="true">Login</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
                    aria-controls="pills-register" aria-selected="false">Register</a>
            </li>
        </ul>
        <!-- Pills navs -->

        <!-- Pills content -->
        <div class="tab-content ">
            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                <form>
                    <div class="text-center mb-3">
                        <p>Sign in with:</p>
                        <button type="button" class="btn btn-link btn-floating mx-1"><i class="fab fa-facebook-f"></i></button>
                        <button type="button" class="btn btn-link btn-floating mx-1"><i class="fab fa-google"></i></button>
                        <button type="button" class="btn btn-link btn-floating mx-1"><i class="fab fa-twitter"></i></button>
                        <button type="button" class="btn btn-link btn-floating mx-1"><i class="fab fa-github"></i></button>
                    </div>

                    <p class="text-center">or:</p>

                    <div class="form-outline mb-4">
                        <input type="email" id="loginName" class="form-control" />
                        <label class="form-label" for="loginName">Email or username</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="password" id="loginPassword" class="form-control" />
                        <label class="form-label" for="loginPassword">Password</label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                </form>
            </div>

            <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                <form>
                    <div class="text-center mb-3">
                        <p>Sign up with:</p>
                        <button type="button" class="btn btn-link btn-floating mx-1"><i class="fab fa-facebook-f"></i></button>
                        <button type="button" class="btn btn-link btn-floating mx-1"><i class="fab fa-google"></i></button>
                        <button type="button" class="btn btn-link btn-floating mx-1"><i class="fab fa-twitter"></i></button>
                        <button type="button" class="btn btn-link btn-floating mx-1"><i class="fab fa-github"></i></button>
                    </div>

                    <p class="text-center">or:</p>

                    <div class="form-outline mb-4">
                        <input type="text" id="registerName" class="form-control" />
                        <label class="form-label" for="registerName">Name</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" id="registerUsername" class="form-control" />
                        <label class="form-label" for="registerUsername">Username</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="email" id="registerEmail" class="form-control" />
                        <label class="form-label" for="registerEmail">Email</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="password" id="registerPassword" class="form-control" />
                        <label class="form-label" for="registerPassword">Password</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="password" id="registerRepeatPassword" class="form-control" />
                        <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block mb-3">Sign up</button>
                </form>
            </div>
        </div>
        <!-- Pills content -->
    </div>

    @include('footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- MDB UI Kit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>

    <!-- Ensure Tabs Work Properly -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const triggerTabList = document.querySelectorAll('[data-mdb-toggle="pill"]');
            triggerTabList.forEach(function (triggerEl) {
                triggerEl.addEventListener("click", function (event) {
                    event.preventDefault();
                    let tab = new mdb.Tab(triggerEl);
                    tab.show();
                });
            });
        });
    </script>

</body>

</html>
