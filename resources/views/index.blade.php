<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
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
            <div class="col-auto col-xl-2 px-sm-2 px-0 shadow" style="height: 100vh">
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
                            <a href="{{route('apartmentsListdisplay')}}" class="nav-link px-0 text-danger">
                                <i class="bi bi-house"></i>
                                <span class="ms-1 d-none d-sm-inline">Apartments</span>
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
                            <a href="/myFavorite/1" class="nav-link px-0 text-danger">
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
            <div class="col py-3 overflow-x-hidden overflow-y-scroll" style="height: 100vh">
                <div class="container shadow rounded bg-white border">
                    <h5 class="fw-bold mt-3 ms-3">Add Apartment</h5>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                <img class="img-thumbnail mt-5" width="150px" src="./img/img1.jpg">
                                <div class="d-flex f-wrap">
                                    <img class="img-thumbnail " width="75px" src="./img/img1.jpg">
                                    <img class="img-thumbnail " width="75px" src="./img/img1.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="p-3 py-5">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="text-right">Apartment Details</h4>
                                </div>
                                <form action="{{route('aprtmentStore')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="Inter the apartment Address">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Price</label><input type="number" name="price" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>City</label>
                                            <select class="form-select" name="address">
                                                <option value="" disabled selected>Select</option>
                                                @foreach($variable as $var)
                                                <option value="{{$var->city}}">{{$var->city}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12"><label>Number of the rooms</label><input type="number" name="roomsNumber" class="form-control"></div>
                                        <div class="col-md-12"> <label>Images</label><input type="file" name="image[]" class="form-control" multiple></div>
                                    </div>
                                    <div class="mt-5 text-center">
                                        <button class="btn btn-primary" type="submit" type="button">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 py-5">
                                <div class="d-flex justify-content-between align-items-center experience">
                                    <span>Else</span>
                                    <span class="border px-3 p-1">optional</span>
                                </div><br>
                                <div class="col-md-12">
                                    <label>Rules of procedure</label>
                                    <input type="text" class="form-control">
                                </div> <br>
                                <div class="col-md-12">
                                    <label>What this accommodation offers</label>
                                    <div>
                                        <div>
                                            <input type="checkbox" class="me-2">
                                            <span>Wifi</span>
                                        </div>
                                        <div>
                                            <input type="checkbox" class="me-2">
                                            <span>Pool</span>
                                        </div>
                                        <div>
                                            <input type="checkbox" class="me-2">
                                            <span>Free parking on site</span>
                                        </div>
                                        <div>
                                            <input type="checkbox" class="me-2">
                                            <span>air conditioner</span>
                                        </div>
                                    </div>
                                </div> <br>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>