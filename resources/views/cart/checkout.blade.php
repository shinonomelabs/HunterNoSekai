@extends('front.gosujin')
@section('title','Checkout page')
@section('content')
@include('front.popup')
<div class="bungkus" id="blur">
<div class="hero-wrap hero-bread" style="background-image: url('../../../../images/cart.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-0 bread" style="color:#82ae46">Pembayaran</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7 ftco-animate">
                      <form action="#" class="billing-form">
                          <h3 class="mb-4 billing-heading">Billing Details</h3>
                <div class="row align-items-end">
                    <div class="col-md-6">
                  <div class="form-group">
                      <label for="firstname">Firt Name</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
              </div>
              <div class="w-100"></div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="country">Negara</label>
                          <div class="select-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                            <option value="">Indonesia</option>
                          <option value="">jepang</option>
                          <option value="">Europa</option>
                          <option value="">Nort america</option>
                          <option value="">Hongkong</option>
                          <option value="">Rusia</option>
                        </select>
                      </div>
                      </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="col-md-6">
                      <div class="form-group">
                      <label for="streetaddress">Street Address</label>
                    <input type="text" class="form-control" placeholder="House number and street name">
                  </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                    <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
                  </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="col-md-6">
                      <div class="form-group">
                      <label for="towncity">Town / City /Kota</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="postcodezip">Postcode / ZIP /Kode pos *</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="col-md-6">
                  <div class="form-group">
                      <label for="phone">Phone</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="emailaddress">Email Address</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
              </div>
              <div class="w-100"></div>
              <div class="col-md-12">
                  <div class="form-group mt-4">
                                      <div class="radio">
                                        <label class="mr-3"><input type="radio" name="optradio"> Create an Account? </label>
                                        <label><input type="radio" name="optradio"> Ship to different address</label>
                                      </div>
                                  </div>
              </div>
              </div>
            </form><!-- END -->
                  </div>
                  <div class="col-xl-5">
            <div class="row mt-5 pt-3">
                <div class="col-md-12 d-flex mb-5">
                    <div class="cart-detail cart-total p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Cart Total</h3>
                        <<p class="d-flex">
                            <span>Subtotal</span>
                            <span>Rp{{Cart::subtotal()}}</span>
                        </p>
                        <p class="d-flex">
                            <span>Tax</span>
                            <span>Rp{{Cart::tax()}}</span>
                        </p>
                        <p class="d-flex">
                            <span>Ongkir</span>
                            <span>Free</span>
                        </p>
                        <hr>
                        <p class="d-flex total-price">
                            <span>Total</span>
                            <span>Rp{{Cart::total()}}</span>
                        </p>
                              </div>
                </div>
                <div class="col-md-12">
                    <div class="cart-detail p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Metode Pembayaran</h3>
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <div class="radio">
                                             <label><input type="radio" name="optradio" class="mr-2"> Direct Bank Tranfer</label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <div class="radio">
                                             <label><input type="radio" name="optradio" class="mr-2"> Check Payment</label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <div class="radio">
                                             <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <div class="checkbox">
                                             <label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
                                          </div>
                                      </div>
                                  </div>
                                  <p><a href="#" onclick="toggle()" class="btn btn-primary py-3 px-4">Place an order</a></p>
                              </div>
                </div>
            </div>
        </div> <!-- .col-md-8 -->
      </div>
    </div>
  </section>
</div>
@endsection