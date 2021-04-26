@extends('master',['id' => 'common-home'])

@section('title', 'Мобильный Мир © магазин мобильных телефонов и аксессуаров в Харькове')

@section('content')
<?php /*<div class="row row-padding-top">
    <div class="col-lg-9 us-slideshow-plus-box">
        <div id="us-slideshow-plus-0" class="owl-carousel">
            <div class="us-slideshow-plus-item us-slideshow-plus-item_1 d-flex align-items-center justify-content-between h-100">
                <div class="us-slideshow-plus-item-info">
                    <p class="us-slideshow-plus-item-title">Большой и яркий экран: GALAXY A12 3/32</p>
                    <p class="us-slideshow-plus-item-text">SAMSUNG | 4 камеры и мощная батарея</p>
                    <a href="/index.php?route=product/search&amp;search=samsung%20galaxy%20A12%203%2F32"
                       class="us-slideshow-plus-item-btn">Купить</a>
                </div>
                <div class="us-slideshow-plus-item-img">
                    <img src="https://mm.kh.ua/image/cache/catalog/Kategorii/a12-samsung-galaxy-293x293.jpg"
                         alt="Большой и яркий экран: GALAXY A12 3/32">
                </div>

            </div>
            <div class="us-slideshow-plus-item us-slideshow-plus-item_2 d-flex align-items-center justify-content-between h-100">
                <div class="us-slideshow-plus-item-info">
                    <p class="us-slideshow-plus-item-title">Огоо..... Samsung Galaxy A12 4/64GB</p>
                    <p class="us-slideshow-plus-item-text">Gorilla Glass | 5000 mAч | 4 669 грн.</p>
                    <a href="/index.php?route=product/search&amp;search=Samsung%20Galaxy%20A12%204%2F64GB"
                       class="us-slideshow-plus-item-btn">Купить</a>
                </div>
                <div class="us-slideshow-plus-item-img">
                    <img src="https://mm.kh.ua/image/cache/catalog/Kategorii/A12-4-64-293x293.jpg"
                         alt="Огоо..... Samsung Galaxy A12 4/64GB">
                </div>

            </div>
            <div class="us-slideshow-plus-item us-slideshow-plus-item_3 d-flex align-items-center justify-content-between h-100">
                <div class="us-slideshow-plus-item-info">
                    <p class="us-slideshow-plus-item-title">Samsung Galaxy A02s 3/32</p>
                    <p class="us-slideshow-plus-item-text">Безграничный V-экран для больших возможностей | 3 499
                        грн.</p>
                    <a href="/index.php?route=product/search&amp;search=Samsung%20Galaxy%20A02s%203%2F32GB"
                       class="us-slideshow-plus-item-btn">Купить</a>
                </div>
                <div class="us-slideshow-plus-item-img">
                    <img src="https://mm.kh.ua/image/cache/catalog/Kategorii/A02s-3-32-293x293.jpg"
                         alt="Samsung Galaxy A02s 3/32">
                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-3 us-slideshow-plus-blocks" id="us-slideshow-plus-block-0">
        <div class="us-slideshow-plus-block" id="block_1">
            <img src="https://mm.kh.ua/image/cache/catalog/slides/slide-12240502-255x190.jpg"
                 class="us-slideshow-plus-block-img" alt="от 3755 грн."/>
            <a href="/index.php?route=product/search&amp;search=a20" class="us-slideshow-plus-block-btn"
               title="от 3755 грн.">от 3755 грн.</a>
            <p class="us-slideshow-plus-block-text">Samsung Galaxy A20</p>
        </div>
        <div class="us-slideshow-plus-block" id="block_2">
            <img src="https://mm.kh.ua/image/cache/catalog/slides/slide-12280502-255x190.jpg"
                 class="us-slideshow-plus-block-img" alt="Подробнее"/>
            <a href="/index.php?route=product/search&amp;search=Samsung%20Galaxy%20Buds"
               class="us-slideshow-plus-block-btn" title="Подробнее">Подробнее</a>
            <p class="us-slideshow-plus-block-text">Samsung Galaxy Buds</p>
        </div>
    </div>
</div>*/?>
<script>
    $(document).ready(function () {
        $('#us-slideshow-plus-0').owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayHoverPause: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 500,
            navigation: false,
            pagination: true
        });
    });
</script>

