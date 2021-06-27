<p>Уважаемый {{ $name }}</p>

<p>@lang('mail.order_created.your_order') {{ $fullSum }} {{ App\Services\CurrencyConversion::getCurrencySymbol() }} создан</p>

<table>
    <tbody>
    @foreach($order->skus as $sku)
        <tr>
            <td>
                <a href="{{ route('sku', [$sku->product->category->code, $sku->product->code, $sku]) }}">
                    <img height="56px" src="{{ Storage::url($sku->product->image) }}" alt="">
                    {{ $sku->product->__('name') }}
                </a>
            </td>
{{--            <td><span class="badge">{{ $product->pivot->count }}</span>--}}
            <td><span class="badge">{{ $sku->countInOrder }}</span>
                <div class="btn-group form-inline">
                    {!! $sku->product->__('description') !!}
                </div>
            </td>
            <td>{{ $sku->price }} {{ App\Services\CurrencyConversion::getCurrencySymbol() }}</td>
            <td>{{ $sku->getPriceForCount() }} {{ App\Services\CurrencyConversion::getCurrencySymbol() }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
