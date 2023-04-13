<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container shadow rounded bg-white mt-3 border">
        <h5 class="text-danger fw-bold m-1"><span class="text-black">Rent</span>It</h5>
        <div class="row">
            <div class="col-md-3">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="img-thumbnail mt-5" width="150px" src="./img/img1.jpg">
                    <div class="d-flex f-wrap">
                        <img class="img-thumbnail " width="75px" src="./img/img1.jpg">
                        <img class="img-thumbnail " width="75px" src="./img/img1.jpg">
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Add Apartment</h4>
                    </div>
                    <form action="{{route('aprtmentStore')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label>Address</label><input type="text" name="address" class="form-control" placeholder="Inter the apartment Address">
                            </div>
                            <div class="col-md-6">
                                <label>Price</label><input type="number" name="price" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label>Location</label>
                                <select class="form-select">
                                    <option value="" disabled selected>Select</option>
                                    @foreach($variable as $var)
                                    <option value="" name="">{{$var->city}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label>Number of the rooms</label><input type="number" name="roomsNumber" class="form-control"></div>
                            <div class="col-md-12"> <label>Images</label><input type="file" name="image[]" class="form-control" multiple></div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary" type="submit" type="button">Add</button>
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
                        <label>Additional Details</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>