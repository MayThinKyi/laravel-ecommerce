@extends('user.layouts.master')
@section('navBarStatus')
    ''
@endsection
@section('cartCount')
    {{Auth::user() ?count($carts) :0}}
@endsection
@section('myContent')

     <!-- Shop Detail Start -->
    <div class="py-5 container-fluid">
        <div class="row px-xl-5">
            @if(session('colorError'))
    <div class="mx-20 text-black alert alert-danger alert-dismissible fade show" role="alert">
        <p>{{session('colorError')}}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif
            <div class="pb-5 col-lg-5">

                <div class="swiper mySwiperClass">

                    <div class="swiper-wrapper">
        <!-- Slides -->
         @foreach (json_decode($product->product_images) as $image)
                            <div class=" swiper-slide">
                                 <img class="" style="margin:auto
                                 ;object-position:center;max-height: 400px;max-width:450px" src="{{asset('storage/'.$image)}}" alt="Image">
                        </div>
                       @endforeach

        ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

</div>
            </div>

            <div class="pb-5 col-lg-7 productDetails">
                <input type="text" hidden class="userId" value="{{Auth::user() ? Auth::user()->id :""}}">
                <input type="text" hidden  class="productId" value="{{$product->id}}">

                <h3 class="font-bold">{{$product->product_name}}</h3>
                <div class="mb-0 d-flex ratingStar">

                    <p style="color: #111" class=""><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>Reviews(50)</p>
                </div>
                <input type="text" hidden  value="{{$product->product_price}}" class="productPrice">
                <h3 style="color: rgb(17, 17, 17);font-weight:500;font-size:18px" class="mb-4 font-bold">{{$product->product_price}} Kyats</h3>
                <p class="mb-4">{{$product->product_description}}</p>
                 <input type="text" hidden class="sizeStatus" value="{{$product->sizes ? 'true':'false'}}">
                @if($product->sizes)
                    <div class="mb-3 d-flex">
                    <p class="mb-0 mr-3 text-dark font-weight-medium">Available Sizes:</p>
                    <form>
                       @foreach ($product->sizes as $s)
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" value="{{$s}}" class="size custom-control-input" id="{{$s}}" name="size">
                            <label class="custom-control-label" for="{{$s}}">{{$s}}</label>
                        </div>
                       @endforeach

                    </form>
                </div>
                @endif
                <input type="text" hidden class="colorStatus" value="{{$product->colors ? 'true':'false'}}">
               @if($product->colors)
                 <div class="mb-4 d-flex">
                    <p class="mb-0 mr-3 text-dark font-weight-medium">Available Colors:</p>
                    <form>
                       @foreach ($product->colors as $c)
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input color" value="{{$c}}" id="{{$c}}" name="color">
                            <label class="custom-control-label" for="{{$c}}">{{$c}}</label>
                        </div>
                       @endforeach

                    </form>
                </div>
               @endif

                <div class="product__details__cart__option">
                                <div class="quantity">
                                    <div class="pro-qty ">
                                        <input class="qty" type="number" min="1" value="1">
                                    </div>

                                </div>
                                <a href="#" class="primary-btn text-white addToCartBtn cartBtn">add to cart</a>
                            </div>
                <div class="pt-2 d-flex">
                    <p class="mb-0 mr-2 text-dark font-weight-medium">Share on:</p>
                    <div class="d-inline-flex">
                        <a class="px-2 text-dark" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="px-2 text-dark" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="px-2 text-dark" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="px-2 text-dark" href="">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Shop Detail End -->
     <!-- Products Start -->
 <!-- Related Section Begin -->
    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Related Product</h3>
                </div>
            </div>


                      @if($products)
                      <div class="row">
                            @foreach ($products as $p)


                            <div class=" col-sm-6 col-md-6 col-lg-3">
                                <a href="{{route('user#shopDetails',$p->id)}}">

                                <div class="product__item">
                                                <div class="product__item__pic set-bg " data-setbg="{{asset('storage/'.json_decode($p->product_images)[0])}}">
                                            </div>
                                        </a>
                                         <div class="product__item__text">

                                                <a href="{{route('user#shopDetails',$p->id)}}" class="">
                                                    <h5>{{$p->product_name}}</h5>
                                                </a>
                                                <p class="color">{{count($p['colors'])}} Colors </p>
                                                <p class="price">{{$p->product_price}} Kyats</p>
                                                <!-- <div class="product__color__select">
                                                    <label for="green">
                                                        <input type="radio" id="pc-4">
                                                    </label>
                                                    <label class="active black" for="pc-5">
                                                        <input type="radio" id="pc-5">
                                                    </label>
                                                    <label class="grey" for="pc-6">
                                                        <input type="radio" id="pc-6">
                                                    </label>
                                                </div> -->
                                                  </div>

                            </div>
                        </div>
                            @endforeach
                        @else
                                    <h4>No products...</h4>
                        @endif



            </div>
        </div>
    </section>
    <!-- Related Section End -->

    <!-- Products End -->
@endsection
@section('myScript')
    <script>
    window.onload = function(){
        const swiper = new Swiper('.mySwiperClass', {
            spaceBetween: 15,
            slidesPerView: 1,
            pagination: {
              el: ".swiper-pagination",
              clickable: true
            },
            speed: 1000,
            loop: true,
            autoplay: {
              delay: 2500,
              disableOnInteraction: false,
            }, navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
        })
    }
    $(document).ready(function(){
        $('.addToCartBtn').click(function(){
            $userId=$('.userId').val();
            if(!$userId){
                alert('Please Login first!')
            }
            $productId=$('.productId').val();
            $qty=$('.qty').val();
            $total=$('.productPrice').val()*$qty;
            $color=$('.color:checked').val();
            $colorStatus=$('.colorStatus').val();
            $size=$('.size:checked').val();
            $sizeStatus=$('.sizeStatus').val();
            console.log('color',$color);
          $.ajax({
               type:'get',
               url:'/customer/product/addToCart',
               data:{
                    userId:$userId,
                productId:$productId,
                qty:$qty,
                total:$total,
                colorStatus:$colorStatus,
                color:$color,
                sizeStatus:$sizeStatus,
                size:$size

               },
               success:function(data) {
                if(data.colorError){
                    alert(data.colorError);
                }
                if(data.sizeError){
                    alert(data.sizeError);
                }
                 if(data.success==true){

                    location.href='/customer/shop';
                 }
               }
            });
        })
    })
</script>
@endsection
