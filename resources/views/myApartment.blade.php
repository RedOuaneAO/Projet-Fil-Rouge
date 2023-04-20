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
            <div class="col-auto col-xl-2 px-sm-3 px-0 shadow" style="height: 100vh">
                <div class="d-flex flex-column  px-3 pt-2">
                    <a href="#" class="pb-3 mb-md-0 text-decoration-none text-dark fs-5 d-none d-sm-inline">Rent
                        <span class="text-danger">It</span>
                    </a>
                    <div class="d-flex flex-column mx-auto my-3 d-none d-sm-inline">
                        <div class="rounded-circle  overflow-hidden" style="width: 80px; height:80px;">
                            <img class="w-100" id="image"  src="/img/{{Auth::user()->image}}">
                        </div>
                        <div class="d-flex flex-column text-black">
                            <span class="fw-bold">{{Auth::user()->name}}</span>
                            <span class="text-secondary" style="font-size: 12px">{{Auth::user()->email}}</span>
                        </div>
                    </div>
                    <ul class="nav flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start">
                        <li class="nav-item">
                            <a href="{{route('apartmentsListdisplay')}}" class="nav-link px-0 text-black">
                                <i class="bi bi-house"></i>
                                <span class="ms-1 d-none d-sm-inline">Apartments</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('adminDash')}}" class="nav-link px-0 text-black">
                                <i class="bi bi-speedometer2"></i>
                                <span class="ms-1 d-none d-sm-inline">Dashboard</span> 
                            </a>
                        </li>
                        <li>
                            <a href="{{route('profile')}}" class="nav-link px-0 text-black">
                                <i class="bi bi-person-circle"></i>
                                <span class="ms-1 d-none d-sm-inline">Profile</span></a>
                        </li>
                        <li>
                            <a href="{{route('index')}}" class="nav-link px-0 text-black">
                                <i class="bi bi-plus-circle"></i>
                                <span class="ms-1 d-none d-sm-inline">Add Apartment</span>
                            </a>
                        </li>
                        <li>
                            <a href="/myFavorite/{{Auth::user()->id}}" class="nav-link px-0 text-black">
                                <i class="bi bi-heart"></i>
                                <span class="ms-1 d-none d-sm-inline">Favorite</span> </a>
                        </li>
                        <li>
                            <a href="/myApartment/{{Auth::user()->id}}" class="nav-link px-0 text-black">
                                <i class="bi bi-house-door"></i>
                                <span class="ms-1 d-none d-sm-inline">My apartments</span> </a>
                        </li>
                        <li>
                            <a href="/logout" class="nav-link px-0 text-black">
                                <i class="bi bi-box-arrow-left"></i>
                                <span class="ms-1 d-none d-sm-inline">Logout</span> </a>
                        </li>
                    </ul>
                </div>
            </div>

                {{-- -------------------------------content --------------------------------------}}

            <div class="col py-3 overflow-x-hidden overflow-y-scroll" style="height: 100vh">
                <div class="mx-auto sticky-top bg-white bg-opacity-75 p-3 rounded" style="width: 60%">
                    <div class="mb-3">
                        <input type="text" class="form-control border-secondary" placeholder="Search">
                    </div>
                    <div class="">
                        <button class="btn btn-danger form-control" type="button" data-bs-toggle="collapse" data-bs-target="#Filter">
                            Filter By Price
                        </button>
                        <div class="collapse border-secondary" id="Filter">
                            <div class="card card-body">
                                    <form class="row">
                                        <div class="col-12">
                                            <label for="price-from" class="fw-bold">Price from:</label>
                                            <input type="number" class="form-control" id="price-from" placeholder="Enter minimum price">
                                        </div>
                                        <div class="col-12">
                                            <label for="price-to" class="fw-bold">Price to:</label>
                                            <input type="number" class="form-control" id="price-to" placeholder="Enter maximum price">
                                        </div>
                                        <div class="d-flex justify-content-center mt-2 col-12">
                                            <button type="button" class="btn border-danger  filter_button" onclick="filterByPrice()"><i class="bi bi-funnel"></i> Filter</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    $counter =0;
                @endphp
                <div class=" mt-4">
                    @if(isset($message))
                        <p>{{ $message }}</p>
                    @else
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 ">
                            <h6 class="m-0 fw-bold text-primary">My Apartment</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped border">
                                    <thead class="bg-secondary bg-opacity-25">
                                        <tr>
                                            <th scope="col">Image</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">City</th>
                                            <th scope="col">RoomsNumber</th>
                                            <th scope="col">Price</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Apartments as $apartment)
                                            <tr>
                                                <td><img src="/img/{{$apartment->images[0]->image}}" width="50"></td>
                                                <td>{{ $apartment->title }}</td>
                                                <td>{{ $apartment->address }}</td>
                                                <td>{{ $apartment->city }}</td>
                                                <td>{{ $apartment->roomsNumber }}</td>
                                                <td>{{ $apartment->price }}</td>
                                                <td>
                                                    {{-- <form action="/deleteApartment/{{$apartment->id}}" method="POST">
                                                        @csrf  --}}
                                                        <a href="/deleteApartment/{{$apartment->id}}" class="btn"><i class="bi bi-x-circle text-danger"></i></a>
                                                    {{-- </form> --}}
                                                    <form action="/updateApartmentView/{{$apartment->id}}" method="POST">
                                                        @csrf 
                                                        <button class="btn"><i class="bi bi-pencil-square text-success"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                        {{-- @foreach ($Apartments as $apartment)
                            <a href="/apartmentDetails/{{$apartment->id}}" class="text-decoration-none">
                                <div class=" mb-4 shadow rounded">
                                    <div class="card" style="width: 15rem;">
                                        <div id="{{'swipe'.$counter}}" class="carousel slide"> 
                                            <div class="carousel-inner">
                                                @foreach ($apartment->images as $image)
                                                    <div class="carousel-item active">
                                                        <img src="/img/{{$image->image}}"  class="card-img-top" alt="">
                                                    </div>
                                                @endforeach
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="{{'#swipe'.$counter}}" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon border rounded"></span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="{{'#swipe'.$counter}}" data-bs-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold"  style="font-size: 18px;">{{ $apartment->title }}</h5>
                                            <div class="d-flex flex-column">
                                                <p class="card-text text-secondary mb-0">{{ $apartment->roomsNumber }}</p>
                                                <p class="card-text text-secondary my-2">{{ $apartment->address }}</p>
                                                <p><span class="fw-bold me-2">{{ $apartment->price }} DH</span>par nuit</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $counter++;
                                @endphp
                            </a>
                        @endforeach --}}
                    @endif
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>