<?php /*<div id="us-shop-advantages-0" class="row row-padding-top">
    <div class="col-md-6 col-lg-3 us-advantages-item">
        <div class="us-advantages-box d-flex align-items-center justify-content-start h-100" id="block1">
            <div class="us-advantages-img">
                <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="us-advantages-cont">
                <div class="us-advantages-title">
                    Удобные пункт самовывоза
                </div>
                <p class="us-advantages-text">
                    Харьков, пл.Конституции, 1
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 us-advantages-item">
        <div class="us-advantages-box d-flex align-items-center justify-content-start h-100" id="block2">
            <div class="us-advantages-img">
                <i class="fas fa-archive"></i>
            </div>
            <div class="us-advantages-cont">
                <div class="us-advantages-title">
                    Возврат и обмен товара
                </div>
                <p class="us-advantages-text">
                    Гарантируем возврат и обмен товара
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 us-advantages-item">
        <div class="us-advantages-box d-flex align-items-center justify-content-start h-100" id="block3">
            <div class="us-advantages-img">
                <i class="far fa-thumbs-up"></i>
            </div>
            <div class="us-advantages-cont">
                <div class="us-advantages-title">
                    Online-кредит
                </div>
                <p class="us-advantages-text">
                    За 5 минут не выходя из дома.
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 us-advantages-item">
        <div class="us-advantages-box d-flex align-items-center justify-content-start h-100" id="block4">
            <div class="us-advantages-img">
                <i class="fas fa-check"></i>
            </div>
            <div class="us-advantages-cont">
                <div class="us-advantages-title">
                    Гарантия на товар
                </div>
                <p class="us-advantages-text">
                    Сертифицированное обслуживание товара.
                </p>
            </div>
        </div>
    </div>
</div>*/?>

<?php /*<div class="row row-padding-top us-four-banners">
    <div class="col-lg-6" id="oct_banner_plus_0_101">
        <div class="us-four-banners-item d-flex">
            <div class="us-four-banners-item-info d-flex flex-column justify-content-between">
                <div class="us-four-banners-item-info-top">
                    <div class="us-four-banners-item-title">Поколение Galaxy A</div>
                    <div class="us-four-banners-item-text"></div>
                </div>
                <a href="#" class="us-four-banners-item-btn">от 3145
                    грн.</a>
            </div>
            <div class="us-four-banners-item-img d-flex align-items-center justify-content-center">
                <img src="https://mm.kh.ua/image/cache/catalog/galaxy_a-320x230.jpg" alt="Поколение Galaxy A"
                     title="Поколение Galaxy A"/>
            </div>
        </div>
    </div>

    <div class="col-lg-6" id="oct_banner_plus_0_102">
        <div class="us-four-banners-item d-flex">
            <div class="us-four-banners-item-info d-flex flex-column justify-content-between">
                <div class="us-four-banners-item-info-top">
                    <div class="us-four-banners-item-title">Чехлы для Samsung</div>
                    <div class="us-four-banners-item-text"></div>
                </div>
                <a href="#" class="us-four-banners-item-btn">Смотреть</a>
            </div>
            <div class="us-four-banners-item-img d-flex align-items-center justify-content-center">
                <img src="https://mm.kh.ua/image/cache/catalog/slides/slide-11360502-320x230.jpg"
                     alt="Чехлы для Samsung" title="Чехлы для Samsung"/>
            </div>
        </div>
    </div>

    <div class="col-lg-6" id="oct_banner_plus_0_103">
        <div class="us-four-banners-item d-flex">
            <div class="us-four-banners-item-info d-flex flex-column justify-content-between">
                <div class="us-four-banners-item-info-top">
                    <div class="us-four-banners-item-title">Планшеты Galaxy Tab</div>
                    <div class="us-four-banners-item-text"></div>
                </div>
                <a href="#" class="us-four-banners-item-btn">Смотреть</a>
            </div>
            <div class="us-four-banners-item-img d-flex align-items-center justify-content-center">
                <img src="https://mm.kh.ua/image/cache/catalog/Tab6S-320x230.jpg" alt="Планшеты Galaxy Tab"
                     title="Планшеты Galaxy Tab"/>
            </div>
        </div>
    </div>

    <div class="col-lg-6" id="oct_banner_plus_0_104">
        <div class="us-four-banners-item d-flex">
            <div class="us-four-banners-item-info d-flex flex-column justify-content-between">
                <div class="us-four-banners-item-info-top">
                    <div class="us-four-banners-item-title">Открой свой максимум</div>
                    <div class="us-four-banners-item-text">с Galaxy Buds</div>
                </div>
                <a href="#"
                   class="us-four-banners-item-btn">Смотреть</a>
            </div>
            <div class="us-four-banners-item-img d-flex align-items-center justify-content-center">
                <img src="https://mm.kh.ua/image/cache/catalog/slides/slide-11320502-320x230.jpg"
                     alt="Открой свой максимум " title="Открой свой максимум "/>
            </div>
        </div>
    </div>

</div>*/?>

<div class="row row-padding-top">
    <div class="col-lg-12">
        <div class="us-main-shop-title">
            Samsung
        </div>
    </div>
</div>
<div id="us-pfc-0" class="row">
    @foreach($products as $product)
    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            @include('card', compact($product))
    </div>
    @endforeach

</div>

@endsection