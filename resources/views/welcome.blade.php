@extends('layouts.master')
@section('title', 'profile')
@section('content')
        <div style="background: url(img/home.jpg);  background-attachment:fixed; background-size:cover; height:100vh">
        <div style="height:100vh" class="container-fluid">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>
            <div class="mt-5">
                <div class="d-flex justify-content-center align-items-center">
                    <p class="text-white" style="font-size:60px;">Get your Rental Apartment</p>
                </div>
                <div class="d-flex justify-content-center ">
                    <a href="{{route('login')}}" class="btn border-danger">Login</a>
                    <a href="{{route('register')}}" class="btn border-danger text-danger ms-3">Register</a>
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
        <section id="About" class="container-fluid" style=" background-color:rgb(231, 231, 231);height:100vh">
            <h2 class="d-flex justify-content-center p-5">About<span class="text-danger">Us</span></h2>
            <div class="row bg-secondary h-100">
                <div class="col-6 bg-success">
                    <img src="./img/family.jpg" width="150" alt="">
                </div>
                <div class="bg-danger col-6">
                    <p class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam magnam corporis neque quisquam, iste vitae dolores repellat cupiditate, natus nam dolore. Iusto quis, sint non laborum porro assumenda itaque nulla accusamus eveniet eaque repellat laudantium perspiciatis consequatur eum deserunt et sit, est ab? Consequatur corrupti qui quae doloribus labore adipisci enim eos. Expedita in consequuntur natus accusantium impedit amet enim ab explicabo sint consectetur, atque eum? Repellat, vitae ducimus saepe velit impedit dicta deleniti. Libero nulla alias dignissimos, fugiat beatae vero? Saepe quos rem vitae exercitationem, id perspiciatis ab inventore quam ad adipisci debitis esse quaerat, veritatis, odit odio cupiditate?</p>
                </div>
            </div>
        </section>
        {{-- <section class="bg-white">
            <div class="d-flex justify-content-evenly">
                <img src="./img/paypal.png" width="100" alt="">
                <img src="./img/payonner.png" width="100" alt="">
                <img src="./img/visa.png" width="100" alt="">
                <img src="./img/master.png" width="100" alt="">
            </div>
        </section> --}}
        <section id="Contact"  class="bg-dark bg-opacity-50 container-fluid mt-5 pt-5">
            <h2 class="d-flex justify-content-center text-white pt-5">Contact<span class="text-danger">Us</span></h2>
            <div class="row gap-2">
                <p class="text-white p-5 col-12 col-md-5">Rentit is your go-to destination for finding the perfect apartment rental. Our user-friendly platform makes the process easy and stress-free, with a wide selection of apartments in prime locations.
                </p>
                <form class="col-md-5 col-12 p-5">
                    <input type="email" class="form-control" placeholder="Your Email">
                    <textarea class="form-control my-2" placeholder="Your Message"></textarea>
                    <input type="submit" value="Send" class="btn btn-danger">
                </form>
            </div>
                <h6 class="d-flex text-white justify-content-center p-2">Copy right . Rent<span class="text-danger">it</span></h6>
        </section>

        </div>
        @endsection
