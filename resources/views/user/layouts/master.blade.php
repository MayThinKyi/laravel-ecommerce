<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nike. Just Do it. Nike GB</title>
  <link rel="stylesheet" href="{{asset('user/index/style.css')}}">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="icon" sizes="192x192" href="./img/favicon/android-icon-192x192.png">
  <link rel="icon" sizes="128x128" href="./img/favicon/android-icon-128x128.png">
  <link rel="apple-touch-icon" href="./img/favicon/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="76x76" href="./img/favicon/apple-touch-icon-76x76-precomposed.png">
  <link rel="apple-touch-icon" sizes="120x120" href="./img/favicon/apple-touch-icon-120x120-precomposed.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./img/favicon/apple-touch-icon-152x152-precomposed.png">
   <!-- Css Styles -->
   <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}" type="text/css">
   <link rel="stylesheet" href="{{asset('user/css/font-awesome.min.css')}}" type="text/css">
   <link rel="stylesheet" href="{{asset('user/css/elegant-icons.css')}}" type="text/css">
   <link rel="stylesheet" href="{{asset('user/css/magnific-popup.css')}}" type="text/css">
   <link rel="stylesheet" href="{{asset('user/css/nice-select.css')}}" type="text/css">
   <link rel="stylesheet" href="{{asset('user/css/owl.carousel.min.css')}}" type="text/css">
   <link rel="stylesheet" href="{{asset('user/css/slicknav.min.css')}}" type="text/css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="{{asset('user/css/style.css')}}" type="text/css">

   <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Jost:wght@400;500;900&family=Pragati+Narrow:wght@700&display=swap"
    rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="module" src="{{asset('user/index/script.js')}}" defer></script>
</head>

