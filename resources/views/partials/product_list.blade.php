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