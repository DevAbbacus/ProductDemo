@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="product-image-summary">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-image-inner">
                        <img src="/images/product-img.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-info-main">
                        <h1 class="product_title">{{ $productObj->name }}</h1>
                        <div class="price-box">{{ $productObj->price }}</div>
                        <div class="prodcut-short-dec">
                            <p>
                                {{ $productObj->description }}
                            </p>
                            <div class="product-sku"><span class="label">SKU : </span><span>{{ $productObj->sku }}</span> </div>
                            <div class="product-cat"><span class="label">Category: </span><span>{{ $productObj->category->name }}</span> </div>
                            <div class="addcart-btn"><a href="#" class="button  addtocart" title="buy now">buy now</a></div>

                        </div>

                    </div>




                </div>
            </div>
        </div>
    </div>
@endsection