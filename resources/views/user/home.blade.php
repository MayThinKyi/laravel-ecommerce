@extends('user.layouts.master')



 @if(session('loginMsg'))
                                <div style="margin: 0 100px;width:40%" class="mx-auto text-black alert alert-danger alert-dismissible fade show" role="alert">
                                  <p>{{session('loginMsg')}}</p>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
   @endif

@section('cartCount')
   {{Auth::user() ?count($carts) :0}}
@endsection
{{--
@section('myContent')
<!-- Hero Section Begin
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="{{asset('user/img/hero/hero-1.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Summer Collection</h6>
                                <h2>Fall - Winter Collections 2030</h2>
                                <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                commitment to exceptional quality.</p>
                                <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="{{asset('user/img/hero/hero-2.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Summer Collection</h6>
                                <h2>Fall - Winter Collections 2030</h2>
                                <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                commitment to exceptional quality.</p>
                                <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Banner Section Begin -->
    <section class="banner spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-4">
                    <div class="banner__item">
                        <div class="banner__item__pic">
                            <img src="{{asset('user/img/banner/banner-1.jpg')}}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Clothing Collections 2030</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner__item banner__item--middle">
                        <div class="banner__item__pic">
                            <img src="{{asset('user/img/banner/banner-2.jpg')}}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Accessories</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner__item banner__item--last">
                        <div class="banner__item__pic">
                            <img src="{{asset('user/img/banner/banner-3.jpg')}}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Shoes Spring 2030</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Best Sellers</li>
                    <!--<li data-filter=".new-arrivals">New Arrivals</li>
                        <li data-filter=".hot-sales">Hot Sales</li>-->
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{route('user#shop')}}">

                    <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{asset('user/img/product/product-1.jpg')}}">
                                </div>
                            </a>
                             <div class="product__item__text">
                                    <a href="{{route('user#shop')}}" class="">
                                        <h5>NikeCourt Legacy</h5>
                                    </a>
                                    <p class="color">2 Colors </p>
                                    <p class="price">16000 Kyats</p>
                            </div>
                </div></div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{route('user#shop')}}">

                    <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{asset('user/img/product/product-2.jpg')}}">
                                </div>
                            </a>
                             <div class="product__item__text">
                                    <a href="{{route('user#shop')}}" class="">
                                        <h5>Piqué Biker Jacket</h5>
                                    </a>
                                    <p class="color">2 Colors </p>
                                    <p class="price">9000 Kyats</p>
                            </div>
                </div></div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{route('user#shop')}}">

                    <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{asset('user/img/product/product-9.jpg')}}">
                                </div>
                            </a>
                             <div class="product__item__text">
                                    <a href="{{route('user#shop')}}" class="">
                                        <h5>Nike Dri-FIT</h5>
                                    </a>
                                    <p class="color">2 Colors </p>
                                    <p class="price">23000 Kyats</p>
                            </div>
                </div></div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{route('user#shop')}}">

                    <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{asset('user/img/product/product-5.jpg')}}">
                                </div>
                            </a>
                             <div class="product__item__text">
                                    <a href="{{route('user#shop')}}" class="">
                                        <h5>NOCTA</h5>
                                    </a>
                                    <p class="color">2 Colors </p>
                                    <p class="price">13000 Kyats</p>
                            </div>
                </div></div>


            </div>
        </div>
    </section>
    <!-- Product Section End -->
    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories__text">
                        <h2>Clothings Hot <br /> <span>Shoe Collection</span> <br /> Accessories</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories__hot__deal">
                        <img src="{{asset('user/img/product-sale.png')}}" alt="">
                        <div class="hot__deal__sticker">
                            <span>Sale Of</span>
                            <h5>$29.99</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="categories__deal__countdown">
                        <span>Deal Of The Week</span>
                        <h2>Multi-pocket Chest Bag Black</h2>
                        <div class="categories__deal__countdown__timer" id="countdown">
                            <div class="cd-item">
                                <span>3</span>
                                <p>Days</p>
                            </div>
                            <div class="cd-item">
                                <span>1</span>
                                <p>Hours</p>
                            </div>
                            <div class="cd-item">
                                <span>50</span>
                                <p>Minutes</p>
                            </div>
                            <div class="cd-item">
                                <span>18</span>
                                <p>Seconds</p>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

