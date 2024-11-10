@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/productId.css') }}">
@endsection

@section('content')
<body>
    <header class="header">
        <div class="header__inner">
        <a class="header__logo" href="/products">
            mogitate
        </a>
        </div>
    </header>
    <main>
        <form action="" method="get">
            <form class="products__productId-form" >
                <p class="products__productId-form-title">商品一覧<span class="products__productId-form-title--text"> ><span class="productId__subject">{{ $product->name }}</span></span></p>
                <div class="products__productId-input-information">
                    <div class="products__productId-input-information--img">
                        <img src="{{ $product->image }}" alt="{{ $product->name }}" >
                        <div class="product__select-file">
                            <input type="file" name="product__select-file--button">
                        </div>
                    </div>
                    <div class="products__productId-input-information--detail">
                        <div class="products__productId--input-name">
                            <p class="products__productId--input-name-title">商品名</p>
                            <input type="text" value="{{ $product->name }}">
                        </div>
                        <div class="products__productId--input-price">
                            <p class="products__productId--input-price-title">値段</p>
                            <input type="text" value="{{ $product->price }}">
                        </div>
                        <div class="product__productId--input-season">
                            <p class="product__productId--input-season-title">季節
                            </p>
                            <ul class="product__season-select">
                                <li>
                                    <input type="radio" value="spring" />
                                    <label for="">春</label>
                                </li>
                                <li>
                                    <input type="radio" value="summer" />
                                    <label for="">夏</label>
                                </li>
                                <li>
                                    <input type="radio" value="fall" />
                                    <label for="">秋</label>
                                </li>
                                <li>
                                    <input type="radio" value="winter" />
                                <label for="">冬</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__productId--product-description">
                <p class="product__productId--input-description-title">商品説明
                </p>
                <textarea>{{ $product->description }}</textarea>
            </div>
            <div class="product__productId--button">
                <button type="submit" class="product__productId--button-return">
                    <span class="product__productId--button-return-text">戻る</span>
                </button>
                <button type="submit" class="product__productId--button-keep">
                    <span class="product__productId--button-keep-text">変更を保存</span>
                </button>
                <button type="submit" class="product__productId--button-delete">
                    <img src="{{ asset('../img/Vector.png') }}" alt="削除" >
                </button>
            </div>
        </form>
    </main>
</body>

@endsection
