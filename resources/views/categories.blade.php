@extends('master', ['id' => 'information-information', 'class' => 'flex-container'])

@section('title', 'Все категории товаров')

@section('content')
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb us-breadcrumb">
            <li class="breadcrumb-item us-breadcrumb-item"><a href="https://mm.kh.ua"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item us-breadcrumb-item">Все категории товаров</li>
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
					"@id": "https://mm.kh.ua/index.php?route=octemplates/product/octallcategories",
					"name": "Все категории товаров"
				}
			}						]
}
</script>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="us-main-shop-title">Все категории товаров</h1>
        </div>
    </div>
    <div class="content-top-box"></div>
    <div class="row">
        <div id="content" class="col-sm-12">
            <div class="us-content">
                <div class="us-all-categories">
                    @foreach($categories as $category)
                        <div class="us-all-categories-category-parent">
                            <div class="us-all-categories-category-parent-title"><a href="{{ route('category', $category->code) }}">{{ $category->name }}</a> <span class="us-all-categories-category-count">1775</span></div>
                            <div class="row us-all-categories-category-children">
                                <div class="us-all-categories-category-child col-lg-3">
                                    <div class="us-all-categories-category-child-title"><a href="{{ route('category', $category->code)}}/mobilnye-telefony-realme-ru">Мобильные телефоны Realme</a></div>
                                </div>
                                <div class="us-all-categories-category-child col-lg-3">
                                    <div class="us-all-categories-category-child-title"><a href="{{ route('category', $category->code)}}/268-samsung">Мобильные телефоны Samsung (170)</a></div>
                                </div>
                                <div class="us-all-categories-category-child col-lg-3">
                                    <div class="us-all-categories-category-child-title"><a href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-samsung-ru">Аксессуары к мобильным телефонам Samsung (535)</a></div>
                                    <ul class="list-unstyled">
                                        <li><a class="us-all-categories-category-child-third" href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-samsung-ru/zaschitnye-plenki-dlja-telefonov-samsung-ru">Защитные пленки для телефонов Samsung (20)</a></li>
                                        <li><a class="us-all-categories-category-child-third" href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-samsung-ru/zaschitnye-stekla-dlja-samsung-ru">Защитные стекла для телефонов Samsung (66)</a></li>
                                        <li><a class="us-all-categories-category-child-third" href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-samsung-ru/377-chehol-samsung">Чехлы для Samsung (449)</a></li>
                                    </ul>
                                </div>
                                <div class="us-all-categories-category-child col-lg-3">
                                    <div class="us-all-categories-category-child-title"><a href="{{ route('category', $category->code)}}/665-apple-iphone">Мобильные телефоны Apple iPhone (90)</a></div>
                                </div>
                                <div class="us-all-categories-category-child col-lg-3">
                                    <div class="us-all-categories-category-child-title"><a href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-apple-ru">Аксессуары к мобильным телефонам Apple (311)</a></div>
                                    <ul class="list-unstyled">
                                        <li><a class="us-all-categories-category-child-third" href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-apple-ru/zaschitnye-plenki-dlja-telefonov-iphone-ru">Защитные пленки для телефонов iPhone (4)</a></li>
                                        <li><a class="us-all-categories-category-child-third" href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-apple-ru/zaschitnye-stekla-dlja-iphone-ru">Защитные стекла для телефонов IPhone (23)</a></li>
                                        <li><a class="us-all-categories-category-child-third" href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-apple-ru/chekhly-dlya-iPhone">Чехлы для iPhone (284)</a></li>
                                    </ul>
                                </div>
                                <div class="us-all-categories-category-child col-lg-3">
                                    <div class="us-all-categories-category-child-title"><a href="{{ route('category', $category->code)}}/657-xiaomi">Мобильные телефоны Xiaomi (185)</a></div>
                                </div>
                                <div class="us-all-categories-category-child col-lg-3">
                                    <div class="us-all-categories-category-child-title"><a href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-xiaomi-ru">Аксессуары к мобильным телефонам Xiaomi (373)</a></div>
                                    <ul class="list-unstyled">
                                        <li><a class="us-all-categories-category-child-third" href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-xiaomi-ru/zaschitnye-stekla-dlja-xiaomi-ru">Защитные стекла для телефонов Xiaomi (52)</a></li>
                                        <li><a class="us-all-categories-category-child-third" href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-xiaomi-ru/chehly-dlja-xiaomi-ru">Чехлы для Xiaomi (321)</a></li>
                                    </ul>
                                </div>
                                <div class="us-all-categories-category-child col-lg-3">
                                    <div class="us-all-categories-category-child-title"><a href="{{ route('category', $category->code)}}/510-huawei">Мобильные телефоны HUAWEI (7)</a></div>
                                </div>
                                <div class="us-all-categories-category-child col-lg-3">
                                    <div class="us-all-categories-category-child-title"><a href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-huawei-ru">Аксессуары к мобильным телефонам Huawei (40)</a></div>
                                    <ul class="list-unstyled">
                                        <li><a class="us-all-categories-category-child-third" href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-huawei-ru/zaschitnye-stekla-dlja-huawei-ru">Защитные стекла для телефонов Huawei (9)</a></li>
                                        <li><a class="us-all-categories-category-child-third" href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-huawei-ru/chehly-dlja-huawei-ru">Чехлы для Huawei (31)</a></li>
                                    </ul>
                                </div>
                                <div class="us-all-categories-category-child col-lg-3">
                                    <div class="us-all-categories-category-child-title"><a href="{{ route('category', $category->code)}}/ergo-ru">Мобильные телефоны ERGO (6)</a></div>
                                </div>
                                <div class="us-all-categories-category-child col-lg-3">
                                    <div class="us-all-categories-category-child-title"><a href="{{ route('category', $category->code)}}/bravis-ru">Мобильные телефоны Bravis</a></div>
                                </div>
                                <div class="us-all-categories-category-child col-lg-3">
                                    <div class="us-all-categories-category-child-title"><a href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-bravis-ru">Аксессуары к мобильным телефонам Bravis (1)</a></div>
                                    <ul class="list-unstyled">
                                        <li><a class="us-all-categories-category-child-third" href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-bravis-ru/zaschitnye-plenki-dlja-telefonov-bravis-ru">Защитные пленки для телефонов Bravis (1)</a></li>
                                    </ul>
                                </div>
                                <div class="us-all-categories-category-child col-lg-3">
                                    <div class="us-all-categories-category-child-title"><a href="{{ route('category', $category->code)}}/mobilnye-telefony-oppo-ru">Мобильные телефоны Oppo (14)</a></div>
                                </div>
                                <div class="us-all-categories-category-child col-lg-3">
                                    <div class="us-all-categories-category-child-title"><a href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-htc-ru">Аксессуары к мобильным телефонам HTC (19)</a></div>
                                    <ul class="list-unstyled">
                                        <li><a class="us-all-categories-category-child-third" href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-htc-ru/zaschitnye-plenki-dlja-telefonov-htc-ru">Защитные пленки для телефонов HTC (11)</a></li>
                                        <li><a class="us-all-categories-category-child-third" href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-htc-ru/502--htc">Чехлы для HTC (8)</a></li>
                                    </ul>
                                </div>
                                <div class="us-all-categories-category-child col-lg-3">
                                    <div class="us-all-categories-category-child-title"><a href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-lg-ru">Аксессуары к мобильным телефонам LG (9)</a></div>
                                    <ul class="list-unstyled">
                                        <li><a class="us-all-categories-category-child-third" href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-lg-ru/zaschitnye-plenki-dlja-telefonov-lg-ru">Защитные пленки для телефонов LG (6)</a></li>
                                        <li><a class="us-all-categories-category-child-third" href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-lg-ru/519--lg">Чехлы для LG (3)</a></li>
                                    </ul>
                                </div>
                                <div class="us-all-categories-category-child col-lg-3">
                                    <div class="us-all-categories-category-child-title"><a href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-lenovo-ru">Аксессуары к мобильным телефонам Lenovo (2)</a></div>
                                    <ul class="list-unstyled">
                                        <li><a class="us-all-categories-category-child-third" href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-lenovo-ru/zaschitnye-plenki-dlja-telefonov-lenovo-ru">Защитные пленки для телефонов Lenovo (2)</a></li>
                                    </ul>
                                </div>
                                <div class="us-all-categories-category-child col-lg-3">
                                    <div class="us-all-categories-category-child-title"><a href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-nokia-ru">Аксессуары к мобильным телефонам Nokia (5)</a></div>
                                    <ul class="list-unstyled">
                                        <li><a class="us-all-categories-category-child-third" href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-nokia-ru/zaschitnye-plenki-dlja-telefonov-nokia-ru">Защитные пленки для телефонов Nokia (2)</a></li>
                                        <li><a class="us-all-categories-category-child-third" href="{{ route('category', $category->code)}}/aksessuary-k-mobilnym-telefonam-nokia-ru/627-cover-nokia">Чехлы для Nokia (3)</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <?php /*<div class="us-all-categories-category-parent">
                        <div class="us-all-categories-category-parent-title"><a href="/250--">Мобильные телефоны</a> <span class="us-all-categories-category-count">1775</span></div>
                        <div class="row us-all-categories-category-children">
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/250--/mobilnye-telefony-realme-ru">Мобильные телефоны Realme</a></div>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/250--/268-samsung">Мобильные телефоны Samsung (170)</a></div>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/250--/aksessuary-k-mobilnym-telefonam-samsung-ru">Аксессуары к мобильным телефонам Samsung (535)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/250--/aksessuary-k-mobilnym-telefonam-samsung-ru/zaschitnye-plenki-dlja-telefonov-samsung-ru">Защитные пленки для телефонов Samsung (20)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/250--/aksessuary-k-mobilnym-telefonam-samsung-ru/zaschitnye-stekla-dlja-samsung-ru">Защитные стекла для телефонов Samsung (66)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/250--/aksessuary-k-mobilnym-telefonam-samsung-ru/377-chehol-samsung">Чехлы для Samsung (449)</a></li>
                                </ul>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/250--/665-apple-iphone">Мобильные телефоны Apple iPhone (90)</a></div>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/250--/aksessuary-k-mobilnym-telefonam-apple-ru">Аксессуары к мобильным телефонам Apple (311)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/250--/aksessuary-k-mobilnym-telefonam-apple-ru/zaschitnye-plenki-dlja-telefonov-iphone-ru">Защитные пленки для телефонов iPhone (4)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/250--/aksessuary-k-mobilnym-telefonam-apple-ru/zaschitnye-stekla-dlja-iphone-ru">Защитные стекла для телефонов IPhone (23)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/250--/aksessuary-k-mobilnym-telefonam-apple-ru/chekhly-dlya-iPhone">Чехлы для iPhone (284)</a></li>
                                </ul>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/250--/657-xiaomi">Мобильные телефоны Xiaomi (185)</a></div>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/250--/aksessuary-k-mobilnym-telefonam-xiaomi-ru">Аксессуары к мобильным телефонам Xiaomi (373)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/250--/aksessuary-k-mobilnym-telefonam-xiaomi-ru/zaschitnye-stekla-dlja-xiaomi-ru">Защитные стекла для телефонов Xiaomi (52)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/250--/aksessuary-k-mobilnym-telefonam-xiaomi-ru/chehly-dlja-xiaomi-ru">Чехлы для Xiaomi (321)</a></li>
                                </ul>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/250--/510-huawei">Мобильные телефоны HUAWEI (7)</a></div>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/250--/aksessuary-k-mobilnym-telefonam-huawei-ru">Аксессуары к мобильным телефонам Huawei (40)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/250--/aksessuary-k-mobilnym-telefonam-huawei-ru/zaschitnye-stekla-dlja-huawei-ru">Защитные стекла для телефонов Huawei (9)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/250--/aksessuary-k-mobilnym-telefonam-huawei-ru/chehly-dlja-huawei-ru">Чехлы для Huawei (31)</a></li>
                                </ul>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/250--/ergo-ru">Мобильные телефоны ERGO (6)</a></div>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/250--/bravis-ru">Мобильные телефоны Bravis</a></div>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/250--/aksessuary-k-mobilnym-telefonam-bravis-ru">Аксессуары к мобильным телефонам Bravis (1)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/250--/aksessuary-k-mobilnym-telefonam-bravis-ru/zaschitnye-plenki-dlja-telefonov-bravis-ru">Защитные пленки для телефонов Bravis (1)</a></li>
                                </ul>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/250--/mobilnye-telefony-oppo-ru">Мобильные телефоны Oppo (14)</a></div>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/250--/aksessuary-k-mobilnym-telefonam-htc-ru">Аксессуары к мобильным телефонам HTC (19)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/250--/aksessuary-k-mobilnym-telefonam-htc-ru/zaschitnye-plenki-dlja-telefonov-htc-ru">Защитные пленки для телефонов HTC (11)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/250--/aksessuary-k-mobilnym-telefonam-htc-ru/502--htc">Чехлы для HTC (8)</a></li>
                                </ul>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/250--/aksessuary-k-mobilnym-telefonam-lg-ru">Аксессуары к мобильным телефонам LG (9)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/250--/aksessuary-k-mobilnym-telefonam-lg-ru/zaschitnye-plenki-dlja-telefonov-lg-ru">Защитные пленки для телефонов LG (6)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/250--/aksessuary-k-mobilnym-telefonam-lg-ru/519--lg">Чехлы для LG (3)</a></li>
                                </ul>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/250--/aksessuary-k-mobilnym-telefonam-lenovo-ru">Аксессуары к мобильным телефонам Lenovo (2)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/250--/aksessuary-k-mobilnym-telefonam-lenovo-ru/zaschitnye-plenki-dlja-telefonov-lenovo-ru">Защитные пленки для телефонов Lenovo (2)</a></li>
                                </ul>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/250--/aksessuary-k-mobilnym-telefonam-nokia-ru">Аксессуары к мобильным телефонам Nokia (5)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/250--/aksessuary-k-mobilnym-telefonam-nokia-ru/zaschitnye-plenki-dlja-telefonov-nokia-ru">Защитные пленки для телефонов Nokia (2)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/250--/aksessuary-k-mobilnym-telefonam-nokia-ru/627-cover-nokia">Чехлы для Nokia (3)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="us-all-categories-category-parent">
                        <div class="us-all-categories-category-parent-title"><a href="/47-planshety">Планшеты</a> <span class="us-all-categories-category-count">153</span></div>
                        <div class="row us-all-categories-category-children">
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/47-planshety/265-samsung">Планшеты Samsung (12)</a></div>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/47-planshety/aksessuary-k-planshetam-samsung-ru">Аксессуары к планшетам Samsung (11)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/47-planshety/aksessuary-k-planshetam-samsung-ru/zaschitnye-plenki-dlja-planshetov-dlja-samsung-ru">Защитные стекла и пленки для планшетов Samsung (4)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/47-planshety/aksessuary-k-planshetam-samsung-ru/chehly-k-planshetam-samsung-ru">Чехлы к планшетам Samsung (7)</a></li>
                                </ul>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/47-planshety/apple-ru">Планшеты Apple (79)</a></div>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/47-planshety/aksessuary-k-planshetam-apple-ru">Аксессуары к планшетам Apple (5)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/47-planshety/aksessuary-k-planshetam-apple-ru/stilusy-apple-ru">Стилусы Apple (1)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/47-planshety/aksessuary-k-planshetam-apple-ru/zaschitnye-plenki-dlja-planshetov-apple-ru">Защитные пленки для планшетов Apple (1)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/47-planshety/aksessuary-k-planshetam-apple-ru/chehly-k-planshetam-apple-ru">Чехлы к планшетам Apple (3)</a></li>
                                </ul>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/47-planshety/280-lenovo">Планшеты Lenovo (29)</a></div>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/47-planshety/aksessuary-k-planshetam-lenovo-ru">Аксессуары к планшетам Lenovo (1)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/47-planshety/aksessuary-k-planshetam-lenovo-ru/zaschitnye-plenki-dlja-planshetov-dlja-lenovo-ru">Защитные пленки для планшетов Lenovo (1)</a></li>
                                </ul>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/47-planshety/planshety-assistant-ru">Планшеты Assistant</a></div>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/47-planshety/planshety-huawei-ru">Планшеты Huawei (14)</a></div>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/47-planshety/aksessuary-k-planshetam-asus-ru">Аксессуары к планшетам Asus (1)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/47-planshety/aksessuary-k-planshetam-asus-ru/536-Chehli">Чехлы к планшетам Asus (1)</a></li>
                                </ul>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/47-planshety/aksessuary-k-planshetam-lg-ru">Аксессуары к планшетам LG (1)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/47-planshety/aksessuary-k-planshetam-lg-ru/zaschitnye-plenki-dlja-planshetov-dlja-lg-ru">Защитные пленки для планшетов LG (1)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="us-all-categories-category-parent">
                        <div class="us-all-categories-category-parent-title"><a href="/bytovaja-tehnika-ru">Бытовая техника</a> <span class="us-all-categories-category-count">1336</span></div>
                        <div class="row us-all-categories-category-children">
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/bytovaja-tehnika-ru/klimaticheskaja-tehnika-ru">Климатическая техника (157)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/klimaticheskaja-tehnika-ru/vodonagrevateli-ru">Водонагреватели (130)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/klimaticheskaja-tehnika-ru/kondicionery-ru">Кондиционеры (1)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/klimaticheskaja-tehnika-ru/obogrevateli-ru">Обогреватели (21)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/klimaticheskaja-tehnika-ru/uvlazhniteli-ochistiteli-vozduha-ru">Увлажнители, очистители воздуха (5)</a></li>
                                </ul>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/bytovaja-tehnika-ru/krupnaja-bytovaja-tehnika-ru">Крупная бытовая техника (847)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/krupnaja-bytovaja-tehnika-ru/varochnye-poverhnosti-ru">Варочные поверхности (113)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/krupnaja-bytovaja-tehnika-ru/vytjazhki-ru">Вытяжки (36)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/krupnaja-bytovaja-tehnika-ru/duhovye-shkafy-ru">Духовые шкафы (72)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/krupnaja-bytovaja-tehnika-ru/plity-ru">Кухонные плиты (26)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/krupnaja-bytovaja-tehnika-ru/morozilnoe-oborudovanie-ru">Морозильное оборудование (40)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/krupnaja-bytovaja-tehnika-ru/posudomoechnye-mashiny-ru">Посудомоечные машины (47)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/krupnaja-bytovaja-tehnika-ru/stiralnye-mashiny-ru">Стиральные машины (185)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/krupnaja-bytovaja-tehnika-ru/sushilnye-mashiny-parovye-shkafy-ru">Сушильные машины, паровые шкафы (23)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/krupnaja-bytovaja-tehnika-ru/holodilniki-ru">Холодильники (305)</a></li>
                                </ul>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/bytovaja-tehnika-ru/melkaja-bytova-tehnika-ru">Мелкая бытовая техника (189)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/melkaja-bytova-tehnika-ru/aksessuary-k-melkoj-bytovoj-tehnike-ru">Аксессуары к мелкой бытовой технике (4)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/melkaja-bytova-tehnika-ru/krasota-zdorove-uhod-ru">Красота, здоровье, уход (86)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/melkaja-bytova-tehnika-ru/parovye-sistemy-ru">Паровые системы (17)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/melkaja-bytova-tehnika-ru/pylesosy-ru">Пылесосы (47)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/melkaja-bytova-tehnika-ru/utjugi-ru">Утюги (35)</a></li>
                                </ul>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru">Техника для кухни (143)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru/aksessuary-dlja-kuhonnoj-tehniki-ru">Аксессуары для кухонной техники (5)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru/kofevarki-i-kofemashiny-ru">Кофеварки и кофемашины (10)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru/kuhonnye-kombajny-i-blendery-ru">Кухонные комбайны, блендеры, измельчители, миксеры (26)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru/mikrovolnovye-pechi-ru">Микроволновые печи (51)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru/multivarki-i-skorovarki-ru">Мультиварки и скороварки (10)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru/nastolnye-plity-i-duhovki-ru">Настольные плиты и духовки (6)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru/sokovyzhimalki-ru">Соковыжималки (3)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru/sushki-dlja-ovoschej-i-fruktov-ru">Сушки для овощей и фруктов (1)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru/tostery-buterbrodnicy-vafelnicy-grili-ru">Тостеры, бутербродницы, вафельницы, грили (16)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru/fritjurnicy-ru">Фритюрницы (1)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru/hlebopechi-ru">Хлебопечки (1)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/bytovaja-tehnika-ru/tehnika-dlja-kuhni-ru/elektrochajniki-ru">Электрочайники (13)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="us-all-categories-category-parent">
                        <div class="us-all-categories-category-parent-title"><a href="/7-computer-notebook">Компьютеры и ноутбуки</a> <span class="us-all-categories-category-count">165</span></div>
                        <div class="row us-all-categories-category-children">
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/7-computer-notebook/567-notebooks">Ноутбуки (71)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/7-computer-notebook/567-notebooks/571-apple">Ноутбуки Apple (28)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/7-computer-notebook/567-notebooks/xiaomi-ru-1">Ноутбуки Xiaomi (43)</a></li>
                                </ul>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/7-computer-notebook/495--">Компьютерные аксессуары (94)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/7-computer-notebook/495--/556--">Сетевое оборудование (81)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/7-computer-notebook/495--/515-comp-mishi">Компьютерные мыши (9)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/7-computer-notebook/495--/516-sumki-dlya-noutbukov">Сумки для ноутбуков (4)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="us-all-categories-category-parent">
                        <div class="us-all-categories-category-parent-title"><a href="/234-tvav-">TV/AV, Фото</a> <span class="us-all-categories-category-count">308</span></div>
                        <div class="row us-all-categories-category-children">
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/234-tvav-/kreplenija-stojki-dlja-tv-i-audio-ru">Крепления, стойки для ТВ и аудио (115)</a></div>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/234-tvav-/547--">ТВ-техника (193)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/234-tvav-/547--/televizory-ru">Телевизоры (193)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="us-all-categories-category-parent">
                        <div class="us-all-categories-category-parent-title"><a href="/igrovye-pristavki-ru">Игровые приставки</a> <span class="us-all-categories-category-count">2</span></div>
                        <div class="row us-all-categories-category-children">
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/igrovye-pristavki-ru/sony-ru">Игровые приставки Sony (2)</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="us-all-categories-category-parent">
                        <div class="us-all-categories-category-parent-title"><a href="/elektrotransport-ru">Электротранспорт</a> <span class="us-all-categories-category-count">3</span></div>
                        <div class="row us-all-categories-category-children">
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/elektrotransport-ru/giroskutery-girobordy-ru">Гироскутеры, гироборды (2)</a></div>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/elektrotransport-ru/elektrosamokaty-ru">Электросамокаты (1)</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="us-all-categories-category-parent">
                        <div class="us-all-categories-category-parent-title"><a href="/667-audiotehnika">Аудиотехника</a> <span class="us-all-categories-category-count">103</span></div>
                        <div class="row us-all-categories-category-children">
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/667-audiotehnika/668--kolonki">Портативные колонки (56)</a></div>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/667-audiotehnika/saundbary-i-akustika-ru">Саундбары и акустика (1)</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="us-all-categories-category-parent">
                        <div class="us-all-categories-category-parent-title"><a href="/557-Smart-watches-and-bracelets">Смарт-часы</a> <span class="us-all-categories-category-count">77</span></div>
                        <div class="row us-all-categories-category-children">
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/557-Smart-watches-and-bracelets/umnye-chasy-samsung-ru">Умные часы Samsung (26)</a></div>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/557-Smart-watches-and-bracelets/cogito-ru">Умные часы COGITO (11)</a></div>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/557-Smart-watches-and-bracelets/631-apple-watch">Apple WATCH (40)</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="us-all-categories-category-parent">
                        <div class="us-all-categories-category-parent-title"><a href="/235-acsessuari">Аксессуары</a> <span class="us-all-categories-category-count">337</span></div>
                        <div class="row us-all-categories-category-children">
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/235-acsessuari/307-zaryadnie-ustroistva">Зарядные устройства и кабели (50)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/235-acsessuari/307-zaryadnie-ustroistva/308-Car-Chargers">Автомобильные зарядные устройства (2)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/235-acsessuari/307-zaryadnie-ustroistva/564-Wireless-chargers">Беспроводные зарядные устройства (2)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/235-acsessuari/307-zaryadnie-ustroistva/309-Chargers">Сетевые зарядные устройства (5)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/235-acsessuari/307-zaryadnie-ustroistva/533-Universal-Mobile-Battery">Универсальные мобильные батареи (30)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/235-acsessuari/307-zaryadnie-ustroistva/kabeli-i-perehodniki-ru">Кабели и переходники (11)</a></li>
                                </ul>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/235-acsessuari/625-selfiestick">Моноподы для селфи  (6)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/235-acsessuari/625-selfiestick/661-xiaomi-">Моноподы для селфи Xiaomi  (3)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/235-acsessuari/625-selfiestick/monopody-dlja-selfi-kjstar-ru">Моноподы для селфи Kjstar (3)</a></li>
                                </ul>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/235-acsessuari/299-memory-Cards">Накопители и карты памяти (46)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/235-acsessuari/299-memory-Cards/300--microsd">Карты памяти MicroSD (11)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/235-acsessuari/299-memory-Cards/fleshki-ru">Флеш-накопители (35)</a></li>
                                </ul>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/235-acsessuari/297-Headphones">Наушники и гарнитуры (220)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/235-acsessuari/297-Headphones/236-Bluetooth-and-wired-headsets">Bluetooth и проводные гарнитуры (12)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/235-acsessuari/297-Headphones/513-headphones">Наушники (208)</a></li>
                                </ul>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/235-acsessuari/592-protective-films">Универсальные защитные плёнки (7)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/235-acsessuari/592-protective-films/593-Universal-protective-films">Универсальные защитные плёнки (7)</a></li>
                                </ul>
                            </div>
                            <div class="us-all-categories-category-child col-lg-3">
                                <div class="us-all-categories-category-child-title"><a href="/235-acsessuari/659--">Фитнес - браслеты (8)</a></div>
                                <ul class="list-unstyled">
                                    <li><a class="us-all-categories-category-child-third" href="/235-acsessuari/659--/660-xiaomi-">Фитнес-браслеты Xiaomi  (5)</a></li>
                                    <li><a class="us-all-categories-category-child-third" href="/235-acsessuari/659--/fitnes-braslety-huawei-ru">Фитнес-браслеты Huawei (3)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>*/?>
                </div>
            </div>
        </div>

    </div>
@endsection