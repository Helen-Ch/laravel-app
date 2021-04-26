@extends('master', ['id' => 'product-category', 'class' => $category->code])

@section('title', 'Категория' . $category->name)

@section('content')
<nav aria-label="breadcrumb">
    <ul class="breadcrumb us-breadcrumb">
        <li class="breadcrumb-item us-breadcrumb-item"><a href="https://mm.kh.ua"><i class="fa fa-home"></i></a></li>
        <li class="breadcrumb-item us-breadcrumb-item">{{ $category->name }}</li>
    </ul>
</nav>
<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement":
	[
																{
				"@type": "ListItem",
				"position": 1,
				"item":
				{
					"@id": "https://mm.kh.ua/250--",
					"name": "{{ $category->name }}"
				}
			}						]
}

</script>

<div class="row">
    <div class="col-lg-12">
        <h1 class="us-main-shop-title">Купить {{ $category->name }} в Харькове по самым низким ценам</h1>
        <p>{{ $category->description }}</p>
    </div>
</div>
<div class="content-top-box">

    <script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [{
	    "@type": "ListItem",
	    "position": 1,
	    "item": {
	      "@id": "https://mm.kh.ua",
	      "name": "Главная"
	    }},{
	    "@type": "ListItem",
	    "position": 2,
	    "item": {
	      "@id": "https://mm.kh.ua/250--",
	      "name": "Мобильные телефоны"
	    }}]
}

    </script>

