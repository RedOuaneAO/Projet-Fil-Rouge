<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="/css/style.css">

        <title>Home</title>
    </head>
    <body style="background: url(img/home.jpg);  background-attachment:fixed; background-size:cover; height:100vh">
        <div style="height:100vh" class="container-fluid">
            <div class="justify-content-between d-flex p-3">
                <h4 class="text-danger"><span class="text-white">Rent</span>It</h4>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active disabled" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#Apartment">Apartment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#About">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('profile')}}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#Contact">Contact</a>
                    </li>
                    <li class="nav-item dropdown dropstart ">
                        <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="bi bi-list text-white"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('adminDash')}}">Login</a></li>
                            <li><a class="dropdown-item" href="{{route('register')}}">Sign Up</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="mt-5">
                <div class="d-flex justify-content-center align-items-center">
                    <p class="text-white" style="font-size:60px;">Get your Rental Apartment</p>
                </div>
                <div class="d-flex justify-content-center ">
                    <button class="btn btn-danger">Login</button>
                    <a href="{{route('register')}}" class="btn border-danger text-danger ms-3">Register</a>
                </div>
            </div>
            </div>
        </div>
        <section id="Apartment" class="" style=" background-color:white;">
            <h2 class="d-flex justify-content-center p-5">Recent<span class="text-danger ms-2">Apartment</span></h2>
            <div class="d-flex justify-content-evenly flex-wrap">
                <a href="" class="text-decoration-none">
                    <div class=" mb-4 cardd">
                      <div class="card border-0" style="width: 18rem;">
                        <img src="./img/img1.jpg" class="card-img-top rounded" alt="...">
                        <div class="card-body">
                          <h5 class="card-title fw-bold">Card title</h5>
                          <p class="card-text text-secondary">Some quick example text</p>
                          <p class="card-text text-secondary">Marrakech</p>
                          <p><span class="fw-bold me-2">1200DH</span>par nuit</p>
                        </div>
                      </div>
                    </div>
                </a>
                <div class=" mb-4 cardd">
                  <div class="card border-0" style="width: 18rem;">
                    <img src="./img/img2.jpg" class="card-img-top rounded" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Card title</h5>
                      <p class="card-text text-secondary">Some quick example text</p>
                      <p class="card-text text-secondary">Agadir</p>
                      <p><span class="fw-bold me-2">1500DH</span>par nuit</p>
                    </div>
                  </div>
                </div>
                <div class=" mb-4 cardd">
                  <div class="card border-0" style="width: 18rem;">
                    <img src="./img/img3.jpg" class="card-img-top rounded" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Card title</h5>
                      <p class="card-text text-secondary">Some quick example text</p>
                      <p class="card-text text-secondary">Casablanca</p>
                      <p><span class="fw-bold me-2">2000DH</span>par nuit</p>
                    </div>
                  </div>
                </div>
                <div class=" mb-4 cardd">
                  <div class="card border-0" style="width: 18rem;">
                    <img src="./img/img1.jpg" class="card-img-top rounded" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Card title</h5>
                      <p class="card-text text-secondary">Some quick example text</p>
                      <p class="card-text text-secondary">Marrakech</p>
                      <p><span class="fw-bold me-2">1200DH</span>par nuit</p>
                    </div>
                  </div>
                </div>
                <div class=" mb-4 cardd">
                  <div class="card border-0" style="width: 18rem;">
                    <img src="./img/img2.jpg" class="card-img-top rounded" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Card title</h5>
                      <p class="card-text text-secondary">Some quick example text</p>
                      <p class="card-text text-secondary">Agadir</p>
                      <p><span class="fw-bold me-2">1500DH</span>par nuit</p>
                    </div>
                  </div>
                </div>
                <div class=" mb-4 cardd">
                  <div class="card border-0" style="width: 18rem;">
                    <img src="./img/img3.jpg" class="card-img-top rounded" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Card title</h5>
                      <p class="card-text text-secondary">Some quick example text</p>
                      <p class="card-text text-secondary">Casablanca</p>
                      <p><span class="fw-bold me-2">2000DH</span>par nuit</p>
                    </div>
                  </div>
                </div>
              </div>
        </section>
        <section id="imgs" class="container-fluid bg-white">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./img/img1.jpg" class="img-fluid" style="" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/img2.jpg" class="img-fluid" style="" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/img3.jpg" class="img-fluid" style="" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/img4.jpg" class="img-fluid" style="" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section id="About" class="container-fluid" style=" background-color:white;height:100vh">
            <h2 class="d-flex justify-content-center p-5">About<span class="text-danger">Us</span></h2>
            <div class="d-flex">
                <div class="ms-3">
                    <img src="./img/family.jpg" width="400px" alt="">
                </div>
                <div>
                    <p class="p-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam magnam corporis neque quisquam, iste vitae dolores repellat cupiditate, natus nam dolore. Iusto quis, sint non laborum porro assumenda itaque nulla accusamus eveniet eaque repellat laudantium perspiciatis consequatur eum deserunt et sit, est ab? Consequatur corrupti qui quae doloribus labore adipisci enim eos. Expedita in consequuntur natus accusantium impedit amet enim ab explicabo sint consectetur, atque eum? Repellat, vitae ducimus saepe velit impedit dicta deleniti. Libero nulla alias dignissimos, fugiat beatae vero? Saepe quos rem vitae exercitationem, id perspiciatis ab inventore quam ad adipisci debitis esse quaerat, veritatis, odit odio cupiditate?</p>
                </div>
            </div>
        </section>
        <section class="bg-white">
            <div class="d-flex justify-content-evenly">
                <img src="./img/paypal.png" width="100" alt="">
                <img src="./img/payonner.png" width="100" alt="">
                <img src="./img/visa.png" width="100" alt="">
                <img src="./img/master.png" width="100" alt="">
            </div>
        </section>
        <section id="Contact"  class="bg-dark bg-opacity-50 container-fluid">
            <h2 class="d-flex justify-content-center text-white pt-5">Contact<span class="text-danger">Us</span></h2>
            <div class="row gap-2">
                <p class="text-white p-5 col-5">Rentit is your go-to destination for finding the perfect apartment rental. Our user-friendly platform makes the process easy and stress-free, with a wide selection of apartments in prime locations.
                </p>
                <form class="col-5 p-5">
                    <input type="email" class="form-control" placeholder="Your Email">
                    <textarea class="form-control my-2" placeholder="Your Message"></textarea>
                    <input type="submit" value="Send" class="btn btn-danger">
                </form>
            </div>
                <h6 class="d-flex text-white justify-content-center p-2">Copy right . Rent<span class="text-danger">it</span></h6>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script> 
    let card =document.querySelectorAll('.cardd');
    card.forEach(function(element) {
        element.addEventListener("mouseover", function() {
            this.classList.add("shadow");
        });
        element.addEventListener("mouseout", function() {
            this.classList.remove("shadow");
        });
    });
    </script>
    </body>
</html>
