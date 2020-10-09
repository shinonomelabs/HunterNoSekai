@extends('front.gosujin')
@section('title','wishlist page')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('../../../../images/cart.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-0 bread" style="color:#82ae46">wishlist</h1>
        </div>
      </div>
    </div>
  </div>

  <?php
  if (isset($msg)){
      echo $msg;
  }
  ?>
  <section class="ftco-section ftco-cart">
          <div class="container">
              <div class="row">
              <div class="col-md-12 ftco-animate">
                  <div class="cart-list">
                      <table class="table">
                          <thead class="thead-primary">
                            <tr class="text-center">
                              <th>&nbsp;</th>
                              <th>Product List</th>
                              <th>&nbsp;</th>
                              <th>Price</th>
                              <th>Quantity</th>
                              <th>Total</th>
                            </tr>
                          </thead>
                          <?php
                            if($products->isEmpty()) {?>
                            <h3>Tidak ada barang di wishlist</h3>
                            <?php }else { ?>
                           @foreach($products as $product)
                          <tbody>
                            <tr class="text-center">
                              <td class="product-remove"><a href="{{url('/')}}/removeWishList/{{$product->id}}"><span class="ion-ios-close"></span></a></td>
                              
                              <td class="image-prod"><img src="{{url('images',$product->image)}}" class="img"></td>
                              
                              <td class="product-name">
                                  <h3>{{$product->pro_name}}</h3>
                                  <p>{{$product->pro_info}}</p>
                              </td>
                              
                              <td class="price">Rp.{{$product->pro_price}}</td>
                              
                              <td class="quantity">
                                  <div class="input-group mb-3">
                                   <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                                </div>
                            </td>
                            </tr><!-- END TR-->
                          </tbody>
                          @endforeach 
                        <?php } ?>
                        </table>
                    </div>
              </div>
          </div>
          </div>
      </section>
@endsection