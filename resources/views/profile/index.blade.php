@extends('front.gosujin')
@section('title', 'Profile page')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6 ">
    	 <div class="well profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8 " >
                    <h2>Profile</h2>
                    <?php if (Auth::check()) { ?>
                    <p><strong>Nama: </strong>{{ Auth::user()->name }}</p>
                    <p><strong>Email: </strong>{{ Auth::user()->email }}</p>
                    <p><strong>Chart Item: </strong>{{Cart::count()}}</p>
                    <p><strong>Balance: </strong>Rp.{{ Auth::user()->Balance }}</p>
                    <p><strong>Akun di buat pada : </strong>{{ Auth::user()->created_at }}</p>
                    <br><br><br><br><br><br><br><br><br>
                <?php } ?>
                </div>             
    	 </div>                 
		</div>
	</div>
</div>
</div>
@endsection