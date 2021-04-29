@extends('master', ['id' => 'simplecheck', 'class' => 'flex-container'])

@section('title', 'Оформить заказ')

@section('content')
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb us-breadcrumb">
            <li class="breadcrumb-item us-breadcrumb-item"><a href="/"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item us-breadcrumb-item">Оформление заказа</li>
        </ul>
    </nav>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="us-main-shop-title">Оформление заказа</h1>
        </div>
    </div>
    <div class="content-top-box"></div>
    <div class="row">
        <div id="content" class="col-sm-12">
            <div class="us-content">
                <div class="us-content-text us-content-register-text"></div>
                <div class="simple-content">
                    <div id="simplecheckout_form_0"  >
                        <div class="simplecheckout">

                            <div class="simplecheckout-step"><div class="simplecheckout-block" id="simplecheckout_cart"  >
                                    <div class="table-responsive">
                                        <table class="simplecheckout-cart">
                                            <colgroup>
                                                <col class="image">
                                                <col class="name">
                                                <col class="model">
                                                <col class="stock_status">
                                                <col class="quantity">
                                                <col class="price">
                                                <col class="total">
                                            </colgroup>
                                            <thead>
                                            <tr>
                                                <th class="image">Фото</th>
                                                <th class="name">Наименование товара</th>
                                                <th class="model">Модель</th>
                                                <th class="stock_status">Наличие</th>
                                                <th class="quantity"><span title="Количество">Кол-во</span></th>
                                                <th class="price">Цена</th>
                                                <th class="total">Итого</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="image">
                                                    <a href="https://mm.kh.ua/samsung-galaxy-a01-core-2020-a013f-116gb-black-sm-a013fzkdsek-39299-ru.html"><img src="https://mm.kh.ua/image/cache/catalog/samsung/39299-100x100.jpg" alt="Samsung Galaxy A01 Core 2020 A013F 1/16GB Black (SM-A013FZKDSEK)" title="Samsung Galaxy A01 Core 2020 A013F 1/16GB Black (SM-A013FZKDSEK)" /></a>
                                                </td>
                                                <td class="name">
                                                    <div class="image">
                                                        <a href=""><img src="https://mm.kh.ua/image/cache/catalog/samsung/39299-100x100.jpg" alt="Samsung Galaxy A01 Core 2020 A013F 1/16GB Black (SM-A013FZKDSEK)" title="Samsung Galaxy A01 Core 2020 A013F 1/16GB Black (SM-A013FZKDSEK)" /></a>
                                                    </div>
                                                    <a href="">Samsung Galaxy A01 </a>
                                                    <div class="options">
                                                    </div>
                                                </td>
                                                <td class="model">39299</td>
                                                <td class="stock_status">В наличии</td>
                                                <td class="quantity">
                                                    <div class="input-group btn-block" style="max-width: 200px;">1</div>
                                                </td>
                                                <td class="price">1 997 грн</td>
                                                <td class="total">{{ $order->getFullPrice() ?? '' }} грн.</td>

                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="simplecheckout-cart-total" id="total_sub_total">
                                        <span><b>Итого:</b></span>
                                        <span class="simplecheckout-cart-total-value">{{ $order->getFullPrice() ?? '' }} грн.</span>
                                        <span class="simplecheckout-cart-total-remove">
                                            </span>
                                    </div>

                                </div>

                                <form action="{{ route('basket-confirm') }}" method="post" class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="castomerName">Имя: </label><input type="text" name="name" value="" id="castomerName" class="d-block form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-6">
                                        <label for="castomerPhone">Номер телефона: </label><input type="text" name="phone" value="" id="castomerPhone" class="d-block form-control">
                                    </div>
                                    </div>
                                    <input type="submit" value="Подтвердить заказ" class="us-module-btn us-module-btn-green mt-5">
                                    @csrf
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
