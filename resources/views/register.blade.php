<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
        <title>Home</title>
        <style>
            .dropdown-hover:hover .dropdown-menu {
            display: block;
                }
        </style>
    </head>
    <body style="background: url(img/img4.jpg);  background-attachment:fixed; background-size:cover;">
        <div style="height:100vh">
            <div class="justify-content-between d-flex p-3">
                <a href="{{route('Home')}}" class="text-decoration-none">
                    <h2 class="text-danger"><span class="text-dark">Rent</span>It</h2>
                </a>
               <a class="btn btn-danger">Login</a>
            </div>
            <div class="ms-5 bg-white" style="width:500px;">
                <div class="">
                    <h3 class="">SIGN <span class="text-danger">UP</span></h3>
                    <form action="" class="p-5">
                        <div>
                            <label for="">NAME</label>
                            <input type="text" class="form-control">
                        </div>
                        <div>
                            <label for="">EMAIL</label>
                            <input type="email" class="form-control">
                        </div>
                        <div>
                            <label for="">PASSWORD</label>
                            <input type="password" class="form-control">
                        </div>
                        <div>
                            <button class="btn btn-danger mt-3">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    </body>
</html>