@endsection
--}}
@section('myContent')
  <main id="contents">
    <section id="main-banner" class="banner">
      <div class="banner__container">
        <div class="banner__item">
          <div class="banner__wrapper">
            <video class="banner__video" src="{{asset('user/index/videos/videos_main-banner.webm')}}" type="video/webm"
              loop muted="muted" playsinline="playsinline" preload="auto"
              autoplay></video>
          </div>
          <div class="banner__caption">
            <p class="banner__title">The perfect gift? A challenge they can't resist.</p>
            <a href="{{route('user#shop')}}" class="banner__btn">Shop</a>
          </div>
          <a href="#" class="banner__link"></a>
        </div>
      </div>
    </section>
    <section id="gear-up" class="slidelist">
      <header class="slidelist__header">
        <h2 class="section-title">Gear Up</h2>
        <a href="{{route("user#shop")}}">View All</a>
      </header>
      <div class="slidelist__listwrapper">
        <ul class="slidelist__list">
          <li class="slidelist__item">
            <a href="#" class="item__wrapper">
              <img src="{{asset('user/index/images/gear-up/air-zoom-pegasus-37-air-chaz-bear-running-shoe-W8SQqF.jpg')}}" alt="product"
                class="item__img">
              <div class="item__info">
                <div class="item__desc">
                  <h4 class="item__title">Nike Air  37 A.I.R. Chaz Bear</h4>
                  <p class="item__category">Running Shoe</p>
                </div>
                <span class="item__price">£104.95</span>
              </div>
            </a>
          </li>
          <li class="slidelist__item">
            <a href="#" class="item__wrapper">
              <img src="{{asset('user/index/images/gear-up/dri-fit-sparkle-tie-training-top-XtDQKk.jpg')}}" alt="product" class="item__img">
              <div class="item__info">
                <div class="item__desc">
                  <h4 class="item__title">Nike Dri-FIT</h4>
                  <p class="item__category">Women's Sparkle Tie Training Top</p>
                </div>
                <span class="item__price">£31.95</span>
              </div>
            </a>
          </li>
          <li class="slidelist__item">
            <a href="#" class="item__wrapper">
              <img src="{{asset('user/index/images/gear-up/air-zoom-alphafly-next-eliud-kipchoge-racing-shoe-jm0J47.jpg')}}" alt="product"
                class="item__img">
              <div class="item__info">
                <div class="item__desc">
                  <h4 class="item__title">Nike Air Zoom Alphafly </h4>
                  <p class="item__category">Women's Racing Shoe</p>
                </div>
                <span class="item__price">£259.95</span>
              </div>
            </a>
          </li>

        </ul>
        <div class="slidelist__btns">

      </div>

    </section>
    <section id="top-gifts" class="banner twin-banner">
      <h2 class="section-title">Top Gifts</h2>
      <div class="banner__container">
        <figure class="banner__item">
          <div class="banner__img-wrapper">
            <img src="{{asset('user/index/images/top-gifts/nike-just-do-it.jpeg')}}" alt="for kid" class="banner__img">
          </div>
          <figcaption class="banner__caption banner__caption--inner">
            <p class="banner__title banner__title--white">For Little Players</p>
            <a href="#" class=" banner__btn--white">Shop Kids'</a>
          </figcaption>
          <a href="#" class="banner__link"></a>
        </figure>
        <figure class="banner__item">
          <div class="banner__img-wrapper">
            <img src="{{asset('user/index/images/top-gifts/force.jpg')}}" alt="for player" class="banner__img">
          </div>
          <figcaption class="banner__caption banner__caption--inner">
            <p class="banner__title banner__title--white">For Top Players</p>
            <a href="#" class=" banner__btn--white">Shop</a>
          </figcaption>
          <a href="#" class="banner__link"></a>
        </figure>
      </div>
    </section>
    <section id="trending-now" class="slidelist">
      <header class="slidelist__header">
        <h2 class="section-title">Trending Now</h2>
      </header>
      <div class="slidelist__listwrapper">
        <ul class="slidelist__list2">
            <li class="slidelist__item">
                <a href="#" class="item__wrapper">
                  <img src="{{asset('user/index/images/gear-up/one-leggings-vdMb56.jpg')}}" alt="product" class="item__img">
                  <div class="item__info">
                    <div class="item__desc">
                      <h4 class="item__title">Nike One</h4>
                      <p class="item__category">Women's Leggings</p>
                    </div>
                    <span class="item__price">£44.95</span>
                  </div>
                </a>
            </li>
            <li class="slidelist__item">
                <a href="#" class="item__wrapper">
                  <img src="{{asset('user/index/images/gear-up/alpha-ultrabreathe-high-support-sports-bra-8fx3s6.jpg')}}" alt="product"
                    class="item__img">
                  <div class="item__info">
                    <div class="item__desc">
                      <h4 class="item__title">Nike Alpha UltraBreathe</h4>
                      <p class="item__category">Women's High-Support Sports Bra</p>
                    </div>
                    <span class="item__price">£47.95</span>
                  </div>
                </a>
            </li>

              <li class="slidelist__item">
                <a href="#" class="item__wrapper">
                  <img src="{{asset('user/index/images/gear-up/windrunner-running-jacket-Hq3BKg.jpg')}}" alt="product" class="item__img">
                  <div class="item__info">
                    <div class="item__desc">
                      <h4 class="item__title">Nike Windrunner</h4>
                      <p class="item__category">Men's Running Jacket</p>
                    </div>
                    <span class="item__price">£89.95</span>
                  </div>
                </a>
              </li>
        </ul>

      </div>

    </section>
    <section id="just-in" class="banner">
      <h2 class="section-title">Just In</h2>
      <div class="banner__container">
        <figure class="banner__item">
          <div class="banner__img-wrapper">
            <img src="{{asset("user/index/images/just-in/nike-just-do-it.jpg")}}" alt="Air Jordan 11 'Jubilee'" class="banner__img">
          </div>
          <figcaption class="banner__caption banner__caption--inner">
            <div class="caption--wrapper">
              <p class="banner__title-sub banner__title--white">Future Meets Familiar</p>
              <p class="banner__title banner__title--larger banner__title--white">AIR JORDAN 11 'JUBILEE'</p>
            </div>
            <div>
              <a href="#" class="banner__btn banner__btn--white">Shop</a>
              <a href="#" class="banner__btn banner__btn--white">Shop Jordan</a>
            </div>
          </figcaption>
          <a href="#" class="banner__link"></a>
        </figure>
      </div>
    </section>
    <section id="dont-miss" class="banner twin-banner">
      <h2 class="section-title">Don't Miss</h2>
      <div class="banner__container">
        <figure class="banner__item">
          <div class="banner__img-wrapper">
            <img src="{{asset("user/index/images/dont-miss/super-rep.jpg")}}" alt="super rep" class="banner__img">
          </div>
          <figcaption class="banner__caption banner__caption--inner">
            <p class="banner__title banner__title--white">SuperRep Surge</p>
            <a href="#" class="banner__btn banner__btn--white">Shop</a>
          </figcaption>
          <a href="#" class="banner__link"></a>
        </figure>
        <figure class="banner__item">
          <div class="banner__img-wrapper">
            <img src="{{asset("user/index/images/dont-miss/kyrie-7.jpg")}}" alt="kyrie" class="banner__img">
          </div>
          <figcaption class="banner__caption banner__caption--inner">
            <p class="banner__title">Kyrie 7 'BK Black'</p>
            <a href="#" class="banner__btn">Shop</a>
          </figcaption>
          <a href="#" class="banner__link"></a>
        </figure>
      </div>
    </section>
    <section id="more-nike" class="banner triple-banner">
      <h2 class="section-title">More Nike</h2>
      <div class="banner__container">
        <figure class="banner__item">
          <div class="banner__img-wrapper">
            <img src="{{asset("user/index/images/more-nike/mens.png")}}" alt="for kid" class="banner__img">
          </div>
          <figcaption class="banner__caption banner__caption--inner">
            <a href="#" class="banner__btn banner__btn--white">Men's</a>
          </figcaption>
          <a href="#" class="banner__link"></a>
        </figure>
        <figure class="banner__item">
          <div class="banner__img-wrapper">
            <img src="{{asset("user/index/images/more-nike/womens.png")}}" alt="for player" class="banner__img">
          </div>
          <figcaption class="banner__caption banner__caption--inner">
            <a href="#" class="banner__btn banner__btn--white">Women's</a>
          </figcaption>
          <a href="#" class="banner__link"></a>
        </figure>
        <figure class="banner__item">
          <div class="banner__img-wrapper">
            <img src="{{asset("user/index/images/more-nike/kids.png")}}" alt="for player" class="banner__img">
          </div>
          <figcaption class="banner__caption banner__caption--inner">
            <a href="#" class="banner__btn banner__btn--white">Kids'</a>
          </figcaption>
          <a href="#" class="banner__link"></a>
        </figure>
      </div>
    </section>
    <section id="shop-table" class="table">
      <div class="table__list-wrapper">
        <h4 class="table__title">Shoes</h4>
        <ul class="table__list">
          <li class="table__item">
            <a href="#" class="table__link">Sneakers ans Shoes</a>
          </li>
          <li class="table__item">
            <a href="#" class="table__link">Football Boots</a>
          </li>
          <li class="table__item">
            <a href="#" class="table__link">Running Shoes</a>
          </li>
          <li class="table__item">
            <a href="#" class="table__link">Netball Sneakers</a>
          </li>
          <div class="table__hidden">
            <li class="table__item">
              <a href="#" class="table__link">Golf Shoes</a>
            </li>
            <li class="table__item">
              <a href="#" class="table__link">Skate Shoes</a>
            </li>
            <li class="table__item">
              <a href="#" class="table__link">Basketball Shoes</a>
            </li>
            <li class="table__item">
              <a href="#" class="table__link">Tennis Shoes</a>
            </li>
          </div>
        </ul>
      </div>
      <div class="table__list-wrapper">
        <h4 class="table__title">Clothing</h4>
        <ul class="table__list">
          <li class="table__item">
            <a href="#" class="table__link">All Clothing</a>
          </li>
          <li class="table__item">
            <a href="#" class="table__link">Tops</a>
          </li>
          <li class="table__item">
            <a href="#" class="table__link">Trousers and Leggings</a>
          </li>
          <li class="table__item">
            <a href="#" class="table__link">Tracksuits</a>
          </li>
          <div class="table__hidden">
            <li class="table__item">
              <a href="#" class="table__link">Hoodies</a>
            </li>
            <li class="table__item">
              <a href="#" class="table__link">Jackets</a>
            </li>
            <li class="table__item">
              <a href="#" class="table__link">Kits and Jerseys</a>
            </li>
            <li class="table__item">
              <a href="#" class="table__link">Yoga Trousers</a>
            </li>
          </div>
        </ul>
      </div>
      <div class="table__list-wrapper">
        <h4 class="table__title">Kids</h4>
        <ul class="table__list">
          <li class="table__item">
            <a href="#" class="table__link">Kids' Sneakers</a>
          </li>
          <li class="table__item">
            <a href="#" class="table__link">Kids' Backpacks</a>
          </li>
          <li class="table__item">
            <a href="#" class="table__link">Kids' Football Boots</a>
          </li>
          <li class="table__item">
            <a href="#" class="table__link">Kids' Running Shoes</a>
          </li>
          <div class="table__hidden">
            <li class="table__item">
              <a href="#" class="table__link">Kids' Jordan</a>
            </li>
            <li class="table__item">
              <a href="#" class="table__link">Kids' Hoodies</a>
            </li>
            <li class="table__item">
              <a href="#" class="table__link">Kids' T-shirt</a>
            </li>
            <li class="table__item">
              <a href="#" class="table__link">Kids' Track suits</a>
            </li>
          </div>
        </ul>
      </div>
      <div class="table__list-wrapper">
        <h4 class="table__title">Featured</h4>
        <ul class="table__list">
          <li class="table__item">
            <a href="#" class="table__link">New Releases</a>
          </li>
          <li class="table__item">
            <a href="#" class="table__link">Backpacks and Bags</a>
          </li>
          <li class="table__item">
            <a href="#" class="table__link">Footballs</a>
          </li>
          <li class="table__item">
            <a href="#" class="table__link">Goalkeeper Gloves</a>
          </li>
          <div class="table__hidden">
            <li class="table__item">
              <a href="#" class="table__link">Black Sneakers</a>
            </li>
            <li class="table__item">
              <a href="#" class="table__link">Black Football Boots</a>
            </li>
            <li class="table__item">
              <a href="#" class="table__link">Plus Size</a>
            </li>
            <li class="table__item">
              <a href="#" class="table__link">Factory Store</a>
            </li>
          </div>
        </ul>
      </div>
    </section>
  </main>
  @endsection

