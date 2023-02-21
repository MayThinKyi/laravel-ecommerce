@extends('admin.layouts.master')
@section('myContent')
     <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 offset-8">
                                <a href="{{route('product#list')}}"><button class="btn bg-dark text-white my-3">List</button></a>
                            </div>
                        </div>
                        <div class="col-lg-9 offset-1">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2">Prouduct Create Form</h3>
                                    </div>
                                    <hr>
                                    <form action="{{route('product#create')}}" enctype="multipart/form-data"" method="post" novalidate="novalidate">
                                        @csrf
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Product Name</label>
                                            <input id="cc-pament" value='{{old('productName')}}' name="productName" type="text" class="form-control @error('productName') is-invalid @enderror" aria-required="true" aria-invalid="false" placeholder="Product Name...">
                                            @error('productName')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                         <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Product Category</label>
                                            <select  name="productCategory" id="" class="form-control @error('productCategory') is-invalid @enderror">
                                            @foreach ($categories as $c)
                                                <option value="{{$c->id}}">{{$c->category_name}}</option>
                                            @endforeach
                                            </select>

                                            @error('productCategory')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                         <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Product Avaliable Sizes</label> <br>
                                           @if(count($sizes)<1)
                                            <a href='{{route('size#createPage')}}'><p class="text-danger">Add some Size...</p></a>
                                           @endif
                                            @foreach ($sizes as $s)
                                                <span class="me-3">
                                                    <label for=""><input id="cc-pament" value='{{$s->size_name}}'  name="sizes[]" type="checkbox" class="me-1 " aria-required="true" aria-invalid="false" >{{$s->size_name}}</label>
                                                </span>
                                            @endforeach
                                        </div>
                                         <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Product Avaliable Colors</label> <br>
                                             @if(count($colors)<1)
                                            <a href='{{route('color#createPage')}}'><p class="text-danger">Add some Color...</p></a>
                                           @endif
                                            @foreach ($colors as $c)
                                                <span class="me-3">
                                                    <label for=""><input id="cc-pament" value='{{$c->color_name}}'  name="colors[]" type="checkbox" class=" me-1" aria-required="true" aria-invalid="false" >{{$c->color_name}}</label>
                                                </span>

                                            @endforeach
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Product Description</label>
                                            <textarea placeholder="Product Description..." name="productDescription" id="" cols="30" rows="10" class="form-control @error('productDescription') is-invalid @enderror">{{old('productDescription')}}</textarea>
                                            @error('productDescription')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                         <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Product Image</label>
                                            <input id="cc-pament" name="productImages[]" type="file" multiple class="form-control @error('productImage') is-invalid @enderror" aria-required="true" aria-invalid="false" placeholder="Product Image...">
                                            @error('productImages')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                         <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Product Price</label>
                                            <input id="cc-pament" value='{{old('productPrice')}}' name="productPrice" type="text" class="form-control @error('productPrice') is-invalid @enderror" aria-required="true" aria-invalid="false" placeholder="Product Price...">
                                            @error('productPrice')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>

                                        <div>
                                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                <span id="payment-button-amount">Create</span>
                                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                <i class="fa-solid fa-circle-right"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
@endsection
