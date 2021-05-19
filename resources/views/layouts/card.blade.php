<div class="col-sm-6 col-md-4">
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
            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
        @endif
        <div class="caption">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->price }} руб.</p>
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
</div>
