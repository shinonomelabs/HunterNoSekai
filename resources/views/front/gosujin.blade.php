<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Wastrore | Best Book Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/icon32.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('rudi/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('rudi/css/animate.css')}}">   
    <link rel="stylesheet" href="{{asset('rudi/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('rudi/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('rudi/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('rudi/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('rudi/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('rudi/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('rudi/css/jquery.timepicker.css')}}">    
    <link rel="stylesheet" href="{{asset('rudi/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('rudi/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('rudi/css/style.css')}}">
  </head>
  <body class="goto-here">

    @include('front.nav')
    @yield('content')
    @include('front.foot')
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('rudi/js/jquery.min.js')}}"></script>
  <script src="{{asset('rudi/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('rudi/js/popper.min.js')}}"></script>
  <script src="{{asset('rudi/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('rudi/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('rudi/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('rudi/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('rudi/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('rudi/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('rudi/js/aos.js')}}"></script>
  <script src="{{asset('rudi/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('rudi/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('rudi/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('rudi/js/google-map.js')}}"></script>
  <script src="{{asset('rudi/js/main.js')}}"></script>
  <script src="{{asset('rudi/js/loaderrudi.js')}}"></script>


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
  <script type="text/javascript">
    

    function toggle()
    {
      alert('item berhasil di tambahkan');
    }
    

    </script>
    <script type="text/javascript">
      function toggle(){
        var blur = document.getElementById('blur');
        blur.classList.toggle('active');
        var popup = document.getElementById('popup');
        popup.classList.toggle('active');
      }
    </script>
    
  </body>
</html>