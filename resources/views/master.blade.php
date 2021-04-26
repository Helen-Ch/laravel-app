<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]>
<html dir="ltr" lang="ru" class="ie8"><![endif]-->
<!--[if IE 9 ]>
<html dir="ltr" lang="ru" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="ru">
<!--<![endif]-->
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Мобильный мир - @yield('title')</title>
    {{--    <base href="https://mm.kh.ua/" />--}}
    <link href="/css/bootstrap-reboot.min.css" type="text/css" rel="stylesheet" media="screen"/>
    <link href="/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen"/>
    <link href="/fontawesome-free-5.6.1-web/css/all.css" type="text/css" rel="stylesheet" media="screen"/>
    <link href="/css/owl.carousel.min.css" type="text/css" rel="stylesheet" media="screen"/>
    <link href="/css/fonts.css" type="text/css" rel="stylesheet" media="screen"/>
    <link href="/css/main.css" type="text/css" rel="stylesheet" media="screen"/>
    <link href="/css/responsive.css" type="text/css" rel="stylesheet" media="screen"/>
    <link href="/css/dynamic_stylesheet.css" type="text/css" rel="stylesheet" media="screen"/>
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/bootstrap-notify/bootstrap-notify.js"></script>
    <script src="/js/common.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <link href="https://mm.kh.ua" rel="canonical"/>
    <link href="https://mm.kh.ua/image/catalog/anwcc-bno3m.png" rel="icon"/>

    <style><?= file_get_contents('./css/begin.min.css'); ?></style>
</head>
<body>
<div id="us_menu_mobile_box" class="d-lg-none">
    <div id="us_menu_mobile_title" class="modal-header">
        <span class="modal-title">Меню</span>
        <button id="us_menu_mobile_close" type="button" class="us-close">
            <span aria-hidden="true" class="us-modal-close-icon us-modal-close-left"></span>
            <span aria-hidden="true" class="us-modal-close-icon us-modal-close-right"></span>
        </button>
    </div>
    <div id="us_menu_mobile_content"></div>
