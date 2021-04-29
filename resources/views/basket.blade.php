@extends('master', ['id' => 'simplecheck', 'class' => 'flex-container'])

@section('title', 'Корзина')

@section('content')

    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="us-cart-modal">Корзина</h5>
            <button type="button" class="us-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="us-modal-close-icon us-modal-close-left"></span>
                <span aria-hidden="true" class="us-modal-close-icon us-modal-close-right"></span>
            </button>
        </div>
        <div class="modal-body">
            <div class="us-cart-item us-cart-item-last text-center">
                <div class="us-cart-text-modal">
                    <p>В корзине <span>{{ $order->products->count() }} товаров</span> на сумму <span>{{ $order->getFullPrice() }} грн</span></p>
                </div>
            </div>
            <div class="us-modal-body-cart">
                @foreach($order->products as $product)
                    <div class="us-cart-item d-flex align-items-center justify-content-between">
                        <div class="us-cart-item-left d-flex align-items-center">
                            <img src="https://mm.kh.ua/image/cache/catalog/samsung/39299-70x95.jpg" class="us-cart-item-img" alt="Samsung Galaxy A01 Core 2020 A013F 1/16GB Black (SM-A013FZKDSEK)">
                            <div class="us-cart-item-desc">
                                <div class="mb-3">
                                    <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="us-cart-item-link">
                                        {{ $product->name }}
                                    </a>
                                </div>
                                <div class="us-product-quantity">
                                    <div class="btn-group" role="group" aria-label="us-product-quantity">
                                        <form action="{{ route('basket-remove', [$product->id]) }}" method="post">
                                            <button type="submit" class="us-product-quantity-btn">-</button>
                                            @csrf
                                        </form>
                                        <span class="badge">{{ $product->pivot->count }}</span>
                                        <form action="{{ route('basket-add', [$product->id]) }}" method="post">
                                            <button type="submit" class="us-product-quantity-btn" >+</button>
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                                <div class="us-cart-price-all">
                                    Цена - {{ $product->price }} грн.
                                </div>
                                <div class="us-cart-price-all">
                                    Cтоимость - {{ $product->getPriceForCount() }} грн.
                                </div>
                            </div>
                        </div>
                        <a href="javascript:;" onclick="remove(this, 'remove'); return false;" class="us-cart-del"><i class="fas fa-trash-alt"></i></a>
                        <input name="product_key" value="10735" style="display: none;" hidden="">
                        <input name="product_id_q" value="10637" style="display: none;" hidden="">
                    </div>
                @endforeach
            </div>
            @if ($order->products->count() > 0)
                <a href="/basket/place" class="us-module-btn us-module-btn-green">Оформить заказ</a>
            @endif



        </div>
    </div>


@endsection