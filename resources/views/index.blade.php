<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <title>Document</title>
</head>
<body>
    <div class="row container">
        <div class="col-1 col-sm-2  shadow">
            <div class="d-flex flex-wrap mt-5">
                <img src="./img/face.jpg" width="90px" class="rounded-circle" alt="">
                <div class="d-block">
                    <span class="fw-bold">User Name</span>
                    <span>UserEmail@gmail.com</span>
                </div>
            </div>
            <div class="mt-4">
                <div class="mb-3">
                    <a class="btn"><i class="bi bi-house me-2"></i>Home</a>
                </div>
                <div class="mb-3">
                    <a class="btn"><i class="bi bi-plus-circle me-2"></i>Add Apartment</a>
                </div>
                <div class="mb-3">
                    <a class="btn"><i class="bi bi-person-circle me-2"></i>Profile</a>
                </div>
                <div class="mb-3">
                    <a class="btn"><i class="bi bi-box-arrow-left me-2"></i>Logout</a>
                </div>
            </div>
        </div>
        <div class="col-10 col-sm-10 ">
            {{-- <div class="input-group my-3 d-flex justify-content-center">
                <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
            </div> --}}
            <select class="form-select my-3">
                <option selected>Filter</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            <div class="d-flex justify-content-evenly flex-wrap">
                <a href="{{route('apartmentDetails')}}" class="text-decoration-none">
                    <div class=" mb-4 cardd">
                      <div class="card border-0" style="width: 18rem;">
                        <img src="./img/img1.jpg" class="card-img-top rounded" alt="...">
                        <div class="card-body">
                          <h5 class="card-title fw-bold">Card title</h5>
                          <p class="card-text text-secondary">Some quick example text</p>
                          <p class="card-text text-secondary">Marrakech</p>
                          <p><span class="fw-bold me-2">1200DH</span>par nuit</p>
                        </div>
                      </div>
                    </div>
                </a>
                <div class=" mb-4 cardd">
                  <div class="card border-0" style="width: 18rem;">
                    <img src="./img/img2.jpg" class="card-img-top rounded" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Card title</h5>
                      <p class="card-text text-secondary">Some quick example text</p>
                      <p class="card-text text-secondary">Agadir</p>
                      <p><span class="fw-bold me-2">1500DH</span>par nuit</p>
                    </div>
                  </div>
                </div>
                <div class=" mb-4 cardd">
                  <div class="card border-0" style="width: 18rem;">
                    <img src="./img/img3.jpg" class="card-img-top rounded" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Card title</h5>
                      <p class="card-text text-secondary">Some quick example text</p>
                      <p class="card-text text-secondary">Casablanca</p>
                      <p><span class="fw-bold me-2">2000DH</span>par nuit</p>
                    </div>
                  </div>
                </div>
                <div class=" mb-4 cardd">
                  <div class="card border-0" style="width: 18rem;">
                    <img src="./img/img1.jpg" class="card-img-top rounded" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Card title</h5>
                      <p class="card-text text-secondary">Some quick example text</p>
                      <p class="card-text text-secondary">Marrakech</p>
                      <p><span class="fw-bold me-2">1200DH</span>par nuit</p>
                    </div>
                  </div>
                </div>
                <div class=" mb-4 cardd">
                  <div class="card border-0" style="width: 18rem;">
                    <img src="./img/img2.jpg" class="card-img-top rounded" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Card title</h5>
                      <p class="card-text text-secondary">Some quick example text</p>
                      <p class="card-text text-secondary">Agadir</p>
                      <p><span class="fw-bold me-2">1500DH</span>par nuit</p>
                    </div>
                  </div>
                </div>
                <div class=" mb-4 cardd">
                  <div class="card border-0" style="width: 18rem;">
                    <img src="./img/img3.jpg" class="card-img-top rounded" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Card title</h5>
                      <p class="card-text text-secondary">Some quick example text</p>
                      <p class="card-text text-secondary">Casablanca</p>
                      <p><span class="fw-bold me-2">2000DH</span>par nuit</p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>