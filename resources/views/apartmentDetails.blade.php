<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div style="height:100vh" class="container-fluid">
        <div class="justify-content-between d-flex p-3">
            <h4 class="text-danger"><span class="text-black">Rent</span>It</h4>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active disabled" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#Apartment">Apartment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#About">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#Contact">Contact</a>
                </li>
                <li class="nav-item dropdown dropstart ">
                    <a class="nav-link dropdown-toggle " data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="bi bi-list text-white"></i></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Login</a></li>
                        <li><a class="dropdown-item" href="{{route('register')}}">Sign Up</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{route('Home')}}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="apartment-details">
            <div class="apartmen-title">
                <h2>Marrakech apartment</h2>
                <div class="">
                    <div class="">
                        <i class="bi bi-star-fill text-danger"></i>
                        <i class="bi bi-star-fill text-danger"></i>
                        <i class="bi bi-star-fill text-danger"></i>
                        <i class="bi bi-star-half text-danger"></i>
                        <span>189 Review</span>
                    </div>
                    <div>
                        <p><span class="fw-bold">Location :</span> Marrakech</p>
                    </div>
                </div>
            </div>
            <div class="gallery row">
                <div class="col-6"><img src="./img/img1.jpg" alt="" class="rounded shadow" width="100%"></div>
                <div class="col-6 row">
                    <div class="col-6"><img src="./img/img2.jpg" alt="" class="rounded shadow"  width="100%"></div>
                    <div class="col-6"><img src="./img/img3.jpg" alt="" class="rounded shadow"  width="100%"></div>
                    <div class="col-6 mt-auto"><img src="./img/img4.jpg" alt="" class="rounded shadow"  width="100%"></div>
                    <div class="col-6 mt-auto"><img src="./img/img1.jpg" alt="" class="rounded shadow"  width="100%"></div>
                </div>
            </div>
            <div class="d-flex mt-5 justify-content-between" style="width: 60%">
                <div class=""><h4 class="fw-bold">perfect apartment in marrakech</h4></div>
                <div class=""><img src="./img/face.jpg" width="50" class="rounded-circle" alt=""></div>
            </div>
            <div>
                <p>10 travelers. 5 bedrooms. 8 beds. 5,5 bathrooms</p>
            </div>
            <hr style="width: 60%">
            <div>
                <h5 class="fw-bold">What this accommodation offers</h5>
                <div class="row mt-4" style="width: 60%">
                    <div class="col-6">
                        <p><i class="bi bi-wifi me-2"></i>wifi</p>
                    </div>
                    <div class="col-6">
                        <p><i class="bi bi-asterisk me-2"></i>Climatisation</p>
                    </div>
                    <div class="col-6">
                        <p><i class="bi bi-water me-2"></i>pool</p>
                    </div>
                    <div class="col-6">
                        <p><i class="bi bi-wifi me-2"></i>wifi</p>
                    </div>
                    <div class="col-6">
                        <p><i class="bi bi-asterisk me-2"></i>Climatisation</p>
                    </div>
                    <div class="col-6">
                        <p><i class="bi bi-water me-2"></i>pool</p>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <h5 class="fw-bold">Comments</h5>
{{-- dispaly comment --}}
                <div class="row gap-5">
                    <div class="card mt-3 shadow rounded col-5">
                        <div class="card-body">
                            <div class="d-flex">
                                <img class="rounded-circle" width="50" height="50" src="./img/face.jpg" alt="User avatar">
                                <div class="ms-3">
                                    <h6 class="fw-bold">User Name</h6>
                                    <p class="text-secondary">août 2019</p>
                                </div>
                            </div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus laboriosam eligendi odit quod, quis recusandae. Ratione veritatis quibusdam voluptatibus facere?</p>
                        </div>
                    </div>
                    <div class="card mt-3 shadow rounded col-5">
                        <div class="card-body">
                            <div class="d-flex">
                                <img class="rounded-circle" width="50" height="50" src="./img/face.jpg" alt="User avatar">
                                <div class="ms-3">
                                    <h6 class="fw-bold">User Name</h6>
                                    <p class="text-secondary">août 2019</p>
                                </div>
                            </div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus laboriosam eligendi odit quod, quis recusandae. Ratione veritatis quibusdam voluptatibus facere?</p>
                        </div>
                    </div>
                    <div class="card mt-3 shadow rounded col-5">
                        <div class="card-body">
                            <div class="d-flex">
                                <img class="rounded-circle" width="50" height="50" src="./img/face.jpg" alt="User avatar">
                                <div class="ms-3">
                                    <h6 class="fw-bold">User Name</h6>
                                    <p class="text-secondary">août 2019</p>
                                </div>
                            </div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus laboriosam eligendi odit quod, quis recusandae. Ratione veritatis quibusdam voluptatibus facere?</p>
                        </div>
                    </div>
                    <div class="card mt-3 shadow rounded col-5">
                        <div class="card-body">
                            <div class="d-flex">
                                <img class="rounded-circle" width="50" height="50" src="./img/face.jpg" alt="User avatar">
                                <div class="ms-3">
                                    <h6 class="fw-bold">User Name</h6>
                                    <p class="text-secondary">août 2019</p>
                                </div>
                            </div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus laboriosam eligendi odit quod, quis recusandae. Ratione veritatis quibusdam voluptatibus facere?</p>
                        </div>
                    </div>
                </div>
{{-- Write comment --}}
                <div class="">
                    <div class="card mt-3">
                        <div class="card-header bg-white fw-bold">
                            Leave us a comment
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    {{-- <label for="comment">Comment</label> --}}
                                    <textarea class="form-control" id="comment" placeholder="Write Your Comment Here" rows="5"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-5 d-flex justify-content-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13587.777683918684!2d-8.0015554!3d31.6353721!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1680789122763!5m2!1sfr!2sma" width="800" height="450" class="rounded shadow" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div style="height: 50%;width:50%;" class="rounded">
                <h5 class="fw-bold">Hosted by</h5>
                <div class="card mt-4 shadow-lg border-0" style="height: 70% ;">
                    <div class="card-body">
                        <div class="d-flex">
                            <img class="rounded-circle" width="50" height="50" src="./img/face1.jpg" alt="User avatar">
                            <div class="ms-3">
                                <h6 class="fw-bold">Owner Name</h6>
                                <p class="text-secondary"></p>
                            </div>
                        </div>
                        <div>
                            <p class="mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus laboriosam eligendi odit quod, quis recusandae. Ratione veritatis quibusdam voluptatibus facere... <u>Read more</u></p>
                            <button class="btn bg-success text-white fw-bold">Contact The Owner</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>