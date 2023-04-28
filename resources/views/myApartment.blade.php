@extends('layouts.master')
@section('title', 'profile')
@section('content')
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
                <div class="mx-auto p-3">
                    <div class="d-flex justify-content-center">
                        <h1>Welcome</h1>
                    </div>
                </div>
                <div class=" mt-4">
                    @if(isset($message))
                    <div class="d-flex justify-content-evenly">
                        <p>{{ $message }}</p>
                    </div>
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
                                                    <a href="/deleteApartment/{{$apartment->id}}" class="btn"><i class="bi bi-x-circle text-danger"></i></a>
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
                    {{-- <div class="card shadow mb-4">
                        <div class="card-header py-3 ">
                            <h6 class="m-0 fw-bold text-primary">Reserved Apartments</h6>
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
                                                    <a href="/deleteApartment/{{$apartment->id}}" class="btn"><i class="bi bi-x-circle text-danger"></i></a>
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
                    </div> --}}
                @endif
                </div>
            </div>
        </div>
    </div>
@endsection