</div>
<nav id="top">
    <div class="container d-flex h-100">
        <div id="us_menu_mobile_button" class="us-menu-mobile d-lg-none h-100">
            <img src="catalog/view/theme/oct_ultrastore/img/burger.svg" class="us-navbar-toggler" alt=""/>
        </div>
        <div id="dropdown_menu_info" class="us-top-mobile-item us-top-mobile-item-info d-lg-none dropdown h-100">
            <img src="catalog/view/theme/oct_ultrastore/img/mobile-info.svg" class="us-navbar-info" alt=""/>
            <div id="us_info_mobile" class="nav-dropdown-menu">
                <div class="modal-header">
                    <h5 class="modal-title">Информация</h5>
                    <button id="us_info_mobile_close" type="button" class="us-close">
                        <span aria-hidden="true" class="us-modal-close-icon us-modal-close-left"></span>
                        <span aria-hidden="true" class="us-modal-close-icon us-modal-close-right"></span>
                    </button>
                </div>
                <div class="nav-dropdown-menu-content">
                    <ul class="list-unstyled mobile-information-box">
                        <li class="mobile-info-title"><strong>Информация</strong></li>
                        <li class="oct-menu-information-li"><a href="https://mm.kh.ua/contract-offer.html"
                                                               class="oct-menu-a">Договор оферты</a></li>
                        <li class="oct-menu-information-li"><a href="https://mm.kh.ua/4-o-kompanii.html"
                                                               class="oct-menu-a">О компании</a></li>
                        <li class="oct-menu-information-li"><a href="https://mm.kh.ua/1-payment-delivery.html"
                                                               class="oct-menu-a">Оплата и Доставка</a></li>
                        <li class="oct-menu-information-li"><a href="https://mm.kh.ua/privacy.html" class="oct-menu-a">Политика
                                конфиденциальности</a></li>
                        <li class="oct-menu-information-li"><a href="https://mm.kh.ua/6-garantiya-servis.html"
                                                               class="oct-menu-a">Гарантия и сервис</a></li>
                        <li class="oct-menu-information-li"><a href="https://mm.kh.ua/contacts.html" class="oct-menu-a">Сервисные
                                центры</a></li>
                    </ul>
                    <ul class="list-unstyled mobile-shedule-box">
                        <li class="mobile-info-title"><strong>Время работы:</strong></li>
                    </ul>
                    <ul class="list-unstyled mobile-address-box">
                        <li class="mobile-info-title"><strong>Наш адрес:</strong></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="top-left" class="mr-auto d-flex align-items-center">
            <div class="dropdown h-100">
                <a class="btn top-address btn-link dropdown-toggle d-flex align-items-center h-100" href="javascript:;"
                   role="button" id="dropdownMenuAddress" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false"><i class="fas fa-map-marker-alt"></i> <span>Наш адрес</span> <i
                            class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu nav-dropdown-menu address-dropdown-menu" aria-labelledby="dropdownMenuAddress">
                    <li class="dropdown-item us-dropdown-item">г. Харьков, пл.Конституции, 1</li>
                    <li class="us-mobile-map-box">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2565.202136585713!2d36.23009401593191!3d49.98881962840002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0f1462cbb5f%3A0x2cbf5de4c1202974!2z0L_Quy4g0JrQvtC90YHRgtC40YLRg9GG0LjQuCwgMSwg0KXQsNGA0YzQutC-0LIsINCl0LDRgNGM0LrQvtCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsIDYxMDAw!5e0!3m2!1sru!2sua!4v1577262739114!5m2!1sru!2sua"
                                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </li>
                </ul>
            </div>
            <div class="dropdown h-100">
                <a class="btn btn-shedule btn-link dropdown-toggle d-flex align-items-center h-100" href="javascript:;"
                   role="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                            class="far fa-clock"></i> <span>Время работы</span> <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu nav-dropdown-menu shedule-dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li class="dropdown-item us-dropdown-item">Понедельник-пятница с 10:00 до 19:00
                    </li>
                    <li class="dropdown-item us-dropdown-item">Суббота с 11:00 до 17:00,
                    </li>
                    <li class="dropdown-item us-dropdown-item">Воскресенье - выходной</li>
                </ul>
            </div>
            <ul class="top-info-ul">
                <li><a href="https://mm.kh.ua/4-o-kompanii.html" class="btn-link btn-block h-100 hidden-xs">О
                        компании</a></li>
                <li><a href="https://mm.kh.ua/1-payment-delivery.html" class="btn-link btn-block h-100 hidden-xs">Оплата
                        и Доставка</a></li>
                <li><a href="https://mm.kh.ua/6-garantiya-servis.html" class="btn-link btn-block h-100 hidden-xs">Гарантия
                        и сервис</a></li>
            </ul>
        </div>
        <div id="top-links" class="nav ml-auto d-flex">

            <div class="dropdown" id="us-account-dropdown">
                <a href="javascript:;" onclick="octPopupLogin();" title="Личный кабинет"
                   class="btn btn-user btn-link btn-block h-100" role="button" aria-haspopup="true"><img
                            src="catalog/view/theme/oct_ultrastore/img/user-mobile.svg" class="us-navbar-account"
                            alt=""/><i class="far fa-user"></i> <span class="hidden-xs">Личный кабинет</span></a>
            </div>
        </div>
        <a href="https://mm.kh.ua/index.php?route=account/wishlist"
           class="us-mobile-top-btn us-mobile-top-btn-wishlist d-lg-none h-100">
            <span class="us-mobile-top-btn-item"><img src="catalog/view/theme/oct_ultrastore/img/wishlist-mobile.svg"
                                                      alt=""/></span>
        </a>
        <a href="https://mm.kh.ua/index.php?route=product/compare"
           class="us-mobile-top-btn us-mobile-top-btn-compare d-lg-none h-100">
            <span class="us-mobile-top-btn-item"><img src="catalog/view/theme/oct_ultrastore/img/compare-mobile.svg"
                                                      alt=""/></span>
        </a>
        <a href="javascript:;" id="us_cart_mobile" class="us-mobile-top-btn us-mobile-top-btn-cart d-lg-none h-100"
           onclick="octPopupCart()">
            <span class="us-mobile-top-btn-item"><img src="catalog/view/theme/oct_ultrastore/img/cart-mobile.svg"
                                                      alt=""/><span id="mobile_cart_index"
                                                                    class="mobile-header-index">0</span></span>
        </a>

    </div>
