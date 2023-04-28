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
                <div class="container shadow rounded bg-white border">
                    <h5 class="fw-bold mt-3 ms-3">Update Apartment</h5>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="d-flex text-center p-3 py-5">
                                <div class="d-flex d-md-block flex-wrap justify-content-center" id="preview">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="p-3 py-5">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="text-right">Apartment Details</h4>
                                </div>
                                <form action="{{route('updateApart' ,$apartment->id )}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control" value="{{$apartment->title}}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Number of the guest</label>
                                            <input type="number" name="guestsNumber" class="form-control" value="{{$apartment->guestsNumber}}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Price</label>
                                            <input type="number" name="price" class="form-control" value="{{$apartment->price}}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Number of the rooms</label><input type="number" name="roomsNumber" class="form-control" value="{{$apartment->roomsNumber}}">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12"> 
                                            <label>City</label>
                                            <select class="form-select" name="city" >
                                                <option value="" disabled>Select</option>
                                                <option value="{{$apartment->city}}" selected>{{$apartment->city}}</option>
                                                @foreach($variable as $var)
                                                    <option value="{{$var->city}}">{{$var->city}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-12"><label>Address</label>
                                            <input type="text" class="form-control" name="address" value="{{$apartment->address}}" placeholder="Inter the apartment Address">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Images</label>
                                            <input type="file" name="image[]" id="inputId" class="form-control" multiple>
                                        </div>
                                    </div>
                                    <div class="mt-5 text-center">
                                        <button class="btn btn-primary" type="submit" type="button">Update</button>
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
                                        @foreach ($apartOffers as $apartOffer)
                                        <div>
                                            <input type="checkbox" class="me-2" name="offers[]" value="{{$apartOffer->id}}" {{in_array($apartOffer->id, $apartment->offers->pluck('id')->toArray()) ? 'checked' : ''}} id="check">
                                            <label for="check">{{$apartOffer->offer}}</label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div> <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection