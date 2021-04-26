
    <div class="us-module-item d-flex flex-column">

        <ul class="us-module-buttons-list">
            <li class="us-module-buttons-item">
                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-wishlist"
                   title="В закладки" onclick="wishlist.add('10637');"><i class="far fa-heart"></i></a>
            </li>
            <li class="us-module-buttons-item">
                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-compare"
                   title="В сравнение" onclick="compare.add('10637');"><i class="fas fa-sliders-h"></i></a>
            </li>

            <li class="us-module-buttons-item">
                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-quickview"
                   title="Быстрый просмотр" onclick="octPopUpView('10637')"><i class="far fa-eye"></i></a>
            </li>

        </ul>
        <div class="us-module-img">
            <a href="https://mm.kh.ua/samsung-galaxy-a01-core-2020-a013f-116gb-black-sm-a013fzkdsek-39299-ru.html">
                <img src="https://mm.kh.ua/image/cache/catalog/samsung/39299-200x200.jpg"
                     alt="Samsung Galaxy A01 Core 2020 A013F 1/16GB Black (SM-A013FZKDSEK)"
                     title="Samsung Galaxy A01 Core 2020 A013F 1/16GB Black (SM-A013FZKDSEK)" class="img-fluid"/>
            </a>
        </div>
        <div class="us-module-title flex-grow-1">
            <a href="https://mm.kh.ua/samsung-galaxy-a01-core-2020-a013f-116gb-black-sm-a013fzkdsek-39299-ru.html">Samsung
                Galaxy A01 Core 2020 A013F 1/16GB Black (SM-A013FZKDSEK)</a>
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
            <span class="us-module-price-actual">1 997 грн</span>
        </div>
        @isset($category)
            {{ $category->name }}
        @endisset
        <a href="{{ route('basket') }}" class="us-module-cart-btn button-cart">В корзину</a>
    </div>