<body>

  <header id="header">
    <nav id="navbar" class="">
      <div class="navbar__wrapper limiter">
        <a href="{{route('user#home')}}" class="navbar__home">
          <img src="{{asset('user/index/images/nike-logo.svg')}}" alt="logo" class="navbar__logo" />
        </a>
        <div class="navbar__menu">
          <ul class="navbar__menu-wrapper">
            <li class="navbar__menu-item">
              <a href="{{route('user#shop')}}" class="navbar__link">New Release</a>
              <div class="navbar__dropdown show">
                <div class="dropdown__container">
                  <ul class="dropdown__list">
                    <a href="{{route('user#shop')}}" class="dropdown__title">Featured</a>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Shop All New Arrivals</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Bestsellers</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">SNKRS Launch Calendar </a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">National Teams Collection</a>
                    </li>
                  </ul>
                  <ul class="dropdown__list">
                    <a href="{{route('user#shop')}}" class="dropdown__title">New For Men</a>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Shoes</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Clothing</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Equipment</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Shop All New Men's</a>
                    </li>
                  </ul>
                  <ul class="dropdown__list">
                    <a href="{{route('user#shop')}}" class="dropdown__title">New For Women</a>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Shoes</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Clothing</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Equipment</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Shop All New Women's</a>
                    </li>
                  </ul>
                  <ul class="dropdown__list">
                    <a href="{{route('user#shop')}}" class="dropdown__title">New For Kids</a>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Boys' Shoes</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Boys' Clothing</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Girls' Shoes</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Girls' Clothing</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Shop All New Kids'</a>
                    </li>
                  </ul>
                  <ul class="dropdown__list">
                    <a href="{{route('user#shop')}}" class="dropdown__title">Shop By Brand</a>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Nike Sportswear</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">NikeLab</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Jordan</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Nike SB</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">ACG</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Nike Pro</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="navbar__menu-item">
              <a href="{{route('user#shop')}}" class="navbar__link">Men</a>
              <div class="navbar__dropdown">
                <div class="dropdown__container">
                  <ul class="dropdown__list">
                    <a href="{{route('user#shop')}}" class="dropdown__title">Featured</a>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Sale</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">New Releases</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">SNKRS Launch Calendar</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Winter Wear Musthaves</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Top Gifts</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Member Access</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Virtual Expert Sessions</a>
                    </li>
                  </ul>
                  <ul class="dropdown__list">
                    <a href="{{route('user#shop')}}" class="dropdown__title">Featured</a>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Sale</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">New Releases</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">SNKRS Launch Calendar</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Winter Wear Musthaves</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Top Gifts</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Member Access</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="{{route('user#shop')}}" class="dropdown__link">Virtual Expert Sessions</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="navbar__menu-item">
              <a href="{{route('user#shop')}}" class="navbar__link">Women</a>
              <div class="navbar__dropdown">
                <div class="dropdown__container">
                  <div class="dropdown__wrapper">
                    <ul class="dropdown__list">
                        <a href="{{route('user#shop')}}" class="dropdown__title">Featured</a>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Sale</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">New Releases</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">SNKRS Launch Calendar</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Winter Wear Musthaves</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Top Gifts</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Member Access</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Virtual Expert Sessions</a>
                        </li>
                      </ul>
                  </div>
                  <div class="dropdown__wrapper">
                    <ul class="dropdown__list">
                      <a href="#" class="dropdown__title">Shoes</a>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">All Shoes</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">All Sale Shoes</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Lifestyle</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Running</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Gym and Training</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Jordan</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Basketball</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Tennis</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Football</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Golf</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Skateboarding</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Customise with Nike By You</a>
                      </li>
                    </ul>
                    <ul class="dropdown__list">
                      <a href="#" class="dropdown__title">Accessories and Equipment</a>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">All Accessories and Equipment</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Bags and Backpacks </a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Apple Watch Nike</a>
                      </li>
                    </ul>
                  </div>
                  <div class="dropdown__wrapper">
                    <ul class="dropdown__list">
                      <a href="#" class="dropdown__title">Clothing</a>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">All Clothing</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">All Sale Clothing</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Trousers and Leggings</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Tops and T-Shirts</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Hoodies and Sweatshirts</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Shorts</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Sports Bras</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Jackets and Gilets</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Tracksuits</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Co-ords</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Skirts and Dresses</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Compression and Base Layer</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Kits and Jerseys</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Swimwear</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Gender Neutral</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Maternity</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Plus Size</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Socks</a>
                      </li>
                    </ul>
                  </div>
                  <div class="dropdown__wrapper">
                    <ul class="dropdown__list">
                      <a href="#" class="dropdown__title">Shop By Sport</a>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Running</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Football</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Basketball</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">NBA</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Tennis</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Golf</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Gym and Training</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Cross Training</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Skateboarding</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Yoga</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Rugby</a>
                      </li>
                    </ul>
                    <ul class="dropdown__list">
                      <a href="#" class="dropdown__title">Customise</a>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Nike By You</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Customised Shoes</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Customised Football Jerseys</a>
                      </li>
                    </ul>
                  </div>
                  <div class="dropdown__wrapper">
                    <ul class="dropdown__list">
                      <a href="#" class="dropdown__title">Shop By Trends</a>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Earthy Tones</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Prints</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Colour Blocking</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Retro</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Pastels</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Cozy Wear</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Sustainable Materials</a>
                      </li>
                    </ul>
                    <ul class="dropdown__list">
                      <a href="#" class="dropdown__title">Shop Sports Bras</a>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">High-Impact Sports Bras</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Running Sports Bras</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Plus Size Sports Bras</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">White Sports Bras</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Black Sports Bras</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">All Sports Bras</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Sports Bra Guide</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="navbar__menu-item">
              <a href="{{route('user#shop')}}" class="navbar__link">Gifts</a>
              <div class="navbar__dropdown">
                <div class="dropdown__container">
                  <div class="dropdown__wrapper">
                    <ul class="dropdown__list">
                        <a href="{{route('user#shop')}}" class="dropdown__title">Featured</a>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Sale</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">New Releases</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">SNKRS Launch Calendar</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Winter Wear Musthaves</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Top Gifts</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Member Access</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Virtual Expert Sessions</a>
                        </li>
                      </ul>
                  </div>
                  <div class="dropdown__wrapper">
                    <ul class="dropdown__list">
                        <a href="{{route('user#shop')}}" class="dropdown__title">Featured</a>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Sale</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">New Releases</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">SNKRS Launch Calendar</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Winter Wear Musthaves</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Top Gifts</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Member Access</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Virtual Expert Sessions</a>
                        </li>
                      </ul>
                  </div>
                  <div class="dropdown__wrapper">
                    <ul class="dropdown__list">
                        <a href="{{route('user#shop')}}" class="dropdown__title">Featured</a>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Sale</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">New Releases</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">SNKRS Launch Calendar</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Winter Wear Musthaves</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Top Gifts</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Member Access</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Virtual Expert Sessions</a>
                        </li>
                      </ul>
                  </div>
                  <div class="dropdown__wrapper">
                    <ul class="dropdown__list">
                        <a href="{{route('user#shop')}}" class="dropdown__title">Featured</a>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Sale</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">New Releases</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">SNKRS Launch Calendar</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Winter Wear Musthaves</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Top Gifts</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Member Access</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Virtual Expert Sessions</a>
                        </li>
                      </ul>
                  </div>

                </div>
              </div>
            </li>
            <li class="navbar__menu-item">
              <a href="{{route('user#shop')}}" class="navbar__link">Kids</a>
              <div class="navbar__dropdown">
                <div class="dropdown__container">
                  <div class="dropdown__wrapper">
                    <ul class="dropdown__list">
                        <a href="{{route('user#shop')}}" class="dropdown__title">Featured</a>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Sale</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">New Releases</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">SNKRS Launch Calendar</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Winter Wear Musthaves</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Top Gifts</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Member Access</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Virtual Expert Sessions</a>
                        </li>
                      </ul>
                  </div>
                  <div class="dropdown__wrapper">
                    <ul class="dropdown__list">
                        <a href="{{route('user#shop')}}" class="dropdown__title">Featured</a>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Sale</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">New Releases</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">SNKRS Launch Calendar</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Winter Wear Musthaves</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Top Gifts</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Member Access</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Virtual Expert Sessions</a>
                        </li>
                      </ul>
                  </div>
                  <div class="dropdown__wrapper">
                    <ul class="dropdown__list">
                        <a href="{{route('user#shop')}}" class="dropdown__title">Featured</a>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Sale</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">New Releases</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">SNKRS Launch Calendar</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Winter Wear Musthaves</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Top Gifts</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Member Access</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Virtual Expert Sessions</a>
                        </li>
                      </ul>
                  </div>
                  <div class="dropdown__wrapper">
                    <ul class="dropdown__list">
                        <a href="{{route('user#shop')}}" class="dropdown__title">Featured</a>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Sale</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">New Releases</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">SNKRS Launch Calendar</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Winter Wear Musthaves</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Top Gifts</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Member Access</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Virtual Expert Sessions</a>
                        </li>
                      </ul>
                  </div>

                </div>
              </div>
            </li>
            <li class="navbar__menu-item">
              <a href="{{route('user#shop')}}" class="navbar__link">Collections</a>
              <div class="navbar__dropdown">
                <div class="dropdown__container">
                  <div class="dropdown__wrapper">
                    <ul class="dropdown__list">
                        <a href="{{route('user#shop')}}" class="dropdown__title">Featured</a>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Sale</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">New Releases</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">SNKRS Launch Calendar</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Winter Wear Musthaves</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Top Gifts</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Member Access</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Virtual Expert Sessions</a>
                        </li>
                      </ul>
                  </div>
                  <div class="dropdown__wrapper">
                    <ul class="dropdown__list">
                        <a href="{{route('user#shop')}}" class="dropdown__title">Featured</a>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Sale</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">New Releases</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">SNKRS Launch Calendar</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Winter Wear Musthaves</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Top Gifts</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Member Access</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Virtual Expert Sessions</a>
                        </li>
                      </ul>
                  </div>
                  <div class="dropdown__wrapper">
                    <ul class="dropdown__list">
                        <a href="{{route('user#shop')}}" class="dropdown__title">Featured</a>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Sale</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">New Releases</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">SNKRS Launch Calendar</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Winter Wear Musthaves</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Top Gifts</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Member Access</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Virtual Expert Sessions</a>
                        </li>
                      </ul>
                  </div>
                  <div class="dropdown__wrapper">
                    <ul class="dropdown__list">
                        <a href="{{route('user#shop')}}" class="dropdown__title">Featured</a>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Sale</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">New Releases</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">SNKRS Launch Calendar</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Winter Wear Musthaves</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Top Gifts</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Member Access</a>
                        </li>
                        <li class="dropdown__item">
                          <a href="{{route('user#shop')}}" class="dropdown__link">Virtual Expert Sessions</a>
                        </li>
                      </ul>
                  </div>

                </div>
              </div>
            </li>
          </ul>
         {{-- <ul class="navbar__family">
            <li class="family__link">
              <a href="{{route('user#home')}}">
                <img class="family__logo" src="{{asset('user/index/images/jordan.svg')}}" alt="jordan">
                <span class="family__title">Jordan</span>
              </a>
            </li>
            <li class="family__link">
              <a href="{{route('user#home')}}">
                <img class="family__logo" src="{{asset('user/index/images/converse.svg')}}" alt="converse">
                <span class="family__title">Converse</span>
              </a>
            </li>
          </ul>
          <div class="navbar__account">
            <div class="account__desc">
              <p class="account__text">
                Become a Nike Member for the best products, inspiration and storis in sport.
                <a class="account__link" href="#">Learn more</a>
              </p>

            </div>
            <div class="account__btns">
              <a class="account__btn" href="">Join Us</a>
              <a href="{{route('auth#login')}}"><button class="account__btn account__btn--white">Sign In</button></a>
            </div>
          </div>
          <ul class="navbar__btns">
            <li class="navbar__btn">
              <a href="#">
                <img class="navbar__btn-icon" src="{{asset('user/index/images/cart.svg')}}" alt="bag">
                <span class="navbar__btn-text">Bag</span>
              </a>
            </li>
            <li class="navbar__btn">
              <a href="#">
                <img class="navbar__btn-icon" src="{{asset('user/index/images/order.svg')}}" alt="order">
                <span class="navbar__btn-text">Order</span>
              </a>
            </li>
            <li class="navbar__btn">
              <a href="#">
                <img class="navbar__btn-icon" src="{{asset('user/index/images/help.svg')}}" alt="help">
                <span class="navbar__btn-text">Help</span>
              </a>
            </li>
        </ul>--}}
        </div>
        <div class="navbar__container">
          <div class="navbar__search-box">
            <div class="navbar__search">
              <div class="search__tab">
                <button class="search__btn">
                  <img src="{{asset('user/index/images/search.svg')}}" alt="search" class="search__icon">
                </button>
                <input type="text" placeholder="Search" class="search__input" />
              </div>
              <button class="search__exit-btn">
                <img src="{{asset('user/index/images/exit.svg')}}" alt="exit search" class="search__exit-icon">
              </button>
            </div>
            <div class="search__popular">
              <div class="search__popular-wrapper">
                <span class="search__popular-title">Popular Search Terms</span>
                <ul class="search__popular-list">
                  <li class="search__popular-item">
                    <a href="#">Air Force 1</a>
                  </li>
                  <li class="search__popular-item">
                    <a href="#">Jordan</a>
                  </li>
                  <li class="search__popular-item">
                    <a href="#">Air Max</a>
                  </li>
                  <li class="search__popular-item">
                    <a href="#">Blazer</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="navbar__btns">
            <a class="navbar__btn navbar__btn--fav">
              <img src="{{asset('user/index/images/favorites.svg')}}" alt="favorites">
            </a>
            @if(Auth::user())
                <a class="user" href="{{route('user#dashboard')}}">
                    <i class="fa-solid fa-user"></i></a>
            @else

            @endif
                <a class="cart navbar__btn" href="{{route('user#cart')}}"><i class="fa-solid fa-cart-shopping"></i>  <span class="cartCount">@yield('cartCount')</span> </a>

          </div>
         {{-- <button class="navbar__hamburger">
            <img src="{{asset('user/index/images/hamburger.svg')}}" alt="hamburger menu">
          </button> --}}
        </div>
      </div>
    </nav>
    <section id="sub-header" class="">
      <div class="header-container limiter">
        <div class="family">
          <ul class="family__links">
            <li class="family__link">
              <a href="#">
                <img src="{{asset('user/index/images/jordan.svg')}}" alt="Jordan" class="family__logo" />
              </a>
            </li class="family__link">
            <li class="family__link">
              <a href="#">
                <img src="{{asset('user/index/images/converse.svg')}}" alt="Converse" class="family__logo" />
              </a>
            </li class="family__link">
          </ul>
        </div>
        <div class="quick">
          <div class="quick__link-container">
            <a href="#" class="quick__link quick__link--help">Help</a>
            <div class="quick__help-modal">
              <a href="#" class="help-modal__title">Help</a>
              <ul class="help-modal__list">
                <li class="help-modal__item">
                  <a href="#">Order Status</a>
                </li>
                <li class="help-modal__item">
                  <a href="#">Dispatch and Delivery</a>
                </li>
                <li class="help-modal__item">
                  <a href="#">Returns</a>
                </li>
                <li class="help-modal__item">
                  <a href="#">Size Charts</a>
                </li>
                <li class="help-modal__item">
                  <a href="#">Contact Us</a>
                </li>
                <li class="help-modal__item">
                  <a href="#">Privacy Policy</a>
                </li>
                <li class="help-modal__item">
                  <a href="#">Term of Sale</a>
                </li>
                <li class="help-modal__item">
                  <a href="#">Term of Use</a>
                </li>
                <li class="help-modal__item">
                  <a href="#">Send Us Feedback</a>
                </li>
              </ul>
            </div>
          </div>

          <span>|</span>
          <a href="{{route('user#contactPage')}}" class="quick__link">Contact Us</a>
          @if(Auth::user())
          <span>|</span>
          <form method="post" action="{{route('logout')}}"  class="d-inline quick__link">
            @csrf
            <button type="submit">Sign Out</button>
          </form>

          @else
          <span>|</span>
          <a href="{{route('auth#login')}}" class="quick__link">Sign in</a>
          @endif

        </div>
      </div>
    </section>
    <section id="slide-banner">
      <div class="slide-banner__wrapper">
        <div class="slide-banner__slide">
          <div class="slide-banner__contents">
            <p class="slide-banner__text">
              UP TO 50% OFF
            </p>
            <p class="slide-banner__text slide-banner__text--inline">
              It's here: the end of season sale.
            </p>
            <a href="#" class="slide-banner__link">Shop</a>
          </div>
        </div>
        <div class="slide-banner__slide">
          <div class="slide-banner__contents">
            <p class="slide-banner__text slide-banner__text--inline">
              Please order as early as possible to ensure that your orders arrive in time for your holiday celebrations.
            </p>
            <a href="#" class="slide-banner__link">Shop</a>
            <a href="#" class="slide-banner__link">Get Help</a>
          </div>
        </div>
        <div class="slide-banner__slide">
          <div class="slide-banner__contents">
            <p class="slide-banner__text slide-banner__text--inline">
              Due to delivery challenges, your delivery might be delayed. Please visit
            </p>
            <a href="#" class="slide-banner__link">Get Help</a>
          </div>
        </div>
        <div class="slide-banner__slide">
          <div class="slide-banner__contents">
            <p class="slide-banner__text slide-banner__text--inline">
              We’ve extended our returns period to 60 days.
            </p>
            <a href="#" class="slide-banner__link">Learn more</a>
          </div>
        </div>
        <div class="slide-banner__slide">
          <div class="slide-banner__contents">
            <p class="slide-banner__text">
              Students Now Get 10% OFF
            </p>
            <a href="#" class="slide-banner__link">Learn more</a>
          </div>
        </div>
      </div>
    </section>
  </header>
