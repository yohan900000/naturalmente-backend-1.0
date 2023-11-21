@extends('administration.base')
@section('content')
    <div class="main-content">
        <div class="top_bar">
            <div class="links">
                <a href="create_products.html">Ajouter un produit</a>
            </div>
            bonjour {{ auth()->user()->name }}
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                @method('delete')
                @csrf
                <button type="submit">Déconnexion</button>
            </form>
        </div>
        <div class="container__main">
            @if(session('error'))
                <div id="container">
                    <div class="alert alert-danger" style="margin-bottom: 20px">
                        <i class="fa-solid fa-circle-xmark error"></i>
                        <div class="text">
                            <b>Une erreur est survenue</b>
                            {{ session('error') }}
                        </div>
                    </div>
                </div>
            @endif

            <div class="content">
                @if($errors->any())
                    @foreach($errors->all() as $message)
                        <div class="alert">
                            <i class="fa-solid fa-circle-xmark error"></i>
                            <div class="text">
                                <b>Une erreur est survenue</b>
                                {{ $message }}
                            </div>
                        </div>
                    @endforeach
                @endif
                <div class="form__main">
                    <form action="" method="POST" id="product-form" enctype="multipart/form-data">
                        @csrf
                        @method(request()->segment(3) === 'create' ? 'post' : 'put')
                        <div class="title__form">Création d'un produit</div>
                        <span class="sep"></span>

                        @include('administration.layouts.form', ['label' => 'Titre', 'name' => 'title', 'placeholder' => 'Titre du produit', 'value' => old('', $product->title)])
                        <div class="form-group">
                            <label for="gamme_id">Gamme</label>
                            <select name="gamme_id" id="gamme_id" multiple>
                                @foreach($gammes as $gamme)
                                    <option
                                        value="{{ $gamme->id }}" {{ $gamme->id === $product->gamme_id ? 'selected' : '' }}>{{ $gamme->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @if(request()->segment(3) === 'create')
                            <div class="form-group">
                                <img src="{{ asset('/storage/' . $product->picture) }}" alt="Product Image">
                            </div>
                        @endif
                        @include('administration.layouts.form', ['type' => 'file','label' => 'Photo', 'name' => 'picture'])
                        @include('administration.layouts.form', ['type' => 'textarea','label' => 'Description', 'name' => 'description', 'value' => old('', $product->description)])

                        <button type="submit">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
