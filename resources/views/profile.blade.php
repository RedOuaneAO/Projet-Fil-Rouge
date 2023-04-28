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
                            <img class="w-100" src="/img/{{Auth::user()->image}}">
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
                    <div class="container shadow rounded bg-white border">
                        <h5 class="fw-bold mt-3 ms-3">Profile</h5>
                            <form action="updateProfile/{{Auth::user()->id}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                            <div class="d-md-flex justify-content-evenly my-5">
                                <div class="col-md-5 shadow border rounded">
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
                                                    <option value="Male" {{ Auth::user()->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                                    <option value="Female" {{ Auth::user()->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12"><label>Phone Number</label><input type="tel" name="phone" class="form-control" value="{{Auth::user()->phone}}" placeholder="Add your Phone Number"></div>
                                            <div class="col-md-12"><label>Email</label><input type="email" name="email" class="form-control" value="{{Auth::user()->email}}"></div>
                                            <div class="col-md-12"><label>Cover</label><input type="file" id="imgInput" name="image"  class="form-control"/></div>
                                            
                                        </div>
                                    </div>
                                    <div class="my-2 text-center">
                                        <button class="btn btn-outline-danger" type="submit">Save Changes</button>
                                    </div>
                                </form>
                                </div>
                                <div class="col-md-5 mt-3 mt-md-0 shadow border rounded">
                                    <div class="p-3 pt-5">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-right">Password Update</h4>
                                        </div>
                                        <form action="updatePassword/{{Auth::user()->id}}" method="POST">
                                            @method('put')
                                            @csrf
                                            <div class="col-md-12">
                                                <label>Old Password</label>
                                                <input type="password" class="form-control" name="old_password">
                                            </div> <br>
                                            <div class="col-md-12">
                                                <label>New Password</label>
                                                <input type="password" class="form-control" name="password">
                                            </div> <br>
                                            <div class="col-md-12">
                                                <label>Confirm Password</label>
                                                <input type="password" class="form-control" name="confirm_pass">
                                            </div>
                                            <div class="my-2 mb-0 text-center">
                                                <button class="btn btn-outline-danger" type="submit">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection