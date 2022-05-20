@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row product-list-wrapper">
        <aside class="area-sidebar-shop col-lg-3 col-md-3">
            <div class="sidebar-widget">
                <h5>Product Category</h5>
                <div class="sidebar-widget-cont">
                    <form>
                        <ul>
                            @foreach($categories as $category)
                                <li>
                                    <span class="wd-active">
                                        <input class="category-items" type="checkbox" onclick="filterProducts()" name="category[]" value="{{$category->id}}">
                                        <label>{{ $category->name }}</label>
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    </form>
                </div>
            </div>

        </aside>
        <div class="shop-content-area col-lg-9  col-md-9">
            <div class="page-title-wrapper">
                <h1 class="page-title">Products</h1>
            </div>
            <div class="products-list-grid">
                <ol class="product-list-item" id="productList">
                    @if(isset($products) && sizeof($products) > 0)
                        @foreach($products as $product)
                            <li>
                                <div class="product-item">
                                    <a href="/products/{{$product->id}}" class="product-item-photo">
                                        <img src="/images/product-img.jpg" alt="">
                                    </a>

                                    <div class="product-item-details">
                                        <h3>{{ $product->name }}</h3>
                                        <div class="price-box">${{ $product->price }}</div>
                                        <span class="button  addtocart" title="Comming Soon" disabled>Add to Cart</span>
                                    </div>

                                </div>
                            </li>
                        @endforeach
                    @endif
                </ol>
            </div>

        </div>
    </div>
</div>
@endsection

@section('script')
    <script>

        $(function () {
            
        });
        
        function filterProducts() {
            var categoryIds = [];
            $(".category-items:checked").map(function() {
                categoryIds.push(this.value);
            }).get();

            $.ajax({
                type: "GET",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url:"{{ url('filter/products') }}",
                data: {
                    'categoryIds': categoryIds
                },
                success: function (data) {
                    if (data.status == 200) {
                        $("#productList").html(data.html);
                    }
                }
            });
            console.info(categoryIds);
        }
    </script>
@endsection