</nav>
<header>
    <div class="container">
        <div class="row align-items-center">
            <div id="logo" class="col-6 col-lg-3 col-md-3 us-logo-box text-center">
                <a href="{{ route('main') }}">
                <img src="https://mm.kh.ua/image/catalog/logo_mobile.png"
                     title="Мобильный мир - Мобильный Мир © магазин мобильных телефонов и аксессуаров в Харькове"
                     alt="Мобильный мир - Мобильный Мир © магазин мобильных телефонов и аксессуаров в Харькове"
                     class="us-logo-img"/>
                </a>
            </div>

            <div class="col-12 col-lg-5 col-md-6 us-search-box">
                <div id="search" class="input-group header-input-group">
                    <input type="text" id="input_search" name="search" value="" placeholder="Поиск"
                           class="input-lg h-100 header-input"/>
                    <button type="button" id="oct-search-button" class="btn btn-search header-btn-search h-100"><i
                                class="fa fa-search"></i></button>
                    <div id="us_livesearch_close" onclick="clearLiveSearch();"><i class="fas fa-times"></i></div>
                    <div id="us_livesearch"></div>
                </div>

                <script>
                    function clearLiveSearch() {
                        $('#us_livesearch_close').removeClass('visible');
                        $('#us_livesearch').removeClass('expanded');
                        $('#us_livesearch').html('');
                        $('#input_search').val('');
                    }

                    $(document).ready(function () {
                        let timer, delay = 500;

                        $('#input_search').keyup(function () {
                            let _this = $(this);

                            clearTimeout(timer);

                            timer = setTimeout(function () {
                                let value = $('header #search input[name=\'search\']').val();

                                if (value.length > 2) {
                                    let key = encodeURIComponent(value);
                                    octsearch.search(key, 'desktop');
                                }

                            }, delay);
                        });
                    });
                </script>
            </div>
            <div class="col-6 col-lg-2 col-md-3 us-phone-box d-flex align-items-center">
                <div class="us-phone-img">
                    <img src="catalog/view/theme/oct_ultrastore/img/pnone-icon.svg" alt="phone-icon">
                </div>
                <div class="us-phone-content">
                    <a class="btn top-phone-btn dropdown-toggle" href="tel:0950474748
" role="button" id="us-phones-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>(095) 047-47-48
</span> <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-menu header-dropdown-menu" aria-labelledby="us-phones-dropdown">
                        <li><a href="tel:0950474748
