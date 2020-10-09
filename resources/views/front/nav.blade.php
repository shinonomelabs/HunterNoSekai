<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{route('home')}}">Wastrore</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Home</a></li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
          <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="{{route('shop')}}">Shop</a>
            <a class="dropdown-item" href="{{route('cart')}}">Cart</a>
            <a class="dropdown-item" href="checkout.html">Checkout</a>
          </div>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{route('wishlist')}}">Whishlist</a></li>
          <?php if (Auth::check()) { ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="{{route('profil')}}">Profile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Log out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                  </div>
            </li>
          <?php }else{ ?>
            <li class="nav-item"><a class="nav-link" href="{{url('/login')}}">Login</a></li>
          <?php }?>
          <li class="nav-item cta cta-colored"><a href="{{route('cart')}}" class="nav-link"><span class="icon-shopping_cart"></span>[{{Cart::count()}}]</a></li>

        </ul>
      </div>
    </div>
  </nav>