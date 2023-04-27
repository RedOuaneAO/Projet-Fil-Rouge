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
    <section class="container mt-4">
        <div class="d-flex justify-content-between  mb-5">
            <div class="d-flex flex-row align-items-center">
                <h4 class="mt-1">REQUEST TO BOOK</h4>
            </div>
            <a href="#" class="btn filter_button border-danger">Cancel</a>
        </div>
        <div class="row ">
            <div class="col-md-8">
                <div class="w-75 mx-auto mx-md-0">
                    <label>check-in</label>
                    <input type="date" class="form-control" value="{{$check_in}}" disabled>
                    <label>checkout</label>
                    <input type="date" class="form-control" value="{{$checkout}}" disabled>
                </div>
                <form role="form" 
                action="{{ route('stripe.post') }}" 
                method="post" 
                class="require-validation"
                data-cc-on-file="false"
                data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                id="payment-form">
                @csrf
                <div class="w-75 row mx-auto mx-md-0">
                    <h4 class="mt-3">Payment Details :</h4>
                    <input type="number" class="form-control d-none" name="price" value="{{$price}}">
                    <input type="date" class="form-control d-none" name="check_in" value="{{$check_in}}">
                    <input type="date" class="form-control d-none" name="checkout" value="{{$checkout}}">
                        <div class="col-12">
                            <label for="">Name on Card</label>
                            <input type="text" class="form-control" name="card_Name" placeholder="Name on Card">
                        </div>
                        <div class="col-12">
                            <label for="">Card Number</label>
                            <input type="number" class="form-control" name="card_Number" placeholder="****    ****    ****    ****">
                        </div>
                        <div class="col-4">
                            <label for="">Expiration Month</label>
                            <input type="number" class="form-control" name="Exp_Month" placeholder='MM' size='2'>
                        </div>
                        <div class="col-4">
                            <label for="">Expiration Year</label>
                            <input type="number" class="form-control" name="Exp_Year" placeholder='YYYY' size='4'>
                        </div>
                        <div class="col-4">
                            <label for="">CVV</label>
                            <input type="number" class="form-control" name="Cvv" placeholder='ex. 311' size='4'>
                        </div>
                        <div>
                            <button class="btn filter_button form-control mt-3 border-danger">Reserve</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 card shadow h-50 my-md-0 my-4">
                <div class="card-header">
                    <h6>123<span> DH per night</span></h6>
                </div>
                <div class="card-body">
                    <div>
                        <h6 for="" class="fw-bold">apartment title : <span class="fw-normal"> marrakech apartment</span></h6><br>
                        <h6 for="" class="fw-bold">apartment location : <span class="fw-normal"> marrakech</span></h6><br>
                        <h6 for="" class="fw-bold">number of the guest : <span class="fw-normal"> 3 Guests</span></h6><br>
                    </div>
                    <hr>
                    <div>
                        <h6 for="" class="fw-bold"> 3 <span class="fw-normal">Night</span></h6>
                        <h4>Total : <span>123</span> DH</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-sm-4">
                <h5 class="fw-bold">Ground rules</h5>
                <h5>We ask every guest to remember a few simple things about what makes a great guest.</h5>
                <ul class="small">
                    <li>Follow the apartment rules</li>
                    <li>Treat your Host’s apartment like your own</li>
                </ul>
            </div>

        </div>
    </section>
</body>
</html>





