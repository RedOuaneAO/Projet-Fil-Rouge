<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <title>Document</title>
</head>
<body>
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
        </div><hr>
        {{-- end of nav bar --}}
        {{-- edit profile form --}}
    <div class="container shadow rounded bg-white mt-3 border">
        <h5 class="text-danger fw-bold m-1"><span class="text-black">Rent</span>It</h5>
        <div class="row">
            <div class="col-md-3">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="./img/face.jpg">
                    <span class="font-weight-bold my-2 fw-bold">RedOne</span>
                    <span class="text-black-50">redone@gmail.com</span>
                </div>
            </div>
            <div class="col-md-5">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label>User name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Gender</label>
                            <select class="form-select">
                                <option value="" disabled selected>Select</option>
                                <option value="">Male</option>
                                <option value="">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label>Phone Number</label><input type="tel" class="form-control" placeholder="Add your Phone Number"></div>
                        <div class="col-md-12"><label>Email</label><input type="email" class="form-control"></div>
                        <div class="col-md-12"><label>Password</label><input type="password" class="form-control"></div>
                        <div class="col-md-12"><label>Address</label><input type="password" class="form-control"></div>
                    </div>
                    {{-- <div class="row mt-3">
                        <div class="col-md-6"><label>Country</label><input type="text" class="form-control"></div>
                        <div class="col-md-6"><label>State/Region</label><input type="text" class="form-control"></div>
                    </div> --}}
                    <div class="mt-5 text-center">
                        <button class="btn btn-primary" type="button">Save Profile</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience">
                        <span>Role</span>
                        <span class="border px-3 p-1 add-experience">Host</span>
                    </div><br>
                    <div class="col-md-12">
                        <label>Experience in Designing</label>
                        <input type="text" class="form-control">
                    </div> <br>
                    <div class="col-md-12">
                        <label>Additional Details</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>