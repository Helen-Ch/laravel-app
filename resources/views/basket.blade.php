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
                    <p>В корзине <span>2 товаров</span> на сумму <span>5 168 грн</span></p>
                    <a href="https://mm.kh.ua/index.php?route=checkout/simplecheckout" class="us-product-link">Перейти в корзину</a>
                </div>
            </div>
            <div class="us-modal-body-cart">
                <div class="us-cart-item d-flex align-items-center justify-content-between">
                    <div class="us-cart-item-left d-flex align-items-center">
                        <img src="https://mm.kh.ua/image/cache/catalog/samsung/39299-70x95.jpg" class="us-cart-item-img" alt="Samsung Galaxy A01 Core 2020 A013F 1/16GB Black (SM-A013FZKDSEK)">
                        <div class="us-cart-item-desc">
                            <div class="mb-3">
                                <a href="https://mm.kh.ua/samsung-galaxy-a01-core-2020-a013f-116gb-black-sm-a013fzkdsek-39299-ru.html" class="us-cart-item-link">
                                    Samsung Galaxy A01 Core 2020 A013F 1/16GB Black (SM-A013FZKDSEK)
                                </a>
                            </div>
                            <div class="us-product-quantity">
                                <div class="btn-group" role="group" aria-label="us-product-quantity">
                                    <input name="product_id_q" value="10637" type="hidden">
                                    <input name="product_id" value="10735" type="hidden">
                                    <input name="product_stock_10735" id="product_stock_10735" value="3" type="hidden">
                                    <button type="button" class="us-product-quantity-btn" onclick="update_manual('#main-quantity-val-10735', 'minus', '10735'); return validate('#main-quantity-val-10735');">-</button>
                                    <input type="text" name="quantity" class="form-control" id="main-quantity-val-10735" value="1" onchange="update_manual('#main-quantity-val-10735', 'manual', '10735'); return validate('#main-quantity-val-10735');" keypress="update_manual('#main-quantity-val-10735', '', '10735'); return validate('#main-quantity-val-10735');">
                                    <button type="button" class="us-product-quantity-btn" onclick="update_manual('#main-quantity-val-10735', 'plus', '10735'); return validate('#main-quantity-val-10735');">+</button>
                                </div>
                            </div>
                            <div class="us-cart-price-all">
                                1 997 грн
                            </div>
                        </div>
                    </div>
                    <a href="javascript:;" onclick="remove(this, 'remove'); return false;" class="us-cart-del"><i class="fas fa-trash-alt"></i></a>
                    <input name="product_key" value="10735" style="display: none;" hidden="">
                    <input name="product_id_q" value="10637" style="display: none;" hidden="">
                </div>
                <div class="us-cart-item d-flex align-items-center justify-content-between">
                    <div class="us-cart-item-left d-flex align-items-center">
                        <img src="https://mm.kh.ua/image/cache/catalog/samsung/40073-70x95.jpg" class="us-cart-item-img" alt="Samsung Galaxy A02s 3/32GB Blue (SM-A025FZBESEK)">
                        <div class="us-cart-item-desc">
                            <div class="mb-3">
                                <a href="https://mm.kh.ua/samsung-galaxy-a02s-232gb-blue-sm-a025fzbesek-40073-ru.html" class="us-cart-item-link">
                                    Samsung Galaxy A02s 3/32GB Blue (SM-A025FZBESEK)
                                </a>
                            </div>
                            <div class="us-product-quantity">
                                <div class="btn-group" role="group" aria-label="us-product-quantity">
                                    <input name="product_id_q" value="11180" type="hidden">
                                    <input name="product_id" value="10736" type="hidden">
                                    <input name="product_stock_10736" id="product_stock_10736" value="1" type="hidden">
                                    <button type="button" class="us-product-quantity-btn" onclick="update_manual('#main-quantity-val-10736', 'minus', '10736'); return validate('#main-quantity-val-10736');">-</button>
                                    <input type="text" name="quantity" class="form-control" id="main-quantity-val-10736" value="1" onchange="update_manual('#main-quantity-val-10736', 'manual', '10736'); return validate('#main-quantity-val-10736');" keypress="update_manual('#main-quantity-val-10736', '', '10736'); return validate('#main-quantity-val-10736');">
                                    <button type="button" class="us-product-quantity-btn" onclick="update_manual('#main-quantity-val-10736', 'plus', '10736'); return validate('#main-quantity-val-10736');">+</button>
                                </div>
                            </div>
                            <div class="us-cart-price-all">
                                3 016 грн
                            </div>
                        </div>
                    </div>
                    <a href="javascript:;" onclick="remove(this, 'remove'); return false;" class="us-cart-del"><i class="fas fa-trash-alt"></i></a>
                    <input name="product_key" value="10736" style="display: none;" hidden="">
                    <input name="product_id_q" value="11180" style="display: none;" hidden="">
                </div>
            </div>
            <a href="/basket/place" class="us-module-btn us-module-btn-green">Оформить заказ</a>



        </div>
    </div>


@endsection