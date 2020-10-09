@extends('front.gosujin')
@section('title','Cart Page')
@section('content')
@include('front.popup')
<div class="bungkus" id="blur">
      <div class="hero-wrap hero-bread" style="background-image: url('../../../../images/cart.jpg');">
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
              <h1 class="mb-0 bread" style="color:#82ae46">Cart</h1>
            </div>
          </div>
        </div>
      </div>
  
      <section class="ftco-section ftco-cart">
              <div class="container">
                  <div class="row">
                  <div class="col-md-12 ftco-animate">
                      <div class="cart-list">
                          <table class="table">
                              <thead class="thead-primary">
                                <tr class="text-center">
                                  <th>&nbsp;</th>
                                  <th>&nbsp;</th>
                                  <th>Product name</th>
                                  <th>Price</th>
                                  <th>Quantity</th>
                                  <th>Total</th>
                                </tr>
                                @if(session('status'))
                                <div class="alert alert-success">
                                    {{session('status')}}
                                </div>
                            @endif
                            @if(session('error'))
    
                                <div class="alert alert-danger">
                                    {{session('error')}}
                                </div>
                            @endif
                              </thead>
                              <tbody>
                              @foreach($cartItems as $cartItem)
                                <tr class="text-center">
                                  <td class="product-remove"><a href="{{url('/cart/remove')}}/{{$cartItem->rowId}}"><span class="ion-ios-close"></span></a></td>
                                  
                                  <td class="image-prod"><img src="{{url('images',$cartItem->options->img)}}" class="img"></td>
                                  
                                  <td class="product-name">
                                      <h3>{{$cartItem->name}}</h3>
                                      <p>Only {{$cartItem->options->stock}} left</p>
                                  </td>
                                  
                                  <td class="price">Rp{{$cartItem->price}}</td>
                                  
                                  <td class="quantity">
                                    <form action="{{url('cart/update',$cartItem->rowId)}}" method="post" role="form">
                                      <input type="hidden" name="_method" value="PUT">
                                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                                      <input type="hidden" name="proId" value="{{$cartItem->id}}"/>
                                      <div class="input-group mb-3">
                                        <input class="quantity form-control input-number" type="number" value="{{$cartItem->qty}}" name="qty" id="upCart<?php echo $count ?? ''?>"
                                        autocomplete="off" MIN="1" MAX="1000">
                                       <input type="hidden" value="Update">
                                    </div>
                                  </form>
                                 </td>
                                  
                                  <td class="total">Rp{{$cartItem->subtotal}}</td>
                                </tr>
                                @endforeach<!-- END TR-->
                              </tbody>
                            </table>
                        </div>
                  </div>
              </div>
              <div class="row justify-content-end">
                  <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                      <div class="cart-total mb-3">
                          <h3>koupon kode</h3>
                          <p>masukan kode kupon jika punya</p>
                            <form action="#" class="info">
                    <div class="form-group">
                        <label for="">kupon kode</label>
                      <input type="text" class="form-control text-left px-3" placeholder="">
                    </div>
                  </form>
                      </div>
                    
                  </div>
                  <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                      <div class="cart-total mb-3">
                          <h3>Cart Totals</h3>
                          <p class="d-flex">
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
                      <p><a href="{{url('cart/checkout')}}" class="btn btn-primary py-3 px-4">Lanjutkan Pembayrana</a></p>
                  </div>
              </div>
              </div>
          </section>
</div>
  
      
  
    <script>
          $(document).ready(function(){
  
          var quantitiy=0;
             $('.quantity-right-plus').click(function(e){
                  
                  // Stop acting like a button
                  e.preventDefault();
                  // Get the field name
                  var quantity = parseInt($('#quantity').val());
                  
                  // If is not undefined
                      
                      $('#quantity').val(quantity + 1);
  
                    
                      // Increment
                  
              });
  
               $('.quantity-left-minus').click(function(e){
                  // Stop acting like a button
                  e.preventDefault();
                  // Get the field name
                  var quantity = parseInt($('#quantity').val());
                  
                  // If is not undefined
                
                      // Increment
                      if(quantity>0){
                      $('#quantity').val(quantity - 1);
                      }
              });
              
          });
      </script>
@endsection