<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lelang</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/vendor/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/main.css">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <nav class="position-fixed top-0 z-5 w-100">
        <!-- Header -->
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container d-flex justify-content-between flex-row-reverse flex-md-row">
              <a class="navbar-brand" href="#">Lelang</a>
              <div class="d-flex gap-2 align-items-center flex-row-reverse flex-md-row">
                <a href="" class="text-secondary">
                    <i class="bi bi-archive-fill"></i>
                </a>
                <a href="" class="text-secondary">
                    <i class="bi bi-heart-fill"></i>
                </a>
                <div class="dropdown">
                    <button class="px-0 btn btn-none dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-coin"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <a href="" class="">
                    <img src="/assets/img/profile-img.jpg" alt="" class="rounded-3 fs-6" style="height:
                    2rem">
                </a>
              </div>
            </div>
        </nav>
    
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Furniture</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Home Care</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Aromatherapy</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                    <div class="input-group input-group-sm">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Cari">
                    </div>                  
                </form>
              </div>
            </div>
        </nav>
    </nav>

    <!-- Hero -->
    <section class="vh-100 w-100 overflow-hidden">
        <div class="position-absolute h-100 w-100 z--full overflow-hidden">
            <div class="filter position-absolute bg-black w-100 h-100 opacity-50"></div>
            <img src="/assets/img/card.jpg" alt="" class="hero-bg">
        </div>
        <div class="container d-flex align-items-center justify-content-center h-100">
            <div class="text-white text-center">
                <h1 class="mb-3">Autumn Collection in here</h1>
                <p>The time is now for it to be okay to be great. People in this world shun people for being great. For being a bright color. For standing out. But the time is now to be okay to be the greatest you. </p>
                <a href="" class="btn btn-secondary">Explore</a>
            </div>
        </div>
    </section>

    <!-- Category -->
    <section>
        <div class="container py-5">
            <div class="d-flex justify-content-between mb-2">
                <h3 class="">Shop by Category</h3>
                <a href="" class="text-secondary fw-semibold fst-normal">Browse all category <i class="ms-2 bi bi-arrow-right"></i></a>
            </div>
            <div class="row">
                <div class="col-6 col-sm-4 col-lg-3 mb-4">
                    <a class="category-card rounded-3 position-relative d-block">
                         <img src="/assets/img/card.jpg" alt="" class="h-100 position-absolute">
                         <div class="position-absolute z-1 ">
                             <h4 class="text-center text-white fw-bold">Decor</h4>
                        </div>

                    </a>
                </div>
                <div class="col-6 col-sm-4 col-lg-3 mb-4">
                    <a class="category-card rounded-3 position-relative d-block">
                         <img src="/assets/img/card.jpg" alt="" class="h-100 position-absolute">
                         <div class="position-absolute z-1 ">
                             <h4 class="text-center text-white fw-bold">Decor</h4>
                        </div>

                    </a>
                </div>
                <div class="col-6 col-sm-4 col-lg-3 mb-4">
                    <a class="category-card rounded-3 position-relative d-block">
                         <img src="/assets/img/card.jpg" alt="" class="h-100 position-absolute">
                         <div class="position-absolute z-1 ">
                             <h4 class="text-center text-white fw-bold">Decor</h4>
                        </div>

                    </a>
                </div>
                <div class="col-6 col-sm-4 col-lg-3 mb-4">
                    <a class="category-card rounded-3 position-relative d-block">
                         <img src="/assets/img/card.jpg" alt="" class="h-100 position-absolute">
                         <div class="position-absolute z-1 ">
                             <h4 class="text-center text-white fw-bold">Decor</h4>
                        </div>

                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- New Arrival -->
    <section>
        <div class="container py-5">
            <div class="position-relative rounded-3 overflow-hidden">
                <div class="position-absolute w-100 h-100 z--full r-4/1">
                    <div class="filter position-absolute bg-black w-100 h-100 opacity-50"></div>
                    <img src="/assets/img/card.jpg" alt="" class="hero-bg2">
                </div>
                <div class="d-flex align-items-center justify-content-center h-100 my-3d p-5">
                    <div class="text-white text-center">
                        <h1 class="mb-3">New arrivals</h1>
                        <p>The time is now for it to be okay to be great. People in this world shun people for being great. For being a bright color. For standing out. But the time is now to be okay to be the greatest you. </p>
                        <a href="" class="btn btn-secondary">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Collection -->
    <section>
        <div class="container py-5">
            <div class="d-flex justify-content-between mb-2">
                <h3 class="">Shop by Collection</h3>
                <a href="" class="text-secondary fw-semibold fst-normal">Browse all Collection <i class="ms-2 bi bi-arrow-right"></i></a>
            </div>
            <div class="row gy-4">
                <div class="col-12 col-md-6">
                    <div href="index.html" class="collections-card rounded-3 position-relative d-block w-100 overflow-hidden">
                         <img src="/assets/img/card.jpg" alt="" class="h-100">
                         <div href="" class="d-flex flex-column">
                            <a class="fw-bold fs-4 text-white text-decoration-none">Decor</a>
                            <a href="" class="text-white text-decoration-none d-flex flex-row align-items-center"><span class="me-2">Shop</span> <i class="bi bi-arrow-right"></i></a>
                         </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="d-flex flex-column">
                        <div href="index.html" class="collections-card position-relative d-block w-100 overflow-hidden r-2/1 pb-4 rounded-3">
                            <img src="/assets/img/card.jpg" alt="" class="w-100 rounded-3">
                            <div href="" class="d-flex flex-column">
                               <a class="fw-bold fs-4 text-white text-decoration-none">Decor</a>
                               <a href="" class="text-white text-decoration-none d-flex flex-row align-items-center"><span class="me-2">Shop</span> <i class="bi bi-arrow-right"></i></a>
                            </div>
                       </div>
                        <div href="index.html" class="collections-card position-relative d-block w-100 overflow-hidden r-2/1 pt-4 rounded-3">
                            <img src="/assets/img/card.jpg" alt="" class="w-100 rounded-3">
                            <div href="" class="d-flex flex-column">
                               <a class="fw-bold fs-4 text-white text-decoration-none">Decor</a>
                               <a href="" class="text-white text-decoration-none d-flex flex-row align-items-center"><span class="me-2">Shop</span> <i class="bi bi-arrow-right"></i></a>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Discount -->
    <section>
        <div class="container py-5">
            <div class="position-relative rounded-3 overflow-hidden mb-4">
                <div class="position-absolute w-100 h-100 z--full r-4/1">
                    <img src="/assets/img/card.jpg" alt="" class="hero-bg2">
                </div>
                <div class="d-flex align-items-center justify-content-center h-100 my-3d p-5">
                    <div class="text-black text-center glass p-5">
                        <h1 class="mb-3">New arrivals</h1>
                        <p>The time is now for it to be okay to be great. People in this world shun people for being great. For being a bright color. For standing out. But the time is now to be okay to be the greatest you. </p>
                        <a href="" class="btn btn-secondary"><i class="bi bi-box2-heart-fill me-2"></i> Explore</a>
                    </div>
                </div>
            </div>
            <h3 class="mb-2">Opinion</h3>
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-quote"></i>
                            <p class="my-3">
                                We’re not always in the position that we want to be at. We’re constantly growing. We’re constantly making mistakes. We’re constantly trying to express ourselves and actualize our dreams. If you have the opportunity to play this game of life you need to appreciate every moment. A lot of people don’t appreciate the moment until it’s passed.
                            </p>
                            <div class="d-flex align-items-center gap-2">
                                <img src="/assets/img/profile-img.jpg" alt="" class="rounded-circle fs-6" style="height: 2rem">
                                <h5 class=" mb-0"><a href="" class="text-decoration-none text-black">Alexa</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-quote"></i>
                            <p class="my-3">
                                We’re not always in the position that we want to be at. We’re constantly growing. We’re constantly making mistakes. We’re constantly trying to express ourselves and actualize our dreams. If you have the opportunity to play this game of life you need to appreciate every moment. A lot of people don’t appreciate the moment until it’s passed.
                            </p>
                            <div class="d-flex align-items-center gap-2">
                                <img src="/assets/img/profile-img.jpg" alt="" class="rounded-circle fs-6" style="height: 2rem">
                                <h5 class=" mb-0"><a href="" class="text-decoration-none text-black">Alexa</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-quote"></i>
                            <p class="my-3">
                                We’re not always in the position that we want to be at. We’re constantly growing. We’re constantly making mistakes. We’re constantly trying to express ourselves and actualize our dreams. If you have the opportunity to play this game of life you need to appreciate every moment. A lot of people don’t appreciate the moment until it’s passed.
                            </p>
                            <div class="d-flex align-items-center gap-2">
                                <img src="/assets/img/profile-img.jpg" alt="" class="rounded-circle fs-6" style="height: 2rem">
                                <h5 class=" mb-0"><a href="" class="text-decoration-none text-black">Alexa</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container d-flex justify-content-between flex-column flex-lg-row py-2 ">
            <p class="text-secondary text-center text-lg-start">
                Copyright © 2022 Corporate UI Design System by Creative Tim.
            </p>
            <div class="d-flex gap-4 justify-content-around justify-content-lg-end">
                <a href="" class="text-secondary text-decoration-none">Creative Tim</a>
                <a href="" class="text-secondary text-decoration-none">About Us</a>
                <a href="" class="text-secondary text-decoration-none">Blod</a>
                <a href="" class="text-secondary text-decoration-none">License</a>
            </div>
        </div>
    </footer>

    <!-- Script -->
    <script src="/assets/vendor/js/bootstrap.bundle.js"></script>
    <script src="/assets/vendor/js/jquery-3.6.3.js"></script>
</body>
</html>