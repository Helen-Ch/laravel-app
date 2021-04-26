@extends('master', ['id' => 'product-category', 'class' => $category->code])

@section('title', 'Категория' . $category->name)

@section('content')
<nav aria-label="breadcrumb">
    <ul class="breadcrumb us-breadcrumb">
        <li class="breadcrumb-item us-breadcrumb-item"><a href="https://mm.kh.ua"><i class="fa fa-home"></i></a></li>
        <li class="breadcrumb-item us-breadcrumb-item">{{ $category->name }} {{ $category->products->count() }}</li>
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
					"@id": "https://mm.kh.ua/{{ $category->name }}",
					"name": "{{ $category->name }}"
				}
			}						]
}

</script>

<div class="row">
    <div class="col-lg-12">
        <h1 class="us-main-shop-title">Купить {{ $category->name }} в Харькове по самым низким ценам</h1>
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
        <div id="content" class="col-md-9">

            <div class="row">
{{--                @foreach($products as $product)--}}
                @foreach($category->products as $product)
                <div class="product-layout product-grid col-sm-4">
                    @include('card', compact('product'))
                </div>
                @endforeach
            </div>

            <div class="us-category-description">
                <div class="d-flex">
                    <div id="us-category-description" class="us-category-description-cont">
                        <div class="us-category-description-opacity"></div>
                        <div class="us-category-description-text">
                            {{ $category->description }}
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