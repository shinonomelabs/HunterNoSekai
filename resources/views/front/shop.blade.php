@extends('front.gosujin')
@section('title','shop page')
@section('content')
<div class="bungkus" id="">
<div class="hero-wrap hero-bread" style="background-image: url('../../../../images/bgs.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2">
          <h1 class="mb-0 bread" style="color:#82ae46">Products</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-10 mb-5 text-center">
                  <ul class="product-category">
                    <li><a href="#" class="active">All</a></li>
                      <?php $cats=DB::table('categories')->get(); ?>
                      @foreach ($cats as $cat)
                        <li><a href="{{url('category',$cat->id)}}">{{ucwords($cat->name)}}</a></li>
                      @endforeach
                  </ul>
              </div>
          </div>
          <div class="row">
            @forelse($products as $product)
			<div class="col-md-6 col-lg-3 ftco-animate shadowcon">
				<div class="product">
					<a href="#" class="img-prod"><img class="img-fluid" src="{{url('images',$product->image)}}" alt="Rudiana">
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
								<?php
                    $wishlistData=DB::table('wishlist')->rightJoin('products','wishlist.pro_id','=','products.id')
                    ->where('wishlist.pro_id','=',$product->id)->get();
                    $count=App\Wishlist_model::where(['pro_id'=>$product->id])->count();
                    if($count=="0"){
                ?>
                <form action="{{route('addtoWishlist')}}" method="post" role="form">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" value="{{$product->id}}" name="pro_id">
                    <button type="submit" class="buy-now d-flex justify-content-center align-items-center mx-1 tombol"><span><i class="ion-ios-cart"></i></span></button>
                </form>
                <?php }else{?>
                    <h3 style="color:green">Already Added to Wishlist <a href="{{url('/wishlist')}}">wishlist</a></h3>
                <?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
		    @empty
		    <h3>No Product</h3>
		    @endforelse
          </div>
          <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>
      </div>
  </section>
</div>
@endsection
