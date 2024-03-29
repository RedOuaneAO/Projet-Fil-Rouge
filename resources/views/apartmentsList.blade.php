@extends('layouts.master')
@section('title', 'profile')
@section('content')
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-xl-2 px-sm-2 px-0 shadow" style="height: 100vh">
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
                            <a href="#" class="nav-link px-0 text-black">
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
                            <a href="/myReservation" class="nav-link px-0 text-black">
                                <i class="bi bi-bookmark-check"></i>
                                <span class="ms-1 d-none d-sm-inline">My Reservation</span> </a>
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
                        <input type="text" class="form-control border-secondary" id="search-input" placeholder="Search">
                    </div>
                    <div class="">
                        <button class="btn btn-danger form-control" type="button" data-bs-toggle="collapse" data-bs-target="#Filter">
                            Filter By Price
                        </button>
                        <div class="collapse border-secondary" id="Filter">
                            <div class="card card-body">
                                    <form class="row" method="POST" action="{{route('filter')}}">
                                        @csrf
                                        <div class="col-12">
                                            <label for="price-from" class="fw-bold">Price from:</label>
                                            <input type="number" name="minPrice" class="form-control" id="price-from" placeholder="Enter minimum price">
                                        </div>
                                        <div class="col-12">
                                            <label for="price-to" class="fw-bold">Price to:</label>
                                            <input type="number" name="maxPrice" class="form-control" id="price-to" placeholder="Enter maximum price">
                                        </div>
                                        <div class="d-flex justify-content-center mt-2 col-12">
                                            <button type="submit" class="btn border-danger filter_button"><i class="bi bi-funnel"></i> Filter</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    $counter =0;
                @endphp
                <div class=" mt-4 d-flex justify-content-evenly flex-wrap" id="cards">
                    @if(isset($message))
                        <p>{{ $message }}</p>
                    @else
                        @foreach ($Apartments as $apartment)
                            <a href="/apartmentDetails/{{$apartment->id}}" class="text-decoration-none">
                                <div class=" mb-4 shadow rounded">
                                    <div class="card" style="width: 15rem;">
                                        <div id="{{'swipe'.$counter}}" class="carousel slide">  {{--data-bs-ride="carousel"--}}
                                            <div class="carousel-inner">
                                                @foreach ($apartment->images as $image)
                                                    <div class="carousel-item active">
                                                        <img src="./img/{{$image->image}}"  class="card-img-top" alt="">
                                                    </div>
                                                @endforeach
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="{{'#swipe'.$counter}}" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="{{'#swipe'.$counter}}" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <h5 class="card-title fw-bold text-uppercase"  style="font-size: 18px;">{{ $apartment->title }}</h5>
                                                @if(App\Http\Controllers\ApartmentController::checkFavorite($apartment->id))
                                                    <i class="bi bi-heart-fill"></i>
                                                @endif
                                            </div>
                                            <div class="d-flex flex-column">
                                                <p class="card-text fw-bold mb-0" style="font-size: 14px">{{ $apartment->roomsNumber }} <span class="text-secondary">Rooms</span></p>
                                                <p class="card-text text-secondary my-2" style="font-size: 14px"><i class="bi bi-geo-alt text-danger"></i> {{ $apartment->city . ' - ' . $apartment->address }}</p>
                                                <p><span class="fw-bold me-2">{{ $apartment->price }} DH</span>per night</p>
                                                @if(App\Http\Controllers\ApartmentController::checkReservation($apartment->id))
                                                <div class="position-absolute top-0 end-0">
                                                    {{-- <i class="bi bi-bookmark-check text-danger fs-2"></i> --}}
                                                    <i class="bi bi-bookmark-check-fill fs-2"></i>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $counter++;
                                @endphp
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection