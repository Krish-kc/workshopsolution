@extends('userinterface.master')

@section('css')

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Work+Sans:wght@800&display=swap');

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box
}

 .containercheck {
    margin: 20px auto;
    max-width: 1000px;
    background-color: white;
    padding: 0
}

.form-control {
    height: 25px;
    width: 150px;
    border: none;
    border-radius: 0;
    font-weight: 800;
    padding: 0 0 5px 0;
    background-color: transparent;
    box-shadow: none;
    outline: none;
    border-bottom: 2px solid #ccc;
    margin: 0;
    font-size: 14px
}

.form-control:focus {
    box-shadow: none;
    border-bottom: 2px solid #ccc;
    background-color: transparent
}

.form-control2 {
    font-size: 14px;
    height: 20px;
    width: 55px;
    border: none;
    border-radius: 0;
    font-weight: 800;
    padding: 0 0 5px 0;
    background-color: transparent;
    box-shadow: none;
    outline: none;
    border-bottom: 2px solid #ccc;
    margin: 0
}

.form-control2:focus {
    box-shadow: none;
    border-bottom: 2px solid #ccc;
    background-color: transparent
}

.form-control3 {
    font-size: 14px;
    height: 20px;
    width: 30px;
    border: none;
    border-radius: 0;
    font-weight: 800;
    padding: 0 0 5px 0;
    background-color: transparent;
    box-shadow: none;
    outline: none;
    border-bottom: 2px solid #ccc;
    margin: 0
}

.form-control3:focus {
    box-shadow: none;
    border-bottom: 2px solid #ccc;
    background-color: transparent
}

p {
    margin: 0
}

img {
    width: 100%;
    height: 100%;
    object-fit: fill
}

.text-muted {
    font-size: 10px
}

.textmuted {
    color: #6c757d;
    font-size: 13px
}

.fs-14 {
    font-size: 14px
}

.btn.btn-primary {
    width: 100%;
    height: 55px;
    border-radius: 0;
    padding: 13px 0;
    background-color: black;
    border: none;
    font-weight: 600
}

.btn.btn-primary:hover .fas {
    transform: translateX(10px);
    transition: transform 0.5s ease
}

.fw-900 {
    font-weight: 900
}

::placeholder {
    font-size: 12px
}

.ps-30 {
    padding-left: 30px
}

.h4 {
    font-family: 'Work Sans', sans-serif !important;
    font-weight: 800 !important
}

.textmuted,
h5,
.text-muted {
    font-family: 'Poppins', sans-serif
}
.khalti{
    background-color: purple;
    color: #fff;
    width: 100%;
    height: 55px;
    border-radius: 0;
    padding: 13px 0;
    border: none;
    font-weight: 600;
    margin-top: 5px;
}




</style>

@endsection

@section('content')


<div class="containercheck">
    <div class="row m-0">
        <div class="col-lg-7 pb-5 pe-lg-5">
            <div class="row">
                <div class="col-12 p-5"> <img src="{{ asset('vehicle_image/' . $booking->vehicle->image) }}" alt=""> </div>
                <div class="row m-0 bg-light">
                    <div class="col-md-4 col-6 ps-30 pe-0 my-4">
                        <p class="text-muted">Kilometer travelled</p>
                        <p class="h5">25000<span class="ps-1">Km</span></p>
                    </div>
                    <div class="col-md-4 col-6 ps-30 my-4">
                        <p class="text-muted">Transmission</p>
                        <p class="h5 m-0">Manual</p>
                    </div>
                    <div class="col-md-4 col-6 ps-30 my-4">
                        <p class="text-muted">Drive unit</p>
                        <p class="h5 m-0">Front</p>
                    </div>
                    <div class="col-md-4 col-6 ps-30 my-4">
                        <p class="text-muted">Body</p>
                        <p class="h5 m-0">Coupe</p>
                    </div>
                    <div class="col-md-4 col-6 ps-30 my-4">
                        <p class="text-muted">Color</p>
                        <p class="h5 m-0">White</p>
                    </div>
                    <div class="col-md-4 col-6 ps-30 my-4">
                        <p class="text-muted">Daily UI</p>
                        <p class="h5 m-0">#002</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 p-0 ps-lg-4">
            <div class="row m-0">
                <div class="col-12 px-4">
                    <div class="d-flex align-items-end mt-4 mb-2">
                        <p class="h4 m-0"><span class="pe-1"></span><span class="pe-1">Payment Details</span><span class="pe-1"></span></p>
                    </div>
                    {{-- @foreach ($booking as $item) --}}


                    <div class="d-flex justify-content-between mb-2">
                        <p class="textmuted">Service Charge</p>
                        <p class="fs-14 fw-bold"><span class="fas fa-dollar-sign pe-1"></span>{{$booking->rate}}</p>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <p class="textmuted">Part Change</p>
                        <p class="fs-14 fw-bold">-<span class="fas fa-dollar-sign px-1"></span>{{$booking->vehicle->part_change}}</p>
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                        <p class="textmuted fw-bold">Total Price</p>
                        <div class="d-flex align-text-top "> <span class="fas fa-dollar-sign mt-1 pe-1 fs-14 "></span><span class="h4">{{$booking->rate}}</span> </div>
                    </div>
                    {{-- @endforeach --}}
                </div>
                <div class="col-12 px-0">
                    {{-- <div class="row bg-light m-0">
                        <div class="col-12 px-4 my-4">
                            <p class="fw-bold">Payment detail</p>
                        </div>
                        <div class="col-12 px-4">
                            <div class="d-flex mb-4"> <span class="">
                                    <p class="text-muted">Card number</p> <input class="form-control" type="text" value="4485 6888 2359 1498" placeholder="1234 5678 9012 3456">
                                </span>
                                <div class=" w-100 d-flex flex-column align-items-end">
                                    <p class="text-muted">Expires</p> <input class="form-control2" type="text" value="01/2020" placeholder="MM/YYYY">
                                </div>
                            </div>
                            <div class="d-flex mb-5"> <span class="me-5">
                                    <p class="text-muted">Cardholder name</p> <input class="form-control" type="text" value="David J.Frias" placeholder="Name">
                                </span>
                                <div class="w-100 d-flex flex-column align-items-end">
                                    <p class="text-muted">CVC</p> <input class="form-control3" type="text" value="630" placeholder="XXX">
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row m-0">
                        <div class="col-12 mb-4 p-0">
                            <div class="btn btn-primary">Pay <span class="fas fa-arrow-right ps-2"></span> </div>
                            <button id="payment-button" class="khalti">Pay with Khalti</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('js')

<script>
var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_dc74e0fd57cb46cd93832aee0a390234",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
                ],
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({amount: 1000});
        }



</script>
@endsection







