@extends('layouts.app')

@section('content')
  <!-- Banner -->
 @include('layouts.components.banner')
  <!-- Featured Product -->
  <div class="ps-section--features-product ps-section masonry-root pt-100 pb-100">
    <div class="ps-container">
      <div class="ps-section__header mb-50">
        <h3 class="ps-section__title" data-mask="features">- Features Products</h3>
        <ul class="ps-masonry__filter">
          <li class="current"><a href="#" data-filter="*">All <sup>8</sup></a></li>
          <li><a href="#" data-filter=".nike">Nike <sup>1</sup></a></li>
          <li><a href="#" data-filter=".adidas">Adidas <sup>1</sup></a></li>
          <li><a href="#" data-filter=".men">Men <sup>1</sup></a></li>
          <li><a href="#" data-filter=".women">Women <sup>1</sup></a></li>
          <li><a href="#" data-filter=".kids">Kids <sup>4</sup></a></li>
        </ul>
      </div>
      <div class="ps-section__content pb-50">
        <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
          <div class="ps-masonry">
            <div class="grid-sizer"></div>
            <div class="grid-item kids">
              <div class="grid-item__content-wrapper">
                <div class="ps-shoe mb-30">
                  <div class="ps-shoe__thumbnail">
                    <div class="ps-badge"><span>New</span></div>
                    <div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-35%</span></div><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="{{ asset('assets/images/shoe/1.jpg') }}" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                  </div>
                  <div class="ps-shoe__content">
                    <div class="ps-shoe__variants">
                      <div class="ps-shoe__variant normal"><img src="{{ asset('assets/images/shoe/2.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/3.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/4.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/5.jpg') }}" alt=""></div>
                    </div>
                    <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                      <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price">
                        <del>£220</del> £ 120</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item nike">
              <div class="grid-item__content-wrapper">
                <div class="ps-shoe mb-30">
                  <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="{{ asset('assets/images/shoe/2.jpg') }}" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                  </div>
                  <div class="ps-shoe__content">
                    <div class="ps-shoe__variants">
                      <div class="ps-shoe__variant normal"><img src="{{ asset('assets/images/shoe/2.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/3.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/4.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/5.jpg') }}" alt=""></div>
                    </div>
                    <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                      <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item adidas">
              <div class="grid-item__content-wrapper">
                <div class="ps-shoe mb-30">
                  <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="{{ asset('assets/images/shoe/3.jpg') }}" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                  </div>
                  <div class="ps-shoe__content">
                    <div class="ps-shoe__variants">
                      <div class="ps-shoe__variant normal"><img src="{{ asset('assets/images/shoe/2.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/3.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/4.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/5.jpg') }}" alt=""></div>
                    </div>
                    <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                      <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item kids">
              <div class="grid-item__content-wrapper">
                <div class="ps-shoe mb-30">
                  <div class="ps-shoe__thumbnail">
                    <div class="ps-badge ps-badge--sale"><span>-35%</span></div><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="{{ asset('assets/images/shoe/4.jpg') }}" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                  </div>
                  <div class="ps-shoe__content">
                    <div class="ps-shoe__variants">
                      <div class="ps-shoe__variant normal"><img src="{{ asset('assets/images/shoe/2.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/3.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/4.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/5.jpg') }}" alt=""></div>
                    </div>
                    <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                      <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price">
                        <del>£220</del> £ 120</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item men">
              <div class="grid-item__content-wrapper">
                <div class="ps-shoe mb-30">
                  <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="{{ asset('assets/images/shoe/5.jpg') }}" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                  </div>
                  <div class="ps-shoe__content">
                    <div class="ps-shoe__variants">
                      <div class="ps-shoe__variant normal"><img src="{{ asset('assets/images/shoe/2.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/3.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/4.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/5.jpg') }}" alt=""></div>
                    </div>
                    <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                      <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item women">
              <div class="grid-item__content-wrapper">
                <div class="ps-shoe mb-30">
                  <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="{{ asset('assets/images/shoe/6.jpg') }}" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                  </div>
                  <div class="ps-shoe__content">
                    <div class="ps-shoe__variants">
                      <div class="ps-shoe__variant normal"><img src="{{ asset('assets/images/shoe/2.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/3.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/4.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/5.jpg') }}" alt=""></div>
                    </div>
                    <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                      <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item kids">
              <div class="grid-item__content-wrapper">
                <div class="ps-shoe mb-30">
                  <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="{{ asset('assets/images/shoe/7.jpg') }}" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                  </div>
                  <div class="ps-shoe__content">
                    <div class="ps-shoe__variants">
                      <div class="ps-shoe__variant normal"><img src="{{ asset('assets/images/shoe/2.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/3.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/4.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/5.jpg') }}" alt=""></div>
                    </div>
                    <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                      <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item kids">
              <div class="grid-item__content-wrapper">
                <div class="ps-shoe mb-30">
                  <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="{{ asset('assets/images/shoe/8.jpg') }}" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                  </div>
                  <div class="ps-shoe__content">
                    <div class="ps-shoe__variants">
                      <div class="ps-shoe__variant normal"><img src="{{ asset('assets/images/shoe/2.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/3.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/4.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/5.jpg') }}" alt=""></div>
                    </div>
                    <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                      <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Section Offer -->
  <div class="ps-section--offer">
    <div class="ps-column"><a class="ps-offer" href="product-listing.html"><img src="{{ asset('assets/images/banner/home-banner-1.png') }}" alt=""></a></div>
    <div class="ps-column"><a class="ps-offer" href="product-listing.html"><img src="{{ asset('assets/images/banner/home-banner-2.png') }}" alt=""></a></div>
  </div>
  <!-- Top Sales -->
  <div class="ps-section--sale-off ps-section pt-80 pb-40">
    <div class="ps-container">
      <div class="ps-section__header mb-50">
        <h3 class="ps-section__title" data-mask="Sale off">- Hot Deal Today</h3>
      </div>
      <div class="ps-section__content">
        <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                <div class="ps-hot-deal">
                  <h3>Nike DUNK Max 95 OG</h3>
                  <p class="ps-hot-deal__price">Only:  <span>£155</span></p>
                  <ul class="ps-countdown" data-time="December 13, 2017 15:37:25">
                    <li><span class="hours"></span><p>Hours</p></li>
                    <li class="divider">:</li>
                    <li><span class="minutes"></span><p>minutes</p></li>
                    <li class="divider">:</li>
                    <li><span class="seconds"></span><p>Seconds</p></li>
                  </ul><a class="ps-btn" href="#">Order Today<i class="ps-icon-next"></i></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                <div class="ps-hotspot"><a class="point first active" href="javascript:;"><i class="fa fa-plus"></i>
                    <div class="ps-hotspot__content">
                      <p class="heading">JUMP TO HEADER</p>
                      <p>Dynamic Fit Collar en la zona del tobillo que une la parte inferior de la pierna y el pie sin reducir la libertad de movimiento.</p>
                    </div></a><a class="point second" href="javascript:;"><i class="fa fa-plus"></i>
                    <div class="ps-hotspot__content">
                      <p class="heading">JUMP TO HEADER</p>
                      <p>Dynamic Fit Collar en la zona del tobillo que une la parte inferior de la pierna y el pie sin reducir la libertad de movimiento.</p>
                    </div></a><a class="point third" href="javascript:;"><i class="fa fa-plus"></i>
                    <div class="ps-hotspot__content">
                      <p class="heading">JUMP TO HEADER</p>
                      <p>Dynamic Fit Collar en la zona del tobillo que une la parte inferior de la pierna y el pie sin reducir la libertad de movimiento.</p>
                    </div></a><img src="images/hot-deal.png" alt=""></div>
              </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ps-section ps-section--top-sales ps-owl-root pt-80 pb-80">
    <div class="ps-container">
      <div class="ps-section__header mb-50">
        <div class="row">
              <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                <h3 class="ps-section__title" data-mask="BEST SALE">- Top Sales</h3>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                <div class="ps-owl-actions"><a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i>Prev</a><a class="ps-next" href="#">Next<i class="ps-icon-arrow-left"></i></a></div>
              </div>
        </div>
      </div>
      <div class="ps-section__content">
        <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
          <div class="ps-shoes--carousel">
            <div class="ps-shoe">
              <div class="ps-shoe__thumbnail">
                <div class="ps-badge"><span>New</span></div><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="{{ asset('assets/images/shoe/1.jpg') }}" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
              </div>
              <div class="ps-shoe__content">
                <div class="ps-shoe__variants">
                  <div class="ps-shoe__variant normal"><img src="{{ asset('assets/images/shoe/2.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/3.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/4.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/5.jpg') }}" alt=""></div>
                  <select class="ps-rating ps-shoe__rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="2">5</option>
                  </select>
                </div>
                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>
                  <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                </div>
              </div>
            </div>
          </div>
          <div class="ps-shoes--carousel">
            <div class="ps-shoe">
              <div class="ps-shoe__thumbnail">
                <div class="ps-badge"><span>New</span></div>
                <div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-35%</span></div><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="{{ asset('assets/images/shoe/2.jpg') }}" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
              </div>
              <div class="ps-shoe__content">
                <div class="ps-shoe__variants">
                  <div class="ps-shoe__variant normal"><img src="{{ asset('assets/images/shoe/2.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/3.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/4.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/5.jpg') }}" alt=""></div>
                  <select class="ps-rating ps-shoe__rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="2">5</option>
                  </select>
                </div>
                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>
                  <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price">
                    <del>£220</del> £ 120</span>
                </div>
              </div>
            </div>
          </div>
          <div class="ps-shoes--carousel">
            <div class="ps-shoe">
              <div class="ps-shoe__thumbnail">
                <div class="ps-badge"><span>New</span></div><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="{{ asset('assets/images/shoe/3.jpg') }}" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
              </div>
              <div class="ps-shoe__content">
                <div class="ps-shoe__variants">
                  <div class="ps-shoe__variant normal"><img src="{{ asset('assets/images/shoe/2.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/3.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/4.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/5.jpg') }}" alt=""></div>
                  <select class="ps-rating ps-shoe__rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="2">5</option>
                  </select>
                </div>
                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>
                  <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                </div>
              </div>
            </div>
          </div>
          <div class="ps-shoes--carousel">
            <div class="ps-shoe">
              <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="{{ asset('assets/images/shoe/4.jpg') }}" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
              </div>
              <div class="ps-shoe__content">
                <div class="ps-shoe__variants">
                  <div class="ps-shoe__variant normal"><img src="{{ asset('assets/images/shoe/2.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/3.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/4.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/5.jpg') }}" alt=""></div>
                  <select class="ps-rating ps-shoe__rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="2">5</option>
                  </select>
                </div>
                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>
                  <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                </div>
              </div>
            </div>
          </div>
          <div class="ps-shoes--carousel">
            <div class="ps-shoe">
              <div class="ps-shoe__thumbnail">
                <div class="ps-badge"><span>New</span></div><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="{{ asset('assets/images/shoe/5.jpg') }}" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
              </div>
              <div class="ps-shoe__content">
                <div class="ps-shoe__variants">
                  <div class="ps-shoe__variant normal"><img src="{{ asset('assets/images/shoe/2.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/3.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/4.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/5.jpg') }}" alt=""></div>
                  <select class="ps-rating ps-shoe__rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="2">5</option>
                  </select>
                </div>
                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>
                  <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                </div>
              </div>
            </div>
          </div>
          <div class="ps-shoes--carousel">
            <div class="ps-shoe">
              <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="{{ asset('assets/images/shoe/6.jpg') }}" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
              </div>
              <div class="ps-shoe__content">
                <div class="ps-shoe__variants">
                  <div class="ps-shoe__variant normal"><img src="{{ asset('assets/images/shoe/2.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/3.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/4.jpg') }}" alt=""><img src="{{ asset('assets/images/shoe/5.jpg') }}" alt=""></div>
                  <select class="ps-rating ps-shoe__rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="2">5</option>
                  </select>
                </div>
                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>
                  <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Newslatter -->
  <div class="ps-subscribe">
    <div class="ps-container">
      <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
              <h3><i class="fa fa-envelope"></i>Sign up to Newsletter</h3>
            </div>
            <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
              <form class="ps-subscribe__form" action="do_action" method="post">
                <input class="form-control" type="text" placeholder="">
                <button>Sign up now</button>
              </form>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
              <p>...and receive  <span>$20</span>  coupon for first shopping.</p>
            </div>
      </div>
    </div>
  </div>
@endsection