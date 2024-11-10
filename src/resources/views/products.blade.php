@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/products.css') }}">
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
                <h2 class="product__heading--text">商品一覧</h2>
                <button class="product__heading--button" onclick="location.href='/products/register'">
                    <div class="product__heading--button-text">+ 商品を追加</div>
                </button>
            </div>
        </div>
        <form class="product__form" action="/products/search" method="post">
            @csrf
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
                @foreach($products as $product)
                @break($product->id == 4)
                <div class="product__registered--productーcard">
                    <a href="{{ route('productId', $product) }}"><img src="{{ $product['image'] }} " alt="{{ $product['name'] }}" ></a>
                    <div class="product__registered--productーcard--detail">
                        <span class="product__registered--productーcard--detail-name">{{ $product['name'] }}</span>
                        <span class="product__registered--productーcard--detail-price">{{ $product['price'] }}</span>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="product__registered--second-row">
                @foreach($products as $product)
                @continue ($product->id < 4)
                @break($product->id == 7)
                <div class="product__registered--productーcard">
                    <a href="{{ route('productId', $product) }}"><img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" ></a>
                    <div class="product__registered--productーcard--detail">
                        <span class="product__registered--productーcard--detail-name">{{ $product['name'] }}</span>
                        <span class="product__registered--productーcard--detail-price">{{ $product['price'] }}</span>
                    </div>
                </div>
                @endforeach
            </div>
            <ul class="Pagination">
                <li class="Pagination-Item">
                    <a class="Pagination-Item-Link" href="/products"><span><</span></a>
                </li>
                <li class="Pagination-Item">
                    <a class="Pagination-Item-Link isActive" href="/products"><span>1</span></a>
                </li>
                <li class="Pagination-Item">
                    <a class="Pagination-Item-Link" href="/products"><span>2</span></a>
                </li>
                <li class="Pagination-Item">
                    <a class="Pagination-Item-Link" href="/products"><span>3</span></a>
                </li>
                <li class="Pagination-Item">
                    <a class="Pagination-Item-Link" href="/products"><span>></span>
                    </a>
                </li>
            </ul>
        </div>
    </main>
</body>

@endsection
