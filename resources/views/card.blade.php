
    <div class="us-module-item d-flex flex-column">

        <div class="us-module-img">
            <a href="#">
                <img src="https://mm.kh.ua/image/cache/catalog/samsung/39299-200x200.jpg"
                     alt="{{ $product->name }}"
                     title="{{ $product->name }}" class="img-fluid"/>
            </a>
        </div>
        <div class="us-module-title flex-grow-1">
            <a href="#">{{ $product->name }}</a>
        </div>

        <div class="us-module-model"><span class="mdls">Код товара: <span class="mod">39299</span></span></div>

        <div class="us-module-rating d-flex align-items-center justify-content-center">
            <div class="us-module-rating-stars d-flex align-items-center">
                <span class="us-module-rating-star"></span>
                <span class="us-module-rating-star"></span>
                <span class="us-module-rating-star"></span>
                <span class="us-module-rating-star"></span>
                <span class="us-module-rating-star"></span>
            </div>
            <div class="us-module-reviews">
                <i class="fas fa-comment">
                    <span>0</span>
                </i>
            </div>
        </div>
        <div class="us-module-price">
            <span class="us-module-price-actual">{{ $product->price }}</span>
        </div>
        {{ $product->category->name }}
{{--        {{ $product->getCategory()->name }}--}}
{{--        @isset($category)--}}
{{--            {{ $category->name }}--}}
{{--        @endisset--}}
        <a href="{{ route('basket') }}" class="us-module-cart-btn button-cart">В корзину</a>
        <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="btn btn-success mb-2 mr-3 ml-3">Подробнее</a>
    </div>

