<?php /* <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
            @if($product->isNew())
                <span class="badge badge-success">Новинка</span>
            @endif

            @if($product->isRecommend())
                <span class="badge badge-warning">Рекомендуем</span>
            @endif

            @if($product->isHit())
                <span class="badge badge-danger">Хит продаж!</span>
            @endif
        </div>
        @if(!is_null($product->image))
{{--            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">--}}
        {{-- lesson 27 --}}
            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->__('name') }}">
        @endif
        <div class="caption">
            <h3>{{ $product->__('name') }}</h3>
{{--            <p>{{ $product->price }} руб.</p>--}}
            <p>{{ $product->price }} {{ App\Services\CurrencyConversion::getCurrencySymbol() }}</p>
            <form action="{{ route('basket-add', $product) }}" method="POST">
                @if($product->isAvailable())
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                @else
                    <button type="button" class="btn btn-info" role="button" disabled>Нет в наличии</button>
                @endif
                <a href="{{ route('product', [isset($category) ? $category->code : $product->category->code, $product->code]) }}" class="btn btn-default"
                   role="button">Подробнее</a>
                @csrf
            </form>
        </div>
    </div>
</div>*/ ?>
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
            @if($sku->product->isNew())
                <span class="badge badge-success">Новинка</span>
            @endif

            @if($sku->product->isRecommend())
                <span class="badge badge-warning">Рекомендуем</span>
            @endif

            @if($sku->product->isHit())
                <span class="badge badge-danger">Хит продаж!</span>
            @endif
        </div>
        @if(!is_null($sku->product->image))
            <img src="{{ Storage::url($sku->product->image) }}" alt="{{ $sku->product->__('name') }}">
        @endif
        <div class="caption">
            <h3>{{ $sku->product->__('name') }}</h3>
            {{--            <p>{{ $product->price }} руб.</p>--}}
            <p>{{ $sku->price }} {{ App\Services\CurrencyConversion::getCurrencySymbol() }}</p>
            @isset($sku->product->properties)
                @foreach($sku->propertyOptions as $propertyOption)
                    <h4>{{ $propertyOption->property->__('name') }}: {{ $propertyOption->__('name') }}</h4>
                @endforeach
            @endisset
            <form action="{{ route('basket-add', $sku) }}" method="POST">
                @if($sku->isAvailable())
                    <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                @else
                    <button type="button" class="btn btn-info" role="button" disabled>Нет в наличии</button>
                @endif
                <a href="{{ route('sku', [isset($category) ? $category->code : $sku->product->category->code, $sku->product->code, $sku->id]) }}" class="btn btn-default"
                   role="button">Подробнее</a>
                @csrf
            </form>
        </div>
    </div>
</div>

