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
                        <div class="form-group">
                            <label for="title">Titre</label>
                            <input type="text" id="title" name="title" placeholder="Titre du produit">
                        </div>
                        <div class="form-group">
                            <label for="gamme_id">Gamme</label>
                            <select name="gamme_id" id="gamme_id" multiple>
                                @foreach($gammes as $gamme)
                                    <option value="{{ $gamme->id }}">{{ $gamme->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Photo</label>
                            <input type="file" id="picture" name="picture">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" name="description"></textarea>
                        </div>
                        <button type="submit" name="create_product">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
