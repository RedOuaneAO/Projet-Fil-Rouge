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
                            <span class="fw-bold">{{Auth::user()->name}}</span>
                            <span class="text-secondary" style="font-size: 12px">{{Auth::user()->email}}</span>
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
                            <a href="/myFavorite/{{Auth::user()->id}}" class="nav-link px-0 text-danger">
                                <i class="bi bi-heart"></i>
                                <span class="ms-1 d-none d-sm-inline">Favorite</span> </a>
                        </li>
                        <li>
                            <a href="/myApartment/{{Auth::user()->id}}" class="nav-link px-0 text-danger">
                                <i class="bi bi-house-door"></i>
                                <span class="ms-1 d-none d-sm-inline">My apartments</span> </a>
                        </li>
                        <li>
                            <a href="/logout" class="nav-link px-0 text-danger">
                                <i class="bi bi-box-arrow-left"></i>
                                <span class="ms-1 d-none d-sm-inline">Logout</span> </a>
                        </li>
                    </ul>
                </div>
            </div>

                {{-- -------------------------------content --------------------------------------}}
            <div class="col py-3 overflow-x-hidden overflow-y-scroll" style="height: 100vh">
                <div class="container shadow rounded bg-white border">
                    <h5 class="fw-bold mt-3 ms-3">Profile</h5>
                    <div class="row">
                        <div class="col-md-3">
                        <form action="updateProfile/{{Auth::user()->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                <div>
                                    <div class="mb-3 img w-25 w-100">
                                        <img class="rounded-circle mt-5" id="image" width="100px" src="./img/face.jpg">
                                        <input type="file" id="imgInput" name="image"  style="display: none;" class="@error('img') is-invalid @enderror"/>
                                        @error('img')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <span class="font-weight-bold my-2 fw-bold">{{Auth::user()->name}}</span>
                                <span class="text-black-50">{{Auth::user()->email}}</span>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="p-3 pt-5">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="text-right">Profile Settings</h4>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <label>User name</label>
                                        <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Gender</label>
                                        <select class="form-select" name="gender">
                                            <option value="" disabled selected>Select</option>
                                            @if(Auth::user()->gender == 'Male')
                                                <option  selected>{{Auth::user()->gender}}</option>
                                                <option value="Female">Female</option>
                                            @else
                                                <option value="Male">Male</option>
                                                <option  selected>{{Auth::user()->gender}}</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12"><label>Phone Number</label><input type="tel" name="phone" class="form-control" placeholder="Add your Phone Number"></div>
                                    <div class="col-md-12"><label>Email</label><input type="email" name="email" class="form-control" value="{{Auth::user()->email}}"></div>
                                    <div class="col-md-12"><label>New Password</label><input type="password" name="password" class="form-control"></div>
                                    <div class="col-md-12"><label>Confirm Password</label><input type="password" name="pass_confirm" class="form-control"></div>
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
                                    <label>Address</label>
                                    <input type="text" class="form-control">
                                </div> <br>
                                <div class="col-md-12">
                                    <label>About Me</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="my-2 text-center">
                            <button class="btn btn-primary" type="submit">Save Profile</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script>
    let image = document.getElementById('image');
    let imgInput = document.getElementById('imgInput')
    image.addEventListener('click', function(){
        imgInput.click()
    })
    // Add a change event listener to the input
    imgInput.addEventListener('change', function() {
        // Get the selected file from the input
        let file = imgInput.files[0];
        // Create a new FileReader object
        let reader = new FileReader();
        // Set the onload function of the reader
        reader.onload = function() {
        // Set the source of the image to the data URL
        image.src = reader.result;
        }
        // Read the selected file as a data URL
        reader.readAsDataURL(file);
    });
</script>
</body>
</html>