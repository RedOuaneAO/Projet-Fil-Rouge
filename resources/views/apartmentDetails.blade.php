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
                    <h2>{{$apartDetails[0]->title}}</h2>
                    <div class="">
                        <i class="bi bi-star-fill text-danger"></i>
                        <i class="bi bi-star-fill text-danger"></i>
                        <i class="bi bi-star-fill text-danger"></i>
                        <i class="bi bi-star-half text-danger"></i>
                        <span>189 Review</span>
                    </div>
                    <div >
                        <p><span class="fw-bold">Location :</span> {{$apartDetails[0]->city .' - '.  $apartDetails[0]->address}}</p>
                    </div>
                </div>
                <div class="align-self-end d-flex">
                    <form action="/favorite/{{$apartDetails[0]->id}}" method="POST" id="myForm">
                        @csrf
                        @if(App\Http\Controllers\ApartmentController::checkFavorite($apartDetails[0]->id))
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
                    <img src="/img/{{$apartDetails[0]->images[0]->image}}"  class="rounded shadow" width="100%">
                </div>
                <div class="w-100 d-flex flex-wrap mt-2 mt-md-0 ps-md-2">
                    <div class="w-50 pe-1 pb-1">
                        <img src="/img/{{$apartDetails[0]->images[1]->image}}"  class="rounded shadow"  width="100%">
                    </div>
                    <div class="w-50 ps-1 pb-1">
                        <img src="/img/{{$apartDetails[0]->images[2]->image}}"  class="rounded shadow"  width="100%">
                    </div>
                    <div class="w-50 pe-1 pt-1">
                        <img src="/img/{{$apartDetails[0]->images[3]->image}}"  class="rounded shadow"  width="100%">
                    </div>
                    <div class="w-50 ps-1 pt-1">
                        <img src="/img/{{$apartDetails[0]->images[4]->image}}"  class="rounded shadow"  width="100%">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-8">
                    <div class="d-flex mt-5 justify-content-between">
                        <div class=""><h4 class="fw-bold">this apaprtment is hosted by</h4></div>
                        <div class=""><img src="/img/face.jpg" width="50" class="rounded-circle" alt=""></div>
                    </div>
                    <div>
                        <p class="small">{{$apartDetails[0]->roomsNumber}}<span class="text-secondary"> Rooms</span> . {{$apartDetails[0]->guestsNumber}}<span class="text-secondary"> Guests</span></p>
                    </div>
                    <hr>
                    <div class="">
                        <h5 class="fw-bold">What this accommodation offers</h5>
                        <div class="">
                            <div class="row mt-4">
                                <div class="col-6">
                                    <p><i class="bi bi-wifi me-2"></i>wifi</p>
                                </div>
                                <div class="col-6">
                                    <p><i class="bi bi-asterisk me-2"></i>Air conditioner</p>
                                </div>
                                <div class="col-6">
                                    <p><i class="bi bi-water me-2"></i>pool</p>
                                </div>
                                <div class="col-6">
                                    <p><i class="bi bi-wifi me-2"></i>wifi</p>
                                </div>
                                <div class="col-6">
                                    <p><i class="bi bi-asterisk me-2"></i>Air conditioner</p>
                                </div>
                                <div class="col-6">
                                    <p><i class="bi bi-water me-2"></i>pool</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            {{-- reservation --}}
                <div class=" mt-5 col-12 col-sm-4">
                    <div class="card shadow">
                        <div class="card-header py-3 ">
                            <h5 class="fw-bold me-3">{{$apartDetails[0]->price}} DH<span class="text-secondary fw-normal small">  per night</span></h5>
                        </div>
                        <div class="card-body">
                            <form action="">
                                    <div class="px-4 py-2">
                                        <label for="">Check in </label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="px-4 ">
                                        <label for="">Check out </label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="px-4 ">
                                        <label for="">Guests </label>
                                        <input type="number" class="form-control">
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn border-danger filter_button">Reserve</button>
                                    </div>
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
                            <form method="POST" action="/apartmentDetails/{{$apartDetails[0]->id}}">
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
            <div class="rounded" id="HostedBy">
                <h5 class="fw-bold">Hosted by</h5>
                <div class="card mt-4 shadow-lg border-0" style="height: 70% ;">
                    <div class="card-body">
                        <div class="d-flex">
                            <img class="rounded-circle" width="50" height="50" src="/img/face1.jpg" alt="User avatar">
                            <div class="ms-3">
                                <h6 class="fw-bold">Owner Name</h6>
                                <p class="text-secondary"></p>
                            </div>
                        </div>
                        <div>
                            <p class="mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus laboriosam eligendi odit quod, quis recusandae. Ratione veritatis quibusdam voluptatibus facere... <u>Read more</u></p>
                            <button class="btn bg-success text-white fw-bold">Contact The Owner</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script>
    let ;
</script>
</body>
</html>