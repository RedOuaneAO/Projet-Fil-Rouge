@extends('layouts.master')
@section('title', 'profile')
@section('content')
    <div style="">
        <div class="justify-content-between d-flex p-2">
            <a href="{{route('Home')}}" class="text-decoration-none ms-5">
                <h2 class="text-danger"><span class="text-dark">Rent</span>It</h2>
            </a>
    </div>
    @if ($message = Session::get('success')) 
        <div class="alert alert-success d-flex m-auto" style="width: 95%;">
            <p class="m-0">{{ $message }}</p>
        </div>
    @endif
    <section class="mt-5 d-flex justify-content-center" style="padding-inline: 6%">
        {{-- login --}}
        <div class="row shadow rounded" style="width:85%;">
            <div class="col-12 col-sm-6 col-md-7 rounded-start px-3" style="background-color: rgb(237, 236, 234)">
                <form action="{{route('logi')}}" method="POST">
                    @csrf
                    <h2 class="text-center my-3">Log<span class="text-danger">In</span></h2>
                    <div class="">
                        <label for="" class="fw-bold">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="">
                        <label for="" class="fw-bold">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <button class="btn btn-primary form-control my-3 fw-bold">Login</button>
                    <div class="mb-3">
                        <a href="{{route('register')}}" class="m-2">I don't have account!</a>
                    </div>
                </form>
            </div>
            <div class="d-sm-inline col-sm-6 col-md-5 d-none rounded-end" style="background:url(./img/img2.jpg);background-size:cover;">
            </div>
        </div>
    </section>
@endsection
