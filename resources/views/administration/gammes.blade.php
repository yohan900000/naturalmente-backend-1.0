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
                        <b>Une erreur est survenue</b>
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            <div class="main__top">
                <h2>Mes textes encadrer</h2>
                <a class="btn_add" href="{{ route('admin.framing-text.create') }}">Ajouter</a>
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
                <a class="btn_add" href="#">Ajouter</a>
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
                <a class="btn_add" href="#">Ajouter</a>
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
