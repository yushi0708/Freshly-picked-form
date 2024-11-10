@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
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
        <div class="product__content">
            <div class="product__heading">
                <h2 class="product__heading--text">商品登録</h2>
            </div>
        </div>
        <form action="" class="product__register-form">
            <div class="product__register--product-name">
                <p class="product__register--input-name-title">商品名<span class="product__required">必須</span>
                </p>
                <input type="text" value="商品名を入力" isErrorName=false isErrorPrice1=false isErrorPrice2=false isErrorPrice=false>
            </div>
            <div class="product__register--product-price">
                <p class="product__register--input-price-title">値段<span class="product__required">必須</span>
                </p>
                <input type="text" isErrorName=false value="値段を入力" isErrorPrice1=false isErrorPrice2=false isErrorPrice=false>
            </div>
            <div class="product__register--product-img">
                <p class="product__register--input-img-title">商品画像<span class="product__required">必須</span>
                </p>
                <div class="product__select-file">
                    <button class="product__select-file--button">
                        <span class="product__select-file--button-text">ファイルを選択</span>
                    </button>
                </div>
            </div>
            <div class="product__register--product-season">
                <p class="product__register--input-season-title">季節
                    <span class="product__required">必須</span>
                    <span class="product__multiple">複数選択可</span>
                </p>
                <div class="product__season-select">
                    <label for="">
                        <input type="radio" value="spring" />
                    春</label>
                    <label for="">
                    <input type="radio" value="summer" />
                    夏</label>
                    <label for="">
                        <input type="radio" value="fall" />
                    秋</label>
                    <label for="">
                        <input type="radio" value="winter" />
                    冬</label>
                </div>
            </div>
            <div class="product__register--product-description">
                <p class="product__register--input-description-title">商品説明<span class="product__required">必須</span>
                </p>
                <textarea>商品の説明を入力</textarea>
            </div>
            <div class="product__register--button">
                <button class="product__register--button-return">
                    <span class="product__register--button-return-text">戻る</span>
                </button>
                <button class="product__register--button-registered">
                    <span class="product__register--button-registered-text">登録</span>
                </button>
            </div>
        </form>
    </main>
</body>

@endsection
