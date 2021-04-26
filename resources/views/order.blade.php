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
                                                <col class="remove">
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
                                                <th class="remove"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="image">
                                                    <a href="https://mm.kh.ua/samsung-galaxy-a01-core-2020-a013f-116gb-black-sm-a013fzkdsek-39299-ru.html"><img src="https://mm.kh.ua/image/cache/catalog/samsung/39299-100x100.jpg" alt="Samsung Galaxy A01 Core 2020 A013F 1/16GB Black (SM-A013FZKDSEK)" title="Samsung Galaxy A01 Core 2020 A013F 1/16GB Black (SM-A013FZKDSEK)" /></a>
                                                </td>
                                                <td class="name">
                                                    <div class="image">
                                                        <a href="https://mm.kh.ua/samsung-galaxy-a01-core-2020-a013f-116gb-black-sm-a013fzkdsek-39299-ru.html"><img src="https://mm.kh.ua/image/cache/catalog/samsung/39299-100x100.jpg" alt="Samsung Galaxy A01 Core 2020 A013F 1/16GB Black (SM-A013FZKDSEK)" title="Samsung Galaxy A01 Core 2020 A013F 1/16GB Black (SM-A013FZKDSEK)" /></a>
                                                    </div>
                                                    <a href="https://mm.kh.ua/samsung-galaxy-a01-core-2020-a013f-116gb-black-sm-a013fzkdsek-39299-ru.html">Samsung Galaxy A01 Core 2020 A013F 1/16GB Black (SM-A013FZKDSEK)</a>
                                                    <div class="options">
                                                    </div>
                                                </td>
                                                <td class="model">39299</td>
                                                <td class="stock_status">В наличии</td>
                                                <td class="quantity">
                                                    <div class="input-group btn-block" style="max-width: 200px;">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" data-onclick="decreaseProductQuantity" data-toggle="tooltip" type="submit">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </span>
                                                        <input class="form-control" type="text" data-onchange="changeProductQuantity"  name="quantity[10735]" value="1" size="1" />
                                                        <span class="input-group-btn">
                                    <button class="btn btn-primary" data-onclick="increaseProductQuantity" data-toggle="tooltip" type="submit">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                    <button class="btn btn-danger" data-onclick="removeProduct" data-product-key="10735" data-toggle="tooltip" type="button">
                                        <i class="fa fa-times-circle"></i>
                                    </button>
                                </span>
                                                    </div>
                                                </td>
                                                <td class="price">1 997 грн</td>
                                                <td class="total">1 997 грн</td>
                                                <td class="remove">
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="simplecheckout-cart-total" id="total_sub_total">
                                        <span><b>Итого:</b></span>
                                        <span class="simplecheckout-cart-total-value">1 997 грн</span>
                                        <span class="simplecheckout-cart-total-remove">
                                            </span>
                                    </div>
                                    <div class="simplecheckout-cart-total" id="total_liqpay_fee">
                                        <span><b>Комиссия LiqPay:</b></span>
                                        <span class="simplecheckout-cart-total-value">62 грн</span>
                                        <span class="simplecheckout-cart-total-remove">
                                            </span>
                                    </div>
                                    <div class="simplecheckout-cart-total" id="total_total">
                                        <span><b>Всего:</b></span>
                                        <span class="simplecheckout-cart-total-value">2 059 грн</span>
                                        <span class="simplecheckout-cart-total-remove">
                                            </span>
                                    </div>
                                    <input type="hidden" name="remove" value="" id="simplecheckout_remove">
                                    <div style="display:none;" id="simplecheckout_cart_total">Товаров: 1 (2 059 грн)</div>

                                </div><div class="simplecheckout-left-column"><div class="simplecheckout-block" id="simplecheckout_shipping"  >
                                        <div class="checkout-heading panel-heading">Способ доставки</div>
                                        <div class="alert alert-danger simplecheckout-warning-block" style="display:none">Вы должны выбрать способ доставки!</div>
                                        <div class="simplecheckout-block-content">

                                            <p><b>Доставка Новой Почтой до двери</b></p>
                                            <div class="radio">
                                                <label for="novaposhtacopy.novaposhtacopy">
                                                    <input type="radio" data-onchange="reloadAll" name="shipping_method"   value="novaposhtacopy.novaposhtacopy" id="novaposhtacopy.novaposhtacopy" checked="checked" />
                                                    <img src="/image/shipping/29.jpg" width="40px"> До двери 1-2 дня, используются тарифы данного перевозчика
                                                </label>
                                            </div>
                                            <p><b>Доставка Новой Почтой до отделения</b></p>
                                            <div class="radio">
                                                <label for="novaposhta.novaposhta">
                                                    <input type="radio" data-onchange="reloadAll" name="shipping_method"   value="novaposhta.novaposhta" id="novaposhta.novaposhta"  />
                                                    <img src="/image/shipping/29.jpg" width="40px"> До отделения 1-2 дня, используются тарифы данного перевозчика
                                                </label>
                                            </div>
                                            <p><b>Самовывоз</b></p>
                                            <div class="radio">
                                                <label for="pickup.pickup">
                                                    <input type="radio" data-onchange="reloadAll" name="shipping_method"   value="pickup.pickup" id="pickup.pickup"  />
                                                    <img src="/image/shipping/30.jpg" width="40px"> Самовывоз из магазина (г. Харьков, пл. Конституции, 1)
                                                </label>
                                            </div>

                                            <input type="hidden" name="shipping_method_current" value="novaposhtacopy.novaposhtacopy" />
                                            <input type="hidden" name="shipping_method_checked" value="" />
                                        </div>
                                    </div><div class="simplecheckout-block" id="simplecheckout_payment"  >
                                        <div class="checkout-heading panel-heading">Способ оплаты</div>
                                        <div class="alert alert-danger simplecheckout-warning-block" style="display:none">Вы должны выбрать способ оплаты!</div>
                                        <div class="simplecheckout-block-content">
                                            <div class="radio">
                                                <label for="liqpay">
                                                    <input type="radio" data-onchange="reloadAll" name="payment_method" value="liqpay"   id="liqpay" checked="checked" />
                                                    Visa / Mastercard / Приват24 (Liqpay) <span>Перед оплатой заказа уточните наличие товара</span>
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="cod">
                                                    <input type="radio" data-onchange="reloadAll" name="payment_method" value="cod"   id="cod"  />
                                                    Оплата при доставке
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="filterit.1">
                                                    <input type="radio" data-onchange="reloadAll" name="payment_method" value="filterit.1"   id="filterit.1"  />
                                                    Безналичный расчет
                                                </label>
                                            </div>
                                            <input type="hidden" name="payment_method_current" value="liqpay" />
                                            <input type="hidden" name="payment_method_checked" value="" />
                                        </div>
                                    </div></div><div class="simplecheckout-right-column"><div class="simplecheckout-block" id="simplecheckout_customer"  >
                                        <div class="checkout-heading panel-heading"><span>Покупатель</span><span class="checkout-heading-button"><a href="javascript:void(0)" data-onclick="openLoginBox">Я зарегистрирован</a></span></div>
                                        <div class="simplecheckout-block-content">
                                            <fieldset class="form-horizontal">
                                                <div class="form-group  row-customer_register">
                                                    <label class="control-label col-sm-4" for="customer_register">Зарегистрироваться</label>
                                                    <div class="col-sm-8">
                                                        <div>
                                                            <div class="radio">
                                                                <label><input type="radio" name="customer[register]" id="customer_register" value="1"  data-onchange="reloadAll">Да</label>
                                                            </div>
                                                            <div class="radio">
                                                                <label><input type="radio" name="customer[register]" id="customer_register" value="0" checked="checked" data-onchange="reloadAll">Нет</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group  row-customer_email">
                                                    <label class="control-label col-sm-4" for="customer_email">Email</label>
                                                    <div class="col-sm-8">
                                                        <input  class="form-control" type="email" name="customer[email]" id="customer_email"  value="" placeholder=""  data-reload-payment-form="true">
                                                        <div class="simplecheckout-rule-group" data-for="customer_email">
                                                            <div style="display:none;" data-for="customer_email" data-rule="api" class="simplecheckout-error-text simplecheckout-rule" data-method="checkEmailForUniqueness" data-filter="customer_register" data-filter-value="0">Адрес уже зарегистрирован!</div>
                                                            <div style="display:none;" data-for="customer_email" data-rule="regexp" class="simplecheckout-error-text simplecheckout-rule" data-regexp=".+@.+">Некорректный адрес электронной почты!</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group required row-customer_firstname">
                                                    <label class="control-label col-sm-4" for="customer_firstname">ФИО</label>
                                                    <div class="col-sm-8">
                                                        <input  class="form-control" type="text" name="customer[firstname]" id="customer_firstname"  value="" placeholder=""  data-reload-payment-form="true">
                                                        <div class="simplecheckout-rule-group" data-for="customer_firstname">
                                                            <div style="display:none;" data-for="customer_firstname" data-rule="byLength" class="simplecheckout-error-text simplecheckout-rule" data-length-min="1" data-length-max="32" data-required="true">Имя должно быть от 1 до 32 символов!</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group required row-customer_telephone">
                                                    <label class="control-label col-sm-4" for="customer_telephone">Телефон</label>
                                                    <div class="col-sm-8">
                                                        <input  class="form-control" type="tel" name="customer[telephone]" id="customer_telephone"  value="" placeholder="" data-mask="+38(999)999-99-99" data-reload-payment-form="true">
                                                        <div class="simplecheckout-rule-group" data-for="customer_telephone">
                                                            <div style="display:none;" data-for="customer_telephone" data-rule="byLength" class="simplecheckout-error-text simplecheckout-rule" data-length-min="3" data-length-max="32" data-required="true">Телефон должен быть от 3 до 32 символов!</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div><div class="simplecheckout-block" id="simplecheckout_shipping_address"  >
                                        <div class="simplecheckout-block-content">
                                            <fieldset class="form-horizontal">
                                                <div class="form-group required row-shipping_address_country_id">
                                                    <label class="control-label col-sm-4" for="shipping_address_country_id">Область</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" name="shipping_address[country_id]" id="shipping_address_country_id" data-theme="bootstrap"  data-onchange="reloadAll">
                                                            <option value="" selected="selected"> --- Выберите --- </option>
                                                            <option value="300001" >Винницкая область</option>
                                                            <option value="300002" >Волынская область</option>
                                                            <option value="300003" >Днепропетровская область</option>
                                                            <option value="300004" >Донецкая область</option>
                                                            <option value="300005" >Житомирская область</option>
                                                            <option value="300006" >Закарпатская область</option>
                                                            <option value="300007" >Запорожская область</option>
                                                            <option value="300008" >Ивано-Франковская область</option>
                                                            <option value="300009" >Киевская область</option>
                                                            <option value="300010" >Кировоградская область</option>
                                                            <option value="300011" >Луганская область</option>
                                                            <option value="300012" >Львовская область</option>
                                                            <option value="300013" >Николаевская область</option>
                                                            <option value="300014" >Одесская область</option>
                                                            <option value="300015" >Полтавская область</option>
                                                            <option value="300016" >Ровненская область</option>
                                                            <option value="300017" >Сумская область</option>
                                                            <option value="300018" >Тернопольская область</option>
                                                            <option value="300019" >Харьковская область</option>
                                                            <option value="300020" >Херсонская область</option>
                                                            <option value="300021" >Хмельницкая область</option>
                                                            <option value="300022" >Черкасская область</option>
                                                            <option value="300024" >Черниговская область</option>
                                                            <option value="300023" >Черновицкая область</option>
                                                        </select>
                                                        <div class="simplecheckout-rule-group" data-for="shipping_address_country_id">
                                                            <div style="display:none;" data-for="shipping_address_country_id" data-rule="notEmpty" class="simplecheckout-error-text simplecheckout-rule" data-not-empty="1" data-required="true">Выберите область!</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group required row-shipping_address_address_1">
                                                    <label class="control-label col-sm-4" for="shipping_address_address_1">Город</label>
                                                    <div class="col-sm-8">
                                                        <input  class="form-control" type="text" name="shipping_address[address_1]" id="shipping_address_address_1"  value="" placeholder=""  data-reload-payment-form="true">
                                                        <div class="simplecheckout-rule-group" data-for="shipping_address_address_1">
                                                            <div style="display:none;" data-for="shipping_address_address_1" data-rule="byLength" class="simplecheckout-error-text simplecheckout-rule" data-length-min="2" data-length-max="50" data-required="true">Город должен быть от 2 до 50 символов!</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group required row-shipping_address_address_2">
                                                    <label class="control-label col-sm-4" for="shipping_address_address_2">Адрес</label>
                                                    <div class="col-sm-8">
                                                        <input  class="form-control" type="text" name="shipping_address[address_2]" id="shipping_address_address_2"  value="" placeholder=""  data-reload-payment-form="true">
                                                        <div class="simplecheckout-rule-group" data-for="shipping_address_address_2">
                                                            <div style="display:none;" data-for="shipping_address_address_2" data-rule="byLength" class="simplecheckout-error-text simplecheckout-rule" data-length-min="5" data-length-max="100" data-required="true">Адрес должен быть от 5 до 100 символов!</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <input type="hidden" name="shipping_address[zone_id]" id="shipping_address_zone_id" value="">
                                            <input type="hidden" name="shipping_address[city]" id="shipping_address_city" value="">
                                            <input type="hidden" name="shipping_address[postcode]" id="shipping_address_postcode" value="">
                                            <input type="hidden" name="shipping_address[current_address_id]" id="shipping_address_current_address_id" value="0">
                                        </div>
                                    </div></div><div class="simplecheckout-block" id="simplecheckout_payment_form"></div></div>

                            <div id="simplecheckout_bottom" style="width:100%;height:1px;clear:both;"></div>
                            <div class="simplecheckout-proceed-payment" id="simplecheckout_proceed_payment" style="display:none;">Подождите... Происходит переход к оплате</div>



                            <div class="simplecheckout-button-block buttons" id="buttons">
                                <div class="simplecheckout-button-right">

                                    <a class="button btn-primary button_oc btn"  data-onclick="createOrder" id="simplecheckout_button_confirm"><span>Оформить заказ</span></a>
                                </div>
                                <div class="simplecheckout-button-left">
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
