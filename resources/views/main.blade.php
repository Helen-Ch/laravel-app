@extends('master',['id' => 'common-home'])

@section('title', 'Мобильный Мир © магазин мобильных телефонов и аксессуаров в Харькове')

@section('content')
<div class="row row-padding-top">
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
</div>
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

<div id="us-shop-advantages-0" class="row row-padding-top">
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
</div>

<div class="row row-padding-top us-four-banners">
    <div class="col-lg-6" id="oct_banner_plus_0_101">
        <div class="us-four-banners-item d-flex">
            <div class="us-four-banners-item-info d-flex flex-column justify-content-between">
                <div class="us-four-banners-item-info-top">
                    <div class="us-four-banners-item-title">Поколение Galaxy A</div>
                    <div class="us-four-banners-item-text"></div>
                </div>
                <a href="/index.php?route=product/search&amp;search=galaxy%20a" class="us-four-banners-item-btn">от 3145
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
                <a href="/235-acsessuari/340-acsessuari-telephoni/377-chehol-samsung" class="us-four-banners-item-btn">Смотреть</a>
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
                <a href="/index.php?route=product/search&amp;search=Galaxy%20Tab" class="us-four-banners-item-btn">Смотреть</a>
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
                <a href="/index.php?route=product/search&amp;search=Samsung%20Galaxy%20Buds"
                   class="us-four-banners-item-btn">Смотреть</a>
            </div>
            <div class="us-four-banners-item-img d-flex align-items-center justify-content-center">
                <img src="https://mm.kh.ua/image/cache/catalog/slides/slide-11320502-320x230.jpg"
                     alt="Открой свой максимум " title="Открой свой максимум "/>
            </div>
        </div>
    </div>

</div>

<div class="row row-padding-top">
    <div class="col-12">
        <div class="us-html-box">
            <h1>Мобильный Мир</h1>
            <div class="us-html-box-text"><p>Рады приветствовать Вас в интернет-магазине мобильных телефонов, планшетов
                    и прочей интересной техники - "Мобильный Мир"</p>
                <p><b>Наша цель - предоставить Вам самые выгодные условия приобретения интересующего Вас товара.
                        Обеспечить наилучшее&nbsp;качество продукции и обслуживания.</b></p>
                <p>И конечно же - достойный выбор моделей. Уверены, Вы найдете именно то, что вам нужно.</p>
                <p>Так что же мы можем Вам предложить? Огромный выбор гаджетов на любой вкус и карман. Сертифицированые
                    товары, имеющие официальную гарантию от производителя.</p>
                <p>Вы можете <a href="http://mm.kh.ua/250--" target="_blank">купить мобильный телефон в Харькове</a>,
                    без особых усилий, просто добавьте его в корзину и наслаждайтесь новым устройством в тот же день!
                </p>
                <p>Самые актуальные модели смартфонов уже в наличии,а также мы работаем под заказ! Просто сообщите нам
                    что Вам нужно, мы с радостью Вам поможем.</p>
                <p>В ассортименте нашего интернет магазина, есть не только телефоны. Нужен фотоаппарат? <a
                            href="http://mm.kh.ua/47-planshety" target="_blank">Планшет</a>? Электронная книга? Без
                    проблем! Звоните!</p>
                <p>Смартфоны и планшеты только проверенных, всемирно известных производителей: <a
                            href="http://mm.kh.ua/268-samsung" target="_blank">Samsung</a>, <a
                            href="http://mm.kh.ua/272-nokia" target="_blank">Nokia</a>, <a
                            href="http://mm.kh.ua/500-lenovo" target="_blank">Lenovo</a>, <a
                            href="http://mm.kh.ua/595-microsoft" target="_blank">Microsoft</a>, <a
                            href="http://mm.kh.ua/279-lg" target="_blank">LG</a> и многие других ТОПовых произодителей!
                </p>
                <p>К Вашему новому гаджету, у нас найдутся отличные аксесуары. Чехлы, защитные стекла и пленки, карты
                    памяти, наушники и многое другое!</p>
                <p>И самым приятным бонусом при покупке станет цена! Убедитесь сами! Лучшие цены на ноутбуки, сматрфоны
                    и планшеты в Харькове!!!</p></div>
        </div>
    </div>
</div>
<div class="row row-padding-top">
    <div class="col-lg-12">
        <div class="us-main-shop-title">
            Samsung
        </div>
    </div>
