@extends('layouts.master')
@section('title', 'profile')
@section('content')
    <div style="height:100vh" class="">
        <div class="justify-content-between d-flex p-3">
            <h4 class="text-danger"><span class="text-black">Rent</span>It</h4>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('profile')}}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('apartmentsListdisplay')}}">Apartments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/myFavorite/{{Auth::user()->id}}">Favorite</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/myApartment/{{Auth::user()->id}}">My apartments</a>
                </li>
                <li class="nav-item dropdown dropstart ">
                    <a class="nav-link dropdown-toggle " data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="bi bi-list text-white"></i></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="apartment-details">
            <div class="apartmen-title d-flex justify-content-between">
                <div class="">
                    <h2 class="text-uppercase">{{$apartDetails->title}}</h2>
                    {{-- <div class="">
                        <i class="bi bi-star-fill text-danger"></i>
                        <i class="bi bi-star-fill text-danger"></i>
                        <i class="bi bi-star-fill text-danger"></i>
                        <i class="bi bi-star-half text-danger"></i>
                        <span>189 Review</span>
                    </div> --}}
                    <div >
                        <p><span class="fw-bold">Location :</span> {{$apartDetails->city .' - '.  $apartDetails->address}}</p>
                    </div>
                </div>
                <div class="align-self-end d-flex">
                    <form action="/favorite/{{$apartDetails->id}}" method="POST" id="myForm">
                        @csrf
                        @if(App\Http\Controllers\ApartmentController::checkFavorite($apartDetails->id))
                            <button class="btn text-white bg-danger"><i class="bi bi-heart-fill"></i></button>
                        @else
                        <button class="btn text-white bg-danger"><i class="bi bi-heart"></i></button>
                        @endif
                    </form>
                </div>
            </div>
            @if ($message = Session::get('success')) 
                <div class="alert alert-success d-flex mx-auto mt-2" style="width: 90%;">
                    <p class="m-0">{{ $message }}</p>
                </div>
            @endif
            <div class="d-md-flex mt-3">
                <div class="w-100">
                    <img src="/img/{{$apartDetails->images[0]->image}}"  class="rounded shadow" width="100%">
                </div>
                <div class="w-100 d-flex flex-wrap mt-2 mt-md-0 ps-md-2">
                    <div class="w-50 pe-1 pb-1">
                        <img src="/img/{{$apartDetails->images[1]->image}}"  class="rounded shadow"  width="100%">
                    </div>
                    <div class="w-50 ps-1 pb-1">
                        <img src="/img/{{$apartDetails->images[2]->image}}"  class="rounded shadow"  width="100%">
                    </div>
                    <div class="w-50 pe-1 pt-1">
                        <img src="/img/{{$apartDetails->images[3]->image}}"  class="rounded shadow"  width="100%">
                    </div>
                    <div class="w-50 ps-1 pt-1">
                        <img src="/img/{{$apartDetails->images[4]->image}}"  class="rounded shadow"  width="100%">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-8">
                    <div class="d-flex mt-5 justify-content-between">
                        <p class=""><span class="fw-bold h5">this apaprtment is hosted by</span> {{$apartDetails->user->name}}</p>
                        <div class="rounded-circle  overflow-hidden" style="width: 50px; height:50px;">
                            <img class="w-100" id="image"  src="/img/{{$apartDetails->user->image}}">
                        </div>
                    </div>
                    <div>
                        <p class="small">{{$apartDetails->roomsNumber}}<span class="text-secondary"> Rooms</span> . {{$apartDetails->guestsNumber}}<span class="text-secondary"> Guests</span></p>
                    </div>
                    <hr>
                    <div class="">
                        <h5 class="fw-bold">What this accommodation offers</h5>
                        <div class="">
                            <div class="row mt-4">
                                @foreach($apartDetails->offers as $Offer)
                                    <div class="col-6">
                                        <p>
                                            @if($Offer->offer== 'Wifi')
                                                <i class="bi bi-wifi me-2"></i>
                                            @elseif($Offer->offer== 'Pool')
                                            <i class="bi bi-water me-2"></i>
                                            @elseif($Offer->offer== 'Free parking on site')
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
                                                <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
                                            </svg>
                                            @elseif($Offer->offer== 'air conditioner')
                                            <i class="bi bi-asterisk me-2"></i>
                                            @elseif($Offer->offer== 'accepted animals')
                                            <i class="bi bi-car-front"></i>
                                            @endif
                                            {{$Offer->offer}}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                            {{-- reservation --}}
                <div class=" mt-5 col-12 col-sm-4">
                    <div class="card shadow">
                        <div class="card-header py-3 ">
                            <h5 class="fw-bold me-3">{{$apartDetails->price}} DH<span class="text-secondary fw-normal small">  per night</span></h5>
                        </div>
                        <div class="card-body">
                            <form action="/bookingRequest" method="post">
                                @csrf
                                <input type="number" name="price" value="{{$apartDetails->price}}" class="form-control d-none">
                                <input type="number" name="apartId" value="{{$apartDetails->id}}" class="form-control d-none">
                                    <div class="px-4 py-2">
                                        <label for="">Check in </label>
                                        <input type="date" name="check_in" class="form-control">
                                    </div>
                                    <div class="px-4 ">
                                        <label for="">Check out </label>
                                        <input type="date" name="checkout" class="form-control">
                                    </div>
                                    <hr>
                                    @if(App\Http\Controllers\ApartmentController::checkReservation($apartDetails->id))
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" disabled class="btn border-danger filter_button">Reserved</button>
                                        </div>
                                    @else
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn border-danger filter_button">Reserve</button>
                                    </div>
                                    @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- comment --}}
            <div class="mt-3">
                <h5 class="fw-bold">Comments</h5>
                                                    {{-- dispaly comment --}}
                <div class="row">
                    @foreach($apartComments as $comment)
                        <div class="card mt-sm-3 shadow rounded col-md-5 mx-auto col-12 mt-3 ">
                            <div class="card-body ">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <div class="rounded-circle  overflow-hidden" style="width: 40px; height:40px;">
                                            <img class="w-100" id="image"  src="/img/{{$comment->user->image}}">
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="fw-bold" style="font-size: 14px">{{$comment->user->name}}</h6>
                                            <p class="text-secondary" style="font-size: 12px">{{substr($comment->created_at,0,10)}}</p>
                                        </div>
                                    </div>
                                    @if($comment->user_id == Auth::user()->id)
                                        <form action="/deleteComment/{{$comment->id}}" method="POST">
                                            @csrf 
                                            <button class="btn"><i class="bi bi-x-circle text-danger"></i></button>
                                        </form>
                                    @endif
                                </div>
                                <p>{{$comment->comment}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                                        {{-- Write comment --}}
                <div class="">
                    <div class="card mt-3">
                        <div class="card-header bg-white fw-bold">
                            Leave us a comment
                        </div>
                        <div class="card-body">
                            <form method="POST" action="/apartmentDetails/{{$apartDetails->id}}">
                                @csrf
                                <div class="form-group">
                                    <textarea class="form-control" id="comment" name="comment" placeholder="Write Your Comment Here" rows="5"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-5 d-flex justify-content-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13587.777683918684!2d-8.0015554!3d31.6353721!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1680789122763!5m2!1sfr!2sma" width="800" height="450" class="rounded shadow" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <footer class="">
            <div class="bg-black bg-opacity-75" style="height: 50px">
                <div class="d-flex flex-wrap justify-content-evenly  ms-5 pt-2">
                    <div>
                        <p class="text-white small"><i class="bi bi-whatsapp text-success"></i> +2126666666676</p>
                    </div>
                    <div class="">
                        <p class="text-white small"> <i class="bi bi-envelope text-danger"></i> RentIt@gmail.com</p>
                    </div>
                    <div class="">
                        <p class="text-white small"><i class="bi bi-globe text-info"></i> www.RentIt.ma</p>
                    </div>
            </div>
            </div>
        </footer>
    </div>
@endsection