" class="phoneclick"><i class="fas fa-phone-volume"></i> (095) 047-47-48
                            </a></li>
                        <li><a href="tel:0970249797" class="phoneclick"><i class="fas fa-phone-volume"></i> (097)
                                024-97-97</a></li>
                    </ul>
                </div>
            </div>
            <div id="cart" class="col-lg-2 us-cart-box d-flex align-items-center justify-content-end">
                <a href="{{ route('basket') }}">
                <button type="button" class="us-cart-img" onclick="octPopupCart()">
                    <img src="catalog/view/theme/oct_ultrastore/img/cart-icon.svg" alt="cart-icon">
                    <span class="header-cart-index">0</span>
                </button>
                </a>
                <div class="us-cart-content">
                    <p class="us-cart-text">
                        0 грн
                    </p>
                    <a href="https://mm.kh.ua/index.php?route=checkout/simplecheckout" class="us-cart-link">
                        Оформить заказ
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="menu-row sticky-top">
    <div class="container">
        <div class="row">
            <div id="oct-menu-box" class="col-lg-3">
                <div id="oct-ultra-menu-header" class="oct-ultra-menu d-flex align-items-center justify-content-center">
                    <a href="{{ route('categories') }}" class="oct-menu-a"><span class="oct-menu-item-name">Все категории</span></a>
                </div>
            </div>
            <div id="oct-megamenu-box" class="col-lg-9">
                <nav id="oct-megamenu" class="navbar">
                    <ul class="nav navbar-nav flex-row">


                        <li class="oct-mm-link">
                            <a href="javascript:void(0);">Популярное<i class="fas fa-chevron-down"></i></a>
                            <div class="oct-mm-dropdown oct-mm-full-width">
                                <div class="row">
                                    <div class="col-lg-8">

                                        <div class="row">


                                            <div class="oct-mm-hassubchild col-lg-3 d-flex flex-column">
                                                <a class="oct-mm-parent-link d-flex flex-column"
                                                   href="https://mm.kh.ua/250--">

                                                    <img src="https://mm.kh.ua/image/cache/catalog/Производители/smartfony-100x100.jpg"
                                                         alt="Мобильные телефоны" title="Мобильные телефоны"
                                                         class="oct-mm-parent-img oct-mm-parent-img-full-width"/>

                                                    <span class="oct-mm-parent-title">Мобильные телефоны</span>
                                                </a>
                                                <ul class="oct-mm-child list-unstyled">


                                                    <li><a href="https://mm.kh.ua/250--/mobilnye-telefony-realme-ru">Мобильные
                                                            телефоны Realme</a></li>


                                                    <li><a href="https://mm.kh.ua/250--/268-samsung">Мобильные телефоны
                                                            Samsung</a></li>


                                                    <li>
                                                        <a href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-samsung-ru">Аксессуары
                                                            к мобильным телефонам Samsung</a></li>


                                                    <li><a href="https://mm.kh.ua/250--/665-apple-iphone">Мобильные
                                                            телефоны Apple iPhone</a></li>


                                                    <li>
                                                        <a href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-apple-ru">Аксессуары
                                                            к мобильным телефонам Apple</a></li>

                                                    <li><i class="fas fa-long-arrow-alt-right"></i> <a
                                                                class="oct-mm-see-all" href="https://mm.kh.ua/250--">Смотреть
                                                            все</a></li>


                                                </ul>
                                            </div>

                                            <div class="oct-mm-hassubchild col-lg-3 d-flex flex-column">
                                                <a class="oct-mm-parent-link d-flex flex-column"
                                                   href="https://mm.kh.ua/7-computer-notebook/567-notebooks">

                                                    <img src="https://mm.kh.ua/image/cache/catalog/Производители/noutbuk-100x100.jpg"
                                                         alt="Ноутбуки" title="Ноутбуки"
                                                         class="oct-mm-parent-img oct-mm-parent-img-full-width"/>

                                                    <span class="oct-mm-parent-title">Ноутбуки</span>
                                                </a>
                                                <ul class="oct-mm-child list-unstyled">


                                                    <li>
                                                        <a href="https://mm.kh.ua/7-computer-notebook/567-notebooks/571-apple">Ноутбуки
                                                            Apple</a></li>


                                                    <li>
                                                        <a href="https://mm.kh.ua/7-computer-notebook/567-notebooks/xiaomi-ru-1">Ноутбуки
                                                            Xiaomi</a></li>


                                                </ul>
                                            </div>

                                            <div class="oct-mm-hassubchild col-lg-3 d-flex flex-column">
                                                <a class="oct-mm-parent-link d-flex flex-column"
                                                   href="https://mm.kh.ua/47-planshety">

                                                    <img src="https://mm.kh.ua/image/cache/catalog/Производители/planshety-100x100.jpg"
                                                         alt="Планшеты" title="Планшеты"
                                                         class="oct-mm-parent-img oct-mm-parent-img-full-width"/>

                                                    <span class="oct-mm-parent-title">Планшеты</span>
                                                </a>
                                                <ul class="oct-mm-child list-unstyled">


                                                    <li><a href="https://mm.kh.ua/47-planshety/265-samsung">Планшеты
                                                            Samsung</a></li>


                                                    <li>
                                                        <a href="https://mm.kh.ua/47-planshety/aksessuary-k-planshetam-samsung-ru">Аксессуары
                                                            к планшетам Samsung</a></li>


                                                    <li><a href="https://mm.kh.ua/47-planshety/apple-ru">Планшеты
                                                            Apple</a></li>


                                                    <li>
                                                        <a href="https://mm.kh.ua/47-planshety/aksessuary-k-planshetam-apple-ru">Аксессуары
                                                            к планшетам Apple</a></li>


                                                    <li><a href="https://mm.kh.ua/47-planshety/280-lenovo">Планшеты
                                                            Lenovo</a></li>

                                                    <li><i class="fas fa-long-arrow-alt-right"></i> <a
                                                                class="oct-mm-see-all"
                                                                href="https://mm.kh.ua/47-planshety">Смотреть все</a>
                                                    </li>


                                                </ul>
                                            </div>

                                            <div class="oct-mm-hassubchild col-lg-3 d-flex flex-column">
                                                <a class="oct-mm-parent-link d-flex flex-column"
                                                   href="https://mm.kh.ua/235-acsessuari">

                                                    <img src="https://mm.kh.ua/image/cache/catalog/Производители/aksessuary-100x100.jpg"
                                                         alt="Аксессуары" title="Аксессуары"
                                                         class="oct-mm-parent-img oct-mm-parent-img-full-width"/>

                                                    <span class="oct-mm-parent-title">Аксессуары</span>
                                                </a>
                                                <ul class="oct-mm-child list-unstyled">


                                                    <li>
                                                        <a href="https://mm.kh.ua/235-acsessuari/307-zaryadnie-ustroistva">Зарядные
                                                            устройства и кабели</a></li>


                                                    <li><a href="https://mm.kh.ua/235-acsessuari/625-selfiestick">Моноподы
                                                            для селфи </a></li>


                                                    <li><a href="https://mm.kh.ua/235-acsessuari/299-memory-Cards">Накопители
                                                            и карты памяти</a></li>


                                                    <li><a href="https://mm.kh.ua/235-acsessuari/297-Headphones">Наушники
                                                            и гарнитуры</a></li>


                                                    <li><a href="https://mm.kh.ua/235-acsessuari/592-protective-films">Универсальные
                                                            защитные плёнки</a></li>

                                                    <li><i class="fas fa-long-arrow-alt-right"></i> <a
                                                                class="oct-mm-see-all"
                                                                href="https://mm.kh.ua/235-acsessuari">Смотреть все</a>
                                                    </li>


                                                </ul>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div id="oct-mm-banner1" class="oct-mm-banner">
                                            <div class="oct-mm-banner-title">Качественное звучание доступно каждому!
                                            </div>
                                            <div class="oct-mm-banner-img">
                                                <img src="https://mm.kh.ua/image/catalog/us-bottom-banner-img-1.png"
                                                     alt="Качественное звучание доступно каждому!"/>
                                            </div>
                                            <div class="oct-mm-banner-text">Скидки до конца весны на всю продукцию фирмы
                                                Apple. Powerbank в
                                            </div>
                                            <a href="javascript:void(0);" class="oct-mm-banner-button">Подробнее</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>


                        <li class="oct-mm-simple-link"><a
                                    href="/index.php?route=product/category&amp;path=0">Новинки</a></li>


                        <li class="oct-mm-simple-link"><a href="/index.php?route=product/special">Акции</a></li>


                        <li class="oct-mm-link position-relative">
                            <a href="javascript:void(0);">Блог<i class="fas fa-chevron-down"></i></a>
                            <div class="oct-mm-dropdown oct-mm-dropdown-sm">
                                <div class="dropdown-inner">
                                    <ul class="oct-menu-ul oct-menu-parent-ul list-unstyled oct-menu-information-ul">

                                        <li class="oct-menu-li"><a href="https://mm.kh.ua/blog-ru/news-ru"
                                                                   class="oct-menu-a"><span class="oct-menu-item-name">Новости</span></a>
                                        </li>

                                        <li class="oct-menu-li"><a href="https://mm.kh.ua/blog-ru"
                                                                   class="oct-menu-a"><span class="oct-menu-item-name">Блог</span></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </li>


                        <li class="oct-mm-link position-relative">
                            <a href="javascript:void(0);">Информация<i class="fas fa-chevron-down"></i></a>
                            <div class="oct-mm-dropdown oct-mm-dropdown-sm">
                                <div class="dropdown-inner">
                                    <ul class="oct-menu-ul oct-menu-parent-ul list-unstyled oct-menu-information-ul">

                                        <li class="oct-menu-li"><a href="https://mm.kh.ua/4-o-kompanii.html"
                                                                   class="oct-menu-a"><span class="oct-menu-item-name">О компании</span></a>
                                        </li>

                                        <li class="oct-menu-li"><a href="https://mm.kh.ua/1-payment-delivery.html"
                                                                   class="oct-menu-a"><span class="oct-menu-item-name">Оплата и Доставка</span></a>
                                        </li>

                                        <li class="oct-menu-li"><a href="https://mm.kh.ua/6-garantiya-servis.html"
                                                                   class="oct-menu-a"><span class="oct-menu-item-name">Гарантия и сервис</span></a>
                                        </li>

                                        <li class="oct-menu-li"><a href="https://mm.kh.ua/contacts.html"
                                                                   class="oct-menu-a"><span class="oct-menu-item-name">Сервисные центры</span></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="oct-mm-simple-link"><a
                                    href="/index.php?route=octemplates/module/oct_sreview_reviews">Отзывы</a></li>


                        <li class="oct-mm-simple-link"><a href="/index.php?route=information/contact">Контакты</a></li>


                    </ul>
                </nav>
            </div>

        </div>
    </div>