</div>
<div class="us-category-content">
    <div class="row">
        <aside id="column-left" class="col-md-3">
            <section class="dream-filter filter-vertical rdf-side-right" id="rdrf51">
                <button id="rdrf-toggle51" type="button" class="btn btn-block rdf-mobile-toggle btn-primary">
                    <i class="fa fa-filter"></i>
                </button>
                <form id="rdrf-form51" class="rdf-form" action="https://mm.kh.ua/250--" method="get"
                      enctype="multipart/form-data">
                    <input type="hidden" name="sort" value="">
                    <input type="hidden" name="order" value="">
                    <input type="hidden" name="limit" value="">
                    <div class="rdf-header">
                        <h3>Фильтр</h3>
                    </div>
                    <div class="rdf-body">
                        <div class="rdf-filters">
                            <div class="rdf-picked">
                            </div>
                            <div class="panel-group">
                                <div class="panel panel-default" id="rdrf51-price">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a data-toggle="collapse" class="in " href="#rdrf51-price-collapse">
                                                <i class="fa fa-chevron-down pull-right"></i>
                                                Цена
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="rdrf51-price-collapse" class="panel-collapse collapse in  show">
                                        <div class="panel-body">
                                            <div class="form-group ">
                                                <div class="rdf-group">
                                                    <div class="irs-notinit slidewrapper">
                                                        <input type="hidden" id="rdrf51-price-input" value=""
                                                               name="rdrf[price]" data-id="rdrf51-price"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default" id="rdrf51-man">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a data-toggle="collapse" class="in " href="#rdrf51-man-collapse">
                                                <i class="fa fa-chevron-down pull-right"></i>
                                                Производители
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="rdrf51-man-collapse" class="panel-collapse collapse in  show">
                                        <div class="panel-body">
                                            <div class="form-group rdf-truncate-height">
                                                <div class="rdf-group">
                                                    <div id="rdrf51-man-3" class="checkbox rdf-val">
                                                        <label>
                                                            <input type="checkbox" name="rdrf[man][]" value="3"
                                                                   data-id="rdrf51-man-3">
                                                            <span>Apple</span>
                                                        </label>
                                                        <span class="rdf-label"></span>
                                                    </div>
                                                    <div id="rdrf51-man-215" class="checkbox rdf-val">
                                                        <label>
                                                            <input type="checkbox" name="rdrf[man][]" value="215"
                                                                   data-id="rdrf51-man-215">
                                                            <span>Aspor</span>
                                                        </label>
                                                        <span class="rdf-label"></span>
                                                    </div>
                                                    <div id="rdrf51-man-188" class="checkbox rdf-val">
                                                        <label>
                                                            <input type="checkbox" name="rdrf[man][]" value="188"
                                                                   data-id="rdrf51-man-188">
                                                            <span>Baseus</span>
                                                        </label>
                                                        <span class="rdf-label"></span>
                                                    </div>
                                                    <div id="rdrf51-man-44" class="checkbox rdf-val">
                                                        <label>
                                                            <input type="checkbox" name="rdrf[man][]" value="44"
                                                                   data-id="rdrf51-man-44">
                                                            <span>ERGO</span>
                                                        </label>
                                                        <span class="rdf-label"></span>
                                                    </div>
                                                    <div id="rdrf51-man-134" class="checkbox rdf-val">
                                                        <label>
                                                            <input type="checkbox" name="rdrf[man][]" value="134"
                                                                   data-id="rdrf51-man-134">
                                                            <span>HUAWEI</span>
                                                        </label>
                                                        <span class="rdf-label"></span>
                                                    </div>
                                                    <div id="rdrf51-man-226" class="checkbox rdf-val">
                                                        <label>
                                                            <input type="checkbox" name="rdrf[man][]" value="226"
                                                                   data-id="rdrf51-man-226">
                                                            <span>INAVI</span>
                                                        </label>
                                                        <span class="rdf-label"></span>
                                                    </div>
                                                    <div id="rdrf51-man-189" class="checkbox rdf-val">
                                                        <label>
                                                            <input type="checkbox" name="rdrf[man][]" value="189"
                                                                   data-id="rdrf51-man-189">
                                                            <span>ITSKINS</span>
                                                        </label>
                                                        <span class="rdf-label"></span>
                                                    </div>
                                                    <div id="rdrf51-man-131" class="checkbox rdf-val">
                                                        <label>
                                                            <input type="checkbox" name="rdrf[man][]" value="131"
                                                                   data-id="rdrf51-man-131">
                                                            <span>Melkco</span>
                                                        </label>
                                                        <span class="rdf-label"></span>
                                                    </div>
                                                    <div id="rdrf51-man-148" class="checkbox rdf-val">
                                                        <label>
                                                            <input type="checkbox" name="rdrf[man][]" value="148"
                                                                   data-id="rdrf51-man-148">
                                                            <span>Nillkin</span>
                                                        </label>
                                                        <span class="rdf-label"></span>
                                                    </div>
                                                    <div id="rdrf51-man-227" class="checkbox rdf-val">
                                                        <label>
                                                            <input type="checkbox" name="rdrf[man][]" value="227"
                                                                   data-id="rdrf51-man-227">
                                                            <span>OPPO</span>
                                                        </label>
                                                        <span class="rdf-label"></span>
                                                    </div>
                                                    <div id="rdrf51-man-64" class="checkbox rdf-val">
                                                        <label>
                                                            <input type="checkbox" name="rdrf[man][]" value="64"
                                                                   data-id="rdrf51-man-64">
                                                            <span>Ozaki</span>
                                                        </label>
                                                        <span class="rdf-label"></span>
                                                    </div>
                                                    <div id="rdrf51-man-63" class="checkbox rdf-val">
                                                        <label>
                                                            <input type="checkbox" name="rdrf[man][]" value="63"
                                                                   data-id="rdrf51-man-63">
                                                            <span>SGP</span>
                                                        </label>
                                                        <span class="rdf-label"></span>
                                                    </div>
                                                    <div id="rdrf51-man-216" class="checkbox rdf-val">
                                                        <label>
                                                            <input type="checkbox" name="rdrf[man][]" value="216"
                                                                   data-id="rdrf51-man-216">
                                                            <span>SMTT</span>
                                                        </label>
                                                        <span class="rdf-label"></span>
                                                    </div>
                                                    <div id="rdrf51-man-5" class="checkbox rdf-val">
                                                        <label>
                                                            <input type="checkbox" name="rdrf[man][]" value="5"
                                                                   data-id="rdrf51-man-5">
                                                            <span>Samsung</span>
                                                        </label>
                                                        <span class="rdf-label"></span>
                                                    </div>
                                                    <div id="rdrf51-man-65" class="checkbox rdf-val">
                                                        <label>
                                                            <input type="checkbox" name="rdrf[man][]" value="65"
                                                                   data-id="rdrf51-man-65">
                                                            <span>White Diamonds</span>
                                                        </label>
                                                        <span class="rdf-label"></span>
                                                    </div>
                                                    <div id="rdrf51-man-197" class="checkbox rdf-val">
                                                        <label>
                                                            <input type="checkbox" name="rdrf[man][]" value="197"
                                                                   data-id="rdrf51-man-197">
                                                            <span>Xiaomi</span>
                                                        </label>
                                                        <span class="rdf-label"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rdf-footer">
                        <button id="rdrf-reset51" type="button" class="btn btn-block btn-default"
                                data-loading-text="Загрузка...">Сброс
                        </button>
                        <button type="submit" class="btn btn-block btn-primary" data-loading-text="Загрузка...">Найти
                        </button>
                    </div>
                </form>
            </section>
            <script type="text/javascript">
                $(document).ready(function () {
                    $("#rdrf-form51").dreamFilter({
                        module: 51,
                        widget: "rdrf51",
                        search_mode: "manual",
                        disable_null: "disable",
                        count_show: false,
                        show_picked: true,
                        reset_id: "rdrf-reset51",
                        loader: "<div class=\"rdf-loader\"><div class=\"ball-pulse\"><div></div><div></div><div></div></div></div>",
                        truncate: {
                            "mode": "height",
                            "view": "scrollbar",
                            "scrollbar": true,
                            "height": "200px",
                            "elements": false
                        },
                        mobile: {
                            "mode": "fixed",
                            "width": "768",
                            "button_text": {"1": "&lt;i class=&quot;fa fa-filter&quot;&gt;&lt;\/i&gt;"},
                            "side": "right",
                            "indenting_top": "50",
                            "indenting_bottom": "10",
                            "button_id": "rdrf-toggle51"
                        },
                        ajax: {
                            "enable": true,
                            "selector": "#content",
                            "pagination": "#content .pagination",
                            "sorter": "#input-sort",
                            "sorter_type": "select",
                            "limit": "#input-limit",
                            "limit_type": "select",
                            "pushstate": true,
                            "scroll": false,
                            "offset": false
                        },
                        popper: {
                            "enable": false,
                            "id": "rdrf-popper51",
                            "button_id": "rdrf-popper-btn51",
                            "button": "\u041f\u043e\u043a\u0430\u0437\u0430\u0442\u044c",
                            "action": "https:\/\/mm.kh.ua\/index.php?route=extension\/module\/dream_filter\/count&path=250"
                        },
                        filters: {
                            "rdrf51-price": {
                                "title": "\u0426\u0435\u043d\u0430",
                                "type": "slider",
                                "range": {"min": 19, "max": 54999},
                                "input_id": "rdrf51-price-input"
                            },
                            "rdrf51-man": {
                                "title": "\u041f\u0440\u043e\u0438\u0437\u0432\u043e\u0434\u0438\u0442\u0435\u043b\u0438",
                                "type": "checkbox",
                                "values": {
                                    "rdrf51-man-3": 90,
                                    "rdrf51-man-215": 62,
                                    "rdrf51-man-188": 18,
                                    "rdrf51-man-44": 6,
                                    "rdrf51-man-134": 7,
                                    "rdrf51-man-226": 2,
                                    "rdrf51-man-189": 2,
                                    "rdrf51-man-131": 3,
                                    "rdrf51-man-148": 16,
                                    "rdrf51-man-227": 14,
                                    "rdrf51-man-64": 58,
                                    "rdrf51-man-63": 1,
                                    "rdrf51-man-216": 18,
                                    "rdrf51-man-5": 179,
                                    "rdrf51-man-65": 4,
                                    "rdrf51-man-197": 184
                                }
                            }
                        },
                    });
                    $("#rdrf51-price-input").ionRangeSlider({
                        "type": "double",
                        "force_edges": true,
                        "from_shadow": true,
                        "grid": false,
                        "prefix": "",
                        "postfix": " \u0433\u0440\u043d",
                        "min": 19,
                        "max": 54999,
                        "from": 19,
                        "to": 54999,
                        "onChange": function (data) {
                            var noin = data.input.closest('.irs-notinit');
                            if (noin) {
                                noin.removeClass('irs-notinit');
                            }
                        },
                        "onUpdate": function (data) {
                            data.input.closest('.slidewrapper').addClass('irs-notinit');
                        },
                        "onFinish": function (data) {
                            data.input.trigger('finish')
                        }
                    });
                    $("#rdrf51-price-input").val("");
                });
            </script>

            <ul class="us-categories-box list-unstyled us-module-column-box">
                <li class="us-categories-item active"><span class="d-flex justify-content-between"><a
                                href="https://mm.kh.ua/250--">Мобильные телефоны (1775)</a><a href="javascript:void(0);"
                                                                                              class="us-categories-toggle"><i
                                    class="fas fa-chevron-down"></i></a></span>
                    <ul class="us-categories-children us-categories-2 list-unstyled">
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/250--/mobilnye-telefony-realme-ru">Мобильные телефоны Realme (0)</a></span>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/250--/268-samsung">Мобильные телефоны Samsung (170)</a></span>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-samsung-ru">Аксессуары к мобильным телефонам Samsung (535)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-samsung-ru/zaschitnye-plenki-dlja-telefonov-samsung-ru">Защитные
                                        пленки для телефонов Samsung (20)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-samsung-ru/zaschitnye-stekla-dlja-samsung-ru">Защитные
                                        стекла для телефонов Samsung (66)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-samsung-ru/377-chehol-samsung">Чехлы
                                        для Samsung (449)</a></li>
                            </ul>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/250--/665-apple-iphone">Мобильные телефоны Apple iPhone (90)</a></span>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-apple-ru">Аксессуары к мобильным телефонам Apple (311)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-apple-ru/zaschitnye-plenki-dlja-telefonov-iphone-ru">Защитные
                                        пленки для телефонов iPhone (4)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-apple-ru/zaschitnye-stekla-dlja-iphone-ru">Защитные
                                        стекла для телефонов IPhone (23)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-apple-ru/chekhly-dlya-iPhone">Чехлы
                                        для iPhone (284)</a></li>
                            </ul>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/250--/657-xiaomi">Мобильные телефоны Xiaomi (185)</a></span>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-xiaomi-ru">Аксессуары к мобильным телефонам Xiaomi (373)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-xiaomi-ru/zaschitnye-stekla-dlja-xiaomi-ru">Защитные
                                        стекла для телефонов Xiaomi (52)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-xiaomi-ru/chehly-dlja-xiaomi-ru">Чехлы
                                        для Xiaomi (321)</a></li>
                            </ul>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/250--/510-huawei">Мобильные телефоны HUAWEI (7)</a></span>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-huawei-ru">Аксессуары к мобильным телефонам Huawei (40)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-huawei-ru/zaschitnye-stekla-dlja-huawei-ru">Защитные
                                        стекла для телефонов Huawei (9)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-huawei-ru/chehly-dlja-huawei-ru">Чехлы
                                        для Huawei (31)</a></li>
                            </ul>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/250--/ergo-ru">Мобильные телефоны ERGO (6)</a></span>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/250--/bravis-ru">Мобильные телефоны Bravis (0)</a></span>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-bravis-ru">Аксессуары к мобильным телефонам Bravis (1)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-bravis-ru/zaschitnye-plenki-dlja-telefonov-bravis-ru">Защитные
                                        пленки для телефонов Bravis (1)</a></li>
                            </ul>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/250--/mobilnye-telefony-oppo-ru">Мобильные телефоны Oppo (14)</a></span>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-htc-ru">Аксессуары к мобильным телефонам HTC (19)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-htc-ru/zaschitnye-plenki-dlja-telefonov-htc-ru">Защитные
                                        пленки для телефонов HTC (11)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-htc-ru/502--htc">Чехлы
                                        для HTC (8)</a></li>
                            </ul>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-lg-ru">Аксессуары к мобильным телефонам LG (9)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-lg-ru/zaschitnye-plenki-dlja-telefonov-lg-ru">Защитные
                                        пленки для телефонов LG (6)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-lg-ru/519--lg">Чехлы
                                        для LG (3)</a></li>
                            </ul>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-lenovo-ru">Аксессуары к мобильным телефонам Lenovo (2)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-lenovo-ru/zaschitnye-plenki-dlja-telefonov-lenovo-ru">Защитные
                                        пленки для телефонов Lenovo (2)</a></li>
                            </ul>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-nokia-ru">Аксессуары к мобильным телефонам Nokia (5)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-nokia-ru/zaschitnye-plenki-dlja-telefonov-nokia-ru">Защитные
                                        пленки для телефонов Nokia (2)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-nokia-ru/627-cover-nokia">Чехлы
                                        для Nokia (3)</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                href="https://mm.kh.ua/47-planshety">Планшеты (153)</a><a href="javascript:void(0);"
                                                                                          class="us-categories-toggle"><i
                                    class="fas fa-chevron-down"></i></a></span>
                    <ul class="us-categories-children us-categories-2 list-unstyled">
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/47-planshety/265-samsung">Планшеты Samsung (12)</a></span>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/47-planshety/aksessuary-k-planshetam-samsung-ru">Аксессуары к планшетам Samsung (11)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/47-planshety/aksessuary-k-planshetam-samsung-ru/zaschitnye-plenki-dlja-planshetov-dlja-samsung-ru">Защитные
                                        стекла и пленки для планшетов Samsung (4)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/47-planshety/aksessuary-k-planshetam-samsung-ru/chehly-k-planshetam-samsung-ru">Чехлы
                                        к планшетам Samsung (7)</a></li>
                            </ul>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/47-planshety/apple-ru">Планшеты Apple (79)</a></span>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/47-planshety/aksessuary-k-planshetam-apple-ru">Аксессуары к планшетам Apple (5)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/47-planshety/aksessuary-k-planshetam-apple-ru/stilusy-apple-ru">Стилусы
                                        Apple (1)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/47-planshety/aksessuary-k-planshetam-apple-ru/zaschitnye-plenki-dlja-planshetov-apple-ru">Защитные
                                        пленки для планшетов Apple (1)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/47-planshety/aksessuary-k-planshetam-apple-ru/chehly-k-planshetam-apple-ru">Чехлы
                                        к планшетам Apple (3)</a></li>
                            </ul>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/47-planshety/280-lenovo">Планшеты Lenovo (29)</a></span>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/47-planshety/aksessuary-k-planshetam-lenovo-ru">Аксессуары к планшетам Lenovo (1)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/47-planshety/aksessuary-k-planshetam-lenovo-ru/zaschitnye-plenki-dlja-planshetov-dlja-lenovo-ru">Защитные
                                        пленки для планшетов Lenovo (1)</a></li>
                            </ul>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/47-planshety/planshety-assistant-ru">Планшеты Assistant (0)</a></span>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/47-planshety/planshety-huawei-ru">Планшеты Huawei (14)</a></span>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/47-planshety/aksessuary-k-planshetam-asus-ru">Аксессуары к планшетам Asus (1)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/47-planshety/aksessuary-k-planshetam-asus-ru/536-Chehli">Чехлы
                                        к планшетам Asus (1)</a></li>
                            </ul>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/47-planshety/aksessuary-k-planshetam-lg-ru">Аксессуары к планшетам LG (1)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/47-planshety/aksessuary-k-planshetam-lg-ru/zaschitnye-plenki-dlja-planshetov-dlja-lg-ru">Защитные
                                        пленки для планшетов LG (1)</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                href="https://mm.kh.ua/bytovaja-tehnika-ru">Бытовая техника (1336)</a><a
                                href="javascript:void(0);" class="us-categories-toggle"><i
                                    class="fas fa-chevron-down"></i></a></span>
                    <ul class="us-categories-children us-categories-2 list-unstyled">
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/bytovaja-tehnika-ru/klimaticheskaja-tehnika-ru">Климатическая техника (157)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/klimaticheskaja-tehnika-ru/vodonagrevateli-ru">Водонагреватели
                                        (130)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/klimaticheskaja-tehnika-ru/kondicionery-ru">Кондиционеры
                                        (1)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/klimaticheskaja-tehnika-ru/obogrevateli-ru">Обогреватели
                                        (21)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/klimaticheskaja-tehnika-ru/uvlazhniteli-ochistiteli-vozduha-ru">Увлажнители,
                                        очистители воздуха (5)</a></li>
                            </ul>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/bytovaja-tehnika-ru/krupnaja-bytovaja-tehnika-ru">Крупная бытовая техника (847)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/krupnaja-bytovaja-tehnika-ru/varochnye-poverhnosti-ru">Варочные
                                        поверхности (113)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/krupnaja-bytovaja-tehnika-ru/vytjazhki-ru">Вытяжки
                                        (36)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/krupnaja-bytovaja-tehnika-ru/duhovye-shkafy-ru">Духовые
                                        шкафы (72)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/krupnaja-bytovaja-tehnika-ru/plity-ru">Кухонные
                                        плиты (26)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/krupnaja-bytovaja-tehnika-ru/morozilnoe-oborudovanie-ru">Морозильное
                                        оборудование (40)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/krupnaja-bytovaja-tehnika-ru/posudomoechnye-mashiny-ru">Посудомоечные
                                        машины (47)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/krupnaja-bytovaja-tehnika-ru/stiralnye-mashiny-ru">Стиральные
                                        машины (185)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/krupnaja-bytovaja-tehnika-ru/sushilnye-mashiny-parovye-shkafy-ru">Сушильные
                                        машины, паровые шкафы (23)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/krupnaja-bytovaja-tehnika-ru/holodilniki-ru">Холодильники
                                        (305)</a></li>
                            </ul>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/bytovaja-tehnika-ru/melkaja-bytova-tehnika-ru">Мелкая бытовая техника (189)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/melkaja-bytova-tehnika-ru/aksessuary-k-melkoj-bytovoj-tehnike-ru">Аксессуары
                                        к мелкой бытовой технике (4)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/melkaja-bytova-tehnika-ru/krasota-zdorove-uhod-ru">Красота,
                                        здоровье, уход (86)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/melkaja-bytova-tehnika-ru/parovye-sistemy-ru">Паровые
                                        системы (17)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/melkaja-bytova-tehnika-ru/pylesosy-ru">Пылесосы
                                        (47)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/melkaja-bytova-tehnika-ru/utjugi-ru">Утюги
                                        (35)</a></li>
                            </ul>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru">Техника для кухни (143)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru/aksessuary-dlja-kuhonnoj-tehniki-ru">Аксессуары
                                        для кухонной техники (5)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru/kofevarki-i-kofemashiny-ru">Кофеварки
                                        и кофемашины (10)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru/kuhonnye-kombajny-i-blendery-ru">Кухонные
                                        комбайны, блендеры, измельчители, миксеры (26)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru/mikrovolnovye-pechi-ru">Микроволновые
                                        печи (51)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru/multivarki-i-skorovarki-ru">Мультиварки
                                        и скороварки (10)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru/nastolnye-plity-i-duhovki-ru">Настольные
                                        плиты и духовки (6)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru/sokovyzhimalki-ru">Соковыжималки
                                        (3)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru/sushki-dlja-ovoschej-i-fruktov-ru">Сушки
                                        для овощей и фруктов (1)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru/tostery-buterbrodnicy-vafelnicy-grili-ru">Тостеры,
                                        бутербродницы, вафельницы, грили (16)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru/fritjurnicy-ru">Фритюрницы
                                        (1)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru/hlebopechi-ru">Хлебопечки
                                        (1)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru/elektrochajniki-ru">Электрочайники
                                        (13)</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                href="https://mm.kh.ua/7-computer-notebook">Компьютеры и ноутбуки (165)</a><a
                                href="javascript:void(0);" class="us-categories-toggle"><i
                                    class="fas fa-chevron-down"></i></a></span>
                    <ul class="us-categories-children us-categories-2 list-unstyled">
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/7-computer-notebook/567-notebooks">Ноутбуки (71)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/7-computer-notebook/567-notebooks/571-apple">Ноутбуки
                                        Apple (28)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/7-computer-notebook/567-notebooks/xiaomi-ru-1">Ноутбуки
                                        Xiaomi (43)</a></li>
                            </ul>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/7-computer-notebook/495--">Компьютерные аксессуары (94)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/7-computer-notebook/495--/556--">Сетевое оборудование
                                        (81)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/7-computer-notebook/495--/515-comp-mishi">Компьютерные
                                        мыши (9)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/7-computer-notebook/495--/516-sumki-dlya-noutbukov">Сумки
                                        для ноутбуков (4)</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                href="https://mm.kh.ua/234-tvav-">TV/AV, Фото (308)</a><a href="javascript:void(0);"
                                                                                          class="us-categories-toggle"><i
                                    class="fas fa-chevron-down"></i></a></span>
                    <ul class="us-categories-children us-categories-2 list-unstyled">
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/234-tvav-/kreplenija-stojki-dlja-tv-i-audio-ru">Крепления, стойки для ТВ и аудио (115)</a></span>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/234-tvav-/547--">ТВ-техника (193)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a href="https://mm.kh.ua/234-tvav-/547--/televizory-ru">Телевизоры
                                        (193)</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                href="https://mm.kh.ua/igrovye-pristavki-ru">Игровые приставки (2)</a><a
                                href="javascript:void(0);" class="us-categories-toggle"><i
                                    class="fas fa-chevron-down"></i></a></span>
                    <ul class="us-categories-children us-categories-2 list-unstyled">
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/igrovye-pristavki-ru/sony-ru">Игровые приставки Sony (2)</a></span>
                        </li>
                    </ul>
                </li>
                <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                href="https://mm.kh.ua/elektrotransport-ru">Электротранспорт (3)</a><a
                                href="javascript:void(0);" class="us-categories-toggle"><i
                                    class="fas fa-chevron-down"></i></a></span>
                    <ul class="us-categories-children us-categories-2 list-unstyled">
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/elektrotransport-ru/giroskutery-girobordy-ru">Гироскутеры, гироборды (2)</a></span>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/elektrotransport-ru/elektrosamokaty-ru">Электросамокаты (1)</a></span>
                        </li>
                    </ul>
                </li>
                <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                href="https://mm.kh.ua/667-audiotehnika">Аудиотехника (103)</a><a
                                href="javascript:void(0);" class="us-categories-toggle"><i
                                    class="fas fa-chevron-down"></i></a></span>
                    <ul class="us-categories-children us-categories-2 list-unstyled">
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/667-audiotehnika/668--kolonki">Портативные колонки (56)</a></span>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/667-audiotehnika/saundbary-i-akustika-ru">Саундбары и акустика (1)</a></span>
                        </li>
                    </ul>
                </li>
                <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                href="https://mm.kh.ua/557-Smart-watches-and-bracelets">Смарт-часы (77)</a><a
                                href="javascript:void(0);" class="us-categories-toggle"><i
                                    class="fas fa-chevron-down"></i></a></span>
                    <ul class="us-categories-children us-categories-2 list-unstyled">
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/557-Smart-watches-and-bracelets/umnye-chasy-samsung-ru">Умные часы Samsung (26)</a></span>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/557-Smart-watches-and-bracelets/cogito-ru">Умные часы COGITO (11)</a></span>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/557-Smart-watches-and-bracelets/631-apple-watch">Apple WATCH (40)</a></span>
                        </li>
                    </ul>
                </li>
                <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                href="https://mm.kh.ua/235-acsessuari">Аксессуары (337)</a><a href="javascript:void(0);"
                                                                                              class="us-categories-toggle"><i
                                    class="fas fa-chevron-down"></i></a></span>
                    <ul class="us-categories-children us-categories-2 list-unstyled">
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/235-acsessuari/307-zaryadnie-ustroistva">Зарядные устройства и кабели (50)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/235-acsessuari/307-zaryadnie-ustroistva/308-Car-Chargers">Автомобильные
                                        зарядные устройства (2)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/235-acsessuari/307-zaryadnie-ustroistva/564-Wireless-chargers">Беспроводные
                                        зарядные устройства (2)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/235-acsessuari/307-zaryadnie-ustroistva/309-Chargers">Сетевые
                                        зарядные устройства (5)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/235-acsessuari/307-zaryadnie-ustroistva/533-Universal-Mobile-Battery">Универсальные
                                        мобильные батареи (30)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/235-acsessuari/307-zaryadnie-ustroistva/kabeli-i-perehodniki-ru">Кабели
                                        и переходники (11)</a></li>
                            </ul>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/235-acsessuari/625-selfiestick">Моноподы для селфи  (6)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/235-acsessuari/625-selfiestick/661-xiaomi-">Моноподы
                                        для селфи Xiaomi (3)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/235-acsessuari/625-selfiestick/monopody-dlja-selfi-kjstar-ru">Моноподы
                                        для селфи Kjstar (3)</a></li>
                            </ul>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/235-acsessuari/299-memory-Cards">Накопители и карты памяти (46)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/235-acsessuari/299-memory-Cards/300--microsd">Карты
                                        памяти MicroSD (11)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/235-acsessuari/299-memory-Cards/fleshki-ru">Флеш-накопители
                                        (35)</a></li>
                            </ul>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/235-acsessuari/297-Headphones">Наушники и гарнитуры (220)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/235-acsessuari/297-Headphones/236-Bluetooth-and-wired-headsets">Bluetooth
                                        и проводные гарнитуры (12)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/235-acsessuari/297-Headphones/513-headphones">Наушники
                                        (208)</a></li>
                            </ul>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/235-acsessuari/592-protective-films">Универсальные защитные плёнки (7)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/235-acsessuari/592-protective-films/593-Universal-protective-films">Универсальные
                                        защитные плёнки (7)</a></li>
                            </ul>
                        </li>
                        <li class="us-categories-item"><span class="d-flex justify-content-between"><a
                                        href="https://mm.kh.ua/235-acsessuari/659--">Фитнес - браслеты (8)</a><a
                                        href="javascript:void(0);" class="us-categories-toggle"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            <ul class="us-categories-children us-categories-3 list-unstyled">
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/235-acsessuari/659--/660-xiaomi-">Фитнес-браслеты
                                        Xiaomi (5)</a></li>
                                <li class="us-categories-item"><a
                                            href="https://mm.kh.ua/235-acsessuari/659--/fitnes-braslety-huawei-ru">Фитнес-браслеты
                                        Huawei (3)</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>

        </aside>

        <div id="content" class="col-md-9">
            <div class="us-subcategory">
                <div id="us-subcat" class="row subcat-row">
                    <div class="col-3 us-item">
                        <a class="subcat-item d-flex flex-column align-items-center"
                           href="https://mm.kh.ua/250--/mobilnye-telefony-realme-ru">
                            <img class="subcat-item-img"
                                 src="https://mm.kh.ua/image/cache/catalog/realmi/realme-logo-88x88.jpg"
                                 alt="Мобильные телефоны Realme (0)">
                            <span class="subcat-item-title">Мобильные телефоны Realme (0)</span>
                        </a>
                    </div>
                    <div class="col-3 us-item">
                        <a class="subcat-item d-flex flex-column align-items-center"
                           href="https://mm.kh.ua/250--/268-samsung">
                            <img class="subcat-item-img"
                                 src="https://mm.kh.ua/image/cache/catalog/Алена/логотипы/samsung-logo-2015-88x88.jpg"
                                 alt="Мобильные телефоны Samsung (170)">
                            <span class="subcat-item-title">Мобильные телефоны Samsung (170)</span>
                        </a>
                    </div>
                    <div class="col-3 us-item">
                        <a class="subcat-item d-flex flex-column align-items-center"
                           href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-samsung-ru">
                            <img class="subcat-item-img"
                                 src="https://mm.kh.ua/image/cache/catalog/Производители/samsung-88x88.jpg"
                                 alt="Аксессуары к мобильным телефонам Samsung (535)">
                            <span class="subcat-item-title">Аксессуары к мобильным телефонам Samsung (535)</span>
                        </a>
                    </div>
                    <div class="col-3 us-item">
                        <a class="subcat-item d-flex flex-column align-items-center"
                           href="https://mm.kh.ua/250--/665-apple-iphone">
                            <img class="subcat-item-img"
                                 src="https://mm.kh.ua/image/cache/catalog/iphone/apple-100x100-88x88.jpg"
                                 alt="Мобильные телефоны Apple iPhone (90)">
                            <span class="subcat-item-title">Мобильные телефоны Apple iPhone (90)</span>
                        </a>
                    </div>
                    <div class="col-3 us-item">
                        <a class="subcat-item d-flex flex-column align-items-center"
                           href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-apple-ru">
                            <img class="subcat-item-img"
                                 src="https://mm.kh.ua/image/cache/catalog/Производители/apple-88x88.jpg"
                                 alt="Аксессуары к мобильным телефонам Apple (311)">
                            <span class="subcat-item-title">Аксессуары к мобильным телефонам Apple (311)</span>
                        </a>
                    </div>
                    <div class="col-3 us-item">
                        <a class="subcat-item d-flex flex-column align-items-center"
                           href="https://mm.kh.ua/250--/657-xiaomi">
                            <img class="subcat-item-img"
                                 src="https://mm.kh.ua/image/cache/catalog/Производители/xiaomi-88x88.jpg"
                                 alt="Мобильные телефоны Xiaomi (185)">
                            <span class="subcat-item-title">Мобильные телефоны Xiaomi (185)</span>
                        </a>
                    </div>
                    <div class="col-3 us-item">
                        <a class="subcat-item d-flex flex-column align-items-center"
                           href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-xiaomi-ru">
                            <img class="subcat-item-img"
                                 src="https://mm.kh.ua/image/cache/catalog/Производители/xiaomi-88x88.jpg"
                                 alt="Аксессуары к мобильным телефонам Xiaomi (373)">
                            <span class="subcat-item-title">Аксессуары к мобильным телефонам Xiaomi (373)</span>
                        </a>
                    </div>
                    <div class="col-3 us-item">
                        <a class="subcat-item d-flex flex-column align-items-center"
                           href="https://mm.kh.ua/250--/510-huawei">
                            <img class="subcat-item-img"
                                 src="https://mm.kh.ua/image/cache/catalog/Алена/логотипы/logo-huawei-88x88.jpg"
                                 alt="Мобильные телефоны HUAWEI (7)">
                            <span class="subcat-item-title">Мобильные телефоны HUAWEI (7)</span>
                        </a>
                    </div>
                    <div class="col-3 us-item">
                        <a class="subcat-item d-flex flex-column align-items-center"
                           href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-huawei-ru">
                            <img class="subcat-item-img"
                                 src="https://mm.kh.ua/image/cache/catalog/Производители/huawei-88x88.jpg"
                                 alt="Аксессуары к мобильным телефонам Huawei (40)">
                            <span class="subcat-item-title">Аксессуары к мобильным телефонам Huawei (40)</span>
                        </a>
                    </div>
                    <div class="col-3 us-item">
                        <a class="subcat-item d-flex flex-column align-items-center"
                           href="https://mm.kh.ua/250--/ergo-ru">
                            <img class="subcat-item-img"
                                 src="https://mm.kh.ua/image/cache/catalog/Алена/логотипы/Ergo-1250_625-88x88.jpg"
                                 alt="Мобильные телефоны ERGO (6)">
                            <span class="subcat-item-title">Мобильные телефоны ERGO (6)</span>
                        </a>
                    </div>
                    <div class="col-3 us-item">
                        <a class="subcat-item d-flex flex-column align-items-center"
                           href="https://mm.kh.ua/250--/bravis-ru">
                            <img class="subcat-item-img"
                                 src="https://mm.kh.ua/image/cache/catalog/Алена/логотипы/124cbbb1a0bf6bfbb66f58a4fabe8c73-88x88.png"
                                 alt="Мобильные телефоны Bravis (0)">
                            <span class="subcat-item-title">Мобильные телефоны Bravis (0)</span>
                        </a>
                    </div>
                    <div class="col-3 us-item">
                        <a class="subcat-item d-flex flex-column align-items-center"
                           href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-bravis-ru">
                            <img class="subcat-item-img"
                                 src="https://mm.kh.ua/image/cache/catalog/Производители/bravis-88x88.jpg"
                                 alt="Аксессуары к мобильным телефонам Bravis (1)">
                            <span class="subcat-item-title">Аксессуары к мобильным телефонам Bravis (1)</span>
                        </a>
                    </div>
                    <div class="col-3 us-item">
                        <a class="subcat-item d-flex flex-column align-items-center"
                           href="https://mm.kh.ua/250--/mobilnye-telefony-oppo-ru">
                            <img class="subcat-item-img"
                                 src="https://mm.kh.ua/image/cache/catalog/oppo/logo_oppo-88x88.png"
                                 alt="Мобильные телефоны Oppo (14)">
                            <span class="subcat-item-title">Мобильные телефоны Oppo (14)</span>
                        </a>
                    </div>
                    <div class="col-3 us-item">
                        <a class="subcat-item d-flex flex-column align-items-center"
                           href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-htc-ru">
                            <img class="subcat-item-img"
                                 src="https://mm.kh.ua/image/cache/catalog/Производители/htc-88x88.jpg"
                                 alt="Аксессуары к мобильным телефонам HTC (19)">
                            <span class="subcat-item-title">Аксессуары к мобильным телефонам HTC (19)</span>
                        </a>
                    </div>
                    <div class="col-3 us-item">
                        <a class="subcat-item d-flex flex-column align-items-center"
                           href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-lg-ru">
                            <img class="subcat-item-img"
                                 src="https://mm.kh.ua/image/cache/catalog/Производители/lg-88x88.jpg"
                                 alt="Аксессуары к мобильным телефонам LG (9)">
                            <span class="subcat-item-title">Аксессуары к мобильным телефонам LG (9)</span>
                        </a>
                    </div>
                    <div class="col-3 us-item">
                        <a class="subcat-item d-flex flex-column align-items-center"
                           href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-lenovo-ru">
                            <img class="subcat-item-img"
                                 src="https://mm.kh.ua/image/cache/catalog/Производители/lenovo-88x88.jpg"
                                 alt="Аксессуары к мобильным телефонам Lenovo (2)">
                            <span class="subcat-item-title">Аксессуары к мобильным телефонам Lenovo (2)</span>
                        </a>
                    </div>
                    <div class="col-3 us-item">
                        <a class="subcat-item d-flex flex-column align-items-center"
                           href="https://mm.kh.ua/250--/aksessuary-k-mobilnym-telefonam-nokia-ru">
                            <img class="subcat-item-img"
                                 src="https://mm.kh.ua/image/cache/catalog/Производители/nokia-88x88.jpg"
                                 alt="Аксессуары к мобильным телефонам Nokia (5)">
                            <span class="subcat-item-title">Аксессуары к мобильным телефонам Nokia (5)</span>
                        </a>
                    </div>
                </div>
                <div class="us-show-more us-subcat-show-more">
                    <a href="javascript:void(0);" id="us-show-more-subcats"
                       class="us-show-more-link"><span>Показать еще</span><i class="fas fa-angle-down"></i></a>
                </div>
            </div>
            <script>
                octShowProducts("us-show-more-subcats", "us-subcat", "8", "17");
            </script>
            <div class="us-category-sort-block d-flex justify-content-between">
                <div class="sort-limit">
                    <select id="input-sort" class="sort-select" onchange="location = this.value;">
                        <option value="https://mm.kh.ua/250--?sort=pd.name&amp;order=ASC" selected="selected">По
                            названию (по возрастанию)
                        </option>
                        <option value="https://mm.kh.ua/250--?sort=pd.name&amp;order=DESC">По названию (по убыванию)
                        </option>
                        <option value="https://mm.kh.ua/250--?sort=p.price&amp;order=ASC">По цене (по возрастанию)
                        </option>
                        <option value="https://mm.kh.ua/250--?sort=p.price&amp;order=DESC">По цене (по убыванию)
                        </option>
                    </select>
                    <select id="input-limit" class="limit-select" onchange="location = this.value;">
                        <option value="https://mm.kh.ua/250--?limit=24" selected="selected">24</option>
                        <option value="https://mm.kh.ua/250--?limit=25">25</option>
                        <option value="https://mm.kh.ua/250--?limit=50">50</option>
                        <option value="https://mm.kh.ua/250--?limit=75">75</option>
                        <option value="https://mm.kh.ua/250--?limit=100">100</option>
                    </select>
                    <button type="button" id="filter-view" class="d-none us-category-appearance-btn"
                            data-toggle="tooltip" data-placement="top" title="Фильтр"><i class="fas fa-sliders-h"></i>
                    </button>
                </div>
                <div class="us-category-appearance btn-group">
                    <button type="button" id="list-view" class="us-category-appearance-btn" data-toggle="tooltip"
                            data-placement="top" title="Список"><i class="fa fa-th-list"></i></button>
                    <button type="button" id="grid-view" class="us-category-appearance-btn" data-toggle="tooltip"
                            data-placement="top" title="Сетка"><i class="fa fa-th"></i></button>
                </div>
            </div>
            <div class="row">

                <div class="product-layout product-grid col-sm-4">
                    @include('card', ['category' => $category])
                </div>
                <div class="product-layout product-grid col-sm-4">
                    <div class="us-module-item  d-flex flex-column">


                        <ul class="us-module-buttons-list">
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" onclick="wishlist.add('10968');" title="В закладки"
                                   class="us-module-buttons-link us-module-buttons-wishlist"><i
                                            class="far fa-heart"></i></a>
                            </li>
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" title="В сравнение" onclick="compare.add('10968');"
                                   class="us-module-buttons-link us-module-buttons-compare"><i
                                            class="fas fa-sliders-h"></i></a>
                            </li>

                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-quickview"
                                   title="Быстрый просмотр" onclick="octPopUpView('10968')"><i
                                            class="far fa-eye"></i></a>
                            </li>

                        </ul>
                        <div class="us-module-img">
                            <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-128gb-black-39702-ru.html">
                                <img src="https://mm.kh.ua/image/cache/catalog/iphone/39717-228x228-product_list.jpg"
                                     class="img-fluid" alt="Apple iPhone 12 128GB Black"
                                     title="Apple iPhone 12 128GB Black"/>
                            </a>
                        </div>
                        <div class="us-module-caption d-flex flex-column">
                            <div class="us-module-title flex-grow-1">
                                <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-128gb-black-39702-ru.html">Apple
                                    iPhone 12 128GB Black</a>
                            </div>
                            <div class="us-module-model"><span class="mdls">Код товара: <span
                                            class="mod">39702</span></span></div>
                            <div class="us-module-rating d-flex align-items-center justify-content-center">
                                <div class="us-module-rating-stars d-flex align-items-center">
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                </div>
                                <div class="us-module-reviews"><i class="fas fa-comment"><span>0</span></i></div>
                            </div>
                            <div class="us-product-list-description">Экран: 6,1" | OLED | 1170x2532 | встроенная память:
                                128 ГБ | оперативная память: 4 ГБ | процессор: Apple A14 Bionic | ОС: Apple iOS 14 |
                                аккумулятор: 2775 мАч (несъемный) | камера: 12 (f/1.6, широкоугольная) + 12 (f/2.4, 120
                                градусов, сверхширокоугол..
                            </div>


                            <div class="us-module-price">
                                <span class="us-module-price-actual">26 749 грн</span>
                            </div>
                            <a href="javascript:void(0);" onclick="cart.add('10968');"
                               class="us-module-cart-btn button-cart">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-grid col-sm-4">
                    <div class="us-module-item  d-flex flex-column">


                        <ul class="us-module-buttons-list">
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" onclick="wishlist.add('10969');" title="В закладки"
                                   class="us-module-buttons-link us-module-buttons-wishlist"><i
                                            class="far fa-heart"></i></a>
                            </li>
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" title="В сравнение" onclick="compare.add('10969');"
                                   class="us-module-buttons-link us-module-buttons-compare"><i
                                            class="fas fa-sliders-h"></i></a>
                            </li>

                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-quickview"
                                   title="Быстрый просмотр" onclick="octPopUpView('10969')"><i
                                            class="far fa-eye"></i></a>
                            </li>

                        </ul>
                        <div class="us-module-img">
                            <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-128gb-blue-39703-ru.html">
                                <img src="https://mm.kh.ua/image/cache/catalog/iphone/39718-228x228-product_list.jpg"
                                     class="img-fluid" alt="Apple iPhone 12 128GB Blue"
                                     title="Apple iPhone 12 128GB Blue"/>
                            </a>
                        </div>
                        <div class="us-module-caption d-flex flex-column">
                            <div class="us-module-title flex-grow-1">
                                <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-128gb-blue-39703-ru.html">Apple
                                    iPhone 12 128GB Blue</a>
                            </div>
                            <div class="us-module-model"><span class="mdls">Код товара: <span
                                            class="mod">39703</span></span></div>
                            <div class="us-module-rating d-flex align-items-center justify-content-center">
                                <div class="us-module-rating-stars d-flex align-items-center">
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                </div>
                                <div class="us-module-reviews"><i class="fas fa-comment"><span>0</span></i></div>
                            </div>
                            <div class="us-product-list-description">Экран: 6,1" | OLED | 1170x2532 | встроенная память:
                                128 ГБ | оперативная память: 4 ГБ | процессор: Apple A14 Bionic | ОС: Apple iOS 14 |
                                аккумулятор: 2775 мАч (несъемный) | камера: 12 (f/1.6, широкоугольная) + 12 (f/2.4, 120
                                градусов, сверхширокоугол..
                            </div>


                            <div class="us-module-price">
                                <span class="us-module-price-actual">26 749 грн</span>
                            </div>
                            <a href="javascript:void(0);" onclick="cart.add('10969');"
                               class="us-module-cart-btn button-cart">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-grid col-sm-4">
                    <div class="us-module-item  d-flex flex-column">


                        <ul class="us-module-buttons-list">
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" onclick="wishlist.add('10970');" title="В закладки"
                                   class="us-module-buttons-link us-module-buttons-wishlist"><i
                                            class="far fa-heart"></i></a>
                            </li>
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" title="В сравнение" onclick="compare.add('10970');"
                                   class="us-module-buttons-link us-module-buttons-compare"><i
                                            class="fas fa-sliders-h"></i></a>
                            </li>

                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-quickview"
                                   title="Быстрый просмотр" onclick="octPopUpView('10970')"><i
                                            class="far fa-eye"></i></a>
                            </li>

                        </ul>
                        <div class="us-module-img">
                            <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-128gb-green-39704-ru.html">
                                <img src="https://mm.kh.ua/image/cache/catalog/iphone/39719-228x228-product_list.jpg"
                                     class="img-fluid" alt="Apple iPhone 12 128GB Green"
                                     title="Apple iPhone 12 128GB Green"/>
                            </a>
                        </div>
                        <div class="us-module-caption d-flex flex-column">
                            <div class="us-module-title flex-grow-1">
                                <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-128gb-green-39704-ru.html">Apple
                                    iPhone 12 128GB Green</a>
                            </div>
                            <div class="us-module-model"><span class="mdls">Код товара: <span
                                            class="mod">39704</span></span></div>
                            <div class="us-module-rating d-flex align-items-center justify-content-center">
                                <div class="us-module-rating-stars d-flex align-items-center">
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                </div>
                                <div class="us-module-reviews"><i class="fas fa-comment"><span>0</span></i></div>
                            </div>
                            <div class="us-product-list-description">Экран: 6,1" | OLED | 1170x2532 | встроенная память:
                                128 ГБ | оперативная память: 4 ГБ | процессор: Apple A14 Bionic | ОС: Apple iOS 14 |
                                аккумулятор: 2775 мАч (несъемный) | камера: 12 (f/1.6, широкоугольная) + 12 (f/2.4, 120
                                градусов, сверхширокоугол..
                            </div>


                            <div class="us-module-price">
                                <span class="us-module-price-actual">26 349 грн</span>
                            </div>
                            <a href="javascript:void(0);" onclick="cart.add('10970');"
                               class="us-module-cart-btn button-cart">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-grid col-sm-4">
                    <div class="us-module-item  d-flex flex-column">


                        <ul class="us-module-buttons-list">
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" onclick="wishlist.add('10971');" title="В закладки"
                                   class="us-module-buttons-link us-module-buttons-wishlist"><i
                                            class="far fa-heart"></i></a>
                            </li>
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" title="В сравнение" onclick="compare.add('10971');"
                                   class="us-module-buttons-link us-module-buttons-compare"><i
                                            class="fas fa-sliders-h"></i></a>
                            </li>

                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-quickview"
                                   title="Быстрый просмотр" onclick="octPopUpView('10971')"><i
                                            class="far fa-eye"></i></a>
                            </li>

                        </ul>
                        <div class="us-module-img">
                            <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-128gb-red-39705-ru.html">
                                <img src="https://mm.kh.ua/image/cache/catalog/iphone/39720-228x228-product_list.jpg"
                                     class="img-fluid" alt="Apple iPhone 12 128GB Red"
                                     title="Apple iPhone 12 128GB Red"/>
                            </a>
                        </div>
                        <div class="us-module-caption d-flex flex-column">
                            <div class="us-module-title flex-grow-1">
                                <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-128gb-red-39705-ru.html">Apple
                                    iPhone 12 128GB Red</a>
                            </div>
                            <div class="us-module-model"><span class="mdls">Код товара: <span
                                            class="mod">39705</span></span></div>
                            <div class="us-module-rating d-flex align-items-center justify-content-center">
                                <div class="us-module-rating-stars d-flex align-items-center">
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                </div>
                                <div class="us-module-reviews"><i class="fas fa-comment"><span>0</span></i></div>
                            </div>
                            <div class="us-product-list-description">Экран: 6,1" | OLED | 1170x2532 | встроенная память:
                                128 ГБ | оперативная память: 4 ГБ | процессор: Apple A14 Bionic | ОС: Apple iOS 14 |
                                аккумулятор: 2775 мАч (несъемный) | камера: 12 (f/1.6, широкоугольная) + 12 (f/2.4, 120
                                градусов, сверхширокоугол..
                            </div>


                            <div class="us-module-price">
                                <span class="us-module-price-actual">26 999 грн</span>
                            </div>
                            <a href="javascript:void(0);" onclick="cart.add('10971');"
                               class="us-module-cart-btn button-cart">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-grid col-sm-4">
                    <div class="us-module-item  d-flex flex-column">


                        <ul class="us-module-buttons-list">
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" onclick="wishlist.add('10972');" title="В закладки"
                                   class="us-module-buttons-link us-module-buttons-wishlist"><i
                                            class="far fa-heart"></i></a>
                            </li>
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" title="В сравнение" onclick="compare.add('10972');"
                                   class="us-module-buttons-link us-module-buttons-compare"><i
                                            class="fas fa-sliders-h"></i></a>
                            </li>

                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-quickview"
                                   title="Быстрый просмотр" onclick="octPopUpView('10972')"><i
                                            class="far fa-eye"></i></a>
                            </li>

                        </ul>
                        <div class="us-module-img">
                            <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-128gb-white-39706-ru.html">
                                <img src="https://mm.kh.ua/image/cache/catalog/iphone/39721-228x228-product_list.jpg"
                                     class="img-fluid" alt="Apple iPhone 12 128GB White"
                                     title="Apple iPhone 12 128GB White"/>
                            </a>
                        </div>
                        <div class="us-module-caption d-flex flex-column">
                            <div class="us-module-title flex-grow-1">
                                <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-128gb-white-39706-ru.html">Apple
                                    iPhone 12 128GB White</a>
                            </div>
                            <div class="us-module-model"><span class="mdls">Код товара: <span
                                            class="mod">39706</span></span></div>
                            <div class="us-module-rating d-flex align-items-center justify-content-center">
                                <div class="us-module-rating-stars d-flex align-items-center">
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                </div>
                                <div class="us-module-reviews"><i class="fas fa-comment"><span>0</span></i></div>
                            </div>
                            <div class="us-product-list-description">Экран: 6,1" | OLED | 1170x2532 | встроенная память:
                                128 ГБ | оперативная память: 4 ГБ | процессор: Apple A14 Bionic | ОС: Apple iOS 14 |
                                аккумулятор: 2775 мАч (несъемный) | камера: 12 (f/1.6, широкоугольная) + 12 (f/2.4, 120
                                градусов, сверхширокоугол..
                            </div>


                            <div class="us-module-price">
                                <span class="us-module-price-actual">26 749 грн</span>
                            </div>
                            <a href="javascript:void(0);" onclick="cart.add('10972');"
                               class="us-module-cart-btn button-cart">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-grid col-sm-4">
                    <div class="us-module-item  d-flex flex-column">


                        <ul class="us-module-buttons-list">
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" onclick="wishlist.add('10973');" title="В закладки"
                                   class="us-module-buttons-link us-module-buttons-wishlist"><i
                                            class="far fa-heart"></i></a>
                            </li>
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" title="В сравнение" onclick="compare.add('10973');"
                                   class="us-module-buttons-link us-module-buttons-compare"><i
                                            class="fas fa-sliders-h"></i></a>
                            </li>

                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-quickview"
                                   title="Быстрый просмотр" onclick="octPopUpView('10973')"><i
                                            class="far fa-eye"></i></a>
                            </li>

                        </ul>
                        <div class="us-module-img">
                            <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-256gb-black-39707-ru.html">
                                <img src="https://mm.kh.ua/image/cache/catalog/iphone/39717-228x228-product_list.jpg"
                                     class="img-fluid" alt="Apple iPhone 12 256GB Black"
                                     title="Apple iPhone 12 256GB Black"/>
                            </a>
                        </div>
                        <div class="us-module-caption d-flex flex-column">
                            <div class="us-module-title flex-grow-1">
                                <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-256gb-black-39707-ru.html">Apple
                                    iPhone 12 256GB Black</a>
                            </div>
                            <div class="us-module-model"><span class="mdls">Код товара: <span
                                            class="mod">39707</span></span></div>
                            <div class="us-module-rating d-flex align-items-center justify-content-center">
                                <div class="us-module-rating-stars d-flex align-items-center">
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                </div>
                                <div class="us-module-reviews"><i class="fas fa-comment"><span>0</span></i></div>
                            </div>
                            <div class="us-product-list-description">Экран: 6,1" | OLED | 1170x2532 | встроенная память:
                                256 ГБ | оперативная память: 4 ГБ | процессор: Apple A14 Bionic | ОС: Apple iOS 14 |
                                аккумулятор: 2775 мАч (несъемный) | камера: 12 (f/1.6, широкоугольная) + 12 (f/2.4, 120
                                градусов, сверхширокоугол..
                            </div>


                            <div class="us-module-price">
                                <span class="us-module-price-actual">29 099 грн</span>
                            </div>
                            <a href="javascript:void(0);" onclick="cart.add('10973');"
                               class="us-module-cart-btn button-cart">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-grid col-sm-4">
                    <div class="us-module-item  d-flex flex-column">


                        <ul class="us-module-buttons-list">
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" onclick="wishlist.add('10974');" title="В закладки"
                                   class="us-module-buttons-link us-module-buttons-wishlist"><i
                                            class="far fa-heart"></i></a>
                            </li>
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" title="В сравнение" onclick="compare.add('10974');"
                                   class="us-module-buttons-link us-module-buttons-compare"><i
                                            class="fas fa-sliders-h"></i></a>
                            </li>

                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-quickview"
                                   title="Быстрый просмотр" onclick="octPopUpView('10974')"><i
                                            class="far fa-eye"></i></a>
                            </li>

                        </ul>
                        <div class="us-module-img">
                            <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-256gb-blue-39708-ru.html">
                                <img src="https://mm.kh.ua/image/cache/catalog/iphone/39718-228x228-product_list.jpg"
                                     class="img-fluid" alt="Apple iPhone 12 256GB Blue"
                                     title="Apple iPhone 12 256GB Blue"/>
                            </a>
                        </div>
                        <div class="us-module-caption d-flex flex-column">
                            <div class="us-module-title flex-grow-1">
                                <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-256gb-blue-39708-ru.html">Apple
                                    iPhone 12 256GB Blue</a>
                            </div>
                            <div class="us-module-model"><span class="mdls">Код товара: <span
                                            class="mod">39708</span></span></div>
                            <div class="us-module-rating d-flex align-items-center justify-content-center">
                                <div class="us-module-rating-stars d-flex align-items-center">
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                </div>
                                <div class="us-module-reviews"><i class="fas fa-comment"><span>0</span></i></div>
                            </div>
                            <div class="us-product-list-description">Экран: 6,1" | OLED | 1170x2532 | встроенная память:
                                256 ГБ | оперативная память: 4 ГБ | процессор: Apple A14 Bionic | ОС: Apple iOS 14 |
                                аккумулятор: 2775 мАч (несъемный) | камера: 12 (f/1.6, широкоугольная) + 12 (f/2.4, 120
                                градусов, сверхширокоугол..
                            </div>


                            <div class="us-module-price">
                                <span class="us-module-price-actual">31 250 грн</span>
                            </div>
                            <a href="javascript:void(0);" onclick="cart.add('10974');"
                               class="us-module-cart-btn button-cart">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-grid col-sm-4">
                    <div class="us-module-item  d-flex flex-column">


                        <ul class="us-module-buttons-list">
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" onclick="wishlist.add('10975');" title="В закладки"
                                   class="us-module-buttons-link us-module-buttons-wishlist"><i
                                            class="far fa-heart"></i></a>
                            </li>
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" title="В сравнение" onclick="compare.add('10975');"
                                   class="us-module-buttons-link us-module-buttons-compare"><i
                                            class="fas fa-sliders-h"></i></a>
                            </li>

                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-quickview"
                                   title="Быстрый просмотр" onclick="octPopUpView('10975')"><i
                                            class="far fa-eye"></i></a>
                            </li>

                        </ul>
                        <div class="us-module-img">
                            <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-256gb-green-39709-ru.html">
                                <img src="https://mm.kh.ua/image/cache/catalog/iphone/39719-228x228-product_list.jpg"
                                     class="img-fluid" alt="Apple iPhone 12 256GB Green"
                                     title="Apple iPhone 12 256GB Green"/>
                            </a>
                        </div>
                        <div class="us-module-caption d-flex flex-column">
                            <div class="us-module-title flex-grow-1">
                                <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-256gb-green-39709-ru.html">Apple
                                    iPhone 12 256GB Green</a>
                            </div>
                            <div class="us-module-model"><span class="mdls">Код товара: <span
                                            class="mod">39709</span></span></div>
                            <div class="us-module-rating d-flex align-items-center justify-content-center">
                                <div class="us-module-rating-stars d-flex align-items-center">
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                </div>
                                <div class="us-module-reviews"><i class="fas fa-comment"><span>0</span></i></div>
                            </div>
                            <div class="us-product-list-description">Экран: 6,1" | OLED | 1170x2532 | встроенная память:
                                256 ГБ | оперативная память: 4 ГБ | процессор: Apple A14 Bionic | ОС: Apple iOS 14 |
                                аккумулятор: 2775 мАч (несъемный) | камера: 12 (f/1.6, широкоугольная) + 12 (f/2.4, 120
                                градусов, сверхширокоугол..
                            </div>


                            <div class="us-module-price">
                                <span class="us-module-price-actual">29 099 грн</span>
                            </div>
                            <a href="javascript:void(0);" onclick="cart.add('10975');"
                               class="us-module-cart-btn button-cart">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-grid col-sm-4">
                    <div class="us-module-item  d-flex flex-column">


                        <ul class="us-module-buttons-list">
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" onclick="wishlist.add('10976');" title="В закладки"
                                   class="us-module-buttons-link us-module-buttons-wishlist"><i
                                            class="far fa-heart"></i></a>
                            </li>
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" title="В сравнение" onclick="compare.add('10976');"
                                   class="us-module-buttons-link us-module-buttons-compare"><i
                                            class="fas fa-sliders-h"></i></a>
                            </li>

                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-quickview"
                                   title="Быстрый просмотр" onclick="octPopUpView('10976')"><i
                                            class="far fa-eye"></i></a>
                            </li>

                        </ul>
                        <div class="us-module-img">
                            <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-256gb-red-39710-ru.html">
                                <img src="https://mm.kh.ua/image/cache/catalog/iphone/39720-228x228-product_list.jpg"
                                     class="img-fluid" alt="Apple iPhone 12 256GB Red"
                                     title="Apple iPhone 12 256GB Red"/>
                            </a>
                        </div>
                        <div class="us-module-caption d-flex flex-column">
                            <div class="us-module-title flex-grow-1">
                                <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-256gb-red-39710-ru.html">Apple
                                    iPhone 12 256GB Red</a>
                            </div>
                            <div class="us-module-model"><span class="mdls">Код товара: <span
                                            class="mod">39710</span></span></div>
                            <div class="us-module-rating d-flex align-items-center justify-content-center">
                                <div class="us-module-rating-stars d-flex align-items-center">
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                </div>
                                <div class="us-module-reviews"><i class="fas fa-comment"><span>0</span></i></div>
                            </div>
                            <div class="us-product-list-description">Экран: 6,1" | OLED | 1170x2532 | встроенная память:
                                256 ГБ | оперативная память: 4 ГБ | процессор: Apple A14 Bionic | ОС: Apple iOS 14 |
                                аккумулятор: 2775 мАч (несъемный) | камера: 12 (f/1.6, широкоугольная) + 12 (f/2.4, 120
                                градусов, сверхширокоугол..
                            </div>


                            <div class="us-module-price">
                                <span class="us-module-price-actual">31 099 грн</span>
                            </div>
                            <a href="javascript:void(0);" onclick="cart.add('10976');"
                               class="us-module-cart-btn button-cart">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-grid col-sm-4">
                    <div class="us-module-item  d-flex flex-column">


                        <ul class="us-module-buttons-list">
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" onclick="wishlist.add('10977');" title="В закладки"
                                   class="us-module-buttons-link us-module-buttons-wishlist"><i
                                            class="far fa-heart"></i></a>
                            </li>
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" title="В сравнение" onclick="compare.add('10977');"
                                   class="us-module-buttons-link us-module-buttons-compare"><i
                                            class="fas fa-sliders-h"></i></a>
                            </li>

                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-quickview"
                                   title="Быстрый просмотр" onclick="octPopUpView('10977')"><i
                                            class="far fa-eye"></i></a>
                            </li>

                        </ul>
                        <div class="us-module-img">
                            <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-256gb-white-39711-ru.html">
                                <img src="https://mm.kh.ua/image/cache/catalog/iphone/39721-228x228-product_list.jpg"
                                     class="img-fluid" alt="Apple iPhone 12 256GB White"
                                     title="Apple iPhone 12 256GB White"/>
                            </a>
                        </div>
                        <div class="us-module-caption d-flex flex-column">
                            <div class="us-module-title flex-grow-1">
                                <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-256gb-white-39711-ru.html">Apple
                                    iPhone 12 256GB White</a>
                            </div>
                            <div class="us-module-model"><span class="mdls">Код товара: <span
                                            class="mod">39711</span></span></div>
                            <div class="us-module-rating d-flex align-items-center justify-content-center">
                                <div class="us-module-rating-stars d-flex align-items-center">
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                </div>
                                <div class="us-module-reviews"><i class="fas fa-comment"><span>0</span></i></div>
                            </div>
                            <div class="us-product-list-description">Экран: 6,1" | OLED | 1170x2532 | встроенная память:
                                256 ГБ | оперативная память: 4 ГБ | процессор: Apple A14 Bionic | ОС: Apple iOS 14 |
                                аккумулятор: 2775 мАч (несъемный) | камера: 12 (f/1.6, широкоугольная) + 12 (f/2.4, 120
                                градусов, сверхширокоугол..
                            </div>


                            <div class="us-module-price">
                                <span class="us-module-price-actual">28 599 грн</span>
                            </div>
                            <a href="javascript:void(0);" onclick="cart.add('10977');"
                               class="us-module-cart-btn button-cart">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-grid col-sm-4">
                    <div class="us-module-item  d-flex flex-column">


                        <ul class="us-module-buttons-list">
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" onclick="wishlist.add('10978');" title="В закладки"
                                   class="us-module-buttons-link us-module-buttons-wishlist"><i
                                            class="far fa-heart"></i></a>
                            </li>
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" title="В сравнение" onclick="compare.add('10978');"
                                   class="us-module-buttons-link us-module-buttons-compare"><i
                                            class="fas fa-sliders-h"></i></a>
                            </li>

                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-quickview"
                                   title="Быстрый просмотр" onclick="octPopUpView('10978')"><i
                                            class="far fa-eye"></i></a>
                            </li>

                        </ul>
                        <div class="us-module-img">
                            <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-64gb-black-39701-ru.html">
                                <img src="https://mm.kh.ua/image/cache/catalog/iphone/39717-228x228-product_list.jpg"
                                     class="img-fluid" alt="Apple iPhone 12 64GB Black"
                                     title="Apple iPhone 12 64GB Black"/>
                            </a>
                        </div>
                        <div class="us-module-caption d-flex flex-column">
                            <div class="us-module-title flex-grow-1">
                                <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-64gb-black-39701-ru.html">Apple
                                    iPhone 12 64GB Black</a>
                            </div>
                            <div class="us-module-model"><span class="mdls">Код товара: <span
                                            class="mod">39701</span></span></div>
                            <div class="us-module-rating d-flex align-items-center justify-content-center">
                                <div class="us-module-rating-stars d-flex align-items-center">
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                </div>
                                <div class="us-module-reviews"><i class="fas fa-comment"><span>0</span></i></div>
                            </div>
                            <div class="us-product-list-description">Экран: 6,1" | OLED | 1170x2532 | встроенная память:
                                64 ГБ | оперативная память: 4 ГБ | процессор: Apple A14 Bionic | ОС: Apple iOS 14 |
                                аккумулятор: 2775 мАч (несъемный) | камера: 12 (f/1.6, широкоугольная) + 12 (f/2.4, 120
                                градусов, сверхширокоуголь..
                            </div>


                            <div class="us-module-price">
                                <span class="us-module-price-actual">23 829 грн</span>
                            </div>
                            <a href="javascript:void(0);" onclick="cart.add('10978');"
                               class="us-module-cart-btn button-cart">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-grid col-sm-4">
                    <div class="us-module-item  d-flex flex-column">


                        <ul class="us-module-buttons-list">
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" onclick="wishlist.add('10979');" title="В закладки"
                                   class="us-module-buttons-link us-module-buttons-wishlist"><i
                                            class="far fa-heart"></i></a>
                            </li>
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" title="В сравнение" onclick="compare.add('10979');"
                                   class="us-module-buttons-link us-module-buttons-compare"><i
                                            class="fas fa-sliders-h"></i></a>
                            </li>

                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-quickview"
                                   title="Быстрый просмотр" onclick="octPopUpView('10979')"><i
                                            class="far fa-eye"></i></a>
                            </li>

                        </ul>
                        <div class="us-module-img">
                            <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-64gb-blue-39698-ru.html">
                                <img src="https://mm.kh.ua/image/cache/catalog/iphone/39718-228x228-product_list.jpg"
                                     class="img-fluid" alt="Apple iPhone 12 64GB Blue"
                                     title="Apple iPhone 12 64GB Blue"/>
                            </a>
                        </div>
                        <div class="us-module-caption d-flex flex-column">
                            <div class="us-module-title flex-grow-1">
                                <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-64gb-blue-39698-ru.html">Apple
                                    iPhone 12 64GB Blue</a>
                            </div>
                            <div class="us-module-model"><span class="mdls">Код товара: <span
                                            class="mod">39698</span></span></div>
                            <div class="us-module-rating d-flex align-items-center justify-content-center">
                                <div class="us-module-rating-stars d-flex align-items-center">
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                </div>
                                <div class="us-module-reviews"><i class="fas fa-comment"><span>0</span></i></div>
                            </div>
                            <div class="us-product-list-description">Экран: 6,1" | OLED | 1170x2532 | встроенная память:
                                64 ГБ | оперативная память: 4 ГБ | процессор: Apple A14 Bionic | ОС: Apple iOS 14 |
                                аккумулятор: 2775 мАч (несъемный) | камера: 12 (f/1.6, широкоугольная) + 12 (f/2.4, 120
                                градусов, сверхширокоуголь..
                            </div>


                            <div class="us-module-price">
                                <span class="us-module-price-actual">23 699 грн</span>
                            </div>
                            <a href="javascript:void(0);" onclick="cart.add('10979');"
                               class="us-module-cart-btn button-cart">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-grid col-sm-4">
                    <div class="us-module-item  d-flex flex-column">


                        <ul class="us-module-buttons-list">
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" onclick="wishlist.add('10980');" title="В закладки"
                                   class="us-module-buttons-link us-module-buttons-wishlist"><i
                                            class="far fa-heart"></i></a>
                            </li>
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" title="В сравнение" onclick="compare.add('10980');"
                                   class="us-module-buttons-link us-module-buttons-compare"><i
                                            class="fas fa-sliders-h"></i></a>
                            </li>

                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-quickview"
                                   title="Быстрый просмотр" onclick="octPopUpView('10980')"><i
                                            class="far fa-eye"></i></a>
                            </li>

                        </ul>
                        <div class="us-module-img">
                            <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-64gb-green-39697-ru.html">
                                <img src="https://mm.kh.ua/image/cache/catalog/iphone/39719-228x228-product_list.jpg"
                                     class="img-fluid" alt="Apple iPhone 12 64GB Green"
                                     title="Apple iPhone 12 64GB Green"/>
                            </a>
                        </div>
                        <div class="us-module-caption d-flex flex-column">
                            <div class="us-module-title flex-grow-1">
                                <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-64gb-green-39697-ru.html">Apple
                                    iPhone 12 64GB Green</a>
                            </div>
                            <div class="us-module-model"><span class="mdls">Код товара: <span
                                            class="mod">39697</span></span></div>
                            <div class="us-module-rating d-flex align-items-center justify-content-center">
                                <div class="us-module-rating-stars d-flex align-items-center">
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                </div>
                                <div class="us-module-reviews"><i class="fas fa-comment"><span>0</span></i></div>
                            </div>
                            <div class="us-product-list-description">Экран: 6,1" | OLED | 1170x2532 | встроенная память:
                                64 ГБ | оперативная память: 4 ГБ | процессор: Apple A14 Bionic | ОС: Apple iOS 14 |
                                аккумулятор: 2775 мАч (несъемный) | камера: 12 (f/1.6, широкоугольная) + 12 (f/2.4, 120
                                градусов, сверхширокоуголь..
                            </div>


                            <div class="us-module-price">
                                <span class="us-module-price-actual">23 299 грн</span>
                            </div>
                            <a href="javascript:void(0);" onclick="cart.add('10980');"
                               class="us-module-cart-btn button-cart">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-grid col-sm-4">
                    <div class="us-module-item  d-flex flex-column">


                        <ul class="us-module-buttons-list">
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" onclick="wishlist.add('10981');" title="В закладки"
                                   class="us-module-buttons-link us-module-buttons-wishlist"><i
                                            class="far fa-heart"></i></a>
                            </li>
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" title="В сравнение" onclick="compare.add('10981');"
                                   class="us-module-buttons-link us-module-buttons-compare"><i
                                            class="fas fa-sliders-h"></i></a>
                            </li>

                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-quickview"
                                   title="Быстрый просмотр" onclick="octPopUpView('10981')"><i
                                            class="far fa-eye"></i></a>
                            </li>

                        </ul>
                        <div class="us-module-img">
                            <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-64gb-red-39699-ru.html">
                                <img src="https://mm.kh.ua/image/cache/catalog/iphone/39720-228x228-product_list.jpg"
                                     class="img-fluid" alt="Apple iPhone 12 64GB Red" title="Apple iPhone 12 64GB Red"/>
                            </a>
                        </div>
                        <div class="us-module-caption d-flex flex-column">
                            <div class="us-module-title flex-grow-1">
                                <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-64gb-red-39699-ru.html">Apple
                                    iPhone 12 64GB Red</a>
                            </div>
                            <div class="us-module-model"><span class="mdls">Код товара: <span
                                            class="mod">39699</span></span></div>
                            <div class="us-module-rating d-flex align-items-center justify-content-center">
                                <div class="us-module-rating-stars d-flex align-items-center">
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                </div>
                                <div class="us-module-reviews"><i class="fas fa-comment"><span>0</span></i></div>
                            </div>
                            <div class="us-product-list-description">Экран: 6,1" | OLED | 1170x2532 | встроенная память:
                                64 ГБ | оперативная память: 4 ГБ | процессор: Apple A14 Bionic | ОС: Apple iOS 14 |
                                аккумулятор: 2775 мАч (несъемный) | камера: 12 (f/1.6, широкоугольная) + 12 (f/2.4, 120
                                градусов, сверхширокоуголь..
                            </div>


                            <div class="us-module-price">
                                <span class="us-module-price-actual">23 299 грн</span>
                            </div>
                            <a href="javascript:void(0);" onclick="cart.add('10981');"
                               class="us-module-cart-btn button-cart">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-grid col-sm-4">
                    <div class="us-module-item  d-flex flex-column">


                        <ul class="us-module-buttons-list">
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" onclick="wishlist.add('10982');" title="В закладки"
                                   class="us-module-buttons-link us-module-buttons-wishlist"><i
                                            class="far fa-heart"></i></a>
                            </li>
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" title="В сравнение" onclick="compare.add('10982');"
                                   class="us-module-buttons-link us-module-buttons-compare"><i
                                            class="fas fa-sliders-h"></i></a>
                            </li>

                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-quickview"
                                   title="Быстрый просмотр" onclick="octPopUpView('10982')"><i
                                            class="far fa-eye"></i></a>
                            </li>

                        </ul>
                        <div class="us-module-img">
                            <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-64gb-white-39700-ru.html">
                                <img src="https://mm.kh.ua/image/cache/catalog/iphone/39721-228x228-product_list.jpg"
                                     class="img-fluid" alt="Apple iPhone 12 64GB White"
                                     title="Apple iPhone 12 64GB White"/>
                            </a>
                        </div>
                        <div class="us-module-caption d-flex flex-column">
                            <div class="us-module-title flex-grow-1">
                                <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-64gb-white-39700-ru.html">Apple
                                    iPhone 12 64GB White</a>
                            </div>
                            <div class="us-module-model"><span class="mdls">Код товара: <span
                                            class="mod">39700</span></span></div>
                            <div class="us-module-rating d-flex align-items-center justify-content-center">
                                <div class="us-module-rating-stars d-flex align-items-center">
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                </div>
                                <div class="us-module-reviews"><i class="fas fa-comment"><span>0</span></i></div>
                            </div>
                            <div class="us-product-list-description">Экран: 6,1" | OLED | 1170x2532 | встроенная память:
                                64 ГБ | оперативная память: 4 ГБ | процессор: Apple A14 Bionic | ОС: Apple iOS 14 |
                                аккумулятор: 2775 мАч (несъемный) | камера: 12 (f/1.6, широкоугольная) + 12 (f/2.4, 120
                                градусов, сверхширокоуголь..
                            </div>


                            <div class="us-module-price">
                                <span class="us-module-price-actual">24 249 грн</span>
                            </div>
                            <a href="javascript:void(0);" onclick="cart.add('10982');"
                               class="us-module-cart-btn button-cart">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-grid col-sm-4">
                    <div class="us-module-item  d-flex flex-column">


                        <ul class="us-module-buttons-list">
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" onclick="wishlist.add('10903');" title="В закладки"
                                   class="us-module-buttons-link us-module-buttons-wishlist"><i
                                            class="far fa-heart"></i></a>
                            </li>
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" title="В сравнение" onclick="compare.add('10903');"
                                   class="us-module-buttons-link us-module-buttons-compare"><i
                                            class="fas fa-sliders-h"></i></a>
                            </li>

                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-quickview"
                                   title="Быстрый просмотр" onclick="octPopUpView('10903')"><i
                                            class="far fa-eye"></i></a>
                            </li>

                        </ul>
                        <div class="us-module-img">
                            <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-mini-128gb-black-39717-ru.html">
                                <img src="https://mm.kh.ua/image/cache/catalog/iphone/39717-228x228-product_list.jpg"
                                     class="img-fluid" alt="Apple iPhone 12 mini 128GB Black"
                                     title="Apple iPhone 12 mini 128GB Black"/>
                            </a>
                        </div>
                        <div class="us-module-caption d-flex flex-column">
                            <div class="us-module-title flex-grow-1">
                                <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-mini-128gb-black-39717-ru.html">Apple
                                    iPhone 12 mini 128GB Black</a>
                            </div>
                            <div class="us-module-model"><span class="mdls">Код товара: <span
                                            class="mod">39717</span></span></div>
                            <div class="us-module-rating d-flex align-items-center justify-content-center">
                                <div class="us-module-rating-stars d-flex align-items-center">
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                </div>
                                <div class="us-module-reviews"><i class="fas fa-comment"><span>0</span></i></div>
                            </div>
                            <div class="us-product-list-description">Экран: 5,4" | OLED | 1080x2340 | встроенная память:
                                128 ГБ | оперативная память: 4 ГБ | процессор: Apple A14 Bionic | ОС: Apple iOS 14 |
                                аккумулятор: 2227 мАч (несъемный) | камера: 12 (f/1.6, широкоугольная) + 12 (f/2.4, 120
                                градусов, сверхширокоугол..
                            </div>


                            <div class="us-module-price">
                                <span class="us-module-price-actual">25 199 грн</span>
                            </div>
                            <a href="javascript:void(0);" onclick="cart.add('10903');"
                               class="us-module-cart-btn button-cart">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-grid col-sm-4">
                    <div class="us-module-item  d-flex flex-column">


                        <ul class="us-module-buttons-list">
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" onclick="wishlist.add('10904');" title="В закладки"
                                   class="us-module-buttons-link us-module-buttons-wishlist"><i
                                            class="far fa-heart"></i></a>
                            </li>
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" title="В сравнение" onclick="compare.add('10904');"
                                   class="us-module-buttons-link us-module-buttons-compare"><i
                                            class="fas fa-sliders-h"></i></a>
                            </li>

                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-quickview"
                                   title="Быстрый просмотр" onclick="octPopUpView('10904')"><i
                                            class="far fa-eye"></i></a>
                            </li>

                        </ul>
                        <div class="us-module-img">
                            <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-mini-128gb-blue-39718-ru.html">
                                <img src="https://mm.kh.ua/image/cache/catalog/iphone/39718-228x228-product_list.jpg"
                                     class="img-fluid" alt="Apple iPhone 12 mini 128GB Blue"
                                     title="Apple iPhone 12 mini 128GB Blue"/>
                            </a>
                        </div>
                        <div class="us-module-caption d-flex flex-column">
                            <div class="us-module-title flex-grow-1">
                                <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-mini-128gb-blue-39718-ru.html">Apple
                                    iPhone 12 mini 128GB Blue</a>
                            </div>
                            <div class="us-module-model"><span class="mdls">Код товара: <span
                                            class="mod">39718</span></span></div>
                            <div class="us-module-rating d-flex align-items-center justify-content-center">
                                <div class="us-module-rating-stars d-flex align-items-center">
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                </div>
                                <div class="us-module-reviews"><i class="fas fa-comment"><span>0</span></i></div>
                            </div>
                            <div class="us-product-list-description">Экран: 5,4" | OLED | 1080x2340 | встроенная память:
                                128 ГБ | оперативная память: 4 ГБ | процессор: Apple A14 Bionic | ОС: Apple iOS 14 |
                                аккумулятор: 2227 мАч (несъемный) | камера: 12 (f/1.6, широкоугольная) + 12 (f/2.4, 120
                                градусов, сверхширокоугол..
                            </div>


                            <div class="us-module-price">
                                <span class="us-module-price-actual">25 199 грн</span>
                            </div>
                            <a href="javascript:void(0);" onclick="cart.add('10904');"
                               class="us-module-cart-btn button-cart">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-grid col-sm-4">
                    <div class="us-module-item  d-flex flex-column">


                        <ul class="us-module-buttons-list">
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" onclick="wishlist.add('10905');" title="В закладки"
                                   class="us-module-buttons-link us-module-buttons-wishlist"><i
                                            class="far fa-heart"></i></a>
                            </li>
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" title="В сравнение" onclick="compare.add('10905');"
                                   class="us-module-buttons-link us-module-buttons-compare"><i
                                            class="fas fa-sliders-h"></i></a>
                            </li>

                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-quickview"
                                   title="Быстрый просмотр" onclick="octPopUpView('10905')"><i
                                            class="far fa-eye"></i></a>
                            </li>

                        </ul>
                        <div class="us-module-img">
                            <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-mini-128gb-green-39719-ru.html">
                                <img src="https://mm.kh.ua/image/cache/catalog/iphone/39719-228x228-product_list.jpg"
                                     class="img-fluid" alt="Apple iPhone 12 mini 128GB Green"
                                     title="Apple iPhone 12 mini 128GB Green"/>
                            </a>
                        </div>
                        <div class="us-module-caption d-flex flex-column">
                            <div class="us-module-title flex-grow-1">
                                <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-mini-128gb-green-39719-ru.html">Apple
                                    iPhone 12 mini 128GB Green</a>
                            </div>
                            <div class="us-module-model"><span class="mdls">Код товара: <span
                                            class="mod">39719</span></span></div>
                            <div class="us-module-rating d-flex align-items-center justify-content-center">
                                <div class="us-module-rating-stars d-flex align-items-center">
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                </div>
                                <div class="us-module-reviews"><i class="fas fa-comment"><span>0</span></i></div>
                            </div>
                            <div class="us-product-list-description">Экран: 5,4" | OLED | 1080x2340 | встроенная память:
                                128 ГБ | оперативная память: 4 ГБ | процессор: Apple A14 Bionic | ОС: Apple iOS 14 |
                                аккумулятор: 2227 мАч (несъемный) | камера: 12 (f/1.6, широкоугольная) + 12 (f/2.4, 120
                                градусов, сверхширокоугол..
                            </div>


                            <div class="us-module-price">
                                <span class="us-module-price-actual">25 199 грн</span>
                            </div>
                            <a href="javascript:void(0);" onclick="cart.add('10905');"
                               class="us-module-cart-btn button-cart">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-grid col-sm-4">
                    <div class="us-module-item  d-flex flex-column">


                        <ul class="us-module-buttons-list">
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" onclick="wishlist.add('10906');" title="В закладки"
                                   class="us-module-buttons-link us-module-buttons-wishlist"><i
                                            class="far fa-heart"></i></a>
                            </li>
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" title="В сравнение" onclick="compare.add('10906');"
                                   class="us-module-buttons-link us-module-buttons-compare"><i
                                            class="fas fa-sliders-h"></i></a>
                            </li>

                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-quickview"
                                   title="Быстрый просмотр" onclick="octPopUpView('10906')"><i
                                            class="far fa-eye"></i></a>
                            </li>

                        </ul>
                        <div class="us-module-img">
                            <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-mini-128gb-red-39720-ru.html">
                                <img src="https://mm.kh.ua/image/cache/catalog/iphone/39720-228x228-product_list.jpg"
                                     class="img-fluid" alt="Apple iPhone 12 mini 128GB Red"
                                     title="Apple iPhone 12 mini 128GB Red"/>
                            </a>
                        </div>
                        <div class="us-module-caption d-flex flex-column">
                            <div class="us-module-title flex-grow-1">
                                <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-mini-128gb-red-39720-ru.html">Apple
                                    iPhone 12 mini 128GB Red</a>
                            </div>
                            <div class="us-module-model"><span class="mdls">Код товара: <span
                                            class="mod">39720</span></span></div>
                            <div class="us-module-rating d-flex align-items-center justify-content-center">
                                <div class="us-module-rating-stars d-flex align-items-center">
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                </div>
                                <div class="us-module-reviews"><i class="fas fa-comment"><span>0</span></i></div>
                            </div>
                            <div class="us-product-list-description">Экран: 5,4" | OLED | 1080x2340 | встроенная память:
                                128 ГБ | оперативная память: 4 ГБ | процессор: Apple A14 Bionic | ОС: Apple iOS 14 |
                                аккумулятор: 2227 мАч (несъемный) | камера: 12 (f/1.6, широкоугольная) + 12 (f/2.4, 120
                                градусов, сверхширокоугол..
                            </div>


                            <div class="us-module-price">
                                <span class="us-module-price-actual">25 199 грн</span>
                            </div>
                            <a href="javascript:void(0);" onclick="cart.add('10906');"
                               class="us-module-cart-btn button-cart">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-grid col-sm-4">
                    <div class="us-module-item  d-flex flex-column">


                        <ul class="us-module-buttons-list">
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" onclick="wishlist.add('10907');" title="В закладки"
                                   class="us-module-buttons-link us-module-buttons-wishlist"><i
                                            class="far fa-heart"></i></a>
                            </li>
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" title="В сравнение" onclick="compare.add('10907');"
                                   class="us-module-buttons-link us-module-buttons-compare"><i
                                            class="fas fa-sliders-h"></i></a>
                            </li>

                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-quickview"
                                   title="Быстрый просмотр" onclick="octPopUpView('10907')"><i
                                            class="far fa-eye"></i></a>
                            </li>

                        </ul>
                        <div class="us-module-img">
                            <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-mini-128gb-white-39721-ru.html">
                                <img src="https://mm.kh.ua/image/cache/catalog/iphone/39721-228x228-product_list.jpg"
                                     class="img-fluid" alt="Apple iPhone 12 mini 128GB White"
                                     title="Apple iPhone 12 mini 128GB White"/>
                            </a>
                        </div>
                        <div class="us-module-caption d-flex flex-column">
                            <div class="us-module-title flex-grow-1">
                                <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-mini-128gb-white-39721-ru.html">Apple
                                    iPhone 12 mini 128GB White</a>
                            </div>
                            <div class="us-module-model"><span class="mdls">Код товара: <span
                                            class="mod">39721</span></span></div>
                            <div class="us-module-rating d-flex align-items-center justify-content-center">
                                <div class="us-module-rating-stars d-flex align-items-center">
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                </div>
                                <div class="us-module-reviews"><i class="fas fa-comment"><span>0</span></i></div>
                            </div>
                            <div class="us-product-list-description">Экран: 5,4" | OLED | 1080x2340 | встроенная память:
                                128 ГБ | оперативная память: 4 ГБ | процессор: Apple A14 Bionic | ОС: Apple iOS 14 |
                                аккумулятор: 2227 мАч (несъемный) | камера: 12 (f/1.6, широкоугольная) + 12 (f/2.4, 120
                                градусов, сверхширокоугол..
                            </div>


                            <div class="us-module-price">
                                <span class="us-module-price-actual">25 199 грн</span>
                            </div>
                            <a href="javascript:void(0);" onclick="cart.add('10907');"
                               class="us-module-cart-btn button-cart">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-grid col-sm-4">
                    <div class="us-module-item  d-flex flex-column">


                        <ul class="us-module-buttons-list">
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" onclick="wishlist.add('10908');" title="В закладки"
                                   class="us-module-buttons-link us-module-buttons-wishlist"><i
                                            class="far fa-heart"></i></a>
                            </li>
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" title="В сравнение" onclick="compare.add('10908');"
                                   class="us-module-buttons-link us-module-buttons-compare"><i
                                            class="fas fa-sliders-h"></i></a>
                            </li>

                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-quickview"
                                   title="Быстрый просмотр" onclick="octPopUpView('10908')"><i
                                            class="far fa-eye"></i></a>
                            </li>

                        </ul>
                        <div class="us-module-img">
                            <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-mini-256gb-black-39722-ru.html">
                                <img src="https://mm.kh.ua/image/cache/catalog/iphone/39717-228x228-product_list.jpg"
                                     class="img-fluid" alt="Apple iPhone 12 mini 256GB Black"
                                     title="Apple iPhone 12 mini 256GB Black"/>
                            </a>
                        </div>
                        <div class="us-module-caption d-flex flex-column">
                            <div class="us-module-title flex-grow-1">
                                <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-mini-256gb-black-39722-ru.html">Apple
                                    iPhone 12 mini 256GB Black</a>
                            </div>
                            <div class="us-module-model"><span class="mdls">Код товара: <span
                                            class="mod">39722</span></span></div>
                            <div class="us-module-rating d-flex align-items-center justify-content-center">
                                <div class="us-module-rating-stars d-flex align-items-center">
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                </div>
                                <div class="us-module-reviews"><i class="fas fa-comment"><span>0</span></i></div>
                            </div>
                            <div class="us-product-list-description">Экран: 5,4" | OLED | 1080x2340 | встроенная память:
                                256 ГБ | оперативная память: 4 ГБ | процессор: Apple A14 Bionic | ОС: Apple iOS 14 |
                                аккумулятор: 2227 мАч (несъемный) | камера: 12 (f/1.6, широкоугольная) + 12 (f/2.4, 120
                                градусов, сверхширокоугол..
                            </div>


                            <div class="us-module-price">
                                <span class="us-module-price-actual">36 999 грн</span>
                            </div>
                            <a href="javascript:void(0);" onclick="cart.add('10908');"
                               class="us-module-cart-btn button-cart">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-grid col-sm-4">
                    <div class="us-module-item  d-flex flex-column">


                        <ul class="us-module-buttons-list">
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" onclick="wishlist.add('10918');" title="В закладки"
                                   class="us-module-buttons-link us-module-buttons-wishlist"><i
                                            class="far fa-heart"></i></a>
                            </li>
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" title="В сравнение" onclick="compare.add('10918');"
                                   class="us-module-buttons-link us-module-buttons-compare"><i
                                            class="fas fa-sliders-h"></i></a>
                            </li>

                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-quickview"
                                   title="Быстрый просмотр" onclick="octPopUpView('10918')"><i
                                            class="far fa-eye"></i></a>
                            </li>

                        </ul>
                        <div class="us-module-img">
                            <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-mini-256gb-blue-39726-ru.html">
                                <img src="https://mm.kh.ua/image/cache/catalog/iphone/39718-228x228-product_list.jpg"
                                     class="img-fluid" alt="Apple iPhone 12 mini 256GB Blue"
                                     title="Apple iPhone 12 mini 256GB Blue"/>
                            </a>
                        </div>
                        <div class="us-module-caption d-flex flex-column">
                            <div class="us-module-title flex-grow-1">
                                <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-mini-256gb-blue-39726-ru.html">Apple
                                    iPhone 12 mini 256GB Blue</a>
                            </div>
                            <div class="us-module-model"><span class="mdls">Код товара: <span
                                            class="mod">39726</span></span></div>
                            <div class="us-module-rating d-flex align-items-center justify-content-center">
                                <div class="us-module-rating-stars d-flex align-items-center">
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                </div>
                                <div class="us-module-reviews"><i class="fas fa-comment"><span>0</span></i></div>
                            </div>
                            <div class="us-product-list-description">Экран: 5,4" | OLED | 1080x2340 | встроенная память:
                                256 ГБ | оперативная память: 4 ГБ | процессор: Apple A14 Bionic | ОС: Apple iOS 14 |
                                аккумулятор: 2227 мАч (несъемный) | камера: 12 (f/1.6, широкоугольная) + 12 (f/2.4, 120
                                градусов, сверхширокоугол..
                            </div>


                            <div class="us-module-price">
                                <span class="us-module-price-actual">28 150 грн</span>
                            </div>
                            <a href="javascript:void(0);" onclick="cart.add('10918');"
                               class="us-module-cart-btn button-cart">В корзину</a>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-grid col-sm-4">
                    <div class="us-module-item  d-flex flex-column">


                        <ul class="us-module-buttons-list">
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" onclick="wishlist.add('10919');" title="В закладки"
                                   class="us-module-buttons-link us-module-buttons-wishlist"><i
                                            class="far fa-heart"></i></a>
                            </li>
                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" title="В сравнение" onclick="compare.add('10919');"
                                   class="us-module-buttons-link us-module-buttons-compare"><i
                                            class="fas fa-sliders-h"></i></a>
                            </li>

                            <li class="us-module-buttons-item">
                                <a href="javascript:void(0);" class="us-module-buttons-link us-module-buttons-quickview"
                                   title="Быстрый просмотр" onclick="octPopUpView('10919')"><i
                                            class="far fa-eye"></i></a>
                            </li>

                        </ul>
                        <div class="us-module-img">
                            <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-mini-256gb-green-39725-ru.html">
                                <img src="https://mm.kh.ua/image/cache/catalog/iphone/39719-228x228-product_list.jpg"
                                     class="img-fluid" alt="Apple iPhone 12 mini 256GB Green"
                                     title="Apple iPhone 12 mini 256GB Green"/>
                            </a>
                        </div>
                        <div class="us-module-caption d-flex flex-column">
                            <div class="us-module-title flex-grow-1">
                                <a href="https://mm.kh.ua/250--/665-apple-iphone/apple-iphone-12-mini-256gb-green-39725-ru.html">Apple
                                    iPhone 12 mini 256GB Green</a>
                            </div>
                            <div class="us-module-model"><span class="mdls">Код товара: <span
                                            class="mod">39725</span></span></div>
                            <div class="us-module-rating d-flex align-items-center justify-content-center">
                                <div class="us-module-rating-stars d-flex align-items-center">
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                    <span class="us-module-rating-star"></span>
                                </div>
                                <div class="us-module-reviews"><i class="fas fa-comment"><span>0</span></i></div>
                            </div>
                            <div class="us-product-list-description">Экран: 5,4" | OLED | 1080x2340 | встроенная память:
                                256 ГБ | оперативная память: 4 ГБ | процессор: Apple A14 Bionic | ОС: Apple iOS 14 |
                                аккумулятор: 2227 мАч (несъемный) | камера: 12 (f/1.6, широкоугольная) + 12 (f/2.4, 120
                                градусов, сверхширокоугол..
                            </div>


                            <div class="us-module-price">
                                <span class="us-module-price-actual">28 150 грн</span>
                            </div>
                            <a href="javascript:void(0);" onclick="cart.add('10919');"
                               class="us-module-cart-btn button-cart">В корзину</a>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="pagination">
                <li class="active"><span>1</span></li>
                <li><a href="https://mm.kh.ua/250--?page=2">2</a></li>
                <li><a href="https://mm.kh.ua/250--?page=3">3</a></li>
                <li><a href="https://mm.kh.ua/250--?page=4">4</a></li>
                <li><a href="https://mm.kh.ua/250--?page=5">5</a></li>
                <li><a href="https://mm.kh.ua/250--?page=6">6</a></li>
                <li><a href="https://mm.kh.ua/250--?page=7">7</a></li>
                <li><a href="https://mm.kh.ua/250--?page=8">8</a></li>
                <li><a href="https://mm.kh.ua/250--?page=9">9</a></li>
                <li><a href="https://mm.kh.ua/250--?page=2">&gt;</a></li>
                <li><a href="https://mm.kh.ua/250--?page=74">&gt;|</a></li>
            </ul>
            <div class="us-category-description">
                <div class="d-flex">
                    <div id="us-category-description" class="us-category-description-cont">
                        <div class="us-category-description-opacity"></div>
                        <div class="us-category-description-text"><h2><b>Купить мобильные телефоны и смартфона по самым
                                    вкусным ценам в Харькове теперь реальность, а не просто мечты!</b></h2>
                            <div>Желаете приобрести новенький мобильник, но не знаете, где найти достойные варианты и по
                                доступным ценам? Мы предлагаем на Ваш выбор огромный ассортимент мобильных телефонов и
                                смартфонов различных брендов по самым низким ценам в городе! Вы можете прочитать наш
                                сегодняшний обзор и узнать, как правильно выбирать гаджеты, чем отличаются друг от друга
                                разные производители, какие самые важные параметры у всех моделей и брендов, плюсы и
                                минусы, основные технические характеристики, дополнительные функции, свойства и опции,
                                современный дизайн или классика и много еще всего интересненького. В том случае, если Вы
                                знаете, какое мобильное устройство нужно именно Вам и сделали свой выбор, то Вы можете
                                так же легко сделать заказ на нашем сайте и получить прямую доставку к Вашему дому, а
                                также забрать и проверить Вашу покупку самостоятельно в нашем магазине (про наличие
                                товара узнавайте по номерам телефонов в шапке сайта).&nbsp;
                            </div>
                            <div><br></div>
                            <h3><b>Какими бывают мобильные устройства?</b></h3>
                            <div>На сегодняшний день на мировом рынке такой огромный выбор телефонов, подходящий
                                индивидуально каждому. Существуют даже разработанные гаджеты отдельно для пожилых людей,
                                детей, людей с особыми потребностями и так далее. Современное молодое поколение
                                предпочитает сенсорный смартфоны или «яблочные» айфоны. Такие устройства обычно имеют
                                одну-три кнопки, а порой и вовсе ни одной. Но не только телефоны, а также и сенсоры
                                делятся на подтипы. Они бывают резистивные и емкостные. Первый вариант работает от
                                соприкосновения с любым твердым предметом, а другой – исключительно от касания пальцами
                                или специальными (индивидуально разработанного для одной модели телефона) стилусами.
                            </div>
                            <div><br></div>
                            <h3><b>Экраны современных мобильных устройств</b></h3>
                            <div>Давайте теперь посмотрим на экран. Первым делом обратим внимание на диагональ экрана в
                                дюймах и его разрешение. Самый мощный смартфон, который позволяет не только говорить по
                                телефону и вести переписку, а также «серфинговать» по глобальной паутине, играть в
                                различные игры и погружаться в мир кино, обычно имеют диагональ экрана свыше пяти-шести
                                дюймов и разрешением не менее, чем такие стандарты HD (1280x720) и Full HD (1920х1080) и
                                даже еще с более мощным качеством Quad HD (2560х1440) и 4K Ultra HD (3820х2160). А чтоб
                                убедиться в качестве изображения, его насыщенности, яркости, глубины и детализированости
                                всех элементов, стоит обратить внимание на плотность пикселей. Чем выше их количество,
                                тем лучше будет отображаться картинка.
                            </div>
                            <div><br></div>
                            <h3><b>Проверка основного функционала</b></h3>
                            <div>Важна в мобильных устройствах и сама крепость инженерной конструкции. Например, стекло
                                (2D, 2.5D, 3D) и корпус, а также тип экрана, который влияет на качество изображения
                                (список типов экрана весьма длинный со своими особенными характеристиками). В различных
                                мобильных устройствах используются отличные друг от друга сим-карты и также их
                                количество, например, одна или две карты, SIM, Micro-sim, Nano-sim. Обратите свое
                                внимание при выборе гаджета на операционную систему (iOS, Android, Win Phone 8,10),
                                стандарты связи (GSM, CDMA, 3G, 4G) и оснащение. При анализе камеры (фронтальной и
                                основной) проверьте разрешение, размеры пикселей, светосилу, диагональ матрицы и
                                функции. Лучше, чтоб емкость аккумулятора была повыше, чтоб у процессора было побольше
                                ядер, что сделает Ваше мобильное устройство мощнее и быстрее в работе.&nbsp;
                            </div>
                            <div><br></div>
                            <h3><b>Подведем итоги</b></h3>
                            <div>Мобильные телефоны и смартфоны у различных брендов и производителей развиваются с
                                каждым днем, и наша команда развивается вместе с ними, поэтому мы предлагаем нашим
                                покупателям только самый лучший ассортимент по доступной цене и гарантийный срок от лица
                                нашего магазина. Желаем Вам скорее найти подходящую модель товара и получить, как можно
                                скорее, желаемое!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="us-show-more">
                    <a href="javascript:void(0);" class="us-show-more-link" id="us-show-more-link"><span
                                class="us-show-more-expand">Развернуть</span><span
                                class="us-show-more-rollup">Свернуть</span><i class="fas fa-angle-down"></i></a>
                </div>
                <script>
                    $(function () {
                        $('#us-show-more-link').on('click', function () {
                            $(this).toggleClass('clicked');
                            $('.us-category-description-cont').toggleClass('expanded');
                            $('.us-category-description-opacity').toggleClass('hidden');
                        });
                    });
                </script>
            </div>
        </div>

    </div>
</div>

@endsection