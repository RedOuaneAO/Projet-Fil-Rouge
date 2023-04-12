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
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-xl-2 px-sm-2 px-0 shadow">
                <div class="d-flex flex-column  px-3 pt-2">
                    <a href="#" class="pb-3 mb-md-0 text-decoration-none text-dark fs-5 d-none d-sm-inline">Rent
                        <span class="text-danger">It</span>
                    </a>
                    <div class="d-flex flex-column mx-auto my-3 d-none d-sm-inline">
                        <img src="./img/face.jpg" width="80px" class="rounded-circle" alt="avatar image">
                        <div class="d-flex flex-column text-black">
                            <span class="fw-bold">User Name</span>
                            <span class="text-secondary" style="font-size: 12px">UserEmail@gmail.com</span>
                        </div>
                    </div>
                    <ul class="nav flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start">
                        <li class="nav-item">
                            <a href="#" class="nav-link px-0 text-danger">
                                <i class="bi bi-house"></i>
                                <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('adminDash')}}" class="nav-link px-0 text-danger">
                                <i class="bi bi-speedometer2"></i>
                                <span class="ms-1 d-none d-sm-inline">Dashboard</span> 
                            </a>
                        </li>
                        <li>
                            <a href="{{route('profile')}}" class="nav-link px-0 text-danger">
                                <i class="bi bi-person-circle"></i>
                                <span class="ms-1 d-none d-sm-inline">Profile</span></a>
                        </li>
                        <li>
                            <a href="{{route('index')}}" class="nav-link px-0 text-danger">
                                <i class="bi bi-plus-circle"></i>
                                <span class="ms-1 d-none d-sm-inline">Add Apartment</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 text-danger">
                                <i class="bi bi-heart"></i>
                                <span class="ms-1 d-none d-sm-inline">Favorite</span> </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 text-danger">
                                <i class="bi bi-house-door"></i>
                                <span class="ms-1 d-none d-sm-inline">My apartments</span> </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 text-danger">
                                <i class="bi bi-box-arrow-left"></i>
                                <span class="ms-1 d-none d-sm-inline">Logout</span> </a>
                        </li>
                    </ul>
                </div>
            </div>

                {{-- -------------------------------content --------------------------------------}}

            <div class="col py-3">
                <div class="mx-auto" style="width: 80%">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <div class="">
                        <button class="btn btn-danger form-control" type="button" data-bs-toggle="collapse" data-bs-target="#Filter" aria-expanded="false" aria-controls="collapseExample">
                            Filter
                        </button>
                        <div class="collapse" id="Filter">
                            <div class="card card-body">
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="d-flex justify-content-evenly  flex-wrap mt-4">
                    @foreach ($Apartments as $apartment)
                    <div class=" mb-4 cardd">
                        <div class="card border-0" style="width: 17rem;">
                          <img src="./img/img2.jpg" class="card-img-top rounded" alt="...">
                          <div class="card-body">
                            <h5 class="card-title fw-bold">{{$apartment->title}}</h5>
                            <p class="card-text text-secondary">{{$apartment->roomsNumber}}</p>
                            <p class="card-text text-secondary">{{$apartment->address}}</p>
                            <p><span class="fw-bold me-2">{{$apartment->price}}</span>par nuit</p>
                          </div>
                        </div>
                      </div>
                    @endforeach

        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>