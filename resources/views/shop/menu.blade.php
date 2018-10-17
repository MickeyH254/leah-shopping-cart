<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="books-item">
                <div class="books-item-thumb">
                    <img src="{{ asset($product->image) }}" alt="food">
                    <div class="new">New</div>
                    <div class="sale">Sale</div>
                    <div class="overlay overlay-books"></div>
                </div>

                <div class="books-item-info">
                <a href="{{ route('product.single', ['id' => $product->id]) }}">
                    <h5 class="books-title">{{ $product->name }}</h5>
                </a>
                    <div class="books-price">Ksh {{ $product->price }}</div>
                </div>

                <a href="{{ route('cart.rapid.add', ['id' => $product->id] ) }}" class="btn btn-small btn--dark add">
                    <span class="text">Add to Cart</span>
                    <i class="seoicon-commerce"></i>
                </a>

            </div>
        </div>