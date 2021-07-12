@extends('layouts.master', ['id' => 'simplecheck', 'class' => 'flex-container'])

@section('title', 'Корзина')

@section('content')
    <h1>Корзина</h1>
    <p>Оформление заказа</p>
    <div class="panel">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Название</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th>Стоимость</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->skus as $sku)
{{--            @foreach($order->products as $product)--}}
{{--            @foreach($order->products()->with('category')->get() as $product)--}}
                <tr>
                    <td>
                        <a href="{{ route('sku', [$sku->product->category->code, $sku->product->code, $sku]) }}">
                            <img height="56px" src="{{ Storage::url($sku->product->image) }}" alt="">
                            {{ $sku->product->__('name') }}
                        </a>
                    </td>
{{--                    <td><span class="badge">{{ $product->pivot->count }}</span>--}}
                    <td><span class="badge">{{ $sku->countInOrder ?? 1 }}</span>
                        <div class="btn-group form-inline">
                            <form action="{{ route('basket-remove', $sku) }}" method="POST">
                                <button type="submit" class="btn btn-danger"
                                        href=""><span
                                            class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                @csrf
                            </form>
                            <form action="{{ route('basket-add', $sku) }}" method="POST">
                                <button type="submit" class="btn btn-success"
                                        href=""><span
                                            class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                @csrf
                            </form>
                        </div>
                    </td>
                    <?php /*<td>{{ $sku->price }} {{ App\Services\CurrencyConversion::getCurrencySymbol() }}</td>
{{--                    <td>{{ $product->getPriceForCount() }} {{ App\Services\CurrencyConversion::getCurrencySymbol() }}</td>--}}
                    <td>{{ $sku->price * ($sku->countInOrder ?? 1) }} {{ App\Services\CurrencyConversion::getCurrencySymbol() }}</td>*/?>

                    <td>{{ $sku->price }} {{ $currencySymbol }}</td>
                    <td>{{ $sku->price * $sku->countInOrder }} {{ $currencySymbol }}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="3">@lang('basket.full_cost'):</td>
{{--                <td>{{ $order->getFullSum() }} {{ App\Services\CurrencyConversion::getCurrencySymbol() }}</td>--}}
                @if($order->hasCoupon())
                    <td><strike>{{ $order->getFullSum(false) }}</strike>
                        <b>{{ $order->getFullSum() }}</b> {{ $currencySymbol }}</td>
                @else
                    <td>{{ $order->getFullSum() }} {{ $currencySymbol }}</td>
                @endif
            </tr>
            </tbody>
        </table>
        @if(!$order->hasCoupon())
            <div class="row">
                <div class="form-inline pull-right">
                    <form method="POST" action="{{ route('set-coupon') }}">
                        @csrf
                        <label for="coupon">@lang('basket.coupon.add_coupon'):</label>
                        <input class="form-control" type="text" name="coupon">
                        <button type="submit" class="btn btn-success">@lang('basket.coupon.apply')</button>
                    </form>
                </div>
            </div>
            @error('coupon')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        @else
            <div>@lang('basket.coupon.your_coupon') {{ $order->coupon->code }}</div>
        @endif
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success" href="{{ route('basket-place') }}">@lang('basket.place_order')</a>
        </div>
    </div>
@endsection