</div>
<div id="{{ $id ?? '' }}" class="container {{ $class ?? '' }}">
    @yield('content')
</div>


<footer>

    <div id="back-top">
        <a href="#top"><i class="fas fa-chevron-up"></i></a>
    </div>


    <div id="us_fixed_contact_substrate"></div>
    <div id="us_fixed_contact_button" class="d-flex align-items-center justify-content-center">
        <div class="us-fixed-contact-pulsation"></div>
        <div class="us-fixed-contact-icon d-flex align-items-center justify-content-center"><i
                    class="far fa-comment-dots"></i><i class="fas fa-times d-none"></i></div>
        <div class="us-fixed-contact-dropdown d-flex flex-column align-items-start">


            <a href="mailto:info@mm.kh.ua" class="us-fixed-contact-item d-flex align-items-center"><span
                        class="us-fixed-contact-item-icon us-fixed-contact-email d-flex align-items-center justify-content-center"><i
                            class="far fa-envelope"></i></span><span>info@mm.kh.ua</span></a>

            <a id="uptocall-mini" href="javascript:;" onclick="octPopupCallPhone()"
               class="us-fixed-contact-item d-flex align-items-center"><span
                        class="us-fixed-contact-item-icon us-fixed-contact-call d-flex align-items-center justify-content-center"><i
                            class="fas fa-phone"></i></span><span>Заказать звонок</span></a>
        </div>
    </div>

    <div class="container footer-sub">

        <div class="row us-foooter-subscribe-row">
            <div class="col-md-12 col-lg-6">
                <div class="us-footer-subscribe-text d-flex align-items-center">
                    <div class="us-footer-subscribe-text-icon">
                        <img src="catalog/view/theme/oct_ultrastore/img/footer-subscribe-icon.svg" alt=""/>
                    </div>
                    <div class="us-footer-subscribe-text-text">
                        <div>Хотите узнавать первым об акциях и скидках?</div>
                        <div>Подпишитесь на нашу рассылку</div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="us-footer-subscribe-form">
                    <form action="javascript:;" id="footer-subscribe">
                        <div class="us-footer-form-top d-flex">
                            <input type="email" id="InputSubscribeEmail" class="us-footer-form-top-input" name="email"
                                   placeholder="Введите ваш e-mail">
                            <button type="submit" id="footer-make-subscribe" class="us-footer-form-top-buttton">
                                Подписаться
                            </button>
                        </div>
                        <div class="us-footer-form-bottom">
                            <input type="checkbox" id="scales" class="us-footer-form-bottom-input" name="agree">
                            <label for="scales" class="d-flex-inline align-items-center">
                                Я прочитал <a href="https://mm.kh.ua/privacy.html" target="_blank">Политика
                                    конфиденциальности</a> и согласен с условиями
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 us-footer-box">
                <div class="us-footer-title">Информация<i class="fas fa-chevron-down d-md-none"></i></div>
                <ul class="us-footer-list  list-unstyled">
                    <li class="us-footer-item us-footer-information"><a href="https://mm.kh.ua/1-payment-delivery.html"
                                                                        class="us-footer-link">Оплата и Доставка</a>
                    </li>
                    <li class="us-footer-item us-footer-information"><a href="https://mm.kh.ua/4-o-kompanii.html"
                                                                        class="us-footer-link">О компании</a></li>
                    <li class="us-footer-item us-footer-information"><a href="https://mm.kh.ua/6-garantiya-servis.html"
                                                                        class="us-footer-link">Гарантия и сервис</a>
                    </li>
                    <li class="us-footer-item us-footer-information"><a href="https://mm.kh.ua/contacts.html"
                                                                        class="us-footer-link">Сервисные центры</a></li>
                    <li class="us-footer-item us-footer-information"><a href="https://mm.kh.ua/privacy.html"
                                                                        class="us-footer-link">Политика
                            конфиденциальности</a></li>
                    <li class="us-footer-item us-footer-information"><a href="https://mm.kh.ua/contract-offer.html"
                                                                        class="us-footer-link">Договор оферты</a></li>
                    <li class="us-footer-item us-footer-information"><a
                                href="https://mm.kh.ua/index.php?route=information/contact" class="us-footer-link">Связаться
                            с нами</a></li>
                    <li class="us-footer-item us-footer-information"><a
                                href="https://mm.kh.ua/index.php?route=account/return/add" class="us-footer-link">Возврат
                            товара</a></li>
                    <li class="us-footer-item us-footer-information"><a
                                href="https://mm.kh.ua/index.php?route=information/sitemap" class="us-footer-link">Карта
                            сайта</a></li>
                    <li class="us-footer-item us-footer-information"><a
                                href="https://mm.kh.ua/index.php?route=product/manufacturer" class="us-footer-link">Производители</a>
                    </li>
                    <li class="us-footer-item us-footer-information"><a
                                href="https://mm.kh.ua/index.php?route=account/voucher" class="us-footer-link">Подарочные
                            сертификаты</a></li>
                    <li class="us-footer-item us-footer-information"><a
                                href="https://mm.kh.ua/index.php?route=product/special" class="us-footer-link">Акции</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 us-footer-box us-footer-shedule-box">
                <div class="us-footer-title">Время работы<i class="fas fa-chevron-down d-md-none"></i></div>
                <div class="us-footer-list">
                    <div class="us-footer-shedule d-flex align-items-center">
                        <div class="us-footer-shedule-icon">
                            <img src="catalog/view/theme/oct_ultrastore/img/footer-shedule-icon.svg" alt=""/>
                        </div>
                        <ul class="us-footer-shedule-text list-unstyled mb-0">
                            <li class="us-footer-shedule-text-item">Понедельник-пятница с 10:00 до 19:00
                            </li>
                            <li class="us-footer-shedule-text-item">Суббота с 11:00 до 17:00,
                            </li>
                            <li class="us-footer-shedule-text-item">Воскресенье - выходной</li>
                        </ul>
                    </div>
                    <div class="us-footer-social">
                        <div class="us-footer-social-text us-footer-text">Мы в социальных сетях:</div>
                        <ul class="us-footer-social-list d-flex list-unstyled">
                            <li class="us-footer-social-item"><a href="https://www.facebook.com/mm.kh.ua"
                                                                 class="us-footer-social-link us-footer-social-link-fa-facebook-f"
                                                                 target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="us-footer-social-item"><a href="https://instagram.com/mm.kh.ua"
                                                                 class="us-footer-social-link us-footer-social-link-fa-instagram"
                                                                 target="_blank"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 us-footer-box">
                <div class="us-footer-title">Наши контакты<i class="fas fa-chevron-down d-md-none"></i></div>
                <div class="us-footer-list us-footer-contact-box">
                    <a class="btn us-footer-phone-btn top-phone-btn dropdown-toggle d-flex align-items-center" href="tel:0950474748
