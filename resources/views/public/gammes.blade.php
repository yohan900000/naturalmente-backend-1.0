@extends('public.base')

@section('content')
    <div id="container">
        <h1 class="products__title">Gamme In Bloom</h1>
        @foreach($framingTexts as $framingText)
            <div class="products__description">{!! $framingText->description !!}</div>
        @endforeach
        @foreach($texts as $text)
            <div class="content grid-1">
                <div class="test">
                    <p>{!! $text->description !!}</p>
                </div>
            </div>
        @endforeach
        <div class="pictures">
            @foreach($pictures as $picture)
                <img src="/storage/{{ $picture->picture }}" alt="">
            @endforeach
        </div>
        <section class="products">
            @foreach($products as $product)
            <div class="product clickable-product">
                <img src="/storage/{{ $product->picture }}" alt="">
                <h2>{{ $product->title }}</h2>
                <div class="modal-product">
                    <div class="content-modal">
                        <div class="top-modal">
                            <h2>{{ $product->title }}</h2>
                            <span><i class="fa-solid fa-xmark"></i></span>
                        </div>
                        <img src="/storage/{{ $product->picture }}" alt="">
                        <p>{!! $product->description !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </section>
    </div>
@endsection
