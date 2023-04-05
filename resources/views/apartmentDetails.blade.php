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
                        <li><a class="dropdown-item" href="#">Logout</a></li>
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
                <div class="col-6"><img src="./img/img1.jpg" alt="" class="rounded" width="100%"></div>
                <div class="col-6 row">
                    <div class="col-6"><img src="./img/img2.jpg" alt="" class="rounded"  width="100%"></div>
                    <div class="col-6"><img src="./img/img3.jpg" alt="" class="rounded"  width="100%"></div>
                    <div class="col-6 mt-auto"><img src="./img/img4.jpg" alt="" class="rounded"  width="100%"></div>
                    <div class="col-6 mt-auto"><img src="./img/img1.jpg" alt="" class="rounded"  width="100%"></div>
                </div>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>