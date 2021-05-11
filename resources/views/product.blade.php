@extends('layouts.master', ['id' => 'product-product'])

@section('title', 'Товар')

@section('content')
    <h1>{{ $product->name }}</h1>
    <h2>{{ $product->code }}</h2>
    <p>Цена: <b>{{ $product->price }} руб.</b></p>
    <div>
        <div class="thumbnail" style="max-width: 25%; margin: 0 auto;">
            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
        </div>
    </div>
    <p>{{ $product->description }}</p>
    <a class="btn btn-success" href="{{ route('basket-add', $product->code) }}">Добавить в корзину</a>
    <div  style="max-width: 50%; margin: 0 auto;">
        <p class="text-left">Оставьте свой отзыв:</p>
        <form action="{{ route('reviews.store', $product) }}" method="post">
            @csrf
                <div class="form-group">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="text" name="author" class="form-control" id="name" placeholder="Ваше имя">
                </div>

                <div class="form-group">
                    @error('text')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <textarea name="text" class="form-control" id="review" rows="3"></textarea>
                </div>
            <button class="btn btn-success">Отправить</button>
        </form>
    </div>


    <div class="text-left">
        <h3>Отзывы: {{ $product->reviews->count() }}</h3>
        @if($product->reviews->count() > 0)
            @foreach($product->reviews as $review)
                <div>
                    <p>{{ (new DateTime($review->created_at))->format('m-d-Y') }}
                        , {{ $review->author ?? 'nameless' }}</p>
                    <div style="word-break: break-word;">{{ $review->text }}</div>
                </div>
            @endforeach
        @endif
    </div>

@endsection