" role="button" id="dropdownMenu5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">(095) 047-47-48
                        <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-menu header-dropdown-menu" aria-labelledby="dropdownMenu5">
                        <li><a href="tel:0950474748
" class="phoneclick"><i class="fas fa-phone-volume"></i> (095) 047-47-48
                            </a></li>
                        <li><a href="tel:0970249797" class="phoneclick"><i class="fas fa-phone-volume"></i> (097)
                                024-97-97</a></li>
                    </ul>
                    <a href="mailto:info@mm.kh.ua" class="us-footer-mail">info@mm.kh.ua</a>
                    <div class="us-footer-address">г. Харьков, пл.Конституции, 1</div>
                    <ul class="us-footer-contact-list d-flex list-unstyled">
                    </ul>
                </div>
            </div>
        </div>
        <div class="row row-padding-top">
            <div class="col-lg-12">
                <div class="us-footer-bottom d-flex justify-content-between">
                    <div class="us-footer-bottom-credits"><br/> Мобильный мир - Мобильный Мир © магазин мобильных
                        телефонов и аксессуаров в Харькове &copy; 2021
                    </div>
                    <ul class="us-footer-bottom-payment-list d-flex list-unstyled">

                        <li class="us-footer-bottom-payment-item privat24"></li>


                        <li class="us-footer-bottom-payment-item visa"></li>


                        <li class="us-footer-bottom-payment-item liqpay"></li>


                        <li class="us-footer-bottom-payment-item mastercard"></li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="modal-holder"></div>
</body>
</html>