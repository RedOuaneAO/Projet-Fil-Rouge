<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
    <title>Home</title>
</head>
<body>
    <div style="">
        <div class="justify-content-between d-flex p-2">
            <a href="{{route('Home')}}" class="text-decoration-none">
                <h2 class="text-danger"><span class="text-dark">Rent</span>It</h2>
            </a>
            <a class="btn btn-danger p-2">Login</a>
    </div>
    @if ($message = Session::get('success')) 
        <div class="alert alert-success d-flex m-auto" style="width: 95%;">
            <p class="m-0">{{ $message }}</p>
        </div>
    @endif
    <section class="mt-5 d-flex justify-content-center" style="padding-inline: 6%">
        {{-- login --}}
        <div class="row shadow rounded" style="width:95%;">
            <div class="col-7 rounded-end " style="background-color: rgb(237, 236, 234)">
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
                    <button class="btn btn-primary form-control my-3 fw-bold">Login Up</button>
                    <button class="btn bg-white form-control mb-3 fw-bold"><i class="bi bi-google text-danger me-3"></i>Sign Up With Google</button>
                    <a href="{{route('register')}}" class="m-2">I don't have account</a>
                </form>
            </div>
            <div class="col-5 rounded-start" style="background:url(./img/img2.jpg);background-size:cover;">
            </div>
        </div>
    </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
