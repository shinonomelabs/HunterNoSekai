@extends('front.gosujin')
@section('title','Detail Page')
@include('front.popup')
@section('content')
<div class="bungkus" id="">
<div class="hero-wrap hero-bread" style="background-image: url('../../../../images/bgs.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-0 bread" style="color: #82ae46">Wastore</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section">
      <div class="container">
          <div class="row">
            @foreach ($products as $product)
              <div class="col-lg-6 mb-5 ftco-animate">
                  <a href="{{url('images',$product->image)}}" class="image-popup"><img src="{{url('images',$product->image)}}" class="img-fluid" alt="Colorlib Template"></a>
              </div>
              <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                  <h3>{{$product->pro_name}}</h3>
                  <div class="rating d-flex">
                          <p class="text-left mr-4">
                              <a href="#" class="mr-2">5.0</a>
                              <a href="#"><span class="ion-ios-star-outline"></span></a>
                              <a href="#"><span class="ion-ios-star-outline"></span></a>
                              <a href="#"><span class="ion-ios-star-outline"></span></a>
                              <a href="#"><span class="ion-ios-star-outline"></span></a>
                              <a href="#"><span class="ion-ios-star-outline"></span></a>
                          </p>
                          <p class="text-left mr-4">
                              <a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
                          </p>
                          <p class="text-left">
                              <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
                          </p>
                      </div>
                  <p class="price"><span>RP {{$product->spl_price}}</span></p>
                  <p>{{$product->pro_info}}</p>
                      <div class="row mt-4">
                          <div class="col-md-6">
                              <div class="form-group d-flex">
                         </div>
                          </div>
                          <div class="w-100"></div>
                          <div class="input-group col-md-6 d-flex mb-3">
                   <span class="input-group-btn mr-2">
                      <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                     <i class="ion-ios-remove"></i>
                      </button>
                      </span>
                   <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                   <span class="input-group-btn ml-2">
                      <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                       <i class="ion-ios-add"></i>
                   </button>
                   </span>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                    <p style="color: #000;">{{$product->stock}} Tersedia</p>
                </div>
            </div>
            <p><a href="{{url('cart/addItem',$product->id)}}" onclick="mso()" class="btn btn-black py-3 px-5">Add to Cart</a></p>
              </div>
            @endforeach
          </div>
      </div>
  </section>

  <section class="ftco-section">
      <div class="container">
              <div class="row justify-content-center mb-3 pb-3">
        <div class="col-md-12 heading-section text-center ftco-animate">
          <h2 class="mb-4">Related Products</h2>
        </div>
      </div>   		
      </div>
      <div class="container prods">
          <div class="row">
            @foreach($prods as $product)
              <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="product">
                      <a href="#" class="img-prod"><img class="img-fluid" src="{{url('images',$product->image)}}" alt="Colorlib Template">
                          <span class="status">{{$product->pro_disc}}</span>
                          <div class="overlay"></div>
                      </a>
                      <div class="text py-3 pb-4 px-3 text-center">
                          <h3><a href="#">{{$product->pro_name}}</a></h3>
                          <div class="d-flex">
                              <div class="pricing">
                                  <p class="price"><span class="mr-2 price-dc">Rp {{$product->pro_price}}</span><span class="price-sale">Rp {{$product->spl_price}}</span></p>
                              </div>
                          </div>
                          <div class="bottom-area d-flex px-3">
                              <div class="m-auto d-flex">
                                  <a href="{{url('productdetail',$product->id)}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                      <span><i class="ion-ios-menu"></i></span>
                                  </a>
                                  <a href="{{url('cart/addItem',$product->id)}}" onclick="toggle()" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                      <span><i class="ion-ios-cart"></i></span>
                                  </a>
                                  <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                      <span><i class="ion-ios-heart"></i></span>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
		    @endforeach
          </div>
      </div>
  </section>
</div>
@endsection
