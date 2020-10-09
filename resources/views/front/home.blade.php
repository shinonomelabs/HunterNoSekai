@extends('front.gosujin')
@section('content')
	<div class="bungkus" id="">


	<section class="ftco-section">
	<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
		<div class="col-md-12 heading-section text-center ftco-animate">
			<span class="subheading">Produk Terbaru</span>
		<h2 class="mb-4">Perpustakaan Online</h2>
		<p>Membaca Buku 1000x Lebih Baik dari pada menonton tutorial</p>
		</div>
	</div>   		
	</div>
	<div class="container maxukuran">
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
	</div>
	</section>
	


	<hr>

	<section class="ftco-section ftco-partner">
	<div class="container">
		<div class="row">
			<div class="col-sm ftco-animate">
				<a href="#" class="partner"><img src="{{url('images/partner-1.png')}}" class="img-fluid" alt="Colorlib Template"></a>
			</div>
			<div class="col-sm ftco-animate">
				<a href="#" class="partner"><img src="{{url('images/partner-2.png')}}" class="img-fluid" alt="Colorlib Template"></a>
			</div>
			<div class="col-sm ftco-animate">
				<a href="#" class="partner"><img src="{{url('images/partner-3.png')}}" class="img-fluid" alt="Colorlib Template"></a>
			</div>
			<div class="col-sm ftco-animate">
				<a href="#" class="partner"><img src="{{url('images/partner-4.png')}}" class="img-fluid" alt="Colorlib Template"></a>
			</div>
			<div class="col-sm ftco-animate">
				<a href="#" class="partner"><img src="{{url('images/partner-5.png')}}" class="img-fluid" alt="Colorlib Template"></a>
			</div>
		</div>
	</div>
	</section>
	</div>
	
@endsection
