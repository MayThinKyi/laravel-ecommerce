@extends('user.layouts.master')

@section('cartCount')
     @if($carts)
        {{count($carts)}}
     @else
        0
     @endif
@endsection
@section('myContent')


    <!-- Shop Section Begin -->
    <section class="shop  spad">
        <div class="container ">
            <div class="row  ">
                <div class="col-lg-3">
                    <div class="shop__sidebar px-2">
                        <div class="shop__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">

                                                   @if($categories)
                                                    @foreach ($categories as $c)

                                                         <li><a href="{{route('user#filterCategory',$c->id)}}">{{$c->category_name}}</a></li>
                                                    @endforeach
                                                   @else
                                                        <h3>No categories  </h3>
                                                   @endif



                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseThree">Filter Price</a>
                                    </div>
                                    <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__price">
                                                <ul>
                                                    <li><a href="{{route('user#filterPrice','<10000')}}">Under 10000 Ks</a></li>
                                                    <li><a href="{{route('user#filterPrice','10000-30000')}}"> 10000 Ks-  30000 Ks</a></li>
                                                    <li><a href="{{route('user#filterPrice','30000-50000')}}"> 30000 Ks - 50000 Ks</a></li>
                                                    <li><a href="{{route('user#filterPrice','50000-80000')}}"> 50000 Ks - 80000 Ks</a></li>
                                                    <li><a href="{{route('user#filterPrice','80000-100000')}}"> 80000 Ks - 100000 Ks</a></li>
                                                    <li><a href="{{route('user#filterPrice','>100000')}}"> Over 100000 Ks</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseFour">Size</a>
                                    </div>
                                    <div id="collapseFour" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__size">
                                                   @if($sizes)
                                                    @foreach ($sizes as $s)

                                                    <a href="{{route('user#filterSize',$s->size_name)}}">
                                                        <label for="{{$s->size_name}}">{{$s->size_name}}
                                                            <input type="radio" id="xs">
                                                        </label>
                                                    </a>

                                                    @endforeach
                                                   @else
                                                        <h3>No sizes...  </h3>
                                                   @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseFive">Colors</a>
                                    </div>
                                    <div id="collapseFive" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__color">




                                                <span>
                                                    <label class=" black c-1" for="sp-1">

                                                        <input type="radio" id="sp-1">

                                                    </label>
                                                    <a class='colorlink' href="{{route("user#filterColor",'black')}}">Black
                                                    </a>
                                                </span>


                                                <span>
                                                <label class="blue c-2" for="sp-2">
                                                    <input type="radio" id="sp-2">
                                                </label>
                                                <a class='colorlink' href="{{route("user#filterColor",'blue')}}">Blue
                                            </a>
                                                </span>
                                                <span>

                                                <label class="brown c-3" for="sp-3">
                                                    <input type="radio" id="sp-3">
                                                </label>
                                                <a class='colorlink' href="{{route("user#filterColor",'brown')}}">Brown</a>
                                        </span>
                                        <span>

                                            <label class="green c-4" for="sp-4">
                                                <input type="radio" id="sp-4">
                                            </label>
                                            <a class='colorlink' href="{{route("user#filterColor",'green')}}">green</a>
                                    </span>
                                           <span>

                                                <label class="orange c-5" for="sp-5">
                                                    <input type="radio" id="sp-5">
                                                </label>
                                                <a class='colorlink' href="{{route("user#filterColor",'orange')}}">orange</a>
                                        </span>
                                        <span>

                                                <label class="pink c-6" for="sp-6">
                                                    <input type="radio" id="sp-6">
                                                </label>
                                                <a class='colorlink' href="{{route("user#filterColor",'pink')}}"> pink</a>
                                        </span>
                                        <span>

                                                <label class="purple c-7" for="sp-7">
                                                    <input type="radio" id="sp-7">
                                                </label>
                                                <a class='colorlink' href="{{route("user#filterColor",'purple')}}">purple</a>
                                        </span>
                                        <span>

                                                <label class="red c-8" for="sp-8">
                                                    <input type="radio" id="sp-8">
                                                </label>
                                                <a class='colorlink' href="{{route("user#filterColor",'red')}}"> red</a>
                                        </span>
                                        <span>

                                                <label class="white c-9" for="sp-9">
                                                    <input type="radio" id="sp-9">
                                                </label>
                                                <a class='colorlink' href="{{route("user#filterColor",'white')}}"> white</a>
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p>Showing 1–12 of 126 results</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class=" shop__product__option__right">
                                    <p>Sort by Price:</p>
                                    <select class="sortingBtn " style="font-size:14px">
                                        <option value="priceAsc">Price:Low - High</option>
                                        <option value="priceDesc">Price:High - Low </option>
                                        <option value="desc">Latest</option>
                                        <option value="asc">Oldest</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row productLists">
                        <div class="mb-5 lg:mb-0 col-lg-4 col-md-6 col-sm-6">
                            <img src="{{asset('images/shop.png')}}" />
                        </div>
                        @if(count($products)>0)
                            @foreach ($products as $p)


                                      <div class="col-lg-4 col-md-6 col-sm-6">

                                        <a href="{{route('user#shopDetails',$p->id)}}">

                                        <div class="product__item">
                                                        <div class="product__item__pic set-bg" data-setbg="{{asset('storage/'.json_decode($p->product_images)[0])}}">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">      <h4 class="mt-10 mx-a
                                    ">No product.Thank you...</h4>
                        </div>
                        @endif


                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product__pagination">
                                <a class="active" href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <span>...</span>
                                <a href="#">21</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
                            </div>
                        </div>
                         </a>
                    </div>



                </div>
            </div>
           </div>
            <!-- Shop Product End -->

    <!-- Shop End -->
@endsection
@section('myScript')
<script>
$(document).ready(function(){
    $('.sortingBtn').change(function(){
     $sortingStatus=$('.sortingBtn').val();
     $.ajax({
        type:'get',
        url:'/customer/ajax/sort',
        data: {sortingStatus:$sortingStatus},
        success:function(data) {
            console.log('d',data);
         if(data){
             $sortedProductLists=`<div class="col-lg-4 col-md-6 col-sm-6">
                            <img src="{{asset('images/shop.png')}}" />
                        </div>`;
              console.log(JSON.parse(data[0].product_images)[0]);
             for($i=0;$i<data.length;$i++) {
                $sortedProductLists+= ` <div class="col-lg-4 col-md-6 col-sm-6">
                                        <a href="/customer/shop/details/${data[$i].id}">

                                        <div class="product__item">
                                                        <div style='background-image:url({{asset('storage/${JSON.parse(data[$i].product_images)[0]}')}})' class="product__item__pic set-bg"  data-setbg="{{asset('storage/${JSON.parse(data[$i].product_images)[0]}')}}">
                                                    </div>
                                                </a>
                                                 <div class="product__item__text">

                                                        <a href="/customer/shop/details/${data[$i].id}" class="">
                                                            <h5>${data[$i].product_name}</h5>
                                                        </a>
                                                        <p class="color">${data[$i].colors.length} Colors </p>
                                                        <p class="price">${data[$i].product_price} Kyats</p>

                                                          </div>

                                    </div> </div> `;

             };
             console.log($sortedProductLists);
             $('.productLists').html($sortedProductLists)
         }
        }
     })
    })
 })
</script>

@endsection


