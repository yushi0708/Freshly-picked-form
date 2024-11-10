@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/search.css') }}">
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
                <h2 class="product__heading--text">“<span class="product__heading--search-text">ストロベリー</span>”の商品一覧</h2>
            </div>
        </div>
        <div class="product__search-results">
            <form class="product__form">
                <div class="product__form--search">
                    <div class="product__search--text">
                        <input type="text" value="商品名で検索"/>
                    </div>
                    <button class="product__search--button">検索</button>
                </div>
                <div class="product__form--sort">
                    <div class="product__sort-title">
                        <p class="product__sort-title--text">価格順で表示</p>
                    </div>
                    <div class="product__sort-select">
                        <select name="example" class="product__sort-select--text" required>
                            <option value="" >価格で並べ替え</option>
                            <option >高い順に表示</option>
                            <option >安い順に表示</option>
                        </select>
                    </div>
                </div>
            </form>
            <div class="product__registered">
                <div class="product__registered--first-row">
                    <div class="product__registered--productーcard">
                        <img src="{{ asset('../img/images 9 (1).png') }}" alt="" >
                        <div class="product__registered--productーcard--detail">
                            <span class="product__registered--productーcard--detail-name">ストロベリー</span>
                            <span class="product__registered--productーcard--detail-price">¥1200</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

@endsection
