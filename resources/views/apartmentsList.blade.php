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
                            <a href="#" class="nav-link px-0 text-danger">
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
                {{-- <div class="search-bar shadow bg-white p-2 rounded-pill my-4">
                    <form action="" class="d-flex align-items-center justify-content-between flex-wrap">
                        <div class="location-input">
                            <label for="" class="fw-bold" >Location</label>
                            <input type="text" class="form-control" placeholder="Location">
                        </div>
                        <div>
                            <label for="" class="fw-bold">Check in</label>
                            <input type="date" class="form-control"  placeholder="add date">
                        </div>
                        <div>
                            <label for="" class="fw-bold">Check out</label>
                            <input type="date" class="form-control"  placeholder="add date">
                        </div>
                        <div class="d-block">
                            <label for="" class="fw-bold">Guest</label>
                            <select class="form-control"class="border-0">
                                <option value="">Guest 1</option>
                                <option value="">Guest 2</option>
                                <option value="">Guest 3</option>
                            </select>
                        </div>
                        <button type="submit" class="bg-danger rounded-circle border-0"><i class="bi bi-search"></i></button>
                    </form>
                </div> --}}
                <div class="d-flex justify-content-evenly  flex-wrap mt-4">
                    <a href="{{route('apartmentDetails')}}" class="text-decoration-none">
                        <div class=" mb-4 cardd">
                          <div class="card border-0" style="width: 17rem;">
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
                      <div class="card border-0" style="width: 17rem;">
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
                      <div class="card border-0" style="width: 17rem;">
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
                      <div class="card border-0" style="width: 17rem;">
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
                      <div class="card border-0" style="width: 17rem;">
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
                      <div class="card border-0" style="width: 17rem;">
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
            </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>