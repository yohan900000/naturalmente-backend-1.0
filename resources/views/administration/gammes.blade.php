@extends('administration.base')

@section('content')
    <div class="main-content">
        <div class="top_bar">
            bonjour {{ auth()->user()->name }}
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                @method('delete')
                @csrf
                <button type="submit">Déconnexion</button>
            </form>
        </div>
        <div class="container__main">
            @if(session('success'))
                <div class="alert">
                    <i class="fa-solid fa-circle-check success"></i>
                    <div class="text">
                        <b>Opération réussi</b>
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            <div class="main__top">
                <h2>Mes textes encadrer</h2>
                <a class="btn_add" href="{{ route('admin.framing-text.create') }}">Ajouter</a>
            </div>
            @if($framingTexts->isNotEmpty())
                @foreach($framingTexts as $framingText)
                    <div class="content">
                        <article class="frame">
                            <div class="products__description"> {!! $framingText->description !!}</div>
                            <div class="actions">
                                <form action="{{ route('admin.framing-text.delete') }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="delete" name="delete_framing_text" value="{{ $framingText->id }}"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </form>
                                <a class="update"
                                   href="{{ route('admin.framing-text.edit', ['id' => $framingText->id]) }}"><i
                                        class="fa-solid fa-pen"></i></a>
                            </div>
                        </article>
                    </div>
                @endforeach
            @else
                <div class="alert alert-danger" style="margin-bottom: 20px">
                    <i class="fa-solid fa-circle-info info"></i>
                    <div class="text">
                        <b>Information</b>
                        Aucun texte encadré n'a été ajouté jusqu'à présent.
                    </div>
                </div>
            @endif

            <div class="main__top">
                <h2>Mes textes</h2>
                <a class="btn_add" href="{{ route('admin.text.create') }}">Ajouter</a>
            </div>
            @if($texts->isNotEmpty())
                <div class="content">
                    @foreach($texts as $text)
                        <article>
                            {!! $text->description !!}
                            <div class="actions">
                                <form action="{{ route('admin.text.delete') }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="delete" name="delete_text" value="{{ $text->id }}"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </form>
                                <a class="update" href="{{ route('admin.text.edit', ['id' => $text->id]) }}"><i
                                        class="fa-solid fa-pen"></i></a>
                            </div>
                        </article>
                    @endforeach
                </div>
            @else
                <div class="alert alert-danger" style="margin-bottom: 20px">
                    <i class="fa-solid fa-circle-info info"></i>
                    <div class="text">
                        <b>Information</b>
                        Aucun texte encadré n'a été ajouté jusqu'à présent.
                    </div>
                </div>
            @endif
            <div class="main__top">
                <h2>Mes produits</h2>
                <a class="btn_add" href="{{ route('admin.product.create') }}">Ajouter</a>
            </div>
            @if($products->isNotEmpty())
                <div class="content">
                    <div class="pictures">
                        @foreach($products as $product)
                            <article class="product">
                                <img src="/storage/{{ $product->picture }}" alt="">
                                <h2>{{ $product->title }}</h2>
                                <div class="actions">
                                    <form action="{{ route('admin.product.delete') }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="delete" name="delete_product" value="{{ $product->id }}"><i
                                                class="fa-solid fa-xmark"></i></button>
                                    </form>
                                    <a class="update"
                                       href="{{ route('admin.product.edit', ['id' => $product->id]) }}"><i
                                            class="fa-solid fa-pen"></i></a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    @else
                        <div class="alert alert-danger" style="margin-bottom: 20px">
                            <i class="fa-solid fa-circle-info info"></i>
                            <div class="text">
                                <b>Information</b>
                                Aucun produits n'a été ajouté jusqu'à présent.
                            </div>
                        </div>
                    @endif
                    <div class="main__top">
                        <h2>Mes images</h2>
                        <a class="btn_add" href="{{ route('admin.picture.create') }}">Ajouter</a>
                    </div>
                    @if($pictures->isNotEmpty())
                        <div class="content">
                            <div class="pictures">
                                @foreach($pictures as $picture)
                                    <article class="product">
                                        <img src="/storage/{{ $picture->picture }}" alt="">
                                        <h2>{{ $picture->title }}</h2>
                                        <div class="actions">
                                            <form action="{{ route('admin.picture.delete') }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="delete" name="delete_picture" value="{{ $picture->id }}"><i
                                                        class="fa-solid fa-xmark"></i></button>
                                            </form>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                            @else
                                <div class="alert alert-danger" style="margin-bottom: 20px">
                                    <i class="fa-solid fa-circle-info info"></i>
                                    <div class="text">
                                        <b>Information</b>
                                        Aucun produits n'a été ajouté jusqu'à présent.
                                    </div>
                                </div>
                            @endif
                </div>
        </div>

@endsection
