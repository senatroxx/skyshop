<header class="header">
  <div class="header__top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
          <p>460 West 34th Street, 15th floor, New York  -  Hotline: 804-377-3580 - 804-399-3580</p>
        </div>
        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
          <div class="header__actions">
          @guest
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Regiser</a>
          @else
          <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}<i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
              </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </ul>
          </div>
          @endguest
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navigation">
    <div class="container-fluid">
      <div class="navigation__column left">
        <div class="header__logo"><a class="ps-logo" href="{{ route('index') }}"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a></div>
      </div>
      <div class="navigation__column center">
        <ul class="main-menu menu">
          <li class="menu-item menu-item-has-children dropdown"><a href="{{ route('index') }}">Home</a>
            <ul class="sub-menu">
              <li class="menu-item"><a href="index.html">Homepage #1</a></li>
              <li class="menu-item"><a href="#">Homepage #2</a></li>
              <li class="menu-item"><a href="#">Homepage #3</a></li>
            </ul>
          </li>
          <li class="menu-item"><a href="#">Men</a></li>
          <li class="menu-item"><a href="#">Women</a></li>
          <li class="menu-item"><a href="#">Kids</a></li>
          <li class="menu-item"><a href="#">News</a></li>
          <li class="menu-item"><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="navigation__column right">
        <form class="ps-search--header" action="do_action" method="post">
          <input class="form-control" type="text" placeholder="Search Product…">
          <button><i class="ps-icon-search"></i></button>
        </form>
        <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i>20</i></span><i class="ps-icon-shopping-cart"></i></a>
          <div class="ps-cart__listing">
            <div class="ps-cart__content">
              <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="{{ asset('assets/images/cart-preview/1.jpg') }}" alt=""></div>
                <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Amazin’ Glazin’</a>
                  <p><span>Quantity:<i>12</i></span><br><span>Total:<i>£176</i></span></p>
                </div>
              </div>
            </div>
            <div class="ps-cart__total">
              <p>Number of items:<span>36</span></p>
              <p>Item Total:<span>£528.00</span></p>
            </div>
            <div class="ps-cart__footer"><a class="ps-btn" href="cart.html">Check out<i class="ps-icon-arrow-left"></i></a></div>
          </div>
        </div>
        <div class="menu-toggle"><span></span></div>
      </div>
    </div>
  </nav>
</header>