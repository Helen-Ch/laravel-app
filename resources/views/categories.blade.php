@extends('master', ['id' => 'information-information', 'class' => 'flex-container'])

@section('title', 'Все категории товаров')

@section('content')
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb us-breadcrumb">
            <li class="breadcrumb-item us-breadcrumb-item"><a href="/"><i class="fa fa-home"></i></a></li>
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
					"@id": "/categories",
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
                            <div class="us-all-categories-category-parent-title"><a href="{{ route('category', $category->code) }}">{{ $category->name }}</a> <span class="us-all-categories-category-count">{{ $category->products->count() }}</span></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
@endsection