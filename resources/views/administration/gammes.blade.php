@extends('administration.base')

@section('content')
    <div class="main-content">
        <div class="top_bar">
            <div class="links">
                <a href="create_products.html">Ajouter un produit</a>
            </div>
        </div>
        <div class="container__main">
            <div class="main__top">
                <h2>Mes textes encadrer</h2>
            </div>
            <article>
                <div class="content">
                    <div class="alert alert-danger" style="margin-bottom: 20px">
                        <i class="fa-solid fa-circle-info info"></i>
                        <div class="text">
                            <b>Information</b>
                            Aucun texte encadré n'a été ajouté jusqu'à présent.
                        </div>
                    </div>
                </div>
            </article>

            <div class="main__top">
                <h2>Mes textes</h2>
            </div>
            <article>
                <div class="content">
                    <div class="alert alert-danger" style="margin-bottom: 20px">
                        <i class="fa-solid fa-circle-info info"></i>
                        <div class="text">
                            <b>Information</b>
                            Aucun texte n'a été ajouté jusqu'à présent.
                        </div>
                    </div>
                </div>
            </article>

            <div class="main__top">
                <h2>Mes images</h2>
            </div>
            <article>
                <div class="content">
                    <div class="alert alert-danger" style="margin-bottom: 20px">
                        <i class="fa-solid fa-circle-info info"></i>
                        <div class="text">
                            <b>Information</b>
                            Aucune image n'a été ajoutée jusqu'à présent.
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>

@endsection
