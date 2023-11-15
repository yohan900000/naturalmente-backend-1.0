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
        <div class="content">
            <div class="container__main">
                <div class="main__top">
                    <h2>Création d'un text</h2>
                </div>
                <div class="content">
                    <div class="form__main">
                        <form action="" method="POST" id="texte-encadrer-form">
                            @csrf
                            @method('post')
                            <div class="title__form">Exemple</div>
                            <p class="products__description">
                                Tous les produits contiennent des huiles essentielles de culture biologique d'une pureté
                                de 100%. Ils ne contiennent pas d’huile minérale, de laureth sulfate de sodium (SLS),
                                de parabens, de formaldéhyde, de soude caustique, d’acides éthylènediaminetétraacétique
                                (EDTA), d’éthanolamines (DEA, TEA, MEA).
                            </p>
                            <div class="form-group">
                                <label for="category">Catégorie</label>
                                <select name="category" id="category" multiple>
                                    <option value="html">Html</option>
                                    <option value="css">Css</option>
                                    <option value="javascript">Javascript</option>
                                    <option value="php">Php</option>
                                    <option value="laravel">Laravel</option>
                                </select>
                            </div>
                            <span class="sep"></span>
                            <div class="form-group">
                                <label for="description">Votre texte</label>
                                <textarea id="description" name="description"></textarea>
                            </div>
                            <button class="btn_submit" name="create_product">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
