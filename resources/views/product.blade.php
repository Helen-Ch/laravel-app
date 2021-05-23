@extends('layouts.master', ['id' => 'product-product'])

@section('title', 'Товар')

@section('content')
    <h1>{{ $product->name }}</h1>
    <h2>{{ $product->category->name }}</h2>
    <p>Цена: <b>{{ $product->price }} руб.</b></p>
    <div>
        <div class="thumbnail" style="max-width: 25%; margin: 0 auto;">
            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
        </div>
    </div>
    <p>{{ $product->description }}</p>
    @if($product->isAvailable())
        <form action="{{ route('basket-add', $product) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>
        </form>
{{--        <a class="btn btn-success" href="{{ route('basket-add', $product->code) }}">Добавить в корзину</a>--}}
    @else
        <span type="button" class="btn btn-info" role="button" disabled>Нет в наличии</span>
        <br>
        <span>Сообщить мне, когда товар появится в наличии:</span>
        @if($errors->get('email'))
            <div>
                {!! $errors->get('email')[0] !!}
            </div>
        @endif
        <form action="{{ route('subscription', $product) }}" method="POST">
            @csrf
            <input type="text" name="email">
            <button type="submit" role="button">Отправить</button>
        </form>
    @endif



    <div class="text-left">
        @if($product->reviews->count() > 0)
        <p>Отзывы: {{ $product->reviews->count() }}</p>
            @foreach($product->reviews as $review)
                <div>
                    <p>{{ (new DateTime($review->created_at))->format('m-d-Y') }}
                        , {{ $review->author ?? 'nameless' }}</p>
                    <div style="word-break: break-word;">{{ $review->text }}</div>
                </div>
            @endforeach
        @else
          <p>Отзывов пока нет</p>
        @endif
    </div>
    <div style="max-width: 50%; margin: 0 auto 0 0; text-align: left;">
        <p class="text-left">Оставьте свой отзыв:</p>
        <form action="{{ route('reviews.store', $product) }}" method="post">
            @csrf
            <div class="form-group">
                @error('author')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="text" name="author" class="form-control" placeholder="Ваше имя"
                       value="{{ old('code', isset($review) ? $review->author : null) }}">
            </div>

            <div class="form-group">
                @error('text')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <textarea name="text" class="form-control" rows="3"></textarea>
            </div>
            <button class="btn btn-success">Отправить</button>
        </form>
    </div>
@endsection