@yield('myContent')
<footer id="footer">
    <div class="footer__wrapper">
      <section id="service-links">
        <div class="sl__lists">
          <ul class="lists__list">
            <li class="lists__item lists__item--bold">
              <a href="#" class="lists__name lists__name--bold">Gift Cards</a>
            </li>
            <li class="lists__item lists__item--bold ">
              <a href="#" class="lists__name lists__name--bold">Find a Store</a>
            </li>
            <li class="lists__item lists__item--bold ">
              <a href="#" class="lists__name lists__name--bold">Sign up for Email</a>
            </li>
            <li class="lists__item lists__item--bold ">
              <a href="#" class="lists__name lists__name--bold">Become a Member</a>
            </li>
            <li class="lists__item lists__item--bold ">
              <a href="#" class="lists__name lists__name--bold">Student Discount</a>
            </li>
            <li class="lists__item lists__item--bold ">
              <a href="#" class="lists__name lists__name--bold">Send us Feedback</a>
            </li>
          </ul>
          <div class="lists__wrapper">
            <button class="lists__toggle">
              <a href="#" class="lists__name lists__name--bold">Get Help</a>
            </button>
            <ul class="lists__list">
              <li class="lists__item">
                <a href="#" class="lists__name">Order Status</a>
              </li>
              <li class="lists__item">
                <a href="#" class="lists__name">Returns</a>
              </li>
              <li class="lists__item">
                <a href="#" class="lists__name">Payment Options</a>
              </li>
              <li class="lists__item">
                <a href="{{route("user#contactPage")}}" class="lists__name">Contact Us</a>
              </li>
              <li class="lists__item">
                <a href="#" class="lists__name">UK Modern Slavery Act</a>
              </li>
              <li class="lists__item">
                <a href="#" class="lists__name">Diclosure</a>
              </li>
            </ul>
          </div>
          <div class="lists__wrapper">
            <button class="lists__toggle">
              <a href="#" class="lists__name lists__name--bold">About Nike</a>
            </button>
            <ul class="lists__list">
              <li class="lists__item">
                <a href="#" class="lists__name">News</a>
              </li>
              <li class="lists__item">
                <a href="#" class="lists__name">Careers</a>
              </li>
              <li class="lists__item">
                <a href="#" class="lists__name">Investors</a>
              </li>
              <li class="lists__item">
                <a href="#" class="lists__name">Sustainabillity</a>
              </li>
              <li class="lists__item">
                <a href="#" class="lists__name">UK Tax</a>
              </li>
              <li class="lists__item">
                <a href="#" class="lists__name">UK Pension Statement</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="sl__social">
          <ul class="social__list">
            <li class="social__item">
              <a href="#">
                <img class="social__img" src="{{asset('user/index/images/social/tweet.svg')}}" alt="tweeter">
              </a>
            </li>
            <li class="social__item">
              <a href="#">
                <img class="social__img" src="{{asset('user/index/images/social/facebook.svg')}}" alt="facebook">
              </a>
            </li>
            <li class="social__item">
              <a href="#">
                <img class="social__img" src="{{asset('user/index/images/social/youtube.svg')}}" alt="youtube">
              </a>
            </li>
            <li class="social__item">
              <a href="#" target="_blank">
                <img class="social__img" src="{{asset('user/index/images/social/insta.svg')}}" alt="instagram">
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section id="sub-footer">
        <div class="location">
          <button class="location__btn">
            <img src="{{asset('user/index/images/location.svg')}}" alt="location" class="location__icon">
            <span class="location__nation">United Kingdom</span>
          </button>
          <span class="location__copyright">© 2020 Nike, Inc. All Rights Reserved</span>
        </div>
        <div class="policy-settings">
          <ul class="policy">
            <li class="policy__item policy__item--modal">
              <button class="policy__show-btn">Guides</button>
              <ul class="policy__modal">
                <li class="modal__link">
                  <a href="#">Nike Adapt</a>
                </li>
                <li class="modal__link">
                  <a href="#">Nike Air</a>
                </li>
                <li class="modal__link">
                  <a href="#">Nike Air Force</a>
                </li>
                <li class="modal__link">
                  <a href="#">Nike Air Max</a>
                </li>
                <li class="modal__link">
                  <a href="#">Nike FlyEase</a>
                </li>
                <li class="modal__link">
                  <a href="#">Nike Flyknit</a>
                </li>
                <li class="modal__link">
                  <a href="#">Nike Flyleather</a>
                </li>
                <li class="modal__link">
                  <a href="#">Nike Free</a>
                </li>
                <li class="modal__link">
                  <a href="#">Nike Joyride</a>
                </li>
                <li class="modal__link">
                  <a href="#">Nike Pegasus</a>
                </li>
                <li class="modal__link">
                  <a href="#">Nike React</a>
                </li>
                <li class="modal__link">
                  <a href="#">Nike Vaporfly</a>
                </li>
                <li class="modal__link">
                  <a href="#">Nike Zoom Fly</a>
                </li>
                <li class="modal__link">
                  <a href="#">Nike ZoomX</a>
                </li>
                <li class="modal__link">
                  <a href="#">NBA Fan Gear</a>
                </li>
                <li class="modal__link">
                  <a href="#">Factory Store</a>
                </li>
              </ul>
            </li>
            <li class="policy__item">
              <a href="#" class="policy__link">Terms of Use</a>
            </li>
            <li class="policy__item">
              <a href="#" class="policy__link">Terms of Sale</a>
            </li>
            <li class="policy__item">
              <a href="#" class="policy__link">Company Details</a>
            </li>
            <li class="policy__item">
              <a href="#" class="policy__link">Privacy & Cookie Policy</a>
            </li>
            <li class="policy__item">
              <button class="cookie-settings">Cookie Settings</button>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </footer>
 <!-- JavaScript Libraries -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 <script src="{{asset('user/lib/easing/easing.min.js')}}"></script>
 <script src="{{asset('user/lib/owlcarousel/owl.carousel.min.js')}}"></script>

 <!-- Contact Javascript File -->
 <script src="{{asset('user/mail/jqBootstrapValidation.min.js')}}"></script>
 <script src="{{asset('user/mail/contact.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Template Javascript -->
    <script src="{{asset('user/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</body>
@yield('myScript')


</html>