</div>
<div id="us-pfc-0" class="row">
    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 us-item">
    @include('card')
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 us-item">
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
            <a href="javascript:void(0);" onclick="cart.add('10637');" class="us-module-cart-btn button-cart">В
                корзину</a>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-lg-12">
        <div class="us-module-button">
            <button id="us-pfc-button-0" class="us-module-btn">Показать еще</button>
        </div>
    </div>
</div>
<script>
    octShowProducts("us-pfc-button-0", "us-pfc-0", 8, "16");
</script>

<div class="row row-padding-top">
    <div id="oct_banner_plus_1_1" class="us-banner-plus-wrap us-banner-plus-wrap-full-width col-sm-12">
        <div class="us-banner-plus-box h-100 py-0">
            <div class="us-banner-plus-inner d-flex align-items-center justify-content-between">
                <div class="us-banner-plus-info us-banner-plus-info-single d-flex flex-column h-100 justify-content-between">
                    <div class="us-banner-plus-title mb-3">Умные часы и браслеты</div>
                    <div class="us-banner-plus-text mb-4"></div>
                    <a href="/235-acsessuari/340-acsessuari-telephoni/557-Smart-watches-and-bracelets"
                       class="us-banner-plus-btn">Подробнее</a>
                </div>
                <div class="us-banner-plus-img us-banner-plus-img-single my-2">
                    <img src="https://mm.kh.ua/image/cache/catalog/slides/slide-12350502-200x200.jpg"
                         alt="Умные часы и браслеты" title="Умные часы и браслеты"/>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row row-padding-top">
    <div class="col-lg-12">
        <div class="us-main-shop-title">
            Новости / Блог
        </div>
    </div>
</div>
<div id="us-blog-article_0" class="row us-blog-article-row">
    <div class="col-lg-4 us-item">
        <div class="us-news-block h-100 d-flex flex-column">
            <div class="us-news-block-photo">
                <div class="us-news-stickers-date">
                    11.02.2021
                </div>
                <a href="https://mm.kh.ua/uslovija-kreditovanija-at-ukrsibbank-ru.html"
                   title="Условия кредитования АТ &quot;УКРСИББАНК&quot;" class="h-100 w-100"><img
                            src="https://mm.kh.ua/image/cache/catalog/logo-ukrsibbank-1000x1000.png" class="w-100"
                            alt="Условия кредитования АТ &quot;УКРСИББАНК&quot;"></a>
            </div>
            <div class="us-news-block-cont d-flex flex-column justify-content-start h-100">
                <a href="https://mm.kh.ua/uslovija-kreditovanija-at-ukrsibbank-ru.html" class="us-news-block-title">
                    Условия кредитования АТ &quot;УКРСИББАНК&quot;
                </a>
                <div class="us-news-block-text">
                    В данном разделе Вы можете ознакомиться с условиями кредитования и рассрочки от&nbsp;АТ
                    "УКРСИББАНК"..
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 us-item">
        <div class="us-news-block h-100 d-flex flex-column">
            <div class="us-news-block-photo">
                <div class="us-news-stickers-date">
                    19.08.2020
                </div>
                <a href="https://mm.kh.ua/vodonagrevateli-ariston-ru-1.html" title="Водонагреватели Ariston"
                   class="h-100 w-100"><img
                            src="https://mm.kh.ua/image/cache/catalog/Kategorii/vodonagrevatel-1000x1000.jpg"
                            class="w-100" alt="Водонагреватели Ariston"></a>
            </div>
            <div class="us-news-block-cont d-flex flex-column justify-content-start h-100">
                <a href="https://mm.kh.ua/vodonagrevateli-ariston-ru-1.html" class="us-news-block-title">
                    Водонагреватели Ariston
                </a>
                <div class="us-news-block-text">
                    Найти и купить водонагреватели Ariston в Харькове по действительно доступной цене теперь не составит
                    никакого труда! Вы можете заказать бойлер от данного производителя у нас на сайте и получить прямую
                    доставку к дому или же забрать свою покупку самостояте..
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="us-news-block-button us-module-button">
            <button id="us-news-block-btn0" class="us-module-btn">Показать еще</button>
        </div>
    </div>
</div>
<script>
    octShowProducts("us-news-block-btn0", "us-blog-article_0", "3", "8");
</script>
<script type="application/ld+json">
		{
  "@context": "http://schema.org",
  "@type": "Store",
  "@id": "https://mm.kh.ua/",
  "image": "",
  "name": "Мобильный Мир",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "пл.Конституции, 1",
    "addressLocality": "Харьков",
    "addressRegion": "Харьковская область",
    "postalCode": "61000",
    "addressCountry": "Украина"
  },
"telephone": "(095) 047-47-48",
"priceRange": ""
}
</script